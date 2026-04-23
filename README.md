<p align="center">
  <img src="https://empowro.com/~dev/assets/img/logo.svg" alt="CoreXPHP Logo" width="350">
</p>

<p align="center">
  <strong>The zero-overhead PHP framework engineered for speed and scale.</strong>
</p>

<p align="center">
  <a href="https://packagist.org/packages/kaiidenaadhil/corexphp"><img src="https://img.shields.io/packagist/v/kaiidenaadhil/corexphp?color=00DC82&style=for-the-badge" alt="Latest Version on Packagist"></a>
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-%3E%3D%208.0-777BB4.svg?style=for-the-badge&logo=php" alt="PHP Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-10B981.svg?style=for-the-badge" alt="License"></a>
</p>

---

> <strong><span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span></strong> is a revolutionary, zero-overhead PHP framework that eliminates configuration fatigue through intelligent schema detection and autonomous auto-wiring. Built from the ground up for absolute performance, it achieves sub-millisecond execution times while maintaining a strict, enterprise-grade MVC architecture.

Unlike traditional frameworks that rely on deep, memory-heavy namespace nesting, <strong><span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span></strong> utilizes direct Composer Classmap autoloading and runtime reflection. It is natively dual-purpose—perfect for serving Server-Side Rendered (SSR) web portals or stateless JSON APIs for modern JavaScript frontends (React/Vue).

## ✨ Key Features

* **0ms Overhead:** Bypasses massive PSR-4 nesting arrays for direct Classmap autoloading.
* **Cognitive ORM:** Automatic `SHOW COLUMNS` schema detection. No `$fillable` or `$guarded` arrays required.
* **Smart Auto-Wiring:** The Router automatically injects dependencies (`Request`, `Response`) via the PHP Reflection API.
* **Data Pipelines:** Native CSV bulk import/export built directly into the Model layer.
* **MERN-Style API Errors:** Automatically intercepts API routes to prevent HTML stack traces, returning standardized JSON error contracts instead.
* **Airtight Security:** 100% SQL Injection immunity via automated PDO bindings, strict mass-assignment protection, and built-in Session Fixation prevention.

---

## 📦 Quick Start

<strong><span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span></strong> is incredibly lightweight. You can scaffold a completely functional, secure web application in seconds.



### Installation

Use Composer to create a new <strong><span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span></strong> project:

```bash
composer create-project kaiidenaadhil/corexphp my-app



# 📚 **<span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span>** Mini-Documentation

This guide covers the core essentials to get you building APIs and web applications at lightning speed.

---

## 1. Getting Started

### Installation
Scaffold a new project using Composer:
```bash
composer create-project kaiidenaadhil/corexphp my-app
cd my-app
php -S localhost:8000 -t public/
```

### Directory Structure
```text
CoreXPHP/
├── app/
│   ├── controllers/  # Business logic
│   ├── middlewares/  # HTTP request filters
│   ├── models/       # Cognitive ORM Models
│   ├── routes/       # web.php & api.php
│   ├── services/     # Auto-injected services
│   └── init.php      # Environment configuration
├── config/
│   └── .env          # Environment variables
└── public/
    └── index.php     # Front Controller
```

---

## 2. Routing

Routes translate incoming HTTP requests into executable code. Define your routes in `app/routes/web.php` or `app/routes/api.php` (API routes are automatically prefixed with `/api`).

### Basic Routes & Auto-Wiring
The router automatically captures dynamic parameters `{id}` and injects the `Request` object.
```php
// Route Definition
$router->get('/users/{id}', [UserController::class, 'show']);
```

### Resource Routing
Generate 7 standard CRUD endpoints in a single line:
```php
// Generates: index, create, store, show, edit, update, destroy
$router->resource('products', 'product_id', ProductController::class);
```

### Route Groups & Middleware
Group routes to share prefixes and middleware pipelines:
```php
$router->group('/admin', [AuthMiddleware::class], function() use ($router) {
    $router->get('/dashboard', [AdminController::class, 'dashboard']);
});
```

---

## 3. Controllers & Services

Controllers handle the incoming request, interact with models or services, and return a response.

### JSON Responses & Auto-Discovery
Extend the base `Controller` to access helpful rendering methods. The framework automatically discovers and loads classes from the `app/services/` directory.
```php
class UserController extends Controller {
    
    public function show(Request $request, $id) {
        $user = User::find($id);
        
        // Load a service automatically from app/services/MailService.php
        $mailer = $this->getService('mail');
        $mailer->sendWelcome($user->email);
        
        // strict JSON output, exits immediately
        return $this->json($user, 200); 
    }
}
```

---

## 4. The Cognitive ORM

**<span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span>** dynamically detects your database schema. There is no need to manually define `$fillable` arrays.

### Defining a Model
```php
class Product extends Model {
    // Automatically maps to the 'products' table.
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
```

### Query Builder
The query builder prevents SQL injection automatically using PDO bindings.
```php
$activeProducts = Product::where('status', 'active')
    ->whereNotNull('price')
    ->search('box', ['name', 'description'])
    ->orderBy('created_at', 'DESC')
    ->get();
```

### Pagination
```php
// Automatically calculates offsets based on $_GET['page']
$response = Product::where('stock', '>', 0)->paginate(20);
return $this->json($response);
```

---

## 5. Security & Validation

Never trust user input. Use the `Validator` engine to sanitize incoming data before it hits your database.

### Pipe-Syntax Validation
```php
public function store(Request $request) {
    $v = new Validator();
    
    $v->rules([
        'name'  => 'required|max:100',
        'email' => 'required|email',
        'price' => 'nullable|numeric'
    ])->validate($request->getBody());

    if ($v->fails()) {
        return $this->json(['errors' => $v->errors()], 422);
    }

    // CRITICAL: validated() prevents Mass Assignment attacks
    $product = Product::create($v->validated());

    return $this->json($product, 201);
}
```

---

## 6. Error Handling

If a fatal error or exception occurs, the framework intercepts it. 
* **Web Routes:** Displays a safe error page or logs the trace (based on `APP_DEBUG`).
* **API Routes:** If the route begins with `/api`, it suppresses HTML stack traces and returns a clean, MERN-style JSON error contract to prevent frontend crashes. All crashes are logged securely in `app/logs/error.log`.

