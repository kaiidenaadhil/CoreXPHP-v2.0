<?php

class HomeModel extends Model
{
    // Explicitly define the table since the model name doesn't match exactly
    protected $table = 'vendors';
    
    // Protect the ID from mass assignment
    protected $guarded = ['id'];

    // You can also add custom business logic here!
    public function getActiveVendors()
    {
        // Using $this instead of static:: since we load it via instance
        return $this->where('status', '=', 'active')->get();
    }
}