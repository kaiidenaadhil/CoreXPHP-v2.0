<?php

class MatrixController extends Controller
{
    // Scenario: Controller Only (No DB)
    public function basic(Request $request, Response $response)
    {
        return $this->json([
            'scenario' => 'Controller Only',
            'message' => 'Hit the controller successfully without needing a model!'
        ]);
    }

    // Scenario: Controller + Model (DB)
    public function withDatabase(Request $request, Response $response)
    {
        $model = $this->model('MatrixModel');
        
        return $this->json([
            'scenario' => 'Controller + Model',
            'message' => 'Successfully loaded data from the Model!',
            'data' => $model->getSystemStatus()
        ]);
    }
}