<?php

/**
 * ক্লাস Request
 * * এটি ইউজারের পাঠানো ইনকামিং (Incoming) রিকোয়েস্ট প্রসেস করে।
 * ইউজারের পাঠানো URL, মেথড (GET, POST), হেডার (Headers) এবং বডি (Body) ডেটা 
 * এখান থেকে খুব সহজেই পড়া যায়।
 * এটি সাধারণ ওয়েব ফর্ম এবং এপিআইয়ের JSON ডেটা—দুটোই অটোমেটিকভাবে বুঝতে পারে।
 */
class Request
{
    /**
     * @var array $locals এই অ্যারেটি রিকোয়েস্টের সময় সাময়িকভাবে ডেটা ধরে রাখতে ব্যবহৃত হয়।
     * যেমন: মিডলওয়্যার থেকে লগ-ইন করা ইউজারের আইডি কন্ট্রোলারে পাঠাতে এটি কাজে লাগে।
     */
    protected array $locals = [];

    /**
     * রিকোয়েস্ট চলাকালীন কোনো ডেটা (লোকাল ভেরিয়েবল) সেভ করে রাখা।
     * * @param string $key ডেটার নাম (যেমন: 'auth_user_id')
     * @param mixed $value ডেটার ভ্যালু (যেমন: 99)
     */
    public function setLocal(string $key, $value): void 
    {
        $this->locals[$key] = $value;
    }

    /**
     * সেভ করে রাখা কোনো লোকাল ভেরিয়েবল বের করে আনা।
     * * @param string $key ডেটার নাম
     * @param mixed $default যদি ওই নামে কোনো ডেটা না থাকে, তবে ডিফল্ট হিসেবে কী রিটার্ন করবে
     * @return mixed
     */
    public function getLocal(string $key, $default = null) 
    {
        return $this->locals[$key] ?? $default;
    }

    /**
     * সব লোকাল ভেরিয়েবল একসাথে পাওয়া।
     * * @return array
     */
    public function allLocals(): array 
    {
        return $this->locals;
    }

    /**
     * বর্তমান URL এর পাথ (Path) বের করা।
     * এটি URL থেকে Query String (যেমন: ?id=5) বাদ দিয়ে ফ্রেশ পাথ দেয়।
     * উদাহরণ: "/api/users?page=2" দিলে এটি শুধু "/api/users" রিটার্ন করবে।
     * * @return string পরিষ্কার URL পাথ
     */
    public function getPath(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = strtok($uri, '?'); // '?' এর পরের অংশ বাদ দেওয়া হচ্ছে
        return $path ?: '/';
    }

    /**
     * রিকোয়েস্ট মেথড (GET, POST, PUT, DELETE) ছোট হাতের অক্ষরে (Lowercase) বের করা।
     * * @return string যেমন: 'get', 'post'
     */
    public function method(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD'] ?? 'get');
    }

    /**
     * ইউজারের পাঠানো সব HTTP Header বের করা।
     * (এপিআইয়ের ক্ষেত্রে 'Authorization: Bearer Token' চেক করার জন্য এটি খুবই জরুরি)।
     * * @return array হেডারের অ্যারে
     */
    public function getHeaders(): array
    {
        // সার্ভারে getallheaders() ফাংশন থাকলে সরাসরি সেটি ব্যবহার করা হবে
        if (function_exists('getallheaders')) {
            return getallheaders();
        }

        // না থাকলে ম্যানুয়ালি $_SERVER থেকে হেডারগুলো বের করা হবে (Nginx সার্ভারের জন্য)
        $headers = [];
        foreach ($_SERVER as $name => $value) {
            if (substr($name, 0, 5) == 'HTTP_') {
                // 'HTTP_AUTHORIZATION' কে 'Authorization' ফরম্যাটে বদলানো হচ্ছে
                $formattedName = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))));
                $headers[$formattedName] = $value;
            }
        }
        return $headers;
    }

    /**
     * নির্দিষ্ট কোনো একটি HTTP Header বের করা। 
     * এটি কেস-ইনসেনসিটিভ (বড়-ছোট হাতের অক্ষরে পার্থক্য করে না)।
     * * @param string $name হেডারের নাম (যেমন: 'Authorization')
     * @param mixed $default না পেলে কী রিটার্ন করবে
     * @return mixed
     */
    public function getHeader(string $name, $default = null)
    {
        // সব হেডার ছোট হাতের অক্ষরে রূপান্তর করা হচ্ছে
        $headers = array_change_key_case($this->getHeaders(), CASE_LOWER);
        return $headers[strtolower($name)] ?? $default;
    }

    /**
     * রিকোয়েস্ট বডি (Body) পার্স করা।
     * ইউজারের পাঠানো ডেটা (ফর্ম বা JSON) অ্যারে হিসেবে রিটার্ন করে।
     * * @return array
     */
    public function getBody(): array
    {
        $method = $this->method();
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        // ১. যদি রিকোয়েস্টটি এপিআই (API) থেকে আসে এবং JSON ডেটা পাঠায়
        if (stripos($contentType, 'application/json') !== false) {
            $raw = file_get_contents('php://input'); // ইনপুট স্ট্রিম থেকে ডেটা পড়া হচ্ছে
            return json_decode($raw, true) ?? [];
        }

        // ২. সাধারণ ওয়েব রিকোয়েস্ট (GET বা POST)
        if ($method === 'get') return $_GET;
        if ($method === 'post') return $_POST;

        // ৩. PUT, PATCH, বা DELETE মেথডের ফর্ম ডেটার জন্য
        $raw = file_get_contents('php://input');
        parse_str($raw, $data);
        return is_array($data) ? $data : [];
    }
}