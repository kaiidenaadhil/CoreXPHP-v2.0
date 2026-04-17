<?php

class ApiTestController extends Controller
{
    // =====================================================================
    // 🟢 PHASE 1: BASIC SERIALIZATION & CRUD (Tests 1-5)
    // =====================================================================

    // Test 1: Serialize an Array of Models (findAll)
    public function testGetAllUsers(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $users = $userModel->findAll();

            // 🟢 ম্যাজিক! কোনো array_map এর দরকার নেই। সরাসরি $users পাঠিয়ে দিন।
            return $response->json([
                'status' => 'success',
                'test' => '1. Get All Users',
                'count' => count($users),
                'data' => $users 
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 2: Serialize a Single Model (find)
    public function testGetSingleUser(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $user = $userModel::find(7); // ID 7

            if (!$user) {
                return $response->json(['status' => 'fail', 'message' => 'User not found'], 404);
            }

            // 🟢 $user->toArray() ডাকার দরকার নেই, Response নিজেই করে নেবে।
            return $response->json([
                'status' => 'success',
                'test' => '2. Get Single User',
                'data' => $user 
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 3: API Create Request (Simulating POST data)
    public function testCreateProduct(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            
            $mockPostData = [
                'vendor_id' => 5,
                'title' => 'API Generated Craft',
                'price' => 25.00,
                'stock' => 10
            ];

            $newProduct = $productModel::create($mockPostData);

            return $response->json([
                'status' => 'success',
                'test' => '3. Create via API',
                'message' => 'Product created successfully',
                'data' => $newProduct // 🟢 সরাসরি অবজেক্ট!
            ], 201);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 4: API Error Handling (404 Not Found)
    public function testNotFound(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $user = $userModel::find(99999); // ID that doesn't exist

            if (!$user) {
                return $response->json([
                    'status' => 'fail',
                    'test' => '4. 404 Error Handling',
                    'message' => 'User ID 99999 does not exist in the database.'
                ], 404);
            }

            return $response->json(['status' => 'success', 'data' => $user]);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 5: Pagination Serialization (Using findAll)
    public function testPagination(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            
            $paginatedData = $productModel->findAll([
                'pagination' => ['enabled' => true, 'page' => 1, 'perPage' => 2],
                'sort' => ['column' => 'id', 'direction' => 'desc']
            ]);

            return $response->json([
                'status' => 'success',
                'test' => '5. Paginated JSON (findAll)',
                'response' => $paginatedData // 🟢 Response ক্লাস গভীর থেকে array তে কনভার্ট করবে
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // =====================================================================
    // 🔵 PHASE 2: ADVANCED QUERIES, RELATIONSHIPS & PAGINATION (Tests 6-8)
    // =====================================================================

    // Test 6: The New Laravel-Style Pagination
    public function testNewPagination(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            
            $paginatedData = $productModel::where('price', '>', 0)
                                          ->orderBy('id', 'DESC')
                                          ->paginate(2); 

            return $response->json([
                'status' => 'success',
                'test' => '6. Laravel-Style Pagination API',
                'response' => $paginatedData // 🟢 একদম ক্লিন!
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 7: API Relationships (hasMany)
    public function testApiRelationships(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $vendor = $userModel::find(5); 
            
            if (!$vendor) {
                return $response->json(['status' => 'error', 'message' => 'Vendor not found'], 404);
            }

            $products = $vendor->hasMany('ProductModel', 'vendor_id');

            return $response->json([
                'status' => 'success',
                'test' => '7. API Relationships (Vendor -> Products)',
                'vendor_name' => $vendor->name,
                'total_products' => count($products),
                'data' => $products // 🟢 Array of objects, Response নিজেই হ্যান্ডেল করবে!
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 8: Complex QueryBuilder API (Search + WhereIn)
    public function testComplexQueryApi(Request $request, Response $response)
    {
        try {
            $productModel = $this->model('ProductModel');
            
            $products = $productModel::whereIn('vendor_id', [5, 7]) 
                                     ->search('Box', ['title'])     
                                     ->get();

            return $response->json([
                'status' => 'success',
                'test' => '8. Complex Query API (Search + WhereIn)',
                'count' => count($products),
                'data' => $products // 🟢 ক্লিন আর্কিটেকচার!
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // =====================================================================
    // 🟠 PHASE 3: SECURITY, I/O, & DESTRUCTIVE TESTS (Tests 9-12)
    // =====================================================================

    // Test 9: API Validation Engine (Testing Bad vs Good POST Data)
    public function testApiValidation(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            // ❌ Scenario A: Simulating BAD data from Frontend
            $badData = [
                'name' => 'Al',              // Fails min:3
                'email' => 'not-an-email',   // Fails email format
                'password' => '123',         // Fails min:6
                'role' => 'super_hacker'     // Fails in:admin,vendor,customer
            ];

            $errors = $userModel->validate($badData);
            
            if (!empty($errors)) {
                return $response->json([
                    'status' => 'fail',
                    'test' => '9. API Validation (Caught Bad Data)',
                    'message' => 'Validation failed',
                    'errors' => $errors // 🟢 Sends exact error messages to React!
                ], 422); // 422 Unprocessable Entity is standard for API validation
            }

            return $response->json(['status' => 'success', 'message' => 'Wait, bad data passed? This is an error!']);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 10: API Data Security (Mass Assignment Protection)
    public function testApiMassAssignment(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $validator = new Validator();

            // ✅ Scenario B: Good Data, but trying to inject a malicious field
            $goodData = [
                'name' => 'Aminul Islam',
                'email' => 'admin@empowro.com',
                'password' => 'secure123',
                'role' => 'admin',
                'is_bypassed' => 1 // 🛑 Malicious hacker data!
            ];

            $validator->rules($userModel->validationRules)->validate($goodData);

            if (!$validator->fails()) {
                return $response->json([
                    'status' => 'success',
                    'test' => '10. Mass Assignment Protection',
                    'message' => 'Notice how "is_bypassed" is completely removed from the validated data below!',
                    'safe_data' => $validator->validated() // 🟢 Only returns safe, allowed columns
                ], 200);
            }

            return $response->json(['status' => 'fail', 'errors' => $validator->errors()], 422);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 11: API CSV Import
    public function testApiCsvImport(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            
            // 1. Create a dummy CSV file temporarily
            $csvContent = "name,email,password,role\n";
            $csvContent .= "API Vendor 1,apivendor1@test.com,123456,vendor\n"; // GOOD
            $csvContent .= "API Customer 1,apicustomer1@test.com,123456,customer\n"; // GOOD
            $csvContent .= "Bad Guy,bademail,12,hacker\n"; // BAD (Should be skipped)
            
            $tmpFilePath = sys_get_temp_dir() . '/api_dummy_import.csv';
            file_put_contents($tmpFilePath, $csvContent);

            // 2. Mock $_FILES array
            $mockFile = [
                'name'     => 'api_dummy_import.csv',
                'type'     => 'text/csv',
                'tmp_name' => $tmpFilePath,
                'error'    => UPLOAD_ERR_OK,
                'size'     => filesize($tmpFilePath)
            ];

            // 3. Run your Model's native import method
            $result = $userModel->import($mockFile);
            @unlink($tmpFilePath); // Clean up

            return $response->json([
                'status' => 'success',
                'test' => '11. API CSV Import Integration',
                'import_results' => $result 
            ], 200);

        } catch (Throwable $e) {
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Test 12: The Nuclear Option (Truncate)
    public function testApiTruncate(Request $request, Response $response)
    {
        try {
            $orderModel = $this->model('OrderModel');
            
            $beforeCount = $orderModel->count();
            $orderModel::truncate();
            $afterCount = $orderModel->count();

            return $response->json([
                'status' => 'success',
                'test' => '12. API Truncate Command',
                'before_count' => $beforeCount,
                'after_count' => $afterCount,
                'message' => $afterCount === 0 ? 'Orders table completely wiped!' : 'Truncate failed.'
            ], 200);

        } catch (Throwable $e) {
            // Note: If you get a 1701 Cannot truncate error, it's due to Foreign Key constraints
            return $response->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Test 13: API CSV Export
     * এটি ডাটাবেস থেকে ইউজারদের নিয়ে একটি CSV ফাইল জেনারেট করে ডাউনলোড করাবে।
     */
    public function testApiExport(Request $request, Response $response)
    {
        try {
            $userModel = $this->model('UserModel');
            $users = $userModel->findAll();

            if (empty($users)) {
                return $response->json([
                    'status' => 'fail',
                    'message' => 'No data found to export'
                ], 404);
            }

            // 🟢 আপনার মডেলের এক্সপোর্ট মেথডটি কল করা হচ্ছে।
            // এটি ইন্টারনালি header('Content-Disposition: attachment...') ব্যবহার করে।
            return $userModel->export($users, 'users_list_export.csv');

        } catch (Throwable $e) {
            return $response->json([
                'status' => 'error', 
                'message' => $e->getMessage()
            ], 500);
        }
    }
}