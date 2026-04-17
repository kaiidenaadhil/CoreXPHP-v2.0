<?php

// ১. সবার প্রথমে কম্পোজার অটোলোডার (Composer Autoloader) লোড করা
// এটি খুবই গুরুত্বপূর্ণ, কারণ এটি ফ্রেমওয়ার্কের সব ক্লাস (App, Request, Router) স্বয়ংক্রিয়ভাবে লোড করে নেবে।
require_once __DIR__ . '/../vendor/autoload.php';

// ২. ইনিশিয়ালাইজেশন বা কনফিগারেশন ফাইল লোড করা
// আপনার প্রজেক্টের .env ফাইল এবং গ্লোবাল কনস্ট্যান্টগুলো (যেমন: APP_DEBUG, ROOT) এখান থেকে সিস্টেমে আসবে।
require_once __DIR__ . '/../app/init.php';

// ৩. এনভায়রনমেন্ট অনুযায়ী এরর হ্যান্ডলিং (Error Handling)
// যদি অ্যাপ ডিবাগ মোডে থাকে (APP_DEBUG = true), তবে ব্রাউজারে সব এরর দেখাবে (ডেভেলপমেন্টের জন্য)।
if (APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    // প্রোডাকশনে (Live Server) থাকলে সব এরর লুকিয়ে ফেলবে, যাতে সাধারণ ইউজাররা কোডের ত্রুটি দেখতে না পায়।
    error_reporting(0);
    ini_set('display_errors', 0);
}

// ডিফল্ট টাইমজোন সেট করা 
// (আপনি যেহেতু বাংলাদেশে আছেন, তাই 'UTC' এর বদলে 'Asia/Dhaka' ব্যবহার করতে পারেন, এতে ডাটাবেসে সঠিক সময় সেভ হবে)।
date_default_timezone_set('UTC');

// ৪. অ্যাপ্লিকেশনের মূল ইন্সট্যান্স (App Class) তৈরি করা
// ROOT কনস্ট্যান্টটি init.php থেকে আসছে, যা App ক্লাসের কনস্ট্রাক্টরে রুট ডিরেক্টরি হিসেবে পাঠানো হচ্ছে।
$app = new App(ROOT);
// প্রথমে CORS সলভ করবে, এরপর ভাষা ডিটেক্ট করবে
//$app->use(CorsMiddleware::class);

// ৫. রাউটগুলো (Routes) সিস্টেমে লোড করা
// ব্রাউজারের জন্য web.php এবং এপিআইয়ের জন্য api.php লোড করা হচ্ছে।
$app->loadWebRoutes(ROOT . '/app/routes/web.php');
$app->loadApiRoutes(ROOT . '/app/routes/api.php');

// ৬. অ্যাপ্লিকেশন রান বা চালু করা
// এই মেথডটি রিকোয়েস্ট ধরবে, রাউট এবং মিডলওয়্যার চেক করবে এবং সবশেষে আউটপুট বা রেসপন্স পাঠাবে।
$app->run();