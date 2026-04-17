<?php

$app->router->group('/model-test', [], function($router) {

    $router->get('/create-find', [ModelTestController::class, 'testCreateFind']);
    $router->get('/save-update', [ModelTestController::class, 'testSaveUpdate']);
    $router->get('/delete', [ModelTestController::class, 'testDelete']);
    $router->get('/findall', [ModelTestController::class, 'testFindAll']);

    $router->get('/query', [ModelTestController::class, 'testQuery']);
    $router->get('/call-static', [ModelTestController::class, 'testCallStatic']);
    $router->get('/fill', [ModelTestController::class, 'testFill']);

    $router->get('/relations', [ModelTestController::class, 'testRelationships']);
    $router->get('/hasone', [ModelTestController::class, 'testHasOne']);

    $router->get('/truncate', [ModelTestController::class, 'testTruncate']); // ⚠️
});
// ==============================================================================
// 🌐 COREXPHP WEB DATABASE DEBUGGING ROUTES
// ==============================================================================

$app->router->group('/web-test', [], function($router) {
    $router->get('/truncate', [MarketplaceController::class, 'testTruncate']);
    $router->get('/import', [MarketplaceController::class, 'testImport']);
    $router->get('/export', [MarketplaceController::class, 'testExport']);
    $router->get('/validate', [MarketplaceController::class, 'testValidation']);

$router->get('/belongs-to-many', [MarketplaceController::class, 'testBelongsToMany']);

$router->get('/product-vendor', [MarketplaceController::class, 'testProductVendor']);
$router->get('/user-orders', [MarketplaceController::class, 'testUserOrders']);
$router->get('/delete-cascade', [MarketplaceController::class, 'testDeleteCascade']);
$router->get('/where-query', [MarketplaceController::class, 'testWhereQuery']);
$router->get('/search-filter', [MarketplaceController::class, 'testSearchFilter']);
$router->get('/revenue', [MarketplaceController::class, 'testRevenue']);
$router->get('/api-json', [MarketplaceController::class, 'testApiFormat']);



// Core Test 1: Create & Find
    $router->get('/core-test-1', [MarketplaceController::class, 'testCreateAndFind']);
    
    // 1. Basic Retrieval
    $router->get('/users', [MarketplaceController::class, 'getUsers']);
    
    // 2. Products with Vendor Names (Single JOIN)
    $router->get('/products', [MarketplaceController::class, 'getProducts']);
    
    // 3. Detailed Orders (Multi-JOIN)
    $router->get('/orders', [MarketplaceController::class, 'getOrders']);
    
    // 4. Dashboard Analytics (Aggregates)
    $router->get('/analytics', [MarketplaceController::class, 'getAnalytics']);
    // 5. Active Record Update
    $router->get('/update-user', [MarketplaceController::class, 'testUpdate']);
    
    // 6. Model Relationships
    $router->get('/relationships', [MarketplaceController::class, 'testRelationships']);
    
    // 7. Pagination & Sorting
    $router->get('/pagination', [MarketplaceController::class, 'testPagination']);
});
// ==============================================================================
// 📦 COREXPHP GROUP ROUTING TESTING MATRIX
// ==============================================================================

// ---------------------------------------------------------
// 1. BASIC GROUP (Prefix Only, No Middleware)
// ---------------------------------------------------------
$app->router->group('/public-group', [], function($router) {
    
    // Test 1: Group + Closure (URL: /public-group/closure)
    $router->get('/closure', function(Request $request, Response $response) {
        return $response->json(['scenario' => 'Group + Closure', 'status' => 'Success']);
    });

    // Test 2: Group + Controller (URL: /public-group/controller)
    $router->get('/controller', [GroupTestController::class, 'basicInfo']);

});

// ---------------------------------------------------------
// 2. SECURE GROUP (Prefix + Middleware applied to all routes inside)
// ---------------------------------------------------------
$app->router->group('/secure-group', [CheckMiddleware::class], function($router) {
    
    // Test 3: Secured Group + Closure (URL: /secure-group/closure)
    $router->get('/closure', function(Request $request, Response $response) {
        return $response->json(['scenario' => 'Secured Group + Closure', 'status' => 'Passed']);
    });

    // Test 4: Secured Group + Controller (URL: /secure-group/controller)
    $router->get('/controller', [GroupTestController::class, 'secureInfo']);

});


// ==============================================================================
// 🧪 COREXPHP ARCHITECTURE TESTING MATRIX
// ==============================================================================

// ---------------------------------------------------------
// 1. CLOSURE ONLY (No Controller, No Model, No Middleware)
// ---------------------------------------------------------
$app->router->get('/matrix/1', function(Request $request, Response $response) {
    return $response->json(['scenario' => '1. Pure Closure', 'status' => 'Success']);
});

// ---------------------------------------------------------
// 2. CLOSURE + MIDDLEWARE (No Controller, No Model)
// ---------------------------------------------------------
$app->router->get('/matrix/2', function(Request $request, Response $response) {
    return $response->json(['scenario' => '2. Closure + Middleware', 'status' => 'Passed Security']);
}, [CheckMiddleware::class]);

// ---------------------------------------------------------
// 3. CONTROLLER ONLY (No Model, No Middleware)
// ---------------------------------------------------------
$app->router->get('/matrix/3', [MatrixController::class, 'basic']);

// ---------------------------------------------------------
// 4. CONTROLLER + MIDDLEWARE (No Model)
// ---------------------------------------------------------
$app->router->get('/matrix/4', [MatrixController::class, 'basic'], [CheckMiddleware::class]);

// ---------------------------------------------------------
// 5. CONTROLLER + MODEL/DB (No Middleware)
// ---------------------------------------------------------
$app->router->get('/matrix/5', [MatrixController::class, 'withDatabase']);

// ---------------------------------------------------------
// 6. THE FULL STACK (Middleware -> Controller -> Model/DB)
// ---------------------------------------------------------
$app->router->get('/matrix/6', [MatrixController::class, 'withDatabase'], [CheckMiddleware::class]);

// ---------------------------------------------------------
// 7. VIEW ONLY (Direct String Rendering)
// ---------------------------------------------------------
// Make sure you have a file at app/views/matrix_view.php
$app->router->get('/matrix/7', 'matrix_view');