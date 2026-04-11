<?php

/**
 * ক্লাস WebTestController
 * * ফ্রেমওয়ার্কের সকল ধরনের রাউটিং (Dynamic, Nested, Symbols, Resource) 
 * একসাথে টেস্ট করার জন্য একটি মাস্টার কন্ট্রোলার।
 */
class WebTestController extends Controller
{
    // ==========================================
    // ১. সাধারণ রাউটস (Basic Routes)
    // ==========================================
    // public function index() {
    //     return "<h1>CoreXPHP তে স্বাগতম!</h1><p>এটি মূল হোমপেজ (GET /)</p>";
    // }

    public function index() {
    try {
        // আপনার সিঙ্গেলটন ক্লাস কল করা হচ্ছে
        $db = Database::getInstance()->getConnection();
        
        return "<h1>CoreXPHP তে স্বাগতম!</h1>
                <p style='color: green;'>✅ Database Connection Successful!</p>";
    } catch (Exception $e) {
        return "<h1>CoreXPHP তে স্বাগতম!</h1>
                <p style='color: red;'>❌ Database Error: " . $e->getMessage() . "</p>";
    }
}


    public function home() {
        return "<h1>হোম পেজ</h1><p>কন্ট্রোলার থেকে লোড হচ্ছে (GET /home)</p>";
    }

    public function adminDashboard() {
        return "<h1>অ্যাডমিন ড্যাশবোর্ড</h1><p>নিরাপদ এরিয়া (GET /admin)</p>";
    }

    // ==========================================
    // ২. ডায়নামিক ও নেস্টেড প্যারামিটার (Dynamic & Nested)
    // ==========================================
    public function showProfile(Request $request, Response $response, $id) {
        return "<h1>ইউজার প্রোফাইল</h1><p>ইউজার আইডি: <strong>{$id}</strong></p>";
    }

    public function showComment(Request $request, Response $response, $postId, $commentId) {
        return "<h1>নেস্টেড রাউট</h1><p>পোস্ট আইডি: <strong>{$postId}</strong> <br> কমেন্ট আইডি: <strong>{$commentId}</strong></p>";
    }

    public function showPage(Request $request, Response $response, $slug) {
        return "<h1>ওয়াইল্ডকার্ড রাউট</h1><p>বর্তমান পেজ স্লাগ: <strong>{$slug}</strong></p>";
    }

    // ==========================================
    // ৩. সিম্বল রাউটস (@ এবং ~)
    // ==========================================
    public function showUserProfile(Request $request, Response $response, $username) {
        return "<h1>সোশ্যাল প্রোফাইল</h1><p>ইউজারনেম: <strong>@{$username}</strong></p>";
    }

    public function showCollection(Request $request, Response $response, $collectionId) {
        return "<h1>কালেকশন পেজ</h1><p>কালেকশন আইডি: <strong>~{$collectionId}</strong></p>";
    }

    // ==========================================
    // ৪. রিসোর্স রাউটস (CRUD Operations - /products)
    // ==========================================
    // Resource রাউটার স্বয়ংক্রিয়ভাবে এই ৭টি মেথড খুঁজবে
    public function create() {
        return "<h1>নতুন ডেটা যোগ করুন</h1><p>(GET /products/create)</p>";
    }

    public function store(Request $request, Response $response) {
        return $response->json(['success' => true, 'message' => 'ডেটা সেভ হয়েছে! (POST /products)']);
    }

    public function show(Request $request, Response $response, $id) {
        return "<h1>সিঙ্গেল ডেটা ভিউ</h1><p>ডেটা আইডি: <strong>{$id}</strong> (GET /products/{id})</p>";
    }

    public function edit(Request $request, Response $response, $id) {
        return "<h1>ডেটা আপডেট ফর্ম</h1><p>এডিট আইডি: <strong>{$id}</strong> (GET /products/{id}/edit)</p>";
    }

    public function update(Request $request, Response $response, $id) {
        return $response->json(['message' => "ডেটা {$id} আপডেট হয়েছে! (PUT /products/{id})"]);
    }

    public function destroy(Request $request, Response $response, $id) {
        return $response->json(['message' => "ডেটা {$id} ডিলিট হয়েছে! (DELETE /products/{id})"]);
    }
}