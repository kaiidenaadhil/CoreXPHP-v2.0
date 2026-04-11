<?php

/**
 * ক্লাস View
 * * এটি ফ্রেমওয়ার্কের অ্যাডভান্সড টেমপ্লেট ইঞ্জিন।
 * এটি মাস্টার লেআউট (Layout) সাপোর্ট করে। অর্থাৎ, আপনি একটি সাধারণ layout.php 
 * তৈরি করে সেখানে {{content}} ট্যাগ ব্যবহার করতে পারেন, আর এই ক্লাসটি 
 * স্বয়ংক্রিয়ভাবে সেই ট্যাগের জায়গায় আপনার নির্দিষ্ট পেজের ডিজাইন বসিয়ে দেবে।
 */
class View
{
    /**
     * মূল রেন্ডার মেথড। এটি লেআউট এবং ভিউ—দুটোকেই একসাথে রেন্ডার করে।
     * * @param string $view ভিউ ফাইলের নাম
     * @param array $params ভিউতে পাঠানোর জন্য ডেটা
     * @param bool $isAdmin এটি অ্যাডমিন প্যানেলের ভিউ কি না
     */
    public function render($view, $params = [], $isAdmin = false)
    {
        // App থেকে রিকোয়েস্ট অবজেক্টটি নেওয়া হচ্ছে
        $request = App::$app->request ?? null;

        // যদি মিডলওয়্যার থেকে কোনো লোকাল ডেটা (যেমন: Auth User ID) সেট করা থাকে, 
        // তবে সেগুলোকে $params এর সাথে যুক্ত করে দেওয়া হচ্ছে।
        if ($request && method_exists($request, 'allLocals')) {
            $params = array_merge($request->allLocals(), $params);
        }

        // ১. শুধুমাত্র নির্দিষ্ট পেজের (View) HTML টুকু প্রসেস করা
        $viewContent = $this->renderView($view, $params);
        
        // ২. মাস্টার লেআউটের ভেতরে পেজের HTML বসিয়ে সম্পূর্ণ আউটপুট রিটার্ন করা
        return $this->renderLayout($viewContent, $isAdmin, $params);
    }

    /**
     * লেআউট ছাড়া শুধুমাত্র ভিউ ফাইলটি রেন্ডার করার জন্য (যেমন: AJAX রিকোয়েস্টের জন্য)।
     */
    public function renderOnlyView($view, $params = [])
    {
        return $this->renderView($view, $params);
    }

    /**
     * ইন্টারনাল মেথড: নির্দিষ্ট ভিউ ফাইলটি খুঁজে বের করা এবং ডেটা ইনজেক্ট করা।
     */
    protected function renderView($view, $params = [])
    {
        $viewPath = App::$ROOT_DIRECTORY . "/app/views/" . THEME . "/{$view}.php";

        if (!file_exists($viewPath)) {
            throw new Exception("View '{$view}' not found at path: {$viewPath}");
        }

        extract($params); // অ্যারে থেকে ভেরিয়েবল তৈরি করা (যেমন: $name)
        
        ob_start(); // আউটপুট বাফারিং শুরু
        include $viewPath;
        return ob_get_clean(); // বাফার থেকে HTML নিয়ে রিটার্ন করা
    }

    /**
     * ইন্টারনাল মেথড: মাস্টার লেআউট প্রসেস করা এবং {{content}} রিপ্লেস করা।
     */
    protected function renderLayout($content, $isAdmin, $params = [])
    {
        extract($params); // লেআউট ফাইলে (যেমন হেডারে) $user বা $title পাঠানোর জন্য

        // অ্যাডমিন হলে adminLayout, না হলে সাধারণ layout
        $layout = $isAdmin ? 'adminLayout' : 'layout';
        $layoutPath = App::$ROOT_DIRECTORY . "/app/views/" . THEME . "/@layout/{$layout}.php";

        if (!file_exists($layoutPath)) {
            throw new Exception("Layout not found at path: {$layoutPath}");
        }

        ob_start();
        include $layoutPath;
        $layoutHtml = ob_get_clean();

        // লেআউটের ভেতরের {{content}} লেখাটি সরিয়ে সেখানে আমাদের মূল ভিউ বসিয়ে দেওয়া
        return str_replace('{{content}}', $content, $layoutHtml);
    }

    /**
     * অ্যাডমিন প্যানেলের ভিউ রেন্ডার করার জন্য হেল্পার মেথড।
     */
    public function renderAdmin($view, $params = [])
    {
        return $this->render($view, $params, true);
    }
}