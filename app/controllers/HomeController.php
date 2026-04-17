<?php

class HomeController extends Controller
{
    // -------------------------------------------------------------------------
    // 1. Basic Controller Route (No Model)
    // -------------------------------------------------------------------------
    public function index(Request $request, Response $response)
    {
        return $this->json([
            'status' => 'success',
            'message' => 'HomeController is working perfectly!'
        ]);
    }

    // -------------------------------------------------------------------------
    // 2. Dynamic Parameters Test
    // -------------------------------------------------------------------------
    public function showProfile(Request $request, Response $response, $id, $username)
    {
        return $this->json([
            'status' => 'success',
            'message' => 'Dynamic parameters injected successfully!',
            'captured_id' => $id,
            'captured_username' => $username
        ]);
    }

    // -------------------------------------------------------------------------
    // 3. Full MVC: QueryBuilder Test via $this->model()
    // -------------------------------------------------------------------------
    public function testDatabase(Request $request, Response $response)
    {
        // Classic Instance Loading
        $model = $this->model('HomeModel');

        // Using the custom method we defined in the model
        $activeVendors = $model->getActiveVendors();
        $totalCount = $model->count();

        return $this->json([
            'status' => 'success',
            'message' => 'Data retrieved using classic instance loading!',
            'total_vendors' => $totalCount,
            'active_vendors' => $activeVendors
        ]);
    }

    // -------------------------------------------------------------------------
    // 4. Full MVC: Active Record (Insert/Update) via $this->model()
    // -------------------------------------------------------------------------
    public function testActiveRecord(Request $request, Response $response)
    {
        // Load the model instance
        $vendor = $this->model('HomeModel');

        // Assign properties using __set magic
        $vendor->name = 'Classic MVC Print ' . rand(100, 999);
        $vendor->email = 'classic_' . time() . '@test.com';
        $vendor->status = 'active';
        
        // Save to DB
        $vendor->save();

        return $this->json([
            'status' => 'success',
            'message' => 'New record created using classic Active Record!',
            'inserted_data' => $vendor->toArray()
        ]);
    }

    // -------------------------------------------------------------------------
    // 5. Middleware Target
    // -------------------------------------------------------------------------
    public function secureArea(Request $request, Response $response)
    {
        return $this->json([
            'status' => 'success',
            'message' => 'If you see this, you passed the AuthMiddleware!'
        ]);
    }
}