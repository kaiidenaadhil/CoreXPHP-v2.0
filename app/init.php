<?php

// ১. প্রজেক্টের রুট (Root) ডিরেক্টরি ডায়নামিকভাবে বের করা
// dirname(__DIR__) এর মানে হলো এই ফাইলের ঠিক আগের ফোল্ডারটি, যা পুরো প্রজেক্টের বেইজ পাথ হিসেবে কাজ করবে।
define('ROOT', dirname(__DIR__));

// ২. এনভায়রনমেন্ট ভেরিয়েবল (.env ফাইল) লোড করা
// প্রজেক্টের সেনসিটিভ ডেটা (যেমন: পাসওয়ার্ড, এপিআই কি) সুরক্ষিত রাখতে .env ফাইল থেকে ডেটা রিড করা হচ্ছে।
$envFile = ROOT . '/config/.env';
if (file_exists($envFile)) {
    // INI_SCANNER_RAW ব্যবহার করা হয়েছে যাতে পাসওয়ার্ড বা স্ট্রিংয়ে থাকা স্পেশাল ক্যারেক্টার নষ্ট না হয়।
    $_ENV = parse_ini_file($envFile, false, INI_SCANNER_RAW);
}

// ৩. অ্যাপ্লিকেশনের গ্লোবাল কনস্ট্যান্টসমূহ (Global Constants)
// .env ফাইলে ডেটা না থাকলে ডিফল্ট (Fallback) ভ্যালু ব্যবহার করা হবে।
define("APP_NAME", $_ENV["APP_NAME"] ?? 'CoreXPHP');
define("APP_URL", $_ENV["APP_URL"] ?? 'http://localhost');
define("APP_DEBUG", filter_var($_ENV["APP_DEBUG"] ?? false, FILTER_VALIDATE_BOOLEAN)); // ট্রু (true) হলে এরর দেখাবে
define("APP_LICENSE_KEY", $_ENV["APP_LICENSE_KEY"] ?? '');
define("THEME", $_ENV["THEME"] ?? 'default'); // ফ্রন্টএন্ড বা ওয়েবসাইটের অ্যাক্টিভ থিম
define('ASSETS', APP_URL . "/assets/" . THEME); // সিএসএস, জেএস বা ইমেজের ডায়নামিক পাথ

// ৪. ডেটাবেস কনফিগারেশন (Database Constants)
define('DB_TYPE', $_ENV["DB_CONNECTION"] ?? 'mysql');
define('DB_HOST', $_ENV["DB_HOST"] ?? '127.0.0.1');
define('DB_NAME', $_ENV["DB_DATABASE"] ?? ''); // ডেটাবেসের নাম
define('DB_USER', $_ENV["DB_USERNAME"] ?? 'root');
define('DB_PASS', $_ENV["DB_PASSWORD"] ?? ''); // XAMPP-এর ক্ষেত্রে সাধারণত ফাঁকা থাকে

// ৫. মেইল সার্ভার কনফিগারেশন (SMTP / Mail Constants)
// প্রজেক্ট থেকে ইমেইল বা ওটিপি (OTP) পাঠানোর জন্য এই কনফিগারেশনটি কাজ করবে।
define('MAIL_HOST', $_ENV['MAIL_HOST'] ?? '');
define('MAIL_USERNAME', $_ENV['MAIL_USERNAME'] ?? '');
define('MAIL_PASSWORD', $_ENV['MAIL_PASSWORD'] ?? '');
define('MAIL_PORT', $_ENV['MAIL_PORT'] ?? 587); // সাধারণত 587 (TLS) বা 465 (SSL) হয়
define('MAIL_ENCRYPTION', $_ENV['MAIL_ENCRYPTION'] ?? 'tls');
define('MAIL_FROM_ADDRESS', $_ENV['MAIL_FROM_ADDRESS'] ?? '');
define('MAIL_FROM_NAME', $_ENV['MAIL_FROM_NAME'] ?? APP_NAME);

// নোট: কোর ফাইলগুলোর জন্য এখানে require_once এর দরকার নেই! 
// কারণ Composer-এর classmap এবং autoload স্বয়ংক্রিয়ভাবে ফ্রেমওয়ার্কের সব ফাইল লোড করে নেবে।