<?php

class AuthController extends Controller
{
    public function register(Request $request, Response $response)
    {
        $data = $request->getBody();
        $authModel = $this->model('AuthModel');
        
        // সব দায়িত্ব মডেলকে দিয়ে দেওয়া হলো
        $result = $authModel->registerUser($data);

        // মডেল থেকে আসা স্ট্যাটাস কোড আলাদা করে রেসপন্স পাঠানো
        $status = $result['status'];
        unset($result['status']);
        
        return $this->json($result, $status);
    }

    public function login(Request $request, Response $response)
    {
        $data = $request->getBody();
        $loginId = $data['login_id'] ?? $data['email'] ?? $data['phone'] ?? '';
        $password = $data['password'] ?? '';

        $authModel = $this->model('AuthModel');
        $jwtService = $this->getService('jwt'); // টোকেন বানানোর সার্ভিসটিও মডেলকে পাস করছি
        
        // সব দায়িত্ব মডেলকে দিয়ে দেওয়া হলো
        $result = $authModel->loginUser($loginId, $password, $jwtService);

        $status = $result['status'];
        unset($result['status']);
        
        return $this->json($result, $status);
    }

    /**
     * Forgot Password API (ইমেইল বা ফোন রিসিভ করবে)
     */
    public function forgotPassword(Request $request, Response $response)
    {
        $data = $request->getBody();
        
        // ফ্রন্টএন্ড থেকে login_id, email বা phone—যে নামেই আসুক না কেন, এটি ধরে নেবে
        $loginId = $data['login_id'] ?? $data['email'] ?? $data['phone'] ?? '';

        if (empty($loginId)) {
            return $this->json(['success' => false, 'message' => 'Email or Phone is required!'], 400);
        }

        $authModel = $this->model('AuthModel');
        $result = $authModel->generatePasswordResetToken($loginId);

        $status = $result['status'];
        unset($result['status']);
        
        return $this->json($result, $status);
    }

    /**
     * Reset Password API (টোকেন এবং নতুন পাসওয়ার্ড রিসিভ করবে)
     */
    public function resetPassword(Request $request, Response $response)
    {
        $data = $request->getBody();
        $token = $data['token'] ?? '';
        $newPassword = $data['new_password'] ?? '';

        if (empty($token) || empty($newPassword)) {
            return $this->json(['success' => false, 'message' => 'Token and new password are required!'], 400);
        }

        $authModel = $this->model('AuthModel');
        $result = $authModel->resetPassword($token, $newPassword);

        $status = $result['status'];
        unset($result['status']);
        
        return $this->json($result, $status);
    }
}