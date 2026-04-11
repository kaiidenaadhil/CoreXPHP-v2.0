<?php
function validateLicense($licenseKey) {
    if (!$licenseKey) return false;

    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $domain = explode(':', $host)[0];
    $url = "http://license.avantvista.com/validate.php?key=$licenseKey&domain=$domain";

    $response = @file_get_contents($url);
    if (!$response) return false;

    $result = json_decode($response, true);
    return isset($result['valid']) && $result['valid'] === true;
}

if (!validateLicense(APP_LICENSE_KEY)) {
    $errorFile = __DIR__ . '/../views/' . THEME . '/@errors/licenseError.php';
    if (file_exists($errorFile)) {
        include $errorFile;
        exit;
    } else {
        die('<h1>License Error</h1><p>Domain unauthorized. Validate license to continue.</p><p>Contact: <a href="mailto:support@avantvista.com">support@avantvista.com</a></p><p>Error: <code>LIC-403</code></p>');
    }
}


class App {
    public static App $app; 
    public static string $ROOT_DIRECTORY;
    public static View $view;
    public static Logger $logger;
    public static Session $session;
    public static Service $service; // Service Manager

    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    protected array $globalMiddleware = [];

    public function __construct($rootPath) {
         self::$app = $this;
        self::$ROOT_DIRECTORY = $rootPath;

        // Initialize core components
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database();

        $logPath = self::$ROOT_DIRECTORY . '/app/logs/error.log';
        self::$view = new View(THEME);
        self::$logger = new Logger($logPath);
        self::$session = new Session();

        // Initialize the Service Manager
        self::$service = new Service(self::$ROOT_DIRECTORY . '/app/services/');

        // Register global exception and error handlers
        set_exception_handler([$this, 'handleException']);
        set_error_handler([$this, 'handleError']);
    }

    public function use($middlewareClass) {
        $middlewareFile = self::$ROOT_DIRECTORY . "/app/middlewares/{$middlewareClass}.php";
        if (file_exists($middlewareFile)) {
            require_once $middlewareFile;
            if (class_exists($middlewareClass)) {
                $this->globalMiddleware[] = new $middlewareClass;
            } else {
                throw new Exception("Middleware class {$middlewareClass} not found in {$middlewareFile}.");
            }
        } else {
            throw new Exception("Middleware file {$middlewareFile} not found.");
        }
    }

    public function run() {
        foreach ($this->globalMiddleware as $middleware) {
            $middleware->handle($this->request, $this->response);
        }

        try {
            echo $this->router->resolve();
        } catch (Exception $exception) {
            $this->handleException($exception);
        }
    }

    public function handleException($exception) {
        // Log the exception using your Logger class
        self::$logger->logError($exception);

        // Render a custom 500 error page
        http_response_code(500);
        $this->renderErrorPage(500);
    }

    public function handleError($errno, $errstr, $errfile, $errline) {
        // Convert errors to exceptions and handle them
        $this->handleException(new ErrorException($errstr, $errno, 0, $errfile, $errline));
    }

    protected function renderErrorPage($errorCode) {
        $errorView = self::$ROOT_DIRECTORY . "/app/views/" . THEME . "/@errors/{$errorCode}.php";

        if (file_exists($errorView)) {
            include $errorView;
        } else {
            echo "<h1>Error {$errorCode}</h1>";
            echo "<p>Something went wrong. Please try again later.</p>";
        }
    }

    // Magic method to dynamically access registered services
    public function __get($name) {
        return self::$service->get($name);
    }
}
