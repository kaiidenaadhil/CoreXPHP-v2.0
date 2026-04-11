<?php

/**
 * ক্লাস ApiTestController
 * * এপিআই (API) এর সব ধরনের মেথড এবং ডেটা রিসিভিং টেস্ট করার জন্য।
 */
class ApiTestController extends Controller
{
    // ১. সাধারণ এপিআই স্ট্যাটাস (GET /api/status)
    public function status(Request $request, Response $response)
    {
        return $response->json([
            'success' => true,
            'message' => 'CoreXPHP API ইঞ্জিন সফলভাবে কাজ করছে!',
            'version' => '1.0.0',
            'server_time' => date('Y-m-d H:i:s')
        ]);
    }

    // ২. পোস্ট রিকোয়েস্ট থেকে ডেটা নেওয়া (POST /api/test-data)
    public function receiveData(Request $request, Response $response)
    {
        $data = $request->getBody(); // JSON বা Form ডেটা ধরবে

        if (empty($data)) {
            return $response->json(['error' => 'কোনো ডেটা পাঠানো হয়নি!'], 400);
        }

        return $response->json([
            'success' => true,
            'message' => 'ডেটা রিসিভ হয়েছে!',
            'your_data' => $data
        ], 201);
    }

    // ৩. ডায়নামিক এপিআই রাউট (GET /api/user/{id})
    public function getUser(Request $request, Response $response, $id)
    {
        return $response->json([
            'success' => true,
            'user_id' => $id,
            'user_details' => [
                'name' => 'Md Aminul Islam',
                'role' => 'Framework Developer'
            ]
        ]);
    }

    // ৪. রিসোর্স এপিআই টেস্ট (এগুলো resource('items', ...) থেকে কল হবে)
    public function index(Request $request, Response $response) {
        return $response->json(['items' => ['Laptop', 'Keyboard', 'Mouse']]);
    }

    public function store(Request $request, Response $response) {
        $data = $request->getBody();
        return $response->json(['message' => 'Item created!', 'data' => $data], 201);
    }

    public function destroy(Request $request, Response $response, $id) {
        return $response->json(['message' => "Item {$id} has been deleted!"]);
    }
}