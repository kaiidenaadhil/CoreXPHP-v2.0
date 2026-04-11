<?php

/**
 * ক্লাস Router
 *
 * এটি ফ্রেমওয়ার্কের মূল রাউটিং ইঞ্জিন। 
 * এটি সাধারণ 라উট, ডায়নামিক প্যারামিটার, ওয়াইল্ডকার্ড, 
 * এবং CRUD অপারেশন চালানোর জন্য Resource রাউট সাপোর্ট করে।
 */
class Router
{
    public Request $request;
    public Response $response;
    
    protected array $routes = [];
    protected string $currentGroupPrefix = '';
    protected array $currentGroupMiddlewares = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * রাউট গ্রুপ করা (যেমন: /api প্রিফিক্স এবং মিডলওয়্যার যুক্ত করা)
     */
    public function group(string $prefix, array $middlewares, callable $callback)
    {
        $prevPrefix = $this->currentGroupPrefix;
        $prevMiddlewares = $this->currentGroupMiddlewares;

        $this->currentGroupPrefix = $prevPrefix . $prefix;
        $this->currentGroupMiddlewares = array_merge($prevMiddlewares, $middlewares);

        call_user_func($callback, $this);

        $this->currentGroupPrefix = $prevPrefix;
        $this->currentGroupMiddlewares = $prevMiddlewares;
    }

    /**
     * রাউট সেভ করা
     */
    protected function addRoute($method, $path, $callback, $middlewares = [])
    {
        $fullPath = $this->currentGroupPrefix . '/' . trim($path, '/');
        $fullPath = ($fullPath === '/') ? '/' : rtrim($fullPath, '/');
        
        $this->routes[strtolower($method)][$fullPath] = [
            'callback' => $callback,
            'middlewares' => array_merge($this->currentGroupMiddlewares, $middlewares)
        ];
    }

    public function get($path, $callback, $middlewares = []) { $this->addRoute('get', $path, $callback, $middlewares); }
    public function post($path, $callback, $middlewares = []) { $this->addRoute('post', $path, $callback, $middlewares); }
    public function put($path, $callback, $middlewares = []) { $this->addRoute('put', $path, $callback, $middlewares); }
    public function delete($path, $callback, $middlewares = []) { $this->addRoute('delete', $path, $callback, $middlewares); }
    // Router.php এর ভেতর এই লাইনগুলো নিশ্চিত করুন:
    public function patch($path, $callback, $middlewares = []) { $this->addRoute('patch', $path, $callback, $middlewares); }
    public function options($path, $callback, $middlewares = []) { $this->addRoute('options', $path, $callback, $middlewares); }
    /**
     * রিসোর্স (Resource) রাউট।
     * এটি দিয়ে স্বয়ংক্রিয়ভাবে একটি কন্ট্রোলারের জন্য ৭টি CRUD রাউট তৈরি করা যায়।
     * * @param string $name রাউটের প্রিফিক্স (যেমন: 'products')
     * @param string $paramName ডায়নামিক প্যারামিটারের নাম (যেমন: 'product')
     * @param string $controller কন্ট্রোলার ক্লাসের নাম
     */
    public function resource(string $name, string $paramName, $controller, array $middlewares = [])
    {
        // নামগুলো থেকে এক্সট্রা স্ল্যাশ বাদ দেওয়া
        $name = trim($name, '/');
        
        $this->get("/{$name}", [$controller, 'index'], $middlewares);                // সব ডেটা দেখার জন্য
        $this->get("/{$name}/create", [$controller, 'create'], $middlewares);        // ফর্ম পেজ দেখানোর জন্য
        $this->post("/{$name}", [$controller, 'store'], $middlewares);               // নতুন ডেটা সেভ করার জন্য
        $this->get("/{$name}/{" . $paramName . "}", [$controller, 'show'], $middlewares);   // নির্দিষ্ট একটি ডেটা দেখার জন্য
        $this->get("/{$name}/{" . $paramName . "}/edit", [$controller, 'edit'], $middlewares); // এডিট ফর্ম দেখানোর জন্য
        $this->put("/{$name}/{" . $paramName . "}", [$controller, 'update'], $middlewares);    // ডেটা আপডেট করার জন্য
        $this->delete("/{$name}/{" . $paramName . "}", [$controller, 'destroy'], $middlewares); // ডেটা ডিলিট করার জন্য
    }

/**
     * URL এর সাথে রাউট মিলিয়ে নির্দিষ্ট ফাংশন রান করা
     */
    public function resolve()
    {
        $path = rtrim($this->request->getPath(), '/');
        $path = $path === '' ? '/' : $path;
        $method = $this->request->method();

        if (!isset($this->routes[$method])) return $this->handleError(404);

        foreach ($this->routes[$method] as $routePath => $routeInfo) {
            
            // ডায়নামিক প্যারামিটার (যেমন: {id}, @{username}, ~{collectionId}) ডিটেক্ট করার জন্য Regex
            $pattern = '#^' . preg_replace('/\{(.*?)\}/', '([^/]+)', $routePath) . '$#';

            if (preg_match($pattern, $path, $matches)) {
                array_shift($matches); // সম্পূর্ণ ম্যাচটি বাদ দেওয়া
                
                $middlewares = $routeInfo['middlewares'];
                $callback = $routeInfo['callback'];

                $next = function ($request) use ($callback, $matches) {
                    // যদি কন্ট্রোলার হয় (যেমন: [UserController::class, 'show'])
                    if (is_array($callback)) {
                        $controllerName = $callback[0];
                        $controller = new $controllerName();
                        return $this->invokeControllerMethod($controller, $callback[1], $matches);
                    }
                    
                    // যদি শুধু স্ট্রিং হয় (যেমন: 'about' ভিউ ফাইল)
                    if (is_string($callback)) {
                        return App::$view->render($callback, $matches);
                    }
                    
                    // যদি ক্লৌজার (Closure / Function) হয়
                    $args = array_merge([$this->request, $this->response], $matches);
                    return call_user_func_array($callback, $args);
                };

                // মিডলওয়্যার রান করানো (রিভার্স অর্ডারে র‍্যাপ করার জন্য array_reverse ব্যবহার করা হলো)
                $middlewares = array_reverse($middlewares);
                while ($mwClass = array_shift($middlewares)) {
                    $mwInstance = new $mwClass();
                    $next = function ($req) use ($mwInstance, $next) {
                        return $mwInstance->handle($req, $next);
                    };
                }
                return $next($this->request);
            }
        }
        
        return $this->handleError(404);
    }

    /**
     * 404 এরর হ্যান্ডলার
     */
    protected function handleError($code)
    {
        $this->response->setStatusCode($code);
        $isApi = strpos($this->request->getPath(), '/api') === 0;
        
        if ($isApi) return $this->response->json(['error' => 'Endpoint Not Found'], $code);
        
        $errorView = ROOT . "/app/views/" . THEME . "/@errors/{$code}.php";
        file_exists($errorView) ? include $errorView : print("<h1>Error $code - Not Found</h1>");
        return null;
    }

    /**
     * রিফ্লেকশন এপিআই (Reflection API) দিয়ে মেথড কল করা
     */
    private function invokeControllerMethod($controller, $method, $matches)
    {
        $reflection = new ReflectionMethod($controller, $method);
        $args = [];
        
        foreach ($reflection->getParameters() as $param) {
            $type = $param->getType();
            if ($type && !$type->isBuiltin()) {
                $class = $type->getName();
                if ($class === Request::class) $args[] = $this->request;
                elseif ($class === Response::class) $args[] = $this->response;
                else $args[] = array_shift($matches);
            } else {
                $args[] = array_shift($matches);
            }
        }
        return $reflection->invokeArgs($controller, $args);
    }
}