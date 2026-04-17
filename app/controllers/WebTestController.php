<?php

/**
 * WebTestController
 * Focused on testing the raw Model and QueryBuilder connection.
 * NO_NAMESPACES: Global scope only.
 */
class WebTestController extends Controller 
{
    public function home($request, $response) 
    {
        echo "<h1>CoreXPHP: Direct DB & Model Test</h1><hr>";

        // --- STEP 1: TEST RAW QUERYBUILDER ---
        try {
            $qb = QueryBuilder::table('Products');
            $data = $qb->limit(2)->get();
            
            echo "<h3>[01] QueryBuilder Connection: <span style='color:green;'>SUCCESS</span></h3>";
            echo "Fetched " . count($data) . " products from database.<br>";
        } catch (Exception $e) {
            echo "<h3>[01] QueryBuilder Connection: <span style='color:red;'>FAILED</span></h3>";
            echo "Error: " . $e->getMessage() . "<br>";
            return; // Stop execution if DB connection fails
        }

        // --- STEP 2: TEST MODEL INSTANTIATION & CREATE ---
        try {
            $productModel = $this->model('Product'); // Using 'Product' per blueprint naming
            
            // Bypassing Validator: Manual data array for testing
            $testData = [
                'name'       => 'Test Rigid Box',
                'slug'       => 'test-rigid-box-' . time(),
                'sku'        => 'TEST-SKU-' . rand(100, 999),
                'categoryId' => 1,
                'basePrice'  => 50.00,
                'status'     => 'active'
            ];

            // Directly calling model create
            $newId = $productModel->create($testData);
            
            echo "<h3>[02] Model Create (No Validator): <span style='color:green;'>SUCCESS</span></h3>";
            echo "Inserted Product ID: " . $newId . "<br>";
        } catch (Exception $e) {
            echo "<h3>[02] Model Create: <span style='color:red;'>FAILED</span></h3>";
            echo "Error: " . $e->getMessage() . "<br>";
        }

        // --- STEP 3: TEST MODEL FIND & ATTRIBUTES ---
        try {
            if (isset($newId)) {
                $product = $productModel->find($newId); //
                
                echo "<h3>[03] Model Find & Escaping: <span style='color:green;'>SUCCESS</span></h3>";
                // SECURITY_HTML_ESCAPING: Using $this->e() for output
                echo "Retrieved Name: " . $this->e($product->name) . "<br>";
                echo "Retrieved SKU: " . $this->e($product->sku) . "<br>";
            }
        } catch (Exception $e) {
            echo "<h3>[03] Model Find: <span style='color:red;'>FAILED</span></h3>";
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
}