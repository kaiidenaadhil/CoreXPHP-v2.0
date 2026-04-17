<?php

/**
 * Class Controller (Base Controller)
 * * ফ্রেমওয়ার্কের সব কন্ট্রোলার এই ক্লাসটিকে extend করবে।
 */
class Controller
{  
    // গ্লোবাল সার্ভিস কল করার জন্য
    protected function getService($name)
    {
        return App::$service->get($name);
    }

    // রেগুলার ওয়েব পেজ রেন্ডার (হেডার ও ফুটার সহ)
    public function view($view, $params = [])
    {
        echo App::$view->render($view, $params);
    }

    // শুধু নির্দিষ্ট ভিউ রেন্ডার (লগইন বা পপআপ পেজের জন্য)
    public function onlyView($view, $params = [])
    {
        echo App::$view->renderOnlyView($view, $params);
    }

    // অ্যাডমিন প্যানেলের পেজ রেন্ডার
    public function adminView($view, $params = [])
    {
        echo App::$view->renderAdmin($view, $params);
    }

    // এপিআই (API) রেসপন্স পাঠানোর জন্য নতুন হেল্পার মেথড
    public function json($data, $status = 200)
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    // ম্যানুয়ালি মডেল লোড করার মেথড
    public function model($model)
    {
        // ROOT_DIR ব্যবহার করে অ্যাবসলুট (Absolute) পাথ দেওয়া হলো
        $modelPath = "../app/models/" . $model . ".php";
        if (file_exists($modelPath))
        {
            require_once $modelPath;
            return new $model();
        }
        throw new Exception("Model {$model} not found.");
    }
}