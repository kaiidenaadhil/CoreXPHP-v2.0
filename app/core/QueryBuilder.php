<?php

class QueryBuilder
{
    protected $db;
    protected $table;
    protected $modelClass = null;
    
    // -------------------------------------------------------------------------
    // SQL Components (Instead of a brittle single string)
    // -------------------------------------------------------------------------
    protected $selects = '*';
    protected $wheres = '';
    protected $joins = '';
    protected $orderLimit = '';
    protected $bindings = [];
    protected $whereAdded = false;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // =========================================================================
    // 🔹 Core Engine & Setup
    // =========================================================================

    public static function table($table) {
        return (new self())->setTable($table);
    }

    public function setTable($table) {
        $this->table = $table;
        return $this;
    }

    public function setModel($model) {
        $this->modelClass = get_class($model);
        return $this;
    }

    // =========================================================================
    // 🔹 CRUD Execution
    // =========================================================================

    public function insert(array $data) {
        $columns = implode(", ", array_map([$this, 'quoteIdentifier'], array_keys($data)));
        $placeholders = ":" . implode(", :", array_keys($data));
        
        $sql = "INSERT INTO " . $this->quoteIdentifier($this->table) . " ($columns) VALUES ($placeholders)";
        $this->bindings = array_merge($this->bindings, $data);
        return $this->execute($sql);
    }

    public function update(array $data) {
        if (!$this->whereAdded) throw new Exception("Update query requires a WHERE clause to prevent mass overwrites.");
        
        $setClauses = [];
        foreach ($data as $column => $value) {
            $bindKey = "update_" . $column;
            $setClauses[] = $this->quoteIdentifier($column) . " = :$bindKey";
            $this->bindings[$bindKey] = $value;
        }
        
        $sql = "UPDATE " . $this->quoteIdentifier($this->table) . " SET " . implode(", ", $setClauses) . " " . $this->wheres;
        return $this->execute($sql);
    }

    public function delete() {
        if (!$this->whereAdded) throw new Exception("Delete operation requires a WHERE clause to prevent wiping the table.");
        $sql = "DELETE FROM " . $this->quoteIdentifier($this->table) . " " . $this->wheres;
        return $this->execute($sql);
    }

    public function truncate() {
        $this->db->exec("SET FOREIGN_KEY_CHECKS = 0; TRUNCATE TABLE " . $this->quoteIdentifier($this->table) . "; SET FOREIGN_KEY_CHECKS = 1;");
        return true;
    }

    protected function execute($sql) {
        $stmt = $this->db->prepare($sql);
        foreach ($this->bindings as $key => $value) {
            $stmt->bindValue(":$key", $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
        return $stmt->execute();
    }

    // =========================================================================
    // 🔹 Clause Builders (The Wrappers)
    // =========================================================================

    public function select($columns) {
        $this->selects = is_array($columns) ? implode(', ', array_map([$this, 'quoteIdentifier'], $columns)) : $columns;
        return $this;
    }

    public function join($table, $first, $operator, $second, $type = 'INNER') {
        $this->joins .= " $type JOIN " . $this->quoteIdentifier($table) . 
                        " ON " . $this->quoteIdentifier($first) . " $operator " . $this->quoteIdentifier($second);
        return $this;
    }

    public function where($column, $operator, $value = null) {
        if ($value === null) {
            $value = $operator;
            $operator = '=';
        }
        $this->addWhereClause();
        $bindKey = str_replace('.', '_', $column) . '_' . count($this->bindings);
        $this->wheres .= " " . $this->quoteIdentifier($column) . " $operator :$bindKey";
        $this->bindings[$bindKey] = $value;
        return $this;
    }

    public function orWhere($column, $operator, $value = null) {
        if ($value === null) { 
            $value = $operator; 
            $operator = '='; 
        }
        $this->wheres .= $this->whereAdded ? " OR" : " WHERE";
        $this->whereAdded = true;
        
        $bindKey = str_replace('.', '_', $column) . '_or_' . count($this->bindings);
        $this->wheres .= " " . $this->quoteIdentifier($column) . " $operator :$bindKey";
        $this->bindings[$bindKey] = $value;
        return $this;
    }

    public function whereIn($column, array $values) {
        if (empty($values)) return $this;
        $this->addWhereClause();
        $placeholders = [];
        foreach ($values as $i => $val) {
            $key = "in_{$column}_{$i}";
            $placeholders[] = ":$key";
            $this->bindings[$key] = $val;
        }
        $this->wheres .= " " . $this->quoteIdentifier($column) . " IN (" . implode(', ', $placeholders) . ")";
        return $this;
    }

    public function whereNull($column) {
        $this->addWhereClause();
        $this->wheres .= " " . $this->quoteIdentifier($column) . " IS NULL";
        return $this;
    }

    public function whereNotNull($column) {
        $this->addWhereClause();
        $this->wheres .= " " . $this->quoteIdentifier($column) . " IS NOT NULL";
        return $this;
    }

    public function whereRaw($sql, array $bindings = []) {
        $this->addWhereClause();
        $this->wheres .= " " . $sql;
        $this->bindings = array_merge($this->bindings, $bindings);
        return $this;
    }

    public function filter(array $conditions) {
        foreach ($conditions as $column => $value) {
            if (is_array($value)) $this->whereIn($column, $value);
            elseif ($value === 'NULL') $this->whereNull($column);
            elseif ($value === 'NOT NULL') $this->whereNotNull($column);
            else $this->where($column, '=', $value);
        }
        return $this;
    }

    public function search($term, array $columns) {
        if (empty($term) || empty($columns)) return $this;
        $this->addWhereClause();
        $this->wheres .= " (";
        foreach ($columns as $i => $column) {
            $operator = $i === 0 ? "" : " OR ";
            $bindKey = "search_{$column}_{$i}";
            $this->wheres .= "{$operator}" . $this->quoteIdentifier($column) . " LIKE :$bindKey";
            $this->bindings[$bindKey] = "%{$term}%";
        }
        $this->wheres .= ")";
        return $this;
    }

    // =========================================================================
    // 🔹 Modifiers & Pagination
    // =========================================================================

    public function orderBy($column, $direction = 'ASC') {
        $this->orderLimit .= " ORDER BY " . $this->quoteIdentifier($column) . " " . strtoupper($direction);
        return $this;
    }

    public function limit($limit) {
        $this->orderLimit .= " LIMIT " . (int)$limit;
        return $this;
    }

    public function offset($offset) {
        $this->orderLimit .= " OFFSET " . (int)$offset;
        return $this;
    }

     /** public function paginate($page = 1, $perPage = 15) {
      *    $offset = ($page - 1) * $perPage;
       *   return $this->limit($perPage)->offset($offset);}
       * 
       * */

     
    /**
     * Laravel-স্টাইল Pagination (এটি নিজেই get() এর বিকল্প হিসেবে কাজ করে)
     * Usage 1: UserModel::paginate(10);
     * Usage 2: UserModel::where('status', 'active')->paginate(15);
     */
    public function paginate(int $perPage = 15) 
    {
        // ১. URL থেকে অটোমেটিক পেজ নম্বর নেওয়া (যেমন Laravel করে: ?page=2)
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
        if ($page < 1) $page = 1;

        // ২. LIMIT বসানোর আগে মোট ডেটার পরিমাণ (Total Records) গোনা
        $countQuery = clone $this;
        $countQuery->selects = "COUNT(*) as total"; 
        $countQuery->orderLimit = ""; // গোনার সময় ORDER BY দরকার নেই, স্পিড বাড়বে
        $countResult = $countQuery->get();
        $totalRecords = $countResult[0]->total ?? 0;

        // ৩. SQL-এর জন্য LIMIT এবং OFFSET হিসাব করা
        $offset = ($page - 1) * $perPage;
        $this->limit($perPage)->offset($offset);

        // ৪. আসল ডেটা ফেচ করা (এখানেই ফ্রেমওয়ার্ক নিজে থেকে get() কল করে দিচ্ছে!)
        $data = $this->get();

        // ৫. মোট পেজ (Last Page) কয়টি হবে তার হিসাব
        $totalPages = $totalRecords > 0 ? (int) ceil($totalRecords / $perPage) : 1;

        // ৬. ঠিক Laravel-এর Paginator Object এর মতো Array রিটার্ন করা
        return [
            'data' => $data,
            'meta' => [
                'total'        => (int) $totalRecords,
                'per_page'     => $perPage,
                'current_page' => $page,
                'last_page'    => (int) $totalPages
            ]
        ];
    }
    // =========================================================================
    // 🔹 Retrievers & Aggregates
    // =========================================================================

    public function get() {
        $sql = "SELECT {$this->selects} FROM " . $this->quoteIdentifier($this->table) . " {$this->joins} {$this->wheres} {$this->orderLimit}";
        
        $stmt = $this->db->prepare($sql);
        foreach ($this->bindings as $key => $value) {
            $stmt->bindValue(":$key", $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
        $stmt->execute();

        return $this->modelClass 
            ? $stmt->fetchAll(PDO::FETCH_CLASS, $this->modelClass) 
            : $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function first() {
        $result = $this->limit(1)->get();
        return $result[0] ?? null;
    }

    

    public function count($column = '*') {
        $col = $column === '*' ? '*' : $this->quoteIdentifier($column);
        $this->selects = "COUNT($col) as aggregate";
        $result = $this->get();
        return $result[0]->aggregate ?? 0;
    }

    public function sum($column) {
        $this->selects = "SUM(" . $this->quoteIdentifier($column) . ") as aggregate";
        $result = $this->get();
        return $result[0]->aggregate ?? 0;
    }

    public function avg($column) {
        $this->selects = "AVG(" . $this->quoteIdentifier($column) . ") as aggregate";
        $result = $this->get();
        return $result[0]->aggregate ?? 0;
    }

    public function min($column) {
        $this->selects = "MIN(" . $this->quoteIdentifier($column) . ") as aggregate";
        $result = $this->get();
        return $result[0]->aggregate ?? 0;
    }

    public function max($column) {
        $this->selects = "MAX(" . $this->quoteIdentifier($column) . ") as aggregate";
        $result = $this->get();
        return $result[0]->aggregate ?? 0;
    }

    // =========================================================================
    // 🔹 Utilities & Internal Logic
    // =========================================================================

    public function when($condition, $callback) {
        if ($condition) {
            $callback($this, $condition);
        }
        return $this;
    }

    protected function addWhereClause() {
        $this->wheres .= $this->whereAdded ? " AND" : " WHERE";
        $this->whereAdded = true;
    }

    // Catch dynamic method calls like whereName('Aminul') or whereStatus('active')
    public function __call($method, $parameters) {
        if (strpos($method, 'where') === 0) {
            $column = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', substr($method, 5)));
            return $this->where($column, '=', $parameters[0]);
        }
        throw new Exception("Method {$method} does not exist on QueryBuilder.");
    }

    protected function quoteIdentifier($identifier) {
        if ($identifier === '*') return '*';
        $parts = explode('.', $identifier);
        foreach ($parts as &$part) {
            $part = "`" . str_replace("`", "``", $part) . "`";
        }
        return implode('.', $parts);
    }

    public function toSql() {
        $sql = "SELECT {$this->selects} FROM " . $this->quoteIdentifier($this->table) . " {$this->joins} {$this->wheres} {$this->orderLimit}";
        
        foreach ($this->bindings as $key => $value) {
            $escapedValue = str_replace("'", "\\'", $value);
            $replacement = is_numeric($value) ? $value : "'$escapedValue'";
            $sql = str_replace(":$key", $replacement, $sql);
        }
        return $sql;
    }

    public function logQuery($logFile = '../app/logs/query.log') {
        try {
            $logDir = dirname($logFile);
            if (!is_dir($logDir)) mkdir($logDir, 0777, true);
            
            $timestamp = date('[Y-m-d H:i:s]');
            $logData = $timestamp . " " . $this->toSql() . PHP_EOL;
            
            file_put_contents($logFile, $logData, FILE_APPEND);
        } catch (Exception $e) {
            error_log("Failed to log query: " . $e->getMessage());
        }
        return $this;
    }
}