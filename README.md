<p align="center">
  <h1 align="center">
    <img src="https://raw.githubusercontent.com/yourusername/corexphp-art/main/logo.svg" alt="CoreXPHP" width="40" height="40" style="vertical-align: middle; margin-right: 8px;" />
    ⚡ CoreXPHP
  </h1>
  <p align="center">
    <strong>Zero‑overhead. Intelligent. Built for speed and brutal scale.</strong><br>
    <sub>Sub‑millisecond execution · Autonomous ORM · MERN‑style API contracts</sub>
  </p>
</p>

<p align="center">
  <a href="https://packagist.org/packages/kaiidenaadhil/corexphp"><img src="https://img.shields.io/packagist/v/kaiidenaadhil/corexphp?color=%2300DC82&style=flat-square" alt="Latest Version"></a>
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-%3E%3D%208.0-777BB4?style=flat-square&logo=php" alt="PHP Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-%236366F1?style=flat-square" alt="License"></a>
  <a href="#"><img src="https://img.shields.io/badge/overhead-0ms-%2300DC82?style=flat-square" alt="Zero Overhead"></a>
</p>

<br>

<!-- COLOR PALETTE BADGE (matching the diagram) -->
<p align="center">
  <img src="https://img.shields.io/badge/Request_Flow-00DC82?style=for-the-badge&logo=nginx&logoColor=white" />
  <img src="https://img.shields.io/badge/Middleware_&_Services-6366F1?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/Error_&_Logs-EF4444?style=for-the-badge&logo=sentry&logoColor=white" />
  <img src="https://img.shields.io/badge/Data_Flow-3D4358?style=for-the-badge&logo=databricks&logoColor=white" />
</p>

---

## 🧬 Architecture at a Glance

<p align="center">
  <!-- Embedded animated SVG – exactly the diagram you love -->
  <img src="./docs/assets/corexphp-architecture.svg" width="100%" alt="CoreXPHP Animated Architecture" />
  <br>
  <sub><i>Request → Router → Middleware → Controller → (ORM + Services) → Response</i></sub>
</p>

<details>
  <summary>📐 Click to expand – full architecture description</summary>
  
  ### Request Lifecycle (GitHub/CodePen‑inspired palette)
  
  | Phase | Component | Colour | Responsibility |
  |-------|-----------|--------|----------------|
  | **1** | `HTTP Request` | `#00DC82` | Payload & headers validation |
  | **2** | `Router Engine` | `#00DC82` | Regex matching + reflection‑based auto‑wiring |
  | **3** | `Middleware` | `#6366F1` | Auth, CSRF, session state |
  | **4** | `Controller` | `#00DC82` | Business logic orchestration |
  | **5** | `Active Record` | `#00DC82` | Cognitive ORM (no `$fillable`) |
  | **5a**| `Service Locator` | `#6366F1` | Auto‑discovery of dependencies |
  | **5b**| `i18n Engine` | `#6366F1` | Translation & locale management |
  | **6** | `View / JSON` | `#6366F1` | Deep serialization or template rendering |
  | **7** | `HTTP Response` | `#6366F1` | Headers, status, 304/200 |
  | **⚠️** | `Error & Logger` | `#EF4444` | JSON error contracts for APIs |
  
  > The diagram above is animated: green packets flow through the request pipeline, indigo packets represent responses and service calls, and red pulses highlight error handling.
</details>

---

## 🚀 What is CoreXPHP?

CoreXPHP is a **zero‑overhead** PHP framework that eliminates configuration fatigue through intelligent schema detection and autonomous auto‑wiring. It achieves sub‑millisecond execution times while enforcing a strict, enterprise‑grade MVC architecture.

Unlike frameworks that rely on deep, memory‑heavy namespace nesting, CoreXPHP uses **Composer Classmap autoloading** and runtime reflection. It’s natively dual‑purpose: perfect for SSR web portals *or* stateless JSON APIs consumed by React, Vue, or mobile clients.

---

## ✨ Feature Grid

| Category               | Feature                                                                 | Impact                                                       |
|------------------------|-------------------------------------------------------------------------|--------------------------------------------------------------|
| ⚡ **Performance**      | **0ms Overhead** – direct Classmap autoloading, no PSR‑4 nesting arrays | Sub‑millisecond cold‑start                                   |
| 🧠 **Cognitive ORM**    | Automatic `SHOW COLUMNS` schema detection                                | No `$fillable` / `$guarded` arrays – just write logic        |
| 🔌 **Smart Auto‑Wiring**| Reflection‑based injection of `Request`, `Response`, and services        | Clean controllers, no manual binding                         |
| 📊 **Data Pipelines**   | Native CSV bulk import/export built into the Model layer                 | Process million‑row files with streaming                     |
| 🛡️ **API‑First Errors** | Intercepts API routes: returns JSON error contracts instead of HTML      | MERN‑style predictability for frontend teams                 |
| 🔐 **Airtight Security**| PDO binding, strict mass‑assignment, session fixation prevention         | 100% SQL injection immunity                                  |

---

## 📦 Quick Start

### Installation

```bash
composer create-project kaiidenaadhil/corexphp my-app
cd my-app
php console serve
