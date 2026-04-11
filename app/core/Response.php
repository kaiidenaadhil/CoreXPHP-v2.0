<?php

/**
 * ক্লাস Response
 * * এটি ক্লায়েন্ট বা ইউজারের কাছে আউটপুট (ডেটা বা মেসেজ) পাঠানোর কাজ করে।
 * এটি দিয়ে HTTP Status Code সেট করা যায়, এপিআইয়ের জন্য সরাসরি JSON পাঠানো যায়, 
 * অথবা অন্য কোনো পেজে রিডাইরেক্ট (Redirect) করা যায়।
 */
class Response
{
    /**
     * HTTP Status Code সেট করা।
     * যেমন: 200 (Success), 404 (Not Found), 500 (Server Error)।
     * * @param int $code স্ট্যাটাস কোড
     * @return self মেথড চেইনিং (Method Chaining) করার জন্য অবজেক্টটি রিটার্ন করা হয়
     */
    public function setStatusCode(int $code): self
    {
        http_response_code($code);
        return $this;
    }

    /**
     * এপিআই হেল্পার (API Helper): 
     * ডেটাকে JSON ফরম্যাটে কনভার্ট করে ইউজারের কাছে পাঠিয়ে দেয় এবং কোড চালানো বন্ধ করে দেয়।
     * * @param mixed $data অ্যারে বা অবজেক্ট যা JSON এ রূপান্তর করতে হবে
     * @param int $statusCode অপশনাল স্ট্যাটাস কোড (ডিফল্ট: 200)
     */
    public function json($data, int $statusCode = 200)
    {
        $this->setStatusCode($statusCode);
        
        // ব্রাউজার বা এপিআই ক্লায়েন্টকে বলে দেওয়া হচ্ছে যে রেসপন্সটি JSON
        header('Content-Type: application/json'); 
        
        echo json_encode($data);
        exit; // ডেটা পাঠানোর পর পিএইচপি স্ক্রিপ্ট চালানো সাথে সাথে বন্ধ করে দেওয়া
    }

    /**
     * ওয়েব হেল্পার (Web Helper):
     * ইউজারকে অন্য কোনো লিংকে রিডাইরেক্ট করা।
     * (যেমন: লগ-ইন সফল হলে ড্যাশবোর্ডে পাঠানো)।
     * * @param string $url যেখানে রিডাইরেক্ট করতে হবে
     */
    public function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }
}