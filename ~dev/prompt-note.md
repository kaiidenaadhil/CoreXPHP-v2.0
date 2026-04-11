## 🚀 CoreXPHP Framework — Memory Snapshot

---

### ⚙️ Foundation Layer

* `composer.json` *(with firebase/php-jwt)*
* `init.php`
* `public/index.php`

---

### 🌐 HTTP Engine

* `Request.php`
* `Response.php`
* `Router.php` *(dual-purpose, closure argument fix applied)*

---

### 🧠 Core Application Layer

* `App.php`
* `Controller.php`
* `MiddlewareInterface.php`

---

### 🗄️ Database Layer

* `Database.php` *(Singleton)*
* `QueryBuilder.php` *(secure queries)*
* `Model.php` *(API hidden fields supported)*

---

### 🛠️ Utility & Support

* `View.php`
* `Service.php`
* `Validator.php` *(file upload support)*
* `Paginator.php`
* `Logger.php`
* `Session.php`
* `Language.php`
* `Function.php` *(global helpers)*



## 🗂️ CoreXPHP — Project Structure

---

### 📁 Root Directory

```
corexphp/
```

---

### 🧠 app/ — Application Layer

```
app/
├── controllers/      # Handles requests (AuthController, ProductControllerAPI)
├── core/             # ⚙️ Framework Engine (App, Router, Request, Model, View, etc.)
├── languages/        # Translation files (en.php, bn.php, es.php)
├── logs/             # System logs (error.log, query.log)
├── middlewares/      # Request filters (SessionAuthMiddleware, TokenAuthMiddlewareAPI)
├── models/           # Database layer (User, Product, Order)
├── routes/           # Route definitions
│   ├── api.php       # Stateless API routes (JSON)
│   └── web.php       # Stateful Web routes (HTML/Sessions)
├── services/         # Business logic (MailService, PaymentService)
└── views/            # 🎨 UI Templates
    └── default/      # Theme system
        ├── @errors/  # Error pages (404.php, 500.php)
        ├── @layout/  # Layouts (layout.php, adminLayout.php)
        └── home/     # View modules (index.php)
```

---

### ⚙️ config/ — Configuration

```
config/
└── .env              # Environment variables (DB, API keys)
```

---

### 🌍 public/ — Web Root

```
public/
├── assets/
│   ├── css/          # Stylesheets
│   ├── js/           # JavaScript
│   └── uploads/      # User uploads
├── .htaccess         # Rewrite rules
└── index.php         # 🚪 Front Controller (entry point)
```

---

### 📦 vendor/ — Dependencies

```
vendor/               # Composer auto-generated packages
```

---

### 🧩 Root Files

```
app.php               # CLI / cron entry (optional)
composer.json         # Dependency & autoload config
init.php              # Bootstrap (constants, env setup)
```
