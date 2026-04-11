<?php

/**
 * ==============================================================================
 * COREXPHP ROUTING ENGINE - MASTER TEST ROUTES
 * ==============================================================================
 * * Co-authored by : Md Aminul Islam & Gemini (Google AI)
 * * এই ফাইলে সব ধরনের রাউট টেস্ট করার জন্য শুধুমাত্র WebTestController ব্যবহার করা হয়েছে।
 * ==============================================================================
 */

/** @var \App\Core\App $app */
$app = $this; 

// ১. বেসিক এবং স্ট্যাটিক রাউটস
$app->router->get('/', [WebTestController::class, 'index']);
$app->router->get('/home', [WebTestController::class, 'home']);
$app->router->get('/admin', [WebTestController::class, 'adminDashboard']);

$app->router->get('/welcome', function () {
    return 'Welcome to CodeXPHP World, a place where core PHP is used to create dynamic apps.';
});
$app->router->get('/about', 'about'); // ভিউ ফাইল লোড করবে


// ২. ডায়নামিক এবং নেস্টেড রাউটস
$app->router->get('/user/{id}', [WebTestController::class, 'showProfile']);
$app->router->get('/page/{slug}', [WebTestController::class, 'showPage']);
$app->router->get('/post/{postId}/comment/{commentId}', [WebTestController::class, 'showComment']);


// ৩. অ্যাডভান্সড সিম্বল রাউটস
$app->router->get('/profile/@{username}', [WebTestController::class, 'showUserProfile']);
$app->router->get('/collections/~{collectionId}', [WebTestController::class, 'showCollection']);


// ৪. রিসোর্স রাউটস (CRUD)
// এটি WebTestController এর ভেতরে থাকা index, create, store, show, edit, update, destroy কল করবে
$app->router->resource('products', 'product', WebTestController::class);


/**
 * এডমিন গ্রুপের সব রাউটে AuthMiddleware প্রয়োগ করা হয়েছে।
 * URL: /admin/settings?token=123
 */
$app->router->group('/admin', [AuthMiddleware::class], function($router) {
    
    $router->get('/settings', function() {
        return "<h1>Admin Settings</h1><p>টোকেন সঠিক তাই আপনি এখানে আসতে পেরেছেন।</p>";
    });

    $router->get('/profile', [WebTestController::class, 'adminDashboard']);
});


// রাউট ডিফাইন করা
$app->router->get('/test-pipeline', [UserController::class, 'profile'], [
    FirstMiddleware::class,
    SecondMiddleware::class,
    ThirdMiddleware::class
]);