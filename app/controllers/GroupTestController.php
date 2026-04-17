<?php

class GroupTestController extends Controller
{
    // Basic group endpoint
    public function basicInfo(Request $request, Response $response)
    {
        return $this->json([
            'scenario' => 'Group + Controller',
            'message' => 'Successfully routed to the Controller from inside a group!'
        ]);
    }

    // Secured group endpoint
    public function secureInfo(Request $request, Response $response)
    {
        return $this->json([
            'scenario' => 'Group + Middleware + Controller',
            'message' => 'The group middleware allowed this request through to the Controller!'
        ]);
    }

    // Deep nested group + Model (Full Stack)
    public function deepDatabase(Request $request, Response $response)
    {
        $model = $this->model('MatrixModel'); // Reusing our dummy model
        
        return $this->json([
            'scenario' => 'Nested Group + Middleware + Controller + Model',
            'message' => 'Deep architecture is flawless!',
            'db_data' => $model->getSystemStatus()
        ]);
    }
}