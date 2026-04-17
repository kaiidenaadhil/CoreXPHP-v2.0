<?php

class ProductController extends Controller
{
public function index($request, $response) {
        $products = $this->model('ProductModel')->findAll();
        p($products);
    }
}