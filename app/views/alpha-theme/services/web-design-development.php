<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Web Design & Development | Avant Vista Ventures</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0A2463;
            --secondary-teal: #00B4D8;
            --accent-purple: #5E60CE;
            --light-gray: #F8F9FA;
            --medium-gray: #E9ECEF;
            --dark-gray: #495057;
            --white: #FFFFFF;
            --gradient-primary: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            --gradient-secondary: linear-gradient(135deg, var(--secondary-teal), var(--accent-purple));
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow: 0 10px 30px rgba(10, 36, 99, 0.15);
            --shadow-hover: 0 15px 40px rgba(10, 36, 99, 0.25);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            color: var(--dark-gray);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--light-gray);
            scroll-behavior: smooth;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Hero Section */
        .hero {
            background: var(--gradient-primary);
            color: var(--white);
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
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
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background: var(--gradient-secondary);
            color: var(--white);
            border: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1.1rem;
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
            box-shadow: var(--shadow-hover);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--white);
        }
        
        /* Problem Solution Section */
        .problem-solution {
            padding: 100px 0;
            background-color: var(--white);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-title p {
            color: var(--dark-gray);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.15rem;
        }
        
        .problem-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .problem-card, .solution-card {
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .problem-card {
            background-color: #fff5f5;
            border-left: 5px solid #ff6b6b;
        }
        
        .solution-card {
            background-color: #f0f7ff;
            border-left: 5px solid var(--secondary-teal);
        }
        
        .problem-card:hover, .solution-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .problem-card h3, .solution-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .problem-card h3 i, .solution-card h3 i {
            margin-right: 15px;
            font-size: 2rem;
        }
        
        .problem-card ul, .solution-card ul {
            list-style: none;
            margin-top: 20px;
        }
        
        .problem-card li, .solution-card li {
            padding: 12px 0;
            display: flex;
            align-items: flex-start;
            border-bottom: 1px dashed var(--medium-gray);
        }
        
        .problem-card li:last-child, .solution-card li:last-child {
            border-bottom: none;
        }
        
        .problem-card li i, .solution-card li i {
            color: var(--secondary-teal);
            margin-right: 15px;
            margin-top: 5px;
            min-width: 20px;
        }
        
        /* Benefits Section */
        .benefits {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .benefit-card {
            background: var(--white);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            border-top: 4px solid var(--secondary-teal);
        }
        
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-top: 4px solid var(--accent-purple);
        }
        
        .benefit-icon {
            width: 80px;
            height: 80px;
            background: rgba(0, 180, 216, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.5rem;
            color: var(--secondary-teal);
            transition: var(--transition);
        }
        
        .benefit-card:hover .benefit-icon {
            background: var(--gradient-secondary);
            color: var(--white);
            transform: scale(1.1);
        }
        
        .benefit-card h3 {
            font-size: 1.6rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        /* Portfolio Section */
        .portfolio {
            padding: 100px 0;
            background: var(--white);
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .portfolio-item {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            position: relative;
            height: 350px;
            transition: var(--transition);
        }
        
        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(10, 36, 99, 0.9);
            color: var(--white);
            padding: 25px;
            transform: translateY(100px);
            transition: var(--transition);
        }
        
        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }
        
        .portfolio-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        
        /* Process Section */
        .process {
            padding: 50px 0;
            background: var(--light-gray);
        }
        
        .process-steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 60px;
            position: relative;
        }
        
        .step {
            width: 220px;
            text-align: center;
            position: relative;
            z-index: 1;
            background: var(--white);
            padding: 40px 25px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .step:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 auto 25px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .step h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: var(--gradient-primary);
            color: var(--white);
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 1.4rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background: var(--white);
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: #5f6973;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .testimonial-card::before {
            content: """;
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(10, 36, 99, 0.1);
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 2;
            font-style: italic;
            margin-bottom: 30px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
            margin-right: 15px;
        }
        
        .author-info h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        /* Lead Form */
        .lead-form-section {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .lead-form-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }
        
        .form-header {
            background: var(--gradient-primary);
            color: var(--white);
            padding: 40px;
            text-align: center;
        }
        
        .form-header h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
        }
        
        .form-content {
            padding: 40px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--primary-blue);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid var(--medium-gray);
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--secondary-teal);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 180, 216, 0.1);
        }
        
        .submit-btn {
            width: 100%;
            background: var(--gradient-secondary);
            color: var(--white);
            font-weight: 700;
            font-size: 1.1rem;
            padding: 18px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }
        
        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .guarantee {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            background: rgba(0, 180, 216, 0.1);
            border-radius: 10px;
            font-size: 0.95rem;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .section-title h2 {
                font-size: 2.3rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero {
                padding: 120px 0 70px;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Your Digital Transformation Starts Here</h1>
                <p>Unleash the Power of a Stunning Website That Captivates, Converts, and Drives Growth</p>
                <div class="hero-buttons">
                    <a href="#lead-form" class="btn">Get Your Free Consultation</a>
                    <a href="#portfolio" class="btn btn-outline">See Our Work</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem/Solution Section -->
    <section class="problem-solution" id="problem">
        <div class="container">
            <div class="section-title">
                <h2>Stop Losing Customers to Poor Web Experiences</h2>
                <p>Your website is often the first impression customers have of your business. Don't let a subpar experience drive them away</p>
            </div>
            
            <div class="problem-grid">
                <div class="problem-card">
                    <h3><i class="fas fa-exclamation-triangle"></i> Common Problems</h3>
                    <p>Many businesses struggle with websites that don't deliver results:</p>
                    <ul>
                        <li><i class="fas fa-times"></i> Outdated design that fails to impress</li>
                        <li><i class="fas fa-times"></i> Slow loading speeds driving visitors away</li>
                        <li><i class="fas fa-times"></i> Poor mobile experience on smartphones</li>
                        <li><i class="fas fa-times"></i> Confusing navigation losing conversions</li>
                        <li><i class="fas fa-times"></i> No clear strategy to generate leads</li>
                    </ul>
                </div>
                
                <div class="solution-card">
                    <h3><i class="fas fa-lightbulb"></i> Our Solution</h3>
                    <p>We create high-performing websites designed to convert:</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Modern, responsive designs that impress</li>
                        <li><i class="fas fa-check"></i> Blazing fast loading speeds</li>
                        <li><i class="fas fa-check"></i> Flawless mobile experience</li>
                        <li><i class="fas fa-check"></i> Strategic conversion-focused layouts</li>
                        <li><i class="fas fa-check"></i> Built-in lead generation systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our Web Design Services</h2>
                <p>We create websites that work as your most effective marketing tool</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Increased Conversions</h3>
                    <p>Strategic design focused on turning visitors into customers</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-First Design</h3>
                    <p>Perfect experience on all devices from smartphones to desktops</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Lightning Fast</h3>
                    <p>Optimized for speed to keep visitors engaged and improve SEO</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure & Reliable</h3>
                    <p>Enterprise-grade security and 99.9% uptime guarantee</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Optimized</h3>
                    <p>Built with search engine visibility in mind from day one</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Ongoing Support</h3>
                    <p>Continuous improvements and technical support after launch</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Our Web Design Portfolio</h2>
                <p>See how we've transformed businesses with stunning, high-converting websites</p>
            </div>
            
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="E-commerce Website">
                    <div class="portfolio-overlay">
                        <h3>Modern E-commerce Store</h3>
                        <p>Increased conversions by 140%</p>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1115&q=80" alt="Corporate Website">
                    <div class="portfolio-overlay">
                        <h3>Corporate Website Redesign</h3>
                        <p>Generated 250% more leads</p>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="SaaS Application">
                    <div class="portfolio-overlay">
                        <h3>SaaS Application Dashboard</h3>
                        <p>Reduced bounce rate by 65%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <div class="section-title">
                <h2>Our Proven Web Design Process</h2>
                <p>A structured approach to ensure your website delivers exceptional results</p>
            </div>
            
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Discovery</h3>
                    <p>Understanding your business goals and audience needs</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Strategy</h3>
                    <p>Planning the user journey and conversion paths</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Design</h3>
                    <p>Creating stunning, user-focused visual designs</p>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Development</h3>
                    <p>Building with clean, optimized code</p>
                </div>
                
                <div class="step">
                    <div class="step-number">5</div>
                    <h3>Launch</h3>
                    <p>Deploying and optimizing your live website</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Transform Your Online Presence?</h2>
            <p>Get a website that attracts, engages, and converts your visitors into loyal customers</p>
            <a href="#lead-form" class="btn">Start Your Project Today</a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
                <p>Don't just take our word for it - hear from businesses we've transformed</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Our new website has generated 3x more leads in just two months. The team at Avant Vista understood our business goals perfectly."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">SR</div>
                        <div class="author-info">
                            <h4>Sarah Rahman</h4>
                            <p>CEO, TechSolutions Ltd</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The conversion-focused design has increased our sales by 45%. Every element of the website is strategically placed to drive action."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">MK</div>
                        <div class="author-info">
                            <h4>Mohammed Khan</h4>
                            <p>Marketing Director, FashionHub</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Our bounce rate decreased from 75% to 32% after the redesign. The mobile experience is now flawless across all devices."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">AJ</div>
                        <div class="author-info">
                            <h4>Ayesha Jahan</h4>
                            <p>Founder, HealthWellness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Form -->
    <section class="lead-form-section" id="lead-form">
        <div class="container">
            <div class="lead-form-container">
                <div class="form-header">
                    <h2>Get Your Free Website Consultation</h2>
                    <p>Complete this form and we'll contact you within 24 hours</p>
                </div>
                <div class="form-content">
                    <form>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" placeholder="Enter your name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="Enter your email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" placeholder="Enter your company name">
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Service Interest</label>
                            <select id="service">
                                <option value="">Select a service</option>
                                <option value="new">New Website Design</option>
                                <option value="redesign">Website Redesign</option>
                                <option value="ecommerce">E-commerce Website</option>
                                <option value="webapp">Web Application</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Project Details</label>
                            <textarea id="message" rows="4" placeholder="Tell us about your project..."></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Request Free Consultation</button>
                        
                        <div class="guarantee">
                            <i class="fas fa-lock"></i> We respect your privacy. Your information is 100% secure.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Form submission
        const contactForm = document.querySelector('form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show success message
                alert("Thank you! Your consultation request has been received. We'll contact you within 24 hours.");
                
                // Reset form
                contactForm.reset();
                
                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
        
        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.benefit-card, .portfolio-item, .step, .testimonial-card');
            
            elements.forEach(element => {
                const position = element.getBoundingClientRect();
                
                // If element is in viewport
                if(position.top < window.innerHeight * 0.9) {
                    element.style.opacity = "1";
                    element.style.transform = "translateY(0)";
                }
            });
        };
        
        // Set initial state for animated elements
        window.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.benefit-card, .portfolio-item, .step, .testimonial-card');
            animatedElements.forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateY(30px)";
                el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
            });
            
            // Trigger first check
            animateOnScroll();
        });
        
        // Add scroll event listener
        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>