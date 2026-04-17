<?php

class CorsMiddleware
{
    public function handle(Request $request, callable $next)
    {
        // যেকোনো ডোমেইন থেকে (বা নির্দিষ্ট ডোমেইন থেকে) API কল করার পারমিশন দেওয়া
        header("Access-Control-Allow-Origin: *"); // প্রোডাকশনে * এর বদলে ফ্রন্টএন্ডের URL দেবেন
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Accept-Language");

        // ব্রাউজার মূল রিকোয়েস্ট পাঠানোর আগে একটি OPTIONS (Preflight) রিকোয়েস্ট পাঠায়
        // সেটাকে এখানেই 200 স্ট্যাটাস দিয়ে রিটার্ন করে দিতে হয়
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit();
        }

        // রিকোয়েস্ট পরবর্তী ধাপে পাঠানো
        return $next($request);
    }
}