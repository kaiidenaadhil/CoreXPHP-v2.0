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
