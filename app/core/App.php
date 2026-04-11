<?php

/**
 * ক্লাস App
 * * এটি CoreXPHP ফ্রেমওয়ার্কের মূল (Central) ক্লাস বা ব্রেইন।
 * এই ক্লাসটি ফ্রেমওয়ার্কের সব গুরুত্বপূর্ণ জিনিসগুলো (Database, Router, Views, Logs, Services) চালু করে,
 * রাউটগুলো লোড করে এবং যেকোনো এরর (Error) বা ক্র্যাশ সামলায়।
 */
class App {
    // গ্লোবাল স্ট্যাটিক ভেরিয়েবল, যাতে যেকোনো জায়গা থেকে App::$app কল করে অ্যাপটি পাওয়া যায়
    public static App $app; 
    
    // প্রজেক্টের মেইন ফোল্ডারের (Root) ডিরেক্টরি পাথ
    public static string $ROOT_DIRECTORY;
    
    // ফ্রেমওয়ার্কের অন্যান্য গ্লোবাল সার্ভিসগুলো
    public static View $view;
    public static Logger $logger;
    public static Service $service; 

    // কোর (Core) অবজেক্টগুলো
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    
    // যেসব মিডলওয়্যার (Middleware) সব রাউটে চলবে, সেগুলোর লিস্ট
    protected array $globalMiddleware = [];

    /**
     * কনস্ট্রাক্টর: ফ্রেমওয়ার্ক চালু করার সময় এটি কল হয়।
     * @param string $rootPath সার্ভারে প্রজেক্টের রুট পাথ
     */
    public function __construct($rootPath) {
        self::$app = $this;
        self::$ROOT_DIRECTORY = $rootPath;

        // ১. HTTP ইঞ্জিন (Request, Response, Router) চালু করা
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        
        // ২. ডেটাবেস ইঞ্জিন চালু করা (Singleton প্যাটার্ন)
        $this->db = Database::getInstance();

        // ৩. ইউটিলিটি সার্ভিসগুলো চালু করা (View, Logger, Service Container)
        self::$view = new View(THEME);
        self::$logger = new Logger(self::$ROOT_DIRECTORY . '/app/logs/error.log');
        self::$service = new Service(self::$ROOT_DIRECTORY . '/app/services/');

        // ৪. কাস্টম এরর হ্যান্ডলিং সেট করা (যাতে ডিফল্ট পিএইচপি এররের বদলে আমাদের ফরম্যাটে এরর দেখায়)
        set_exception_handler([$this, 'handleException']);
        set_error_handler([$this, 'handleError']);
    }

    /**
     * গ্লোবাল মিডলওয়্যার যুক্ত করার মেথড। 
     * এটি ওয়েব এবং এপিআই সব রিকোয়েস্টেই কাজ করবে (যেমন: CORS)।
     */
    public function use($middlewareClass) {
        if (class_exists($middlewareClass)) {
            $this->globalMiddleware[] = new $middlewareClass();
        }
    }

    /**
     * ব্রাউজারের ওয়েব রাউটগুলো (web.php) লোড করার জন্য।
     */
    public function loadWebRoutes($file) {
        $app = $this; // $app ভেরিয়েবলটি রাউট ফাইলের ভেতরে পাঠানোর জন্য
        $this->router->group('', [], function() use ($file, $app) {
            require_once $file;
        });
    }

    /**
     * এপিআই (API) রাউটগুলো (api.php) লোড করার জন্য।
     * এটি স্বয়ংক্রিয়ভাবে সব রাউটের শুরুতে '/api' যুক্ত করে দেয়।
     */
    public function loadApiRoutes($file) {
        $app = $this; // $app ভেরিয়েবলটি রাউট ফাইলের ভেতরে পাঠানোর জন্য
        $this->router->group('/api', [], function() use ($file, $app) {
            require_once $file;
        });
    }

    /**
     * ফ্রেমওয়ার্ক রান (Run) করার মূল মেথড।
     * এটি index.php থেকে কল করা হয়।
     */
    public function run() {
        // প্রথমে গ্লোবাল মিডলওয়্যারগুলো চালানো
        foreach ($this->globalMiddleware as $middleware) {
            $middleware->handle($this->request, $this->response);
        }

        try {
            // রাউটার থেকে সঠিক আউটপুট বের করে প্রিন্ট করা
            echo $this->router->resolve();
        } catch (Exception $e) {
            // যদি কোডের কোথাও ক্র্যাশ করে, তবে সেটি এখানে ধরা পড়বে
            $this->handleException($e);
        }
    }

    /**
     * গ্লোবাল এক্সেপশন (Error) হ্যান্ডলার।
     * এপিআই রিকোয়েস্ট হলে এটি JSON পাঠাবে, আর ওয়েব রিকোয়েস্ট হলে HTML পেজ দেখাবে।
     */
    public function handleException($e) {
        // লগ ফাইলে এররটি লিখে রাখা
        self::$logger->logError($e);
        
        // স্ট্যাটাস কোড সেট করা (যদি 400 বা 500 এর কিছু না হয়, তবে ডিফল্ট 500)
        $code = is_numeric($e->getCode()) && $e->getCode() >= 400 ? $e->getCode() : 500;
        http_response_code($code);

        // রিকোয়েস্টটি এপিআই (API) কি না তা চেক করা
        $isApi = strpos($this->request->getPath(), '/api') === 0;

        if ($isApi) {
            return $this->response->json([
                'success' => false,
                'error' => defined('APP_DEBUG') && APP_DEBUG ? $e->getMessage() : 'Server Error',
                'trace' => defined('APP_DEBUG') && APP_DEBUG ? $e->getTrace() : []
            ], $code);
        }

        // ওয়েব রিকোয়েস্টের জন্য 500.php পেজটি দেখানো
        $errorView = self::$ROOT_DIRECTORY . "/app/views/" . THEME . "/@errors/500.php";
        file_exists($errorView) ? include $errorView : print("<h1>Server Error</h1>");
        exit;
    }

    /**
     * সাধারণ পিএইচপি এরর (Warning/Notice) গুলোকে এক্সেপশনে রূপান্তর করে,
     * যাতে সেগুলোও handleException() এর মাধ্যমে হ্যান্ডেল করা যায়।
     */
    public function handleError($errno, $errstr, $errfile, $errline) {
        $this->handleException(new ErrorException($errstr, $errno, 0, $errfile, $errline));
    }

    /**
     * ম্যাজিক মেথড: সার্ভিসের নাম ধরে সরাসরি কল করার জন্য।
     * যেমন: $app->mail লিখলেই মেইল সার্ভিস পাওয়া যাবে।
     */
    public function __get($name) {
        return self::$service->get($name);
    }
}