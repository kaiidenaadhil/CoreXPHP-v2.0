<?php include_once "./components/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>CorexPHP - Modern PHP Framework</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        /* CorexPHP Section Styles */
        .corex-section {
            --primary: #2563eb;
            --secondary: #4f46e5;
            --bg: #ffffff;
            --text: #1f2937;
            --border: #e5e7eb;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        @media (prefers-color-scheme: dark) {
            .corex-section {
                --bg: #111827;
                --text: #f3f4f6;
                --border: #374151;
            }
        }

        .corex-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1.5rem;
        }

        .corex-header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .corex-title {
            font-size: clamp(2rem, 5vw, 2.5rem);
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .corex-download {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            margin: 2rem 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .corex-version {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: clamp(1rem, 3vw, 1.25rem);
        }

        .corex-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 1.5rem;
            transition: transform 0.2s ease;
            font-size: clamp(1rem, 3vw, 1.1rem);
        }

        .corex-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr));
            gap: 1.5rem;
            margin: 3rem 0;
        }

        .corex-feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.25rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: transform 0.2s ease;
        }

        .corex-feature-item i {
            font-size: 1.5rem;
            color: var(--primary);
            flex-shrink: 0;
        }

        .corex-support {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-top: 3rem;
        }

        .corex-support-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            text-decoration: none;
            color: var(--text);
            transition: background 0.2s ease;
            flex: 1 0 auto;
            min-width: 180px;
            justify-content: center;
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .corex-container {
                padding: 3rem 1.25rem;
            }
            
            .corex-features {
                gap: 1rem;
            }
        }

        @media (max-width: 768px) {
            .corex-container {
                padding: 2rem 1rem;
            }

            .corex-download {
                padding: 1.5rem;
                margin: 1.5rem 0;
            }

            .corex-cta {
                justify-content: center;
                padding: 0.5rem;
            }

            .corex-feature-item {
                flex-direction: column;
                text-align: center;
                padding: 1.5rem 1rem;
            }

            .corex-support-link {
                min-width: 160px;
                padding: 0.75rem;
            }
        }

        @media (max-width: 480px) {
            .corex-container {
                padding: 1.5rem 0.75rem;
            }

            .corex-header p {
                font-size: 0.95rem;
            }

            .corex-feature-item h3 {
                font-size: 1.1rem;
            }

            .corex-feature-item p {
                font-size: 0.9rem;
            }

            .corex-support {
                gap: 0.75rem;
            }

            .corex-support-link {
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <!-- CorexPHP Section -->
    <section class="corex-section">
        <div class="corex-container">
            <div class="corex-header">
                <h1 class="corex-title">CorexPHP</h1>
                <p>A minimalist PHP framework for modern web development</p>
            </div>

            <div class="corex-download">
                <div class="corex-version">v1.0.0 - Released April 2025</div>
                <a href="#" class="corex-cta">
                    <i class="uil uil-download-alt"></i>
                    Download CorexPHP
                </a>
            </div>

            <div class="corex-features">
                <a href="#" class="corex-feature-item">
                    <i class="uil uil-github"></i>
                    <div>
                        <h3>Contribute on GitHub</h3>
                        <p>Join our open-source community</p>
                    </div>
                </a>

                <a href="#" class="corex-feature-item">
                    <i class="uil uil-comment-alt"></i>
                    <div>
                        <h3>Join Discord Community</h3>
                        <p>Collaborate with other developers</p>
                    </div>
                </a>

                <a href="#" class="corex-feature-item">
                    <i class="uil uil-lightbulb"></i>
                    <div>
                        <h3>Suggest Features</h3>
                        <p>Help shape the framework's future</p>
                    </div>
                </a>
            </div>

            <div class="corex-support">
                <a href="#" class="corex-support-link">
                    <i class="uil uil-star"></i>
                    Star on GitHub
                </a>
                <a href="#" class="corex-support-link">
                    <i class="uil uil-share-alt"></i>
                    Share Project
                </a>
                <a href="#" class="corex-support-link">
                    <i class="uil uil-coffee"></i>
                    Buy Coffee
                </a>
            </div>
        </div>
    </section>
</body>
</html>
<?php include_once "./components/footer.php"; ?>