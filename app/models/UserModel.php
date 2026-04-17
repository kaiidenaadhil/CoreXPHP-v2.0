<?php

class UserModel extends Model
{
    protected $table = 'users'; 
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // 🚀 The Rules Array
    public $validationRules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'role' => 'nullable|in:admin,vendor,customer' // Tests your new 'in' rule!
    ];
}