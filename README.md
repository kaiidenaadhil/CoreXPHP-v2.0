<p align="center">
  <img src="https://empowro.com/~dev/assets/img/logo.svg" alt="CoreXPHP Logo" width="350">
</p>

<p align="center">
  <h1 align="center">⚡ <strong><span style="color: #3B82F6;">CoreX</span><span style="color: #A1A5B7;">PHP</span></strong></h1>
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
