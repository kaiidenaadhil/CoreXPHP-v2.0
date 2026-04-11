<?php

/**
 * ==============================================================================
 * COREXPHP API ROUTING - MASTER TEST
 * ==============================================================================
 * [বাংলা] 
 * এই ফাইলটি এপিআই রাউটিং এবং JSON রেসপন্স টেস্ট করার জন্য তৈরি।
 */

/** @var \App\Core\App $app */
$app = $this;

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