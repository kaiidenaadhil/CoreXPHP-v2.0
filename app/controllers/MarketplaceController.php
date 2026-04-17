<?php

class MarketplaceController extends Controller
{
    // 12. Test Truncate (The Nuclear Option)
    public function testTruncate(Request $request, Response $response)
    {
        try {
            $orderModel = $this->model('OrderModel');
            
            // 1. Count current orders
            $beforeCount = $orderModel->count();
            
            // 2. Execute the Truncate
            $orderModel::truncate();
            
            // 3. Count again
            $afterCount = $orderModel->count();

            echo "<h2>☢️ Test 12: Truncate Table</h2>";
            echo "<p style='color:orange;'><strong>Before Truncate:</strong> {$beforeCount} orders in the database.</p>";
            echo "<p style='color:#0f0;'><strong>After Truncate:</strong> {$afterCount} orders in the database.</p>";
            
            if ($afterCount === 0) {
                echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
                echo "SUCCESS: The orders table was completely wiped and IDs reset to 1!";
                echo "</pre>";
            }

        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testTruncate:</h2>"; 
            echo "<p>" . $e->getMessage() . "</p>";
            echo "<p style='color:orange;'><em>Note: If you get a 1701 Cannot truncate error, it means another table has a foreign key pointing to this one!</em></p>";
        }
    }
    

// 11. Test CSV Import
    public function testImport(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            // 1. Create a dummy CSV file dynamically
            $csvContent = "name,email,password,role\n";
            $csvContent .= "Imported User 1,import1@empowro.com,secure123,customer\n"; // GOOD
            $csvContent .= "Imported Vendor,importvendor@empowro.com,secure123,vendor\n"; // GOOD
            $csvContent .= "Hacker Guy,not-an-email,12,super_hacker\n"; // BAD: Fails email, password min:6, and role!
            
            // Save it to the system's temporary directory
            $tmpFilePath = sys_get_temp_dir() . '/dummy_empowro_import.csv';
            file_put_contents($tmpFilePath, $csvContent);

            // 2. Mock the PHP $_FILES array structure
            $mockFile = [
                'name'     => 'dummy_empowro_import.csv',
                'type'     => 'text/csv',
                'tmp_name' => $tmpFilePath,
                'error'    => UPLOAD_ERR_OK,
                'size'     => filesize($tmpFilePath)
            ];

            // 3. Trigger the native import method
            $result = $userModel->import($mockFile);

            // 4. Clean up the temporary file
            if (file_exists($tmpFilePath)) {
                unlink($tmpFilePath);
            }

            // 5. Output the results
            echo "<h2>✅ Test 11: CSV Import & Validation Integration</h2>";
            echo "<p style='color:#0f0;'>Notice how it successfully skips the row with bad data and logs the exact errors!</p>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($result);
            echo "</pre>";

        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testImport:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }


// 10. Test CSV Export
    public function testExport(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            // 1. Fetch all users from the database
            $users = $userModel->findAll();
            
            if (empty($users)) {
                echo "<h2>No users found to export!</h2>";
                return;
            }

            // 2. Trigger the native export method!
            // This will clear the screen and force a file download
            $userModel->export($users, 'empowro_users_export.csv');

        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testExport:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }



// 9. Test Validator Engine
    public function testValidation(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            echo "<h2>🛡️ CoreXPHP Validation Engine Test</h2>";

            // -------------------------------------------------------------
            // ❌ SCENARIO 1: Intentionally BAD Data
            // -------------------------------------------------------------
            $badData = [
                'name' => 'Al',             // Fails: min:3
                'email' => 'not-an-email',   // Fails: email
                'password' => '123',         // Fails: min:6
                'role' => 'super_hacker'     // Fails: in:admin,vendor,customer
            ];

            // Trigger the model's native validate method
            $errors = $userModel->validate($badData);

            echo "<h3>❌ Scenario 1: Catching Bad Data</h3>";
            if (!empty($errors)) {
                echo "<p style='color:orange;'>⚠️ Validation successfully caught these errors:</p>";
                echo "<pre style='background:#1e1e1e; color:#ffb86c; padding:15px; border-radius:5px;'>";
                print_r($errors);
                echo "</pre>";
            } else {
                echo "<p style='color:red;'>Failed to catch bad data!</p>";
            }

            // -------------------------------------------------------------
            // ✅ SCENARIO 2: GOOD Data + Mass Assignment Protection
            // -------------------------------------------------------------
            $goodData = [
                'name' => 'Aminul Islam',
                'email' => 'admin@empowro.com',
                'password' => 'secure123',
                'role' => 'admin',
                'is_bypassed' => 1 // 🛑 Malicious data not in our rules!
            ];

            // Use the Validator directly to test the validated() security method
            $validator = new Validator();
            $validator->rules($userModel->validationRules)->validate($goodData);

            echo "<h3>✅ Scenario 2: Good Data & Security Filter</h3>";
            if (!$validator->fails()) {
                echo "<p style='color:#0f0;'>Validation passed! Look closely: The malicious 'is_bypassed' field was automatically deleted by your <code>validated()</code> method!</p>";
                echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
                print_r($validator->validated());
                echo "</pre>";
            }

        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testValidation:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }


// 8. Test Many-to-Many (belongsToMany)
    public function testBelongsToMany(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            
            // Find Product ID 1
            $product = $productModel::find(1);
            
            if (!$product) {
                throw new Exception("Product ID 1 not found in database. Please create one!");
            }

            // The Magic: Fetch categories through the pivot table
            // belongsToMany(RelatedModel, pivot_table, foreign_key_of_this_model, foreign_key_of_related_model)
            $categories = $product->belongsToMany('CategoryModel', 'category_product', 'product_id', 'category_id');

            echo "<h2>✅ Test 8: Many-to-Many (belongsToMany)</h2>";
            echo "<p style='color:#0f0;'>Successfully fetched categories for Product: {$product->title}</p>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            
            // Convert objects to array for clean printing
            $cleanOutput = array_map(fn($c) => $c->toArray(), $categories);
            print_r($cleanOutput);
            
            echo "</pre>";
            
        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testBelongsToMany:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }



// 1. belongsTo (Product → Vendor)
public function testProductVendor(Request $request, Response $response)
{
    try {
        $product = ProductModel::find(1);
        $vendor = $product->belongsTo('UserModel', 'vendor_id');

        echo "<h2>Product → Vendor</h2>";
        print_r($vendor);

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}

// 2. hasMany (User → Orders)
public function testUserOrders(Request $request, Response $response)
{
    try {
        $user = UserModel::find(7);
        $orders = $user->hasMany('OrderModel', 'customer_id');

        echo "<h2>User → Orders</h2>";
        print_r($orders);

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}

// 3. delete() with FK cascade
public function testDeleteCascade(Request $request, Response $response)
{
    try {
        $user = UserModel::create([
            'name' => 'Temp User',
            'email' => 'temp@test.com',
            'password' => '123456'
        ]);

        $id = $user->id;
        $user->delete();

        echo "<h2>Delete Cascade</h2>";
        echo "Deleted User ID: $id";

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}

// 4. __callStatic (where query)
public function testWhereQuery(Request $request, Response $response)
{
    try {
        $products = ProductModel::where('price', '>', 10)->get();

        echo "<h2>Static Where</h2>";
        print_r($products);

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}

// 5. findAll (search + filter)
public function testSearchFilter(Request $request, Response $response)
{
    try {
        $productModel = $this->model('ProductModel');

        $data = $productModel->findAll([
            'filters' => ['vendor_id' => 5],
            'search' => [
                'term' => 'Box',
                'columns' => ['title']
            ]
        ]);

        echo "<h2>Search + Filter</h2>";
        print_r($data);

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}


// 6. sum() (revenue)
public function testRevenue(Request $request, Response $response)
{
    try {
        $orderModel = $this->model('OrderModel');
        $revenue = $orderModel->where('status', 'completed')->sum('total_price');

        echo "<h2>Revenue</h2>";
        echo $revenue;

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}

// 7. toJson()
// 7. toJson()
public function testApiFormat(Request $request, Response $response)
{
    try {
        $user = UserModel::find(7);

        echo "<h2>JSON Output</h2>";
        echo $user->toJson();

    } catch (Throwable $e) {
        echo $e->getMessage();
    }
}
// ---------------------------------------------------------
    // 🥇 CORE TEST 1: create() and find()
    // ---------------------------------------------------------
    public function testCreateAndFind(Request $request, Response $response)
    {
        try {
            // Step 1: Test create()
            echo "<h2>✅ Testing: <code>create()</code></h2>";
            
            // We use ProductModel directly since create() is a static method
            $productModel = $this->model('ProductModel');
            $newProduct = $productModel::create([
                'vendor_id' => 5, // Jane Doe
                'title' => 'Small Batch Craft Box', 
                'price' => 15.50, 
                'stock' => 50
            ]);
            
            echo "<p style='color:#0f0;'>Product successfully created! New ID: <strong>{$newProduct->id}</strong></p>";

            // Step 2: Test find()
            echo "<h2>✅ Testing: <code>find()</code></h2>";
            
            // Now we search the database for the ID we just created
            $foundProduct = $productModel::find($newProduct->id);
            
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            // We use toArray() just to keep the output clean on the screen
            print_r($foundProduct->toArray());
            echo "</pre>";

        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }
    // 1. Basic Read Test
 public function getUsers(Request $request, Response $response)
    {
        // Force PHP to show ALL hidden errors
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        echo "<h3>Checking route execution...</h3>";
        
        try {
            // 1. Check if we can load the model
            $userModel = $this->model('UserModel');
            
            // Safe debugging instead of p()
            echo "<h4>UserModel successfully loaded!</h4>";
            
            // 2. Try to fetch the data
            $data = $userModel->findAll();
            
            echo "<h2>✅ Test 1: Basic Read (Users)</h2>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($data);
            echo "</pre>";
            
        } catch (Throwable $e) { 
            // 🚨 CHANGED Exception TO Throwable TO CATCH FATAL ERRORS 🚨
            echo "<h2 style='color:red;'>❌ Fatal Error Caught:</h2>";
            echo "<pre style='background:#f8d7da; color:#721c24; padding:15px; border: 1px solid #f5c6cb;'>";
            echo "Message: " . $e->getMessage() . "\n";
            echo "File: " . $e->getFile() . " on line " . $e->getLine() . "\n";
            echo "</pre>";
        }
    }

    // 2. Single JOIN Test
    public function getProducts(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            $data = $productModel->getProductsWithVendors();
            
            echo "<h2>✅ Test 2: Single JOIN (Products + Vendors)</h2>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($data);
            echo "</pre>";
            
        } catch (Exception $e) {
            echo "<h2 style='color:red;'>❌ Error in getProducts:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }

    // 3. Multi-JOIN Test
    public function getOrders(Request $request, Response $response)
    {
        try {
            $orderModel = $this->model('OrderModel');
            $data = $orderModel->getDetailedOrders();
            
            echo "<h2>✅ Test 3: Multi-JOIN (Orders + Customers + Products)</h2>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($data);
            echo "</pre>";
            
        } catch (Exception $e) {
            echo "<h2 style='color:red;'>❌ Error in getOrders:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }

    // 4. Aggregates Test
    public function getAnalytics(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $orderModel = $this->model('OrderModel');
            
            $analytics = [
                'total_users' => $userModel->count(),
                'total_orders' => $orderModel->count(),
                'total_completed_revenue' => $orderModel->getCompletedRevenue()
            ];

            echo "<h2>✅ Test 4: Dashboard Analytics (Aggregates)</h2>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($analytics);
            echo "</pre>";
            
        } catch (Exception $e) {
            echo "<h2 style='color:red;'>❌ Error in getAnalytics:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }

    // 5. Test Active Record (Find & Update)
    public function testUpdate(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            // Find User ID 7 (Muhammad Ahad Aminul)
            $user = $userModel::find(7);
            
            if (!$user) {
                throw new Exception("User ID 7 not found!");
            }

            // Update a property
            $user->phone = '01888888888'; // New fake phone number
            $user->save();

            echo "<h2>✅ Test 5: Active Record Update</h2>";
            echo "<p style='color:#0f0;'>Successfully updated phone number for: {$user->name}</p>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($user);
            echo "</pre>";
            
        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testUpdate:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }

    // 6. Test Relationships (hasMany)
    public function testRelationships(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            // Find Vendor 5 (Jane Doe)
            $vendor = $userModel::find(5);
            
            // Use your framework's native hasMany method!
            $vendorProducts = $vendor->hasMany('ProductModel', 'vendor_id');

            echo "<h2>✅ Test 6: Relationships (Vendor hasMany Products)</h2>";
            echo "<p style='color:#0f0;'>Successfully fetched products belonging to: {$vendor->name}</p>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($vendorProducts);
            echo "</pre>";
            
        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testRelationships:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }

    // 7. Test Pagination & Sorting
    public function testPagination(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            
            // Pass the options array exactly as your Model expects it
            $paginatedData = $productModel->findAll([
                'pagination' => [
                    'enabled' => true,
                    'page' => 1,
                    'perPage' => 2 // Only grab 2 products per page
                ],
                'sort' => [
                    'column' => 'price',
                    'direction' => 'desc' // Most expensive first
                ]
            ]);

            echo "<h2>✅ Test 7: Pagination & Sorting</h2>";
            echo "<p style='color:#0f0;'>Page 1 of Products (Max 2 per page, Sorted by Price High->Low)</p>";
            echo "<pre style='background:#1e1e1e; color:#0f0; padding:15px; border-radius:5px;'>";
            print_r($paginatedData);
            echo "</pre>";
            
        } catch (Throwable $e) {
            echo "<h2 style='color:red;'>❌ Error in testPagination:</h2> <p>" . $e->getMessage() . "</p>";
        }
    }
}