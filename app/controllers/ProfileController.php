<?php

class ProfileController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $user = $request->getLocal('user');

        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User data not found!'], 401);
        }

        // 🔴 পরিবর্তন: Array সিনট্যাক্স (['id']) বাদ দিয়ে শুধু Object সিনট্যাক্স (->id) ব্যবহার করা হলো
        return $this->json([
            'success' => true,
            'message' => 'Welcome to your secure profile!',
            'data' => [
                'user_id' => $user->id ?? null, 
                'email'   => $user->email ?? null,
                'phone'   => $user->phone ?? null,
                'role'    => $user->role ?? null
            ]
        ]);
    }

    /**
     * প্রোফাইল আপডেট করার API কন্ট্রোলার
     */
    public function update(Request $request, Response $response)
    {
        // ১. মিডলওয়্যার থেকে লগিন করা ইউজারের ডেটা বের করা
        $user = $request->getLocal('user');
        
        // যদি ইউজার না পাওয়া যায় (যদিও মিডলওয়্যার এটি আগেই আটকে দেবে)
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'Unauthorized Access!'], 401);
        }

        // ইউজারের আইডি বের করা (অবজেক্ট বা অ্যারে যেভাবেই আসুক না কেন)
        $userId = $user->id ?? $user['id'];

        // ২. ফ্রন্টএন্ড বা Postman থেকে পাঠানো নতুন ডেটা রিসিভ করা
        $data = $request->getBody();

        // ৩. AuthModel লোড করে ডেটা আপডেটের দায়িত্ব মডেলকে দেওয়া
        $authModel = $this->model('AuthModel');
        $result = $authModel->updateProfileCredentials($userId, $data);

        // ৪. মডেল থেকে আসা স্ট্যাটাস কোড আলাদা করে রেসপন্স পাঠানো
        $status = $result['status'];
        unset($result['status']);
        
        return $this->json($result, $status);
    }
    
}