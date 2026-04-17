<?php

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id', 'created_at'];

    // Optional: The reverse relationship (Get all products in a category)
    public function products()
    {
        return $this->belongsToMany('ProductModel', 'category_product', 'category_id', 'product_id');
    }
}