<?php

/**
 * ক্লাস Database
 * * ডাটাবেস কানেকশন তৈরি এবং ম্যানেজ করার জন্য কোর ক্লাস।
 * এখানে Singleton (সিঙ্গেলটন) ডিজাইন প্যাটার্ন ব্যবহার করা হয়েছে, 
 * যাতে পুরো প্রজেক্ট রান হওয়ার সময় ডাটাবেসের একটিমাত্র কানেকশনই (Instance) তৈরি হয়।
 * এতে সার্ভারের মেমরি বাঁচে এবং সাইট দ্রুত লোড হয়।
 */
class Database {
    // ডাটাবেসের একক ইন্সট্যান্স (Instance) মেমরিতে ধরে রাখার জন্য স্ট্যাটিক প্রোপার্টি
    protected static $instance = null;
    
    // অ্যাক্টিভ PDO কানেকশন অবজেক্টটি সেভ রাখার জন্য
    protected $conn;

    /**
     * কনস্ট্রাক্টর মেথডটি protected রাখা হয়েছে। 
     * এর ফলে বাইরের কোনো ফাইল থেকে `new Database()` লিখে একাধিক কানেকশন তৈরি করা যাবে না।
     */
    protected function __construct() {
        try {
            // DSN (Data Source Name) স্ট্রিং তৈরি করা হচ্ছে কনফিগারেশন কনস্ট্যান্ট থেকে
            $dsn = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
            
            // PDO ব্যবহার করে MySQL ডাটাবেসের সাথে কানেক্ট করা
            $this->conn = new PDO($dsn, DB_USER, DB_PASS);
            
            // ডাটাবেসে কোনো এরর হলে সেটি Exception (ত্রুটি) হিসেবে থ্রো করার জন্য কনফিগারেশন
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            // টেস্টিং বা ডেভেলপমেন্টের সময় ডাটাবেস কানেক্ট না হলে সরাসরি এরর মেসেজ দেখাবে 
            // (APP_DEBUG কনস্ট্যান্টটি true থাকলেই কেবল এটি কাজ করবে)
            if (APP_DEBUG) die("DB Error: " . $e->getMessage());
        }
    }

    /**
     * ডাটাবেসের ইন্সট্যান্স পাওয়ার গ্লোবাল মেথড (Singleton Logic)
     * * মেমরিতে কানেকশন না থাকলে নতুন করে তৈরি করবে (new self()), 
     * আর আগে থেকেই তৈরি করা থাকলে সেই পুরোনো কানেকশনটিই রিটার্ন করবে।
     * * @return Database
     */
    public static function getInstance() {
        if (!self::$instance) { 
            self::$instance = new self(); 
        }
        return self::$instance;
    }

    /**
     * ডাটাবেসের অ্যাক্টিভ PDO কানেকশন অবজেক্টটি পাওয়ার জন্য
     * * @return PDO
     */
    public function getConnection() { 
        return $this->conn; 
    }
}