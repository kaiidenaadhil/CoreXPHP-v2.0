<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avant Vista Ventures | Digital Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0a2463;
            --secondary-teal: #00b4d8;
            --accent-purple: #5e60ce;
            --accent-orange: #ff6b35;
            --neutral-white: #ffffff;
            --neutral-light: #f8f9fa;
            --neutral-dark: #212529;
            --gradient-blue: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            --gradient-orange: linear-gradient(135deg, var(--accent-orange), #ff9e44);
            --text-primary: #333333;
            --text-inverse: #ffffff;
            --card-bg: #ffffff;
            --card-border: #e9ecef;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --card-hover-shadow: 0 15px 50px rgba(10, 36, 99, 0.2);
            --transition: all 0.4s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-primary);
            background-color: var(--neutral-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 2rem;
            background: var(--gradient-blue);
            background-size: 200% 200%;
            animation: gradientAnimation 15s ease infinite;
        }
        
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: var(--text-inverse);
            letter-spacing: -1px;
            max-width: 900px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin-bottom: 3rem;
            color: var(--text-inverse);
            font-weight: 300;
            opacity: 0.9;
        }

        .hero-btns {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .btn {
            display: inline-block;
            background: transparent;
            color: var(--text-inverse);
            border: 2px solid var(--text-inverse);
            padding: 14px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
            width: fit-content;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.5s ease;
            z-index: -1;
        }
        
        .btn:hover::before {
            width: 100%;
        }
        
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }

        .btn-primary {
            background: var(--text-inverse);
            color: var(--primary-blue);
            font-weight: 700;
        }

        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text-inverse);
            animation: bounce 2s infinite;
        }

        .scroll-down i {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
            40% {transform: translateY(-20px) translateX(-50%);}
            60% {transform: translateY(-10px) translateX(-50%);}
        }

        /* Product Showcase */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            text-align: center;
            margin: 4rem 0 3rem;
            position: relative;
        }

        .section-title h2 {
            background: var(--gradient-blue);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gradient-blue);
            border-radius: 10px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin: 3rem 0;
        }

        .product-card {
            background: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--card-border);
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--card-hover-shadow);
        }

        .card-header {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
            color: var(--text-inverse);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .card-icon i {
            font-size: 2rem;
        }

        .card-header-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }

        .card-header-content p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .card-content {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content p {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            font-weight: 300;
            flex-grow: 1;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin: 1rem 0;
        }

        .feature-tag {
            background: rgba(10, 36, 99, 0.1);
            color: var(--primary-blue);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin: 1rem 0 1.5rem;
        }

        .tech-item {
            background: rgba(0, 180, 216, 0.1);
            color: var(--secondary-teal);
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin: 1.5rem 0;
            padding-top: 1.5rem;
            border-top: 1px solid var(--card-border);
        }

        .stat-item {
            text-align: center;
            flex: 1;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-primary);
            text-transform: uppercase;
        }

        /* Featured Product */
        .featured-product {
            display: flex;
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            margin: 5rem 0;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }

        .featured-content {
            flex: 1;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .featured-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
        }

        .featured-content p {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            line-height: 1.8;
            font-weight: 300;
        }

        .featured-image {
            flex: 1;
            min-height: 500px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .featured-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            transform: rotate(30deg);
        }

        .featured-image-content {
            text-align: center;
            padding: 2rem;
            width: 100%;
            color: var(--text-inverse);
        }

        .featured-image-content i {
            font-size: 8rem;
            color: rgba(255, 255, 255, 0.2);
            margin-bottom: 2rem;
        }

        .featured-image-content h3 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .featured-image-content p {
            max-width: 400px;
            margin: 0 auto 2rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .result-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .result-card {
            background: rgba(10, 36, 99, 0.05);
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid var(--card-border);
        }

        .result-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-teal);
        }

        .result-card h4 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-blue);
        }

        .result-card p {
            color: var(--text-primary);
            font-size: 0.9rem;
        }

        /* Testimonials */
        .testimonials {
            padding: 5rem 0;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            color: rgba(0, 180, 216, 0.1);
            line-height: 1;
        }

        .testimonial-content {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            position: relative;
            z-index: 1;
        }

        .client-info {
            display: flex;
            align-items: center;
        }

        .client-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
            font-size: 1.2rem;
            color: var(--text-inverse);
        }

        .client-details h4 {
            font-weight: 600;
            margin-bottom: 0.2rem;
            color: var(--primary-blue);
        }

        .client-details p {
            color: var(--text-primary);
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-blue);
            border-radius: 20px;
            padding: 4rem 2rem;
            text-align: center;
            margin: 5rem 0;
            color: var(--text-inverse);
        }

        .cta-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--text-inverse);
        }

        .cta-section p {
            max-width: 700px;
            margin: 0 auto 2.5rem;
            color: var(--text-inverse);
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            
            .featured-product {
                flex-direction: column;
            }
            
            .featured-image {
                min-height: 300px;
            }
            
            .result-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-btns {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Floating animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Decorative Elements */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: 0;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="circle circle-1 floating"></div>
        <div class="circle circle-2 floating" style="animation-delay: 2s;"></div>
        
        <h1>Enterprise Digital Solutions</h1>
        <p>Cutting-edge products for modern business challenges</p>
        
        <div class="hero-btns">
            <a href="#products" class="btn btn-primary">Explore Products</a>
            <a href="#contact" class="btn">Request Demo</a>
        </div>
        
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
            <span>Discover Our Solutions</span>
        </div>
    </section>

    <div class="container">
        <!-- Product Showcase -->
        <h2 class="section-title" id="products"><h2>Our Digital Products</h2></h2>
        <div class="product-grid">
            <!-- E-Commerce Solution -->
            <div class="product-card">
                <div class="card-header">
                    <div class="card-icon" style="background: rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="card-header-content">
                        <h3>VistaCommerce Pro</h3>
                        <p>Enterprise E-Commerce Platform</p>
                    </div>
                </div>
                <div class="card-content">
                    <p>Complete e-commerce solution with AI-powered recommendations, multi-channel integration, and real-time inventory management.</p>
                    <div class="features">
                        <span class="feature-tag">AI Recommendations</span>
                        <span class="feature-tag">Omnichannel</span>
                        <span class="feature-tag">Secure Payments</span>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-item">React</span>
                        <span class="tech-item">Node.js</span>
                        <span class="tech-item">MongoDB</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">+45%</div>
                            <div class="stat-label">Conversion</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">99.9%</div>
                            <div class="stat-label">Uptime</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>

            <!-- CoreXPHP Framework -->
            <div class="product-card">
                <div class="card-header">
                    <div class="card-icon" style="background: rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <div class="card-header-content">
                        <h3>CoreXPHP</h3>
                        <p>Modern PHP Framework</p>
                    </div>
                </div>
                <div class="card-content">
                    <p>High-performance PHP framework with built-in security, ORM, and REST API support. Accelerate development with modular architecture.</p>
                    <div class="features">
                        <span class="feature-tag">MVC Architecture</span>
                        <span class="feature-tag">Built-in Security</span>
                        <span class="feature-tag">REST API</span>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-item">PHP 8</span>
                        <span class="tech-item">Composer</span>
                        <span class="tech-item">MySQL</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">70%</div>
                            <div class="stat-label">Faster Dev</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">50K+</div>
                            <div class="stat-label">Users</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>

            <!-- Printing Solution -->
            <div class="product-card">
                <div class="card-header">
                    <div class="card-icon" style="background: rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-print"></i>
                    </div>
                    <div class="card-header-content">
                        <h3>PrintMaster Pro</h3>
                        <p>Enterprise Printing Solution</p>
                    </div>
                </div>
                <div class="card-content">
                    <p>Comprehensive printing management system with automated workflows, cost tracking, and cloud integration.</p>
                    <div class="features">
                        <span class="feature-tag">Cloud Integration</span>
                        <span class="feature-tag">Cost Tracking</span>
                        <span class="feature-tag">Automated Workflow</span>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-item">Node.js</span>
                        <span class="tech-item">Python</span>
                        <span class="tech-item">AWS</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">-40%</div>
                            <div class="stat-label">Costs</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">+65%</div>
                            <div class="stat-label">Efficiency</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>

            <!-- Office CRM -->
            <div class="product-card">
                <div class="card-header">
                    <div class="card-icon" style="background: rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-header-content">
                        <h3>OfficeConnect CRM</h3>
                        <p>Team Collaboration Platform</p>
                    </div>
                </div>
                <div class="card-content">
                    <p>Unified CRM with sales automation, client management, and team collaboration tools. Integrates with your existing workflow.</p>
                    <div class="features">
                        <span class="feature-tag">Sales Automation</span>
                        <span class="feature-tag">Team Collaboration</span>
                        <span class="feature-tag">Analytics</span>
                    </div>
                    <div class="tech-stack">
                        <span class="tech-item">React</span>
                        <span class="tech-item">PHP</span>
                        <span class="tech-item">PostgreSQL</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">+35%</div>
                            <div class="stat-label">Productivity</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Satisfaction</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>
        </div>

        <!-- Featured Product -->
        <div class="featured-product">
            <div class="featured-content">
                <h2>CoreXPHP Framework</h2>
                <p>Our flagship development framework powers enterprise applications with unmatched speed and security. Built for modern web development challenges.</p>
                <p>CoreXPHP combines the best of PHP with modern architecture patterns, providing developers with a robust foundation for scalable applications.</p>
                
                <div class="result-grid">
                    <div class="result-card">
                        <i class="fas fa-bolt"></i>
                        <h4>5x Faster</h4>
                        <p>Development Speed</p>
                    </div>
                    <div class="result-card">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Zero</h4>
                        <p>Security Vulnerabilities</p>
                    </div>
                    <div class="result-card">
                        <i class="fas fa-expand"></i>
                        <h4>Unlimited</h4>
                        <p>Scalability</p>
                    </div>
                </div>
                
                <a href="#" class="btn" style="background: var(--primary-blue); color: white;">Download Framework</a>
            </div>
            <div class="featured-image">
                <div class="featured-image-content">
                    <i class="fas fa-code"></i>
                    <h3>Developer First Framework</h3>
                    <p>Built for performance, security, and scalability</p>
                    <a href="#" class="btn btn-outline">View Documentation</a>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <h2 class="section-title"><h2>Client Success Stories</h2></h2>
        <div class="testimonials">
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">"VistaCommerce transformed our online sales. We saw a 65% increase in revenue within the first quarter of implementation."</p>
                    <div class="client-info">
                        <div class="client-avatar">SD</div>
                        <div class="client-details">
                            <h4>Sarah Donovan</h4>
                            <p>E-commerce Director, RetailPlus</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"CoreXPHP accelerated our development process dramatically. We built our enterprise application in half the estimated time."</p>
                    <div class="client-info">
                        <div class="client-avatar">MJ</div>
                        <div class="client-details">
                            <h4>Michael Johnson</h4>
                            <p>Lead Developer, TechSolutions</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"OfficeConnect CRM streamlined our sales process and improved team collaboration. Deal closure rates increased by 40%."</p>
                    <div class="client-info">
                        <div class="client-avatar">ER</div>
                        <div class="client-details">
                            <h4>Elena Rodriguez</h4>
                            <p>Sales Director, GlobalCorp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="cta-section" id="contact">
            <h2>Ready to Transform Your Business?</h2>
            <p>Discover how our digital solutions can drive innovation and growth for your organization</p>
            <a href="#" class="btn" style="background: white; color: var(--primary-blue);">Request a Demo</a>
        </div>
    </div>

    <script>
        // Smooth scroll
        document.querySelector('.scroll-down').addEventListener('click', function() {
            document.querySelector('.section-title').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });

        // Animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all product cards and featured section
        document.querySelectorAll('.product-card, .featured-product').forEach(element => {
            observer.observe(element);
        });

        // Floating animation for decorative elements
        document.querySelectorAll('.circle').forEach(circle => {
            circle.style.animationDelay = `${Math.random() * 2}s`;
        });
    </script>
</body>
</html>