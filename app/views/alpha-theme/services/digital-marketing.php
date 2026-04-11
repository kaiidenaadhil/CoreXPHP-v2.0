<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Services | Avant Vista Ventures</title>
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
        
        /* Digital Marketing Hero */
        .dm-hero {
            background: linear-gradient(135deg, rgba(10, 36, 99, 0.95) 0%, rgba(94, 96, 206, 0.9) 100%);
            padding: 160px 0 100px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .dm-hero::before {
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
        
        .dm-hero .container {
            position: relative;
            z-index: 2;
        }
        
        .dm-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .dm-hero p {
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
        
        /* Why Digital Marketing Section */
        .why-dm {
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
            background: rgba(0, 180, 216, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.5rem;
            color: var(--secondary-teal);
        }
        
        .benefit-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        /* Services Section */
        .dm-services {
            padding: 100px 0;
            background-color: var(--bg-primary);
        }
        
        .services-accordion {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .service-item {
            margin-bottom: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: var(--card-bg);
            border: 1px solid var(--card-border);
        }
        
        .service-header {
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            background: var(--card-bg);
        }
        
        .service-header h3 {
            font-size: 1.4rem;
            color: var(--primary-blue);
            margin: 0;
        }
        
        .service-header i {
            font-size: 1.2rem;
            color: var(--secondary-teal);
            transition: var(--transition);
        }
        
        .service-header.active i {
            transform: rotate(180deg);
        }
        
        .service-content {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .service-content-inner {
            padding: 0 0 30px;
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
            color: var(--secondary-teal);
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
        .dm-process {
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
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background-color: var(--bg-secondary);
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
            color: rgba(0, 180, 216, 0.1);
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
        .dm-cta {
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .dm-cta::before {
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
        
        .dm-cta .container {
            position: relative;
            z-index: 2;
        }
        
        .dm-cta h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .dm-cta p {
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
            
            .dm-hero h1 {
                font-size: 2.8rem;
            }
            
            .dm-hero p {
                font-size: 1.2rem;
            }
            
            .dm-cta h2 {
                font-size: 2.3rem;
            }
        }
        
        @media (max-width: 768px) {
            .dm-hero {
                padding: 120px 0 70px;
            }
            
            .dm-hero h1 {
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
            
            .dm-cta h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .dm-hero h1 {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
            }
            
            .dm-cta h2 {
                font-size: 1.8rem;
            }
            
            .consultation-form {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Digital Marketing Hero -->
    <section class="dm-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Unlock Your Business Growth with Expert Digital Marketing Services</h1>
                <p>At Avant Vista Ventures, we don't just do digital marketing — we empower businesses to achieve measurable growth. Whether you're looking to increase brand awareness, boost website traffic, or drive conversions, our tailored digital marketing strategies are designed to deliver exceptional results.</p>
                <div class="hero-buttons">
                    <a href="#consultation" class="btn">Request a Free Consultation</a>
                    <a href="#services" class="btn btn-outline">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Digital Marketing Section -->
    <section class="why-dm" id="why">
        <div class="container">
            <div class="section-title">
                <h2>Why Digital Marketing?</h2>
                <p>The Modern Solution for Business Growth</p>
            </div>
            
            <p style="text-align: center; font-size: 1.2rem; max-width: 800px; margin: 0 auto 60px;">In today's competitive landscape, traditional marketing methods are no longer enough. Digital marketing gives you the ability to reach your ideal audience where they are: online.</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Reach a Larger Audience</h3>
                    <p>With billions of people online, digital marketing allows you to tap into global and local markets.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3>Cost-Effective</h3>
                    <p>Compared to traditional marketing, digital strategies offer measurable results with a fraction of the cost.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Real-Time Results</h3>
                    <p>Measure and analyze your marketing campaigns instantly, adjusting strategies for continuous improvement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Marketing Services -->
    <section class="dm-services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Digital Marketing Solutions</h2>
                <p>Tailored to Your Needs</p>
            </div>
            
            <p style="text-align: center; font-size: 1.2rem; max-width: 800px; margin: 0 auto 60px;">We offer a full spectrum of digital marketing services, each designed to address the unique challenges of your business. Our approach is data-driven, goal-oriented, and designed to boost your ROI.</p>
            
            <div class="services-accordion">
                <!-- SEO Service -->
                <div class="service-item">
                    <div class="service-header">
                        <h3><i class="fas fa-search"></i> Search Engine Optimization (SEO)</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-content-inner">
                            <p>Get your website noticed on Google. Our SEO strategies are focused on improving your rankings and driving organic traffic to your site.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Comprehensive site audits to pinpoint SEO weaknesses</li>
                                <li><i class="fas fa-check"></i> Keyword research to target the right search terms</li>
                                <li><i class="fas fa-check"></i> On-page and technical optimization</li>
                                <li><i class="fas fa-check"></i> Content strategies that improve rankings</li>
                                <li><i class="fas fa-check"></i> Continuous monitoring and reporting</li>
                            </ul>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="#consultation" class="btn">Boost My SEO</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- PPC Service -->
                <div class="service-item">
                    <div class="service-header">
                        <h3><i class="fas fa-ad"></i> Pay-Per-Click (PPC) Advertising</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-content-inner">
                            <p>Maximize your marketing budget with PPC campaigns that deliver immediate results.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Google Ads and Bing Ads campaigns</li>
                                <li><i class="fas fa-check"></i> Remarketing strategies to re-engage visitors</li>
                                <li><i class="fas fa-check"></i> Detailed performance tracking</li>
                                <li><i class="fas fa-check"></i> Conversion optimization</li>
                                <li><i class="fas fa-check"></i> A/B testing for better performance</li>
                            </ul>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="#consultation" class="btn">Launch My Ads</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Marketing -->
                <div class="service-item">
                    <div class="service-header">
                        <h3><i class="fas fa-hashtag"></i> Social Media Marketing</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-content-inner">
                            <p>Grow your brand and engage your audience across platforms like Facebook, Instagram, LinkedIn, and more.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Platform-specific strategies</li>
                                <li><i class="fas fa-check"></i> High-quality content creation</li>
                                <li><i class="fas fa-check"></i> Social media account management</li>
                                <li><i class="fas fa-check"></i> Performance tracking and optimization</li>
                                <li><i class="fas fa-check"></i> Targeted ad campaigns</li>
                            </ul>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="#consultation" class="btn">Grow My Social Media</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Email Marketing -->
                <div class="service-item">
                    <div class="service-header">
                        <h3><i class="fas fa-envelope"></i> Email Marketing</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-content-inner">
                            <p>Nurture relationships and keep your customers engaged with personalized email campaigns.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> List segmentation and personalized messaging</li>
                                <li><i class="fas fa-check"></i> Automated email workflows</li>
                                <li><i class="fas fa-check"></i> A/B testing for optimization</li>
                                <li><i class="fas fa-check"></i> Performance analytics</li>
                                <li><i class="fas fa-check"></i> High-converting email design</li>
                            </ul>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="#consultation" class="btn">Start Email Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Content Marketing -->
                <div class="service-item">
                    <div class="service-header">
                        <h3><i class="fas fa-pen-fancy"></i> Content Marketing</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-content-inner">
                            <p>Content is king, and we help you create content that educates, entertains, and converts.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Blog posts, articles, and infographics</li>
                                <li><i class="fas fa-check"></i> Video marketing</li>
                                <li><i class="fas fa-check"></i> SEO-optimized content</li>
                                <li><i class="fas fa-check"></i> Content strategy development</li>
                                <li><i class="fas fa-check"></i> Content distribution</li>
                            </ul>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="#consultation" class="btn">Create Amazing Content</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Conversion Rate Optimization -->
                <div class="service-item">
                    <div class="service-header">
                        <h3><i class="fas fa-exchange-alt"></i> Conversion Rate Optimization (CRO)</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-content-inner">
                            <p>Is your website converting visitors into customers? We analyze user behavior and make changes that optimize conversion rates.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Landing page optimization</li>
                                <li><i class="fas fa-check"></i> A/B testing</li>
                                <li><i class="fas fa-check"></i> User experience analysis</li>
                                <li><i class="fas fa-check"></i> Heatmap and session recording</li>
                                <li><i class="fas fa-check"></i> Continuous improvement</li>
                            </ul>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="#consultation" class="btn">Optimize My Conversions</a>
                            </div>
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
                <p>We go beyond traditional digital marketing to deliver results that matter</p>
            </div>
            
            <div class="advantages-grid">
                <div class="advantage-card">
                    <h3>Data-Driven Decisions</h3>
                    <p>Every campaign is built on real data. We measure results, analyze, and refine our strategies to ensure continuous improvement.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Tailored Solutions</h3>
                    <p>We understand that every business is unique. That's why we create personalized marketing strategies that align with your goals.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Proven Track Record</h3>
                    <p>We've helped businesses across industries generate qualified leads, boost sales, and grow their brands through innovative digital strategies.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Full Transparency</h3>
                    <p>We believe in keeping our clients informed. You'll receive detailed reports that highlight campaign performance and ROI.</p>
                </div>
                
                <div class="advantage-card">
                    <h3>Long-Term Growth</h3>
                    <p>Our goal is not just quick wins — we focus on sustainable growth for your business, ensuring long-term success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section class="dm-process">
        <div class="container">
            <div class="section-title">
                <h2>Our Digital Marketing Process</h2>
                <p>How we make it happen</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="process-step-number">1</div>
                    <h3>Discovery & Analysis</h3>
                    <p>We begin by understanding your business, audience, and marketing goals through competitive analysis and market research.</p>
                </div>
                
                <div class="process-step">
                    <div class="process-step-number">2</div>
                    <h3>Strategy Development</h3>
                    <p>We develop a custom digital marketing strategy designed to meet your goals, selecting the best tactics and channels.</p>
                </div>
                
                <div class="process-step">
                    <div class="process-step-number">3</div>
                    <h3>Implementation</h3>
                    <p>Our team executes the strategy, continuously optimizing and refining campaigns to maximize performance and ROI.</p>
                </div>
                
                <div class="process-step">
                    <div class="process-step-number">4</div>
                    <h3>Monitoring & Reporting</h3>
                    <p>We provide regular updates and performance reports, ensuring transparency and understanding of your campaigns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Client Success Stories</h2>
                <p>Our clients have seen real-world results from our digital marketing services</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The digital marketing strategies Avant Vista Ventures implemented helped us triple our lead generation. The results speak for themselves!"</p>
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
                        <p>"Their approach to SEO and social media marketing has transformed our brand presence. We've seen a massive increase in engagement and conversions."</p>
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
                        <p>"Avant Vista's personalized digital marketing services helped us improve our online visibility and drive more traffic to our site. We've had fantastic results!"</p>
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

    <!-- CTA Section -->
    <section class="dm-cta" id="consultation">
        <div class="container">
            <h2>Ready to Elevate Your Brand?</h2>
            <p>Transform your digital marketing efforts into real results. Whether you're looking to increase website traffic, generate more leads, or boost sales, our team is ready to help.</p>
            
            <div class="consultation-form">
                <h3>Get Your Free Digital Marketing Consultation</h3>
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
        // Accordion functionality for services
        document.addEventListener('DOMContentLoaded', function() {
            const serviceHeaders = document.querySelectorAll('.service-header');
            
            serviceHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    const isActive = header.classList.contains('active');
                    
                    // Close all other accordion items
                    document.querySelectorAll('.service-content').forEach(item => {
                        if (item !== content) {
                            item.style.maxHeight = null;
                            item.previousElementSibling.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    if (isActive) {
                        header.classList.remove('active');
                        content.style.maxHeight = null;
                    } else {
                        header.classList.add('active');
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                });
            });
            
            // Open first accordion by default
            if (serviceHeaders.length > 0) {
                serviceHeaders[0].click();
            }
            
            // Animation for benefit cards
            const benefitCards = document.querySelectorAll('.benefit-card, .advantage-card, .process-step, .testimonial-card');
            const benefitObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 150);
                        benefitObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            benefitCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                benefitObserver.observe(card);
            });
        });
    </script>
</body>
</html>