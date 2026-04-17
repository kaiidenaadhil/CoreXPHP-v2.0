<?php

// ==============================================================================
// 🔌 COREXPHP API SERIALIZATION TESTING MATRIX (Tests 1-8)
// ==============================================================================
$app->router->group('', [], function($router) {
    
    // Phase 1: Basic Serialization & CRUD
    $router->get('/1-get-all', [ApiTestController::class, 'testGetAllUsers']);
    $router->get('/2-get-one', [ApiTestController::class, 'testGetSingleUser']);
    $router->get('/3-create', [ApiTestController::class, 'testCreateProduct']);
    $router->get('/4-not-found', [ApiTestController::class, 'testNotFound']);
    $router->get('/5-pagination', [ApiTestController::class, 'testPagination']);
    
    // Phase 2: Advanced Queries & Relationships
    $router->get('/6-paginate', [ApiTestController::class, 'testNewPagination']);
    $router->get('/7-relations', [ApiTestController::class, 'testApiRelationships']);
    $router->get('/8-complex', [ApiTestController::class, 'testComplexQueryApi']);

    // Phase 3: Validation, I/O & Destructive
    $router->get('/9-validate', [ApiTestController::class, 'testApiValidation']);
    $router->get('/10-security', [ApiTestController::class, 'testApiMassAssignment']);
    $router->get('/11-import', [ApiTestController::class, 'testApiCsvImport']);
    $router->get('/12-truncate', [ApiTestController::class, 'testApiTruncate']);
    $router->get('/13-export', [ApiTestController::class, 'testApiExport']);
    
});









// ১. বেসিক স্ট্যাটাস চেক (URL: /api/status)
$app->router->get('/status', [ApiTestController::class, 'status']);

// ২. ডেটা রিসিভ করার টেস্ট (URL: /api/test-data)
$app->router->post('/test-data', [ApiTestController::class, 'receiveData']);

// ৩. ডায়নামিক এপিআই রাউট (URL: /api/user/{id})
$app->router->get('/user/{id}', [ApiTestController::class, 'getUser']);

// ৪. রিসোর্স রাউট (CRUD এপিআই টেস্ট - URL: /api/items/...)
$app->router->resource('items', 'item', ApiTestController::class);

// ৫. ক্লোজার বা ফাংশন দিয়ে সরাসরি এপিআই টেস্ট (URL: /api/hello)
$app->router->get('/hello', function($req, $res) {
    return $res->json(['message' => 'Hello from API Closure!']);
});

/**
 * ১. মিডলওয়্যার ছাড়া সাধারণ এপিআই (সবার জন্য উন্মুক্ত)
 * URL: GET /api/public-info
 */
$app->router->get('/public-info', function($req, $res) {
    return $res->json(['message' => 'এটি একটি পাবলিক এপিআই।']);
});

/**
 * ২. মিডলওয়্যারসহ এপিআই গ্রুপ (নিরাপদ জোন)
 * এই গ্রুপের সব রাউটে 'token=123' থাকা বাধ্যতামূলক।
 */
$app->router->group('/v1', [AuthMiddleware::class], function($router) {
    
    // URL: GET /api/v1/user-data
    $router->get('/user-data', function($req, $res) {
        return $res->json([
            'success' => true,
            'data' => [
                'name' => 'Md Aminul Islam',
                'balance' => '5000 BDT'
            ]
        ]);
    });

    // URL: POST /api/v1/update-settings
    $router->post('/update-settings', function($req, $res) {
        return $res->json(['message' => 'সেটিংস আপডেট সফল হয়েছে!']);
    });
});

// Auth Routes
$app->router->post('/auth/register', [AuthController::class, 'register']);
$app->router->post('/auth/login', [AuthController::class, 'login']); 
$app->router->get('/auth/profile', [ProfileController::class, 'index'], [AuthMiddleware::class]);
$app->router->post('/auth/forgot-password', [AuthController::class, 'forgotPassword']);
$app->router->post('/auth/reset-password', [AuthController::class, 'resetPassword']);
// Profile Update Route (এই রাউটে অ্যাক্সেস করতে অবশ্যই লগিন টোকেন লাগবে)
$app->router->post('/auth/profile/update', [ProfileController::class, 'update'], [AuthMiddleware::class]);

$app->router->get('/products', [ProductController::class, 'index']);
$app->router->get('/products/{id}', [ProductController::class, 'show']);
$app->router->post('/products', [ProductController::class, 'store']);
$app->router->put('/products/{id}', [ProductController::class, 'update']);
$app->router->delete('/products/{id}', [ProductController::class, 'delete']);