<?php

/**
 * Language Class
 * এই ক্লাসটি ওয়েবসাইটে মাল্টি-ল্যাঙ্গুয়েজ (Multi-language) সাপোর্ট দেওয়ার জন্য তৈরি করা হয়েছে।
 * এটি Singleton Pattern ফলো করে, যাতে পুরো প্রজেক্টে এই ক্লাসের একটিমাত্র অবজেক্ট তৈরি হয়।
 */
class Language {
  
  // Singleton প্যাটার্নের জন্য ক্লাসের একটিভ ইনস্ট্যান্স (Instance) ধরে রাখার ভেরিয়েবল
  private static $instance;
  
  // বর্তমানে কোন ভাষা সিলেক্ট করা আছে, তা এখানে সেভ থাকবে (যেমন: 'en', 'bn')
  private $language;
  
  // লোড করা ভাষার ফাইল থেকে পাওয়া সব ডেটা (Array) এখানে জমা থাকবে
  private $data;

  /**
   * কনস্ট্রাক্টর প্রাইভেট করা হয়েছে যাতে বাইরে থেকে কেউ `new Language()` করে নতুন অবজেক্ট বানাতে না পারে।
   */
  private function __construct() {
    // ইউজারের সেশনে (Session) কোনো ভাষা সেট করা থাকলে সেটি নেবে, নাহলে ডিফল্ট হিসেবে 'en' (ইংরেজি) নেবে
    $this->language = isset($_SESSION['language']) ? $_SESSION['language'] : 'en';
    
    // সিলেক্ট করা ভাষার ডেটা লোড করা হচ্ছে
    $this->loadLanguageData();
  }

  /**
   * ক্লাসের ইনস্ট্যান্স পাওয়ার গ্লোবাল মেথড। 
   * যদি আগে থেকে ইনস্ট্যান্স তৈরি করা না থাকে, তবে নতুন করে তৈরি করবে। 
   * আর তৈরি করা থাকলে আগেরটিই রিটার্ন করবে।
   */
  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Language();
    }

    return self::$instance;
  }

  /**
   * ইউজারের ভাষা পরিবর্তন (Change Language) করার জন্য এই মেথড ব্যবহার করা হবে।
   * ভাষা পরিবর্তন করার সাথে সাথেই নতুন ভাষার ডেটা লোড করে নেবে।
   */
  public function setLanguage($language) {
    $this->language = $language;
    $this->loadLanguageData();
  }

  /**
   * বর্তমানে কোন ভাষাটি সিলেক্ট করা আছে, তা জানার জন্য এই মেথড।
   */
  public function getLanguage() {
    return $this->language;
  }

  /**
   * ভাষার ফাইল থেকে নির্দিষ্ট 'key' (যেমন: 'welcome_message') অনুযায়ী টেক্সট বা ভ্যালু বের করে আনার মেথড।
   * যদি নির্দিষ্ট key না পাওয়া যায়, তবে ফাঁকা স্ট্রিং ('') রিটার্ন করবে।
   */
  public function get($key) {
    return isset($this->data[$key]) ? $this->data[$key] : '';
  }

  /**
   * সিলেক্ট করা ভাষার ফাইলটি ফোল্ডার থেকে লোড করার প্রাইভেট মেথড।
   */
  private function loadLanguageData() {
    // ভাষার ফাইলের লোকেশন (যেমন: ../app/languages/bn.php)
    $file = "../app/languages/{$this->language}.php";

    // যদি ফাইলটি আসলেই ফোল্ডারে থাকে, তবে সেটি ইনক্লুড করে $data অ্যারেতে সেভ করবে
    if (file_exists($file)) {
      $this->data = include $file;
    } else {
      // ফাইল না পাওয়া গেলে ডেভেলপারকে একটি এরর (Exception) দেখাবে
      throw new Exception("Language file for '{$this->language}' not found.");
    }
  }
}

/**
 * গ্লোবাল হেল্পার ফাংশন (Global Helper Function)
 * এটি লারাভেলের (Laravel) মতো কাজ করে। ভিউ (View) ফাইলের যেকোনো জায়গা থেকে 
 * সহজেই ট্রান্সলেশন করার জন্য `__('key_name')` ব্যবহার করা যাবে।
 */
function __($key) {
  return Language::getInstance()->get($key);
}

?>