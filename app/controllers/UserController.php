<?php

/**
 * ক্লাস UserController
 * * এটি ইউজারের বিভিন্ন রিকোয়েস্ট হ্যান্ডেল করবে।
 */
class UserController 
{
    /**
     * প্রোফাইল দেখানোর মেথড
     */
    public function profile(Request $request, Response $response)
    {
        // যেহেতু সব মিডলওয়্যার সফলভাবে পার হয়ে রিকোয়েস্ট এখানে আসবে,
        // তাই আমরা সরাসরি রেসপন্স পাঠিয়ে দেব।
        
        return "<h3>✅ অভিনন্দন!</h3>
                <p>আপনি সফলভাবে ৩টি মিডলওয়্যার পার হয়ে <strong>UserController</strong> এর <strong>profile</strong> মেথডে পৌঁছেছেন!</p>";
    }
}