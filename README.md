# CoreXPHP 🚀

![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-blue.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)
![Architecture](https://img.shields.io/badge/Architecture-MVC-orange.svg)

**CoreXPHP** is a lightweight, elegant, and blazing-fast custom PHP framework inspired by modern architectures like Laravel. It is designed to give developers full control over their code while providing essential tools like a robust Routing System, Fluent ORM, Middleware Pipelines, and a powerful CLI tool out of the box.

---

## ✨ Features

* **🛣️ Smart Routing System:** Separate `web.php` and `api.php` routes with dynamic parameter support and automatic API prefixing.
* **🛡️ Onion Architecture Middleware:** Stack multiple middlewares effortlessly for robust security and request filtering.
* **💾 Fluent ORM (Base Model):** Chainable database queries (e.g., `User::where('status', 'active')->orderBy('id', 'DESC')->get()`).
* **🛠️ 'Craft' CLI Tool:** Built-in command-line interface to instantly generate Controllers, Models, and run Migrations.
* **🗄️ Database Migration Engine:** Version control your database schemas with intuitive `up()` and `down()` methods.
* **🔐 Secure Environment:** Full `.env` file support for managing sensitive configurations.
* **⚡ Front Controller Pattern:** All requests are efficiently channeled through a single `public/index.php` entry point.

---

## 📂 Directory Structure

```text
CoreXPHP/
├── app/
│   ├── controllers/      # Application logic
│   ├── core/             # Framework engine (App, Router, Request, Model, Database)
│   ├── middlewares/      # Security and request filters
│   ├── migrations/       # Database schema versions
│   ├── models/           # Data models (ORM)
│   ├── routes/           # web.php, api.php
│   └── init.php          # Configuration loader
├── config/
│   └── .env              # Environment variables
├── public/
│   ├── index.php         # Front Controller
│   └── .htaccess         # URL rewriting rules
├── vendor/               # Composer dependencies
├── craft                 # The CLI Executable
├── composer.json
└── README.md



# CoreXPHP-v2.0 Framework Upgrade Roadmap

This document outlines the 6 major features to be integrated into the CoreXPHP engine to achieve enterprise-grade performance, security, and communication.

---

## 1. Database Transactions
**Purpose:** Ensures data integrity by treating multiple SQL operations as a single unit. (All-or-nothing approach).
- **Target Class:** `QueryBuilder.php` or `Database.php`
- **Functions to Implement:**
    - `beginTransaction()`: Starts the manual transaction mode.
    - `commit()`: Saves all changes made during the transaction.
    - `rollBack()`: Undoes all changes if an error occurs.

---

## 2. Relationship Eager Loading (`with`)
**Purpose:** Solves the N+1 query problem by fetching related data in a single query instead of multiple loops.
- **Target Class:** `QueryBuilder.php`
- **Functions to Implement:**
    - `with($relations)`: Sets the relations to be eager-loaded.
    - `loadRelation($results, $relation)`: Internal logic to map related data to the primary models.
- **Update Required:** `get()` method to check for eager-loading requests before returning results.

---

## 3. Query Caching
**Purpose:** Improves response time by storing expensive database results in temporary storage (File/Redis).
- **Target Class:** `QueryBuilder.php`
- **Functions to Implement:**
    - `remember(int $seconds)`: Sets the TTL (Time-To-Live) for the query cache.
    - `generateCacheKey()`: Generates a unique MD5 hash based on the SQL and its bindings.
- **Update Required:** `get()` method to check for a valid cache file before hitting the database.

---

## 4. CSRF Protection
**Purpose:** Protects web forms from Cross-Site Request Forgery attacks.
- **Target Class:** `Request.php` & `Session.php`
- **Functions to Implement:**
    - `generateCsrfToken()`: Creates and stores a token in the user session.
    - `csrfToken()`: Helper to output the hidden input field in HTML views.
    - `validateCsrfToken()`: Middleware-level check to verify the incoming token against the session.

---

## 5. Role-Based Access Control (RBAC)
**Purpose:** Manages user permissions and access levels (Admin, Vendor, Customer).
- **Target Class:** `UserModel.php` & `Middleware`
- **Functions to Implement:**
    - `hasRole($role)`: Checks if the user belongs to a specific group.
    - `can($permission)`: Checks if the user is authorized for a specific action (e.g., `edit_product`).
    - `assignRole($role)`: Helper to update user roles.

---

## 6. Mail & Notification Engine
**Purpose:** Handles outgoing communications like order confirmations and password resets.
- **Target Class:** `Mail.php` (New Core Class)
- **Functions to Implement:**
    - `to($email)`: Sets the recipient address.
    - `subject($title)`: Sets the email subject.
    - `view($template, $data)`: Renders an HTML template for the email body.
    - `send()`: Executes the mailing process (using SMTP or PHP mail).

---

## 🚀 Summary Table for Developers

| Feature | Primary File | Core Methods |
| :--- | :--- | :--- |
| **Transactions** | `QueryBuilder` | `beginTransaction`, `commit`, `rollBack` |
| **Eager Loading** | `QueryBuilder` | `with`, `loadRelation` |
| **Query Caching** | `QueryBuilder` | `remember`, `get` (update) |
| **CSRF** | `Request` | `csrfToken`, `validateCsrfToken` |
| **RBAC** | `UserModel` | `hasRole`, `can` |
| **Mail Engine** | `Mail` | `to`, `subject`, `view`, `send` |
