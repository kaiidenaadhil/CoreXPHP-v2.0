<?php

class OrderModel extends Model
{
    protected $table = 'orders'; 
    protected $guarded = ['id', 'created_at'];

    public function getDetailedOrders()
    {
        return $this->select([
                        'orders.id', 
                        'orders.quantity', 
                        'orders.total_price', 
                        'orders.status',
                        'users.name', // 🚀 Removed 'as customer_name'
                        'products.title' // 🚀 Removed 'as product_purchased'
                    ])
                    ->join('users', 'orders.customer_id', '=', 'users.id')
                    ->join('products', 'orders.product_id', '=', 'products.id')
                    ->orderBy('orders.id', 'DESC')
                    ->get();
    }

    public function getCompletedRevenue()
    {
        return $this->where('status', '=', 'completed')->sum('total_price');
    }
}