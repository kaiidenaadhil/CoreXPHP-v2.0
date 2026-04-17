<?php

/**
 * ক্লাস Response
 * * এটি ক্লায়েন্ট বা ইউজারের কাছে আউটপুট (ডেটা বা মেসেজ) পাঠানোর কাজ করে।
 * এটি দিয়ে HTTP Status Code সেট করা যায়, এপিআইয়ের জন্য সরাসরি JSON পাঠানো যায়, 
 * অথবা অন্য কোনো পেজে রিডাইরেক্ট (Redirect) করা যায়।
 */
class Response
{
    /**
     * HTTP Status Code সেট করা।
     * যেমন: 200 (Success), 404 (Not Found), 500 (Server Error)।
     * * @param int $code স্ট্যাটাস কোড
     * @return self মেথড চেইনিং (Method Chaining) করার জন্য অবজেক্টটি রিটার্ন করা হয়
     */
    public function setStatusCode(int $code): self
    {
        http_response_code($code);
        return $this;
    }

    /**
     * এপিআই হেল্পার (API Helper): 
     * ডেটাকে JSON ফরম্যাটে কনভার্ট করে ইউজারের কাছে পাঠিয়ে দেয় এবং কোড চালানো বন্ধ করে দেয়।
     * * @param mixed $data অ্যারে বা অবজেক্ট যা JSON এ রূপান্তর করতে হবে
     * @param int $statusCode অপশনাল স্ট্যাটাস কোড (ডিফল্ট: 200)
     */
    public function json($data, int $statusCode = 200)
    {
        $this->setStatusCode($statusCode);
        
        // ব্রাউজার বা এপিআই ক্লায়েন্টকে বলে দেওয়া হচ্ছে যে রেসপন্সটি JSON
        header('Content-Type: application/json'); 
        
        // 🚀 ডেটাকে JSON-এ রূপান্তর করার আগে স্মার্ট প্রসেসিং করে নেওয়া
        $formattedData = $this->prepareDataForJson($data);
        
        echo json_encode($formattedData);
        exit; // ডেটা পাঠানোর পর পিএইচপি স্ক্রিপ্ট চালানো সাথে সাথে বন্ধ করে দেওয়া
    }

    /**
     * 🧠 স্মার্ট ডেটা প্রসেসর (Internal Helper):
     * এটি নিজে থেকেই চেক করে ডেটার ভেতরে কোনো Model Object আছে কিনা।
     * থাকলে নিজে থেকেই সেটার toArray() কল করে অ্যারে বানিয়ে দেয়।
     * * @param mixed $data
     * @return mixed
     */
    private function prepareDataForJson($data)
    {
        // ১. যদি ডেটা একটি অ্যারে হয় (যেমন Pagination এর ['data' => [...], 'meta' => [...]])
        if (is_array($data)) {
            // অ্যারের ভেতরের সব আইটেমকে রিকার্সিভলি (Recursively) চেক করবে
            return array_map([$this, 'prepareDataForJson'], $data);
        }
        
        // ২. যদি ডেটা একটি Object হয় এবং তার ভেতরে 'toArray' মেথড থাকে (যেমন আপনার Model)
        if (is_object($data) && method_exists($data, 'toArray')) {
            // toArray() কল করে সেটিকে অ্যারে বানিয়ে আবার চেক করবে (Deep Conversion)
            return $this->prepareDataForJson($data->toArray());
        }
        
        // ৩. যদি সাধারণ স্ট্রিং বা ইন্টিজার হয়, তবে যা আছে তাই রিটার্ন করবে
        return $data;
    }

    /**
     * ওয়েব হেল্পার (Web Helper):
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