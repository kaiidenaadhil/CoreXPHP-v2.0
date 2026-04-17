<?php

// NO NAMESPACES ALLOWED

class ApiProductController extends Controller
{
public function index($request, $response) {
        $products = $this->model('Product')->get();
        return $this->json([
            'success' => true,
            'data' => $products
        ]);
    }
}