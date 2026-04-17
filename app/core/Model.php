<?php

abstract class Model
{
    // -------------------------------------------------------------------------
    // 🔹 Model State
    // -------------------------------------------------------------------------
    protected $table;
    protected $primaryKey = 'id';
    protected array $attributes = []; 
    // Field Management
    protected array $columns = [];    // Internal: All columns dynamically fetched from DB
    protected $fields = [];           // Fields allowed for create/update
    protected $filters = [];          // Fields allowed for search (varchar, text)
    protected $guarded = [];          // Protected fields (e.g., id, passwords)

    protected bool $fieldsPrepared = false;

    // -------------------------------------------------------------------------
    // 🔹 Initialization & Field Preparation
    // -------------------------------------------------------------------------
    public function __construct() {
        $this->getTable(); // Ensure table name is resolved immediately
    }

    public function getTable(): string {
        if (!$this->table) {
            $class = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', static::class));
            $this->table = str_replace('_model', '', $class) . 's'; 
        }
        return $this->table;
    }

    public function getPrimaryKey(): string {
        return $this->primaryKey;
    }

    protected function prepareFields() {
        if ($this->fieldsPrepared) return $this->fields;

        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SHOW COLUMNS FROM " . $this->getTable());
        $stmt->execute();
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($columns as $column) {
            $fieldName = $column['Field'];
            $fieldType = strtolower($column['Type']);

            $this->columns[] = $fieldName;

            // Safely ensure guarded is an array before checking
            if (!is_array($this->guarded)) {
                $this->guarded = [];
            }

            // Auto-guard ONLY the exact primary key if not manually guarded
            if (strtolower($fieldName) === strtolower($this->primaryKey) && !in_array($fieldName, $this->guarded)) {
                $this->guarded[] = $fieldName;
            }

            // If it's not guarded, it's fillable
            if (!in_array($fieldName, $this->guarded)) {
                $this->fields[] = $fieldName;
            }

            // Auto-detect string fields for dynamic searching
            if (strpos($fieldType, 'varchar') !== false || strpos($fieldType, 'text') !== false || strpos($fieldType, 'enum') !== false) {
                $this->filters[] = $fieldName;
            }
        }

        $this->fieldsPrepared = true;
        return $this->fields;
    }

    // -------------------------------------------------------------------------
    // 🔹 Magic Routing (The Core Secret)
    // -------------------------------------------------------------------------
    public static function query() {
        $instance = new static();
        return QueryBuilder::table($instance->getTable())->setModel($instance);
    }

    public function __get($key) {
        return $this->attributes[$key] ?? null;
    }

    public function __set($key, $value) {
        $this->attributes[$key] = $value;
    }

    // Route non-existent instance methods (like $vendor->where()) to QueryBuilder
    public function __call($method, $parameters) {
        return static::query()->$method(...$parameters);
    }

    // Route static methods (like Vendor::where()) to QueryBuilder
    public static function __callStatic($method, $parameters) {
        return static::query()->$method(...$parameters);
    }

    // -------------------------------------------------------------------------
    // 🔹 Active Record (Instance Methods)
    // -------------------------------------------------------------------------
    public function fill(array $data) {
        $this->prepareFields();

        foreach ($data as $key => $value) {
            if (in_array($key, $this->guarded)) continue;
            
            if (in_array($key, $this->fields)) {
                $this->attributes[$key] = $value;
            }
        }
        return $this;
    }

    public function save() {
        $pk = $this->primaryKey;
        
        // If the primary key is set, it's an UPDATE
        if (isset($this->attributes[$pk])) {
            return static::query()->where($pk, '=', $this->attributes[$pk])->update($this->attributes);
        }
        
        // Otherwise, it's an INSERT
        $result = static::query()->insert($this->attributes);
        if ($result) {
            $this->attributes[$pk] = Database::getInstance()->getConnection()->lastInsertId();
        }
        return $result;
    }

    public function update(array $data) {
        $this->fill($data);
        return $this->save();
    }

    public function delete() {
        $pk = $this->primaryKey;
        if (!isset($this->attributes[$pk])) {
            throw new Exception("Cannot delete an unsaved model. Use QueryBuilder for mass deletions.");
        }
        return static::query()->where($pk, '=', $this->attributes[$pk])->delete();
    }

    // -------------------------------------------------------------------------
    // 🔹 Static Helpers
    // -------------------------------------------------------------------------
    public static function create(array $data) {
        $instance = new static();
        $instance->fill($data)->save();
        return $instance;
    }

    public static function find($id, $column = null) {
        $instance = new static();
        $column = $column ?? $instance->primaryKey;
        return static::query()->where($column, '=', $id)->first();
    }

    public static function truncate() {
        return static::query()->truncate();
    }

    public function findAll(array $options = []) {
        $this->prepareFields();
        $query = static::query();

        // 1. Exact Filters
        if (!empty($options['filters'])) {
            $query->filter($options['filters']);
        }

        // 2. Dynamic Search
        if (!empty($options['search']['term']) && !empty($options['search']['columns'])) {
            // Only search columns that exist and are valid string types
            $validColumns = array_intersect($options['search']['columns'], $this->filters);
            if (!empty($validColumns)) {
                $query->search($options['search']['term'], $validColumns);
            }
        }

        // 3. Sorting
        if (!empty($options['sort']['column'])) {
            $column = $options['sort']['column'];
            $direction = strtolower($options['sort']['direction'] ?? 'asc');
            if (in_array($column, $this->columns) && in_array($direction, ['asc', 'desc'])) {
                $query->orderBy($column, $direction);
            }
        }

        // 4. Pagination
        if (!empty($options['pagination']['enabled'])) {
            $page = max(1, (int)($options['pagination']['page'] ?? 1));
            $perPage = max(1, (int)($options['pagination']['perPage'] ?? 10));
            $offset = ($page - 1) * $perPage;

            $total = $query->count();
            $data = $query->limit($perPage)->offset($offset)->get();

            return [
                'data' => $data,
                'meta' => [
                    'total' => $total,
                    'totalPages' => ceil($total / $perPage),
                    'currentPage' => $page,
                    'perPage' => $perPage,
                ],
            ];
        }

        return $query->get();
    }

    // -------------------------------------------------------------------------
    // 🔹 Relationships
    // -------------------------------------------------------------------------
    protected function loadModelIfNotExists($modelClass) {
        if (!class_exists($modelClass)) {
            $modelPath = defined('ROOT') ? ROOT . "/app/models/{$modelClass}.php" : "../app/models/{$modelClass}.php";
            if (file_exists($modelPath)) {
                require_once $modelPath;
            } else {
                throw new Exception("Related model {$modelClass} not found at {$modelPath}");
            }
        }
    }

    public function hasOne($relatedModel, $foreignKey, $localKey = null) {
        $this->loadModelIfNotExists($relatedModel);
        $localKey = $localKey ?? $this->primaryKey;
        return $relatedModel::where($foreignKey, '=', $this->{$localKey})->first();
    }

    public function hasMany($relatedModel, $foreignKey, $localKey = null) {
        $this->loadModelIfNotExists($relatedModel);
        $localKey = $localKey ?? $this->primaryKey;
        return $relatedModel::where($foreignKey, '=', $this->{$localKey})->get();
    }

    public function belongsTo($relatedModel, $foreignKey, $ownerKey = 'id') {
        $this->loadModelIfNotExists($relatedModel);
        return $relatedModel::where($ownerKey, '=', $this->{$foreignKey})->first();
    }

    public function belongsToMany($relatedModel, $pivotTable, $foreignPivotKey, $relatedPivotKey, $localKey = null) {
        $this->loadModelIfNotExists($relatedModel);
        
        $localKey = $localKey ?? $this->primaryKey;
        $related = new $relatedModel();
        $relatedTable = $related->getTable();
        $relatedPk = $related->getPrimaryKey();

        return $relatedModel::query()
            ->select("$relatedTable.*")
            ->join($pivotTable, "$pivotTable.$relatedPivotKey", '=', "$relatedTable.$relatedPk")
            ->where("$pivotTable.$foreignPivotKey", '=', $this->{$localKey})
            ->get();
    }

    public function morphMany($relatedModel, $morphName) {
        $this->loadModelIfNotExists($relatedModel);
        $morphType = $morphName . '_type';
        $morphId = $morphName . '_id';

        return $relatedModel::where($morphType, '=', static::class)
                            ->where($morphId, '=', $this->{$this->primaryKey})
                            ->get();
    }

    public function morphTo($morphName) {
        $typeField = $morphName . '_type';
        $idField = $morphName . '_id';

        $relatedClass = $this->{$typeField} ?? null;
        $relatedId = $this->{$idField} ?? null;

        if (!$relatedClass || !$relatedId) return null;

        $this->loadModelIfNotExists($relatedClass);
        return $relatedClass::find($relatedId);
    }

    // -------------------------------------------------------------------------
    // 🔹 Utilities & Data Formatting
    // -------------------------------------------------------------------------
    public function toArray(): array {
        return $this->attributes;
    }

    public function toJson(): string {
        return json_encode($this->attributes);
    }

    public function validate(?array $data = null): array {
        $data = $data ?? $this->attributes;
        if (!property_exists($this, 'validationRules') || empty($this->validationRules)) {
            return []; 
        }

        if (class_exists('Validator')) {
            $validator = new Validator();
            $validator->rules($this->validationRules);
            $validator->validate($data);
            return $validator->fails() ? $validator->errors() : [];
        }
        return [];
    }

    public function import(array $file): array {
        if (!isset($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception('File upload failed.');
        }

        $stream = fopen($file['tmp_name'], 'r');
        $header = fgetcsv($stream);
        if (!$header) throw new Exception('Invalid CSV header.');

        $count = 0; $skipped = 0; $errors = [];

        while (($row = fgetcsv($stream)) !== false) {
            $data = array_combine($header, $row);
            $data = array_map(fn($v) => $v === '' ? null : $v, $data);

            $validationErrors = $this->validate($data);

            if (!empty($validationErrors)) {
                $skipped++;
                $errors[] = ['row' => $data, 'errors' => $validationErrors];
                continue;
            }

            try {
                static::create($data);
                $count++;
            } catch (Exception $e) {
                $errors[] = ['row' => $data, 'error' => $e->getMessage()];
            }
        }
        fclose($stream);

        return [
            'message'  => "Imported $count new records.",
            'imported' => $count,
            'skipped'  => $skipped,
            'failed'   => count($errors),
            'errors'   => $errors
        ];
    }

public function export(array $rows, string $filename = 'export.csv'): void {
        // Clear any existing output buffers so we don't corrupt the CSV
        if (ob_get_level()) ob_end_clean();

        // Set the headers to force a file download
        header('Content-Type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $output = fopen('php://output', 'w');

        if (!empty($rows)) {
            // 🚀 FIX: Removed the 'clone' keyword!
            $firstRow = is_object($rows[0]) ? $rows[0]->toArray() : (array) $rows[0];
            
            // Print the column headers
            fputcsv($output, array_keys($firstRow));
            
            // Print the data rows
            foreach ($rows as $row) {
                // 🚀 FIX: Removed the 'clone' keyword!
                $rowData = is_object($row) ? $row->toArray() : (array) $row;
                fputcsv($output, $rowData);
            }
        }

        fclose($output);
        exit; // Stop script execution so HTML doesn't bleed into the CSV
    }
}