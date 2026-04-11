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
            --neutral-white: #ffffff;
            --neutral-light: #f8f9fa;
            --neutral-dark: #212529;
            --gradient: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
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
            background: var(--gradient);
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
            background: var(--gradient);
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
            background: var(--gradient);
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

        .card-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--accent-purple);
            color: var(--text-inverse);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .card-content {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: var(--primary-blue);
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
            background: var(--gradient);
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
            background: var(--gradient);
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

        /* Technology Stack */
        .tech-stack {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 3rem;
            margin: 5rem 0;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .tech-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .tech-item i {
            font-size: 3rem;
            color: var(--accent-purple);
            margin-bottom: 1rem;
        }

        .tech-item span {
            font-weight: 600;
            color: var(--primary-blue);
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
        
        <h1>Innovative Digital Solutions</h1>
        <p>Discover Avant Vista Ventures' cutting-edge digital products transforming industries</p>
        
        <div class="hero-btns">
            <a href="#products" class="btn btn-primary">Explore Products</a>
            <a href="#contact" class="btn">Request Demo</a>
        </div>
        
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
            <span>Discover More</span>
        </div>
    </section>

    <div class="container">
        <!-- Product Showcase -->
        <h2 class="section-title" id="products"><h2>Our Digital Products</h2></h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Vista Analytics Suite">
                    <div class="card-tag">Analytics</div>
                </div>
                <div class="card-content">
                    <h3>Vista Analytics Suite</h3>
                    <p>Advanced analytics platform that transforms complex data into actionable insights with predictive modeling and real-time dashboards.</p>
                    <div class="features">
                        <span class="feature-tag">Real-time Dashboards</span>
                        <span class="feature-tag">Predictive Modeling</span>
                        <span class="feature-tag">Custom Reports</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">+42%</div>
                            <div class="stat-label">Efficiency</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">24/7</div>
                            <div class="stat-label">Monitoring</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>

            <div class="product-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Nexus Collaboration Platform">
                    <div class="card-tag">Collaboration</div>
                </div>
                <div class="card-content">
                    <h3>Nexus Collaboration Platform</h3>
                    <p>Enterprise-grade collaboration solution with integrated project management, communication, and file sharing capabilities.</p>
                    <div class="features">
                        <span class="feature-tag">Team Chat</span>
                        <span class="feature-tag">Task Management</span>
                        <span class="feature-tag">Secure File Sharing</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">-35%</div>
                            <div class="stat-label">Meeting Time</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Adoption Rate</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>

            <div class="product-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Aura Security Ecosystem">
                    <div class="card-tag">Security</div>
                </div>
                <div class="card-content">
                    <h3>Aura Security Ecosystem</h3>
                    <p>Comprehensive cybersecurity solution with AI-powered threat detection, encryption, and compliance management.</p>
                    <div class="features">
                        <span class="feature-tag">AI Threat Detection</span>
                        <span class="feature-tag">End-to-End Encryption</span>
                        <span class="feature-tag">Compliance Tools</span>
                    </div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">99.99%</div>
                            <div class="stat-label">Threat Blocked</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">24/7</div>
                            <div class="stat-label">Protection</div>
                        </div>
                    </div>
                    <a href="#" class="btn" style="background: var(--primary-blue); color: white;">View Details</a>
                </div>
            </div>
        </div>

        <!-- Featured Product -->
        <div class="featured-product">
            <div class="featured-content">
                <h2>VistaConnect Enterprise Platform</h2>
                <p>Our flagship product, VistaConnect, is an all-in-one enterprise solution that integrates CRM, ERP, and business intelligence into a single, seamless platform.</p>
                <p>With customizable modules and scalable architecture, VistaConnect adapts to your business needs while providing real-time insights and automating workflows.</p>
                
                <div class="result-grid">
                    <div class="result-card">
                        <i class="fas fa-rocket"></i>
                        <h4>68% Faster</h4>
                        <p>Decision Making Process</p>
                    </div>
                    <div class="result-card">
                        <i class="fas fa-chart-pie"></i>
                        <h4>45% Reduction</h4>
                        <p>Operational Costs</p>
                    </div>
                    <div class="result-card">
                        <i class="fas fa-sync-alt"></i>
                        <h4>99.9% Uptime</h4>
                        <p>Enterprise Reliability</p>
                    </div>
                </div>
                
                <a href="#" class="btn" style="background: var(--primary-blue); color: white;">Request Enterprise Demo</a>
            </div>
            <div class="featured-image">
                <div class="featured-image-content">
                    <i class="fas fa-network-wired"></i>
                    <h3>Enterprise Integration Platform</h3>
                    <p>Seamlessly connect your business operations with our comprehensive solution</p>
                    <a href="#" class="btn btn-outline">View Platform Features</a>
                </div>
            </div>
        </div>

        <!-- Technology Stack -->
        <div class="tech-stack">
            <h2 class="section-title"><h2>Built With Cutting-Edge Technology</h2></h2>
            <div class="tech-grid">
                <div class="tech-item">
                    <i class="fab fa-react"></i>
                    <span>React</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-node-js"></i>
                    <span>Node.js</span>
                </div>
                <div class="tech-item">
                    <i class="fas fa-database"></i>
                    <span>MongoDB</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-aws"></i>
                    <span>AWS</span>
                </div>
                <div class="tech-item">
                    <i class="fas fa-brain"></i>
                    <span>TensorFlow</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-docker"></i>
                    <span>Docker</span>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <h2 class="section-title"><h2>Client Success Stories</h2></h2>
        <div class="testimonials">
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">"Vista Analytics transformed how we make decisions. We reduced reporting time by 70% while gaining insights we never had before."</p>
                    <div class="client-info">
                        <div class="client-avatar">SD</div>
                        <div class="client-details">
                            <h4>Sarah Donovan</h4>
                            <p>CTO, TechGlobal Inc.</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"The Nexus platform has revolutionized our team collaboration. Projects that used to take weeks now get done in days with better outcomes."</p>
                    <div class="client-info">
                        <div class="client-avatar">MJ</div>
                        <div class="client-details">
                            <h4>Michael Johnson</h4>
                            <p>Operations Director, InnoCorp</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"Aura Security has given us peace of mind. We've had zero breaches since implementation while reducing security costs by 40%."</p>
                    <div class="client-info">
                        <div class="client-avatar">ER</div>
                        <div class="client-details">
                            <h4>Elena Rodriguez</h4>
                            <p>Security Lead, FinSecure</p>
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
        document.querySelectorAll('.product-card, .featured-product, .tech-stack').forEach(element => {
            observer.observe(element);
        });

        // Floating animation for decorative elements
        document.querySelectorAll('.circle').forEach(circle => {
            circle.style.animationDelay = `${Math.random() * 2}s`;
        });
    </script>
</body>
</html>