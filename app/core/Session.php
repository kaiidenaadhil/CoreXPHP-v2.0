<?php

/**
 * Session Class
 * এই ক্লাসটি ওয়েবসাইটের সেশন (Session) নিরাপদে ম্যানেজ করার জন্য তৈরি করা হয়েছে।
 * এটি সেশন টাইমআউট, ডেটা সেট/গেট করা এবং সেশন হাইজ্যাকিং রোধ করতে সাহায্য করে।
 */
class Session {
    // সেশন কতক্ষণ পর্যন্ত অ্যাক্টিভ থাকবে (সেকেন্ডে), তা এখানে জমা থাকে
    protected $timeout;

    /**
     * Session constructor.
     * যখনই এই ক্লাসের অবজেক্ট তৈরি হবে, এটি স্বয়ংক্রিয়ভাবে সেশন শুরু করবে এবং টাইমআউট চেক করবে।
     *
     * @param int $timeout - সেশনের মেয়াদ সেকেন্ডে (ডিফল্ট: ১৮০০ সেকেন্ড বা ৩০ মিনিট)।
     */
    public function __construct($timeout = 1800) {
        session_start(); // সেশন শুরু করা হলো
        $this->timeout = $timeout;

        // চেক করা হচ্ছে ইউজারের সেশনের মেয়াদ (Timeout) শেষ হয়ে গেছে কি না
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $this->timeout)) {
            $this->destroy(); // মেয়াদ শেষ হলে সেশন ধ্বংস (Destroy) করে দেবে
        }

        // ইউজারের সর্বশেষ অ্যাক্টিভিটির সময় আপডেট করা হচ্ছে
        $_SESSION['LAST_ACTIVITY'] = time(); 
    }

    /**
     * সেশনে নতুন কোনো ডেটা সেভ করার জন্য এই মেথড।
     * (যেমন: ইউজারের আইডি, নাম ইত্যাদি)
     *
     * @param string $key - সেশন ভেরিয়েবলের নাম (Key)।
     * @param mixed $value - যে ডেটা সেভ করতে চান।
     */
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * সেশন থেকে কোনো নির্দিষ্ট ডেটা পড়ার জন্য এই মেথড।
     *
     * @param string $key - সেশন ভেরিয়েবলের নাম।
     * @return mixed|null - ডেটা পেলে তা রিটার্ন করবে, না পেলে null রিটার্ন করবে।
     */
    public function get($key) {
        return $_SESSION[$key] ?? null;
    }

    /**
     * সেশনে আগে থেকেই থাকা কোনো ডেটা আপডেট বা মডিফাই করার জন্য।
     *
     * @param string $key - যে সেশনের ডেটা আপডেট করতে চান।
     * @param mixed $newValue - নতুন ডেটা।
     */
    public function modify($key, $newValue) {
        if (isset($_SESSION[$key])) {
            $_SESSION[$key] = $newValue;
        } else {
            // যদি ওই নামে কোনো সেশন না থাকে, তবে একটি এরর (Exception) থ্রো করবে
            throw new Exception("Session key '$key' not found.");
        }
    }

    /**
     * সেশন থেকে নির্দিষ্ট কোনো ডেটা মুছে ফেলার জন্য (Unset)।
     *
     * @param string $key - মুছে ফেলার জন্য সেশনের নাম।
     */
    public function remove($key) {
        unset($_SESSION[$key]);
    }

    /**
     * সেশন আইডি নতুন করে জেনারেট করার মেথড।
     * 🔴 সিকিউরিটি: লগিন করার পর এটি কল করা উচিত, যাতে Session Fixation অ্যাটাক না হতে পারে।
     */
    public function regenerate() {
        session_regenerate_id(true); // পুরনো সেশন আইডি ডিলিট করে নতুন আইডি তৈরি করবে
    }

    /**
     * পুরো সেশন ধ্বংস (Destroy) করার মেথড। 
     * সাধারণত ইউজার লগআউট (Logout) করার সময় এটি ব্যবহার করা হয়।
     */
    public function destroy() {
        $_SESSION = []; // সেশনের সব ডেটা ফাঁকা করে দেওয়া হলো
        if (session_id()) {
            session_unset(); // সেশন ভেরিয়েবল আনসেট করা
            session_destroy(); // সার্ভার থেকে সেশন ডিলিট করা
        }
    }

    /**
     * সেশনের টাইমআউট (মেয়াদ) নতুন করে সেট করার জন্য।
     *
     * @param int $newTimeout - নতুন টাইমআউট সেকেন্ডে।
     */
    public function updateTimeout($newTimeout) {
        $this->timeout = $newTimeout;
        $_SESSION['LAST_ACTIVITY'] = time(); // অ্যাক্টিভিটির সময় রিসেট করে দেওয়া হলো
    }

    /**
     * ইউজারের সেশনটি বর্তমানে অ্যাক্টিভ আছে, নাকি টাইমআউট হয়ে গেছে তা চেক করার মেথড।
     * * @return bool - অ্যাক্টিভ থাকলে true, নাহলে false রিটার্ন করবে।
     */
    public function isActive() {
        return isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] <= $this->timeout);
    }
}