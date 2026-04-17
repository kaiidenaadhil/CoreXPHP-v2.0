<?php

class MatrixModel extends Model
{
    protected $table = 'vendors'; // Using your existing table
    
    public function getSystemStatus()
    {
        return [
            'framework' => 'CoreXPHP',
            'database' => 'Connected',
            'total_records' => $this->count()
        ];
    }
}