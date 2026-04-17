<?php

class ProductModel extends Model
{
    protected $table = 'products'; 
    protected $guarded = ['id', 'created_at'];

    public function getProductsWithVendors()
    {
        return $this->select([
                        'products.id', 
                        'products.title', 
                        'products.price', 
                        'products.stock', 
                        'users.name' // 🚀 Removed 'as vendor_name'
                    ])
                    ->join('users', 'products.vendor_id', '=', 'users.id')
                    ->orderBy('products.id', 'DESC')
                    ->get();
    }
}