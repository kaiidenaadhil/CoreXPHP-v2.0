<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand & Creative Services | Avant Vista Ventures</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Light theme variables */
            --primary-blue: #0A2463;
            --secondary-teal: #00B4D8;
            --accent-purple: #5E60CE;
            --light-gray: #F8F9FA;
            --medium-gray: #E9ECEF;
            --dark-gray: #495057;
            --white: #FFFFFF;
            --black: #212529;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow: 0 10px 30px rgba(10, 36, 99, 0.15);
            --gradient: linear-gradient(135deg, var(--secondary-teal), var(--accent-purple));
            
            /* Backgrounds */
            --bg-primary: var(--light-gray);
            --bg-secondary: var(--white);
            --bg-tertiary: var(--medium-gray);
            --bg-header: var(--white);
            
            /* Text */
            --text-primary: var(--dark-gray);
            --text-secondary: var(--black);
            --text-inverse: var(--white);
            
            /* Cards */
            --card-bg: var(--white);
            --card-border: rgba(10, 36, 99, 0.1);
            --card-hover-shadow: 0 15px 40px rgba(10, 36, 99, 0.25);
            
            /* Buttons */
            --btn-outline-hover-bg: var(--white);
            --btn-outline-hover-color: var(--primary-blue);
        }
        
        /* Dark theme variables */
        [data-theme="dark"] {
            --primary-blue: #3A86FF;
            --secondary-teal: #00C2D1;
            --accent-purple: #8338EC;
            --light-gray: #121212;
            --medium-gray: #1E1E1E;
            --dark-gray: #E0E0E0;
            --white: #1E1E1E;
            --black: #F5F5F5;
            
            --bg-primary: #121212;
            --bg-secondary: #1E1E1E;
            --bg-tertiary: #2D2D2D;
            --bg-header: #1E1E1E;
            
            --text-primary: #E0E0E0;
            --text-secondary: #F5F5F5;
            
            --card-bg: #1E1E1E;
            --card-border: rgba(255, 255, 255, 0.1);
            --card-hover-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            --btn-outline-hover-bg: var(--primary-blue);
            --btn-outline-hover-color: var(--white);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--bg-primary);
            scroll-behavior: smooth;
            position: relative;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .btn {
            display: inline-block;
            background: var(--gradient);
            color: var(--text-inverse);
            border: none;
            padding: 14px 32px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
            box-shadow: var(--shadow);
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
            background: linear-gradient(135deg, var(--accent-purple), var(--secondary-teal));
            transition: all 0.5s ease;
            z-index: -1;
        }
        
        .btn:hover::before {
            width: 100%;
        }
        
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(10, 36, 99, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }
        
        .btn-secondary:hover {
            background: var(--primary-blue);
            color: var(--text-inverse);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--text-inverse);
            border: 2px solid var(--text-inverse);
        }
        
        .btn-outline:hover {
            background: var(--btn-outline-hover-bg);
            color: var(--btn-outline-hover-color);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-title p {
            color: var(--text-primary);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.15rem;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient);
            border-radius: 10px;
        }
        
        /* Brand Hero */
        .brand-hero {
            background: linear-gradient(135deg, rgba(94, 96, 206, 0.95) 0%, rgba(10, 36, 99, 0.9) 100%);
            padding: 160px 0 100px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .brand-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255,255,255,0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255,255,255,0.1) 0%, transparent 20%);
            z-index: 0;
        }
        
        .brand-hero .container {
            position: relative;
            z-index: 2;
        }
        
        .brand-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .brand-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        /* Why Brand Matters Section */
        .why-brand {
            padding: 100px 0;
            background-color: var(--bg-secondary);
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }
        
        .benefit-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            border: 1px solid var(--card-border);
        }
        
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
        }
        
        .benefit-icon {
            width: 80px;
            height: 80px;
            background: rgba(94, 96, 206, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.5rem;
            color: var(--accent-purple);
        }
        
        .benefit-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        /* Services Section */
        .brand-services {
            padding: 100px 0;
            background-color: var(--bg-primary);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }
        
        .service-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--card-border);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
        }
        
        .service-image {
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .service-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(10, 36, 99, 0.7), rgba(94, 96, 206, 0.5));
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-content h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        .service-features {
            list-style: none;
            margin: 20px 0;
        }
        
        .service-features li {
            padding: 12px 0;
            display: flex;
            align-items: flex-start;
            border-bottom: 1px dashed var(--medium-gray);
        }
        
        .service-features li:last-child {
            border-bottom: none;
        }
        
        .service-features li i {
            color: var(--accent-purple);
            margin-right: 15px;
            margin-top: 5px;
            min-width: 20px;
            font-size: 1.2rem;
        }
        
        /* Why Choose Us */
        .why-choose {
            padding: 100px 0;
            background-color: var(--bg-secondary);
        }
        
        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .advantage-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--card-border);
        }
        
        .advantage-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--card-hover-shadow);
        }
        
        .advantage-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        /* Process Section */
        .brand-process {
            padding: 100px 0;
            background-color: var(--bg-primary);
        }
        
        .process-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 60px;
            position: relative;
        }
        
        .process-step {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 2;
            border: 1px solid var(--card-border);
            text-align: center;
        }
        
        .process-step-number {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 auto 20px;
        }
        
        .process-step h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        /* Portfolio Showcase */
        .portfolio-showcase {
            padding: 100px 0;
            background-color: var(--bg-secondary);
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .portfolio-item {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            position: relative;
            height: 300px;
            background-size: cover;
            background-position: center;
        }
        
        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(10, 36, 99, 0.9), transparent);
            padding: 20px;
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
        }
        
        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background-color: var(--bg-primary);
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .testimonial-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
            border: 1px solid var(--card-border);
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(94, 96, 206, 0.1);
            font-family: serif;
            line-height: 1;
            z-index: 0;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            margin-right: 15px;
        }
        
        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--primary-blue);
        }
        
        .author-info p {
            font-size: 0.9rem;
            color: var(--dark-gray);
        }
        
        /* CTA Section */
        .brand-cta {
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .brand-cta::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255,255,255,0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255,255,255,0.1) 0%, transparent 20%);
            z-index: 1;
        }
        
        .brand-cta .container {
            position: relative;
            z-index: 2;
        }
        
        .brand-cta h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .brand-cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        /* Consultation Form */
        .consultation-form {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.15);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .consultation-form h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--text-inverse);
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 16px 20px;
            border: none;
            border-radius: 12px;
            background: rgba(255,255,255,0.15);
            color: var(--text-inverse);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(255,255,255,0.25);
            box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
        }
        
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255,255,255,0.7);
        }
        
        .form-group select option {
            background: var(--primary-blue);
            color: white;
        }
        
        .submit-btn {
            width: 100%;
            background: var(--text-inverse);
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 1.1rem;
            padding: 18px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        
        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .brand-hero h1 {
                font-size: 2.8rem;
            }
            
            .brand-hero p {
                font-size: 1.2rem;
            }
            
            .brand-cta h2 {
                font-size: 2.3rem;
            }
        }
        
        @media (max-width: 768px) {
            .brand-hero {
                padding: 120px 0 70px;
            }
            
            .brand-hero h1 {
                font-size: 2.3rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .process-steps {
                flex-direction: column;
                align-items: center;
            }
            
            .process-step {
                max-width: 100%;
            }
            
            .brand-cta h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .brand-hero h1 {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
            }
            
            .brand-cta h2 {
                font-size: 1.8rem;
            }
            
            .consultation-form {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Brand Hero -->
    <section class="brand-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Transform Your Brand with Creative Solutions</h1>
                <p>At Avant Vista Ventures, we understand that your brand is more than just a logo — it's the story you tell, the emotions you evoke, and the connections you make with your audience.</p>
                <div class="hero-buttons">
                    <a href="#consultation" class="btn">Request a Free Consultation</a>
                    <a href="#services" class="btn btn-outline">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Brand Matters Section -->
    <section class="why-brand" id="why">
        <div class="container">
            <div class="section-title">
                <h2>Why Brand & Creative Matters</h2>
                <p>In today's competitive market, a strong brand presence is critical</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-first-order"></i>
                    </div>
                    <h3>First Impressions Matter</h3>
                    <p>Your brand's visual identity is often the first interaction potential customers have with your business. Make it count.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Build Trust & Credibility</h3>
                    <p>A consistent and professional brand presence builds trust and establishes credibility with your audience.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Stand Out in a Crowded Market</h3>
                    <p>A strong brand makes you instantly recognizable, helping you stand out in a crowded market.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Services -->
    <section class="brand-services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Brand & Creative Services</h2>
                <p>Crafted for impact and designed to transform your business</p>
            </div>
            
            <div class="services-grid">
                <!-- Brand Identity -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1494172961521-33799ddd43a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80');">
                    </div>
                    <div class="service-content">
                        <h3>Brand Identity Design</h3>
                        <p>We create unique logos, color palettes, and typography that communicate your brand's values and mission clearly.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Custom logo design</li>
                            <li><i class="fas fa-check"></i> Comprehensive brand guidelines</li>
                            <li><i class="fas fa-check"></i> Visual identity development</li>
                            <li><i class="fas fa-check"></i> Brand positioning & messaging</li>
                        </ul>
                        <div style="text-align: center; margin-top: 30px;">
                            <a href="#consultation" class="btn">Build My Brand Identity</a>
                        </div>
                    </div>
                </div>
                
                <!-- Content Creation -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                    </div>
                    <div class="service-content">
                        <h3>Content Creation</h3>
                        <p>From blogs to video production, we create content that engages, educates, and converts your audience.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Professional video production</li>
                            <li><i class="fas fa-check"></i> SEO-optimized copywriting</li>
                            <li><i class="fas fa-check"></i> Social media content creation</li>
                            <li><i class="fas fa-check"></i> Infographics & visual content</li>
                        </ul>
                        <div style="text-align: center; margin-top: 30px;">
                            <a href="#consultation" class="btn">Create Amazing Content</a>
                        </div>
                    </div>
                </div>
                
                <!-- Brand Strategy -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                    </div>
                    <div class="service-content">
                        <h3>Brand Strategy & Consulting</h3>
                        <p>We help you define and refine your brand's strategy to create emotional connections with your audience.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Brand strategy development</li>
                            <li><i class="fas fa-check"></i> Market research & analysis</li>
                            <li><i class="fas fa-check"></i> Brand workshops</li>
                            <li><i class="fas fa-check"></i> Competitive positioning</li>
                        </ul>
                        <div style="text-align: center; margin-top: 30px;">
                            <a href="#consultation" class="btn">Develop My Brand Strategy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Avant Vista Ventures?</h2>
                <p>We take a holistic approach to brand and creative development</p>
            </div>
            
            <div class="advantages-grid">
                <div class="advantage-card">
                    <h3>Creative Excellence</h3>
                    <p>Our team of designers and strategists produce innovative solutions that captivate your audience.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Tailored Solutions</h3>
                    <p>We create custom brand strategies and assets that align with your business goals and values.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Brand Consistency</h3>
                    <p>We ensure every aspect of your brand is consistent and impactful across all touchpoints.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Proven Results</h3>
                    <p>We've helped businesses build strong brands that increase loyalty and drive growth.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Collaborative Approach</h3>
                    <p>We work closely with you to bring your vision to life while offering strategic insights.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="brand-process">
        <div class="container">
            <div class="section-title">
                <h2>Our Brand Development Process</h2>
                <p>From concept to creation, we guide you every step of the way</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="process-step-number">1</div>
                    <h3>Discovery & Research</h3>
                    <p>We learn about your business, industry, and audience to identify opportunities for your brand.</p>
                </div>
                
                <div class="process-step">
                    <div class="process-step-number">2</div>
                    <h3>Strategy & Positioning</h3>
                    <p>We define your brand's core values, messaging, and positioning to stand out in the market.</p>
                </div>
                
                <div class="process-step">
                    <div class="process-step-number">3</div>
                    <h3>Design & Creation</h3>
                    <p>Our team crafts stunning visual assets that reflect your brand's identity and resonate with your audience.</p>
                </div>
                
                <div class="process-step">
                    <div class="process-step-number">4</div>
                    <h3>Launch & Implementation</h3>
                    <p>We bring your new brand to life across all platforms with consistent execution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Showcase -->
    <section class="portfolio-showcase">
        <div class="container">
            <div class="section-title">
                <h2>Client Success Stories</h2>
                <p>How we've helped businesses build iconic brands</p>
            </div>
            
            <div class="portfolio-grid">
                <div class="portfolio-item" style="background-image: url('https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1530&q=80');">
                    <div class="portfolio-overlay">
                        <h3>FashionHub</h3>
                        <p>40% increase in brand recognition</p>
                    </div>
                </div>
                
                <div class="portfolio-item" style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                    <div class="portfolio-overlay">
                        <h3>TechSolutions Ltd</h3>
                        <p>50% more client inquiries</p>
                    </div>
                </div>
                
                <div class="portfolio-item" style="background-image: url('https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                    <div class="portfolio-overlay">
                        <h3>FreshMart</h3>
                        <p>Attracted younger audience segment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
                <p>Don't just take our word for it - hear from our satisfied clients</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Avant Vista Ventures took our brand to the next level. Our rebrand has helped us increase engagement and sales, and we couldn't be happier with the results!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">SR</div>
                        <div class="author-info">
                            <h4>Sarah Rahman</h4>
                            <p>CEO, FashionHub</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The creative team at Avant Vista understood our vision perfectly. Our new branding has positioned us as a leader in our industry."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">MK</div>
                        <div class="author-info">
                            <h4>Mohammed Khan</h4>
                            <p>Director, TechSolutions Ltd</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Avant Vista's design and brand strategy transformed our business. We now stand out in a crowded market, and our brand is loved by customers!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">AJ</div>
                        <div class="author-info">
                            <h4>Ayesha Jahan</h4>
                            <p>Founder, FreshMart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="brand-cta" id="consultation">
        <div class="container">
            <h2>Ready to Build a Brand That Resonates?</h2>
            <p>Whether you're a new business or looking to refresh your identity, we're here to help you create a brand that stands out and converts.</p>
            
            <div class="consultation-form">
                <h3>Get Your Free Brand Consultation</h3>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="tel" placeholder="Phone Number">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Company Name">
                    </div>
                    
                    <div class="form-group">
                        <textarea rows="4" placeholder="Tell us about your project..."></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Request Free Consultation</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        // Animation for cards
        document.addEventListener('DOMContentLoaded', function() {
            const animateCards = document.querySelectorAll('.benefit-card, .service-card, .advantage-card, .process-step, .portfolio-item, .testimonial-card');
            
            const cardObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 150);
                        cardObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            animateCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                cardObserver.observe(card);
            });
            
            // Portfolio hover effect
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            portfolioItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.querySelector('.portfolio-overlay').style.transform = 'translateY(0)';
                });
                
                item.addEventListener('mouseleave', () => {
                    item.querySelector('.portfolio-overlay').style.transform = 'translateY(100%)';
                });
            });
        });
    </script>
</body>
</html>