<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Strategy & Consulting | Avant Vista Ventures</title>
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
        
        /* Why Section */
        .why-section {
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
        
        /* Services Section */
        .services-section {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .service-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: var(--white);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background: rgba(0, 180, 216, 0.1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            font-size: 2rem;
            color: var(--secondary-teal);
        }
        
        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary-blue);
        }
        
        .service-features {
            list-style: none;
            margin: 20px 0;
        }
        
        .service-features li {
            padding: 10px 0;
            display: flex;
            align-items: flex-start;
        }
        
        .service-features li i {
            color: var(--secondary-teal);
            margin-right: 15px;
            margin-top: 5px;
        }
        
        /* Process Section */
        .process-section {
            padding: 100px 0;
            background: var(--white);
        }
        
        .process-steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
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
        
        /* Case Studies */
        .case-studies {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .case-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .case-card {
            background: var(--white);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .case-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .case-card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        .case-stats {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        
        .stat-item {
            background: rgba(0, 180, 216, 0.1);
            padding: 15px 25px;
            border-radius: 15px;
            text-align: center;
            min-width: 150px;
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-purple);
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
            background: var(--light-gray);
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
            background: var(--gradient-primary);
            color: var(--white);
        }
        
        .lead-form-container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: var(--shadow-hover);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .form-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .form-content {
            padding: 20px;
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
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            color: var(--white);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        }
        
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .form-group select option {
            background: var(--primary-blue);
            color: white;
        }
        
        .submit-btn {
            width: 100%;
            background: var(--white);
            color: var(--primary-blue);
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
            
            .lead-form-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Unlock the Full Potential of Your Business</h1>
                <p>Expert Marketing Strategy & Consulting to Drive Measurable Results</p>
                <a href="#lead-form" class="btn">Get Your Free Consultation</a>
            </div>
        </div>
    </section>

    <!-- Why Section -->
    <section class="why-section">
        <div class="container">
            <div class="section-title">
                <h2>Why Marketing Strategy Matters</h2>
                <p>In today's competitive landscape, a strategic approach is essential for sustainable growth</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Targeted Approach</h3>
                    <p>Reach the right audience with the right message at the right time</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Maximized ROI</h3>
                    <p>Allocate your marketing budget efficiently for the best returns</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Measurable Growth</h3>
                    <p>Track progress and optimize campaigns for sustainable results</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Marketing Strategy Services</h2>
                <p>Comprehensive solutions tailored to your business needs</p>
            </div>
            
            <div class="service-cards">
                <!-- Marketing Strategy -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chess"></i>
                    </div>
                    <h3>Marketing Strategy Development</h3>
                    <p>Custom strategies aligned with your business goals</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Market research & competitive analysis</li>
                        <li><i class="fas fa-check"></i> Brand positioning & value proposition</li>
                        <li><i class="fas fa-check"></i> Target audience segmentation</li>
                        <li><i class="fas fa-check"></i> Tactical planning & channel selection</li>
                        <li><i class="fas fa-check"></i> KPI definition & success metrics</li>
                    </ul>
                </div>
                
                <!-- Digital Consulting -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-digital-tachograph"></i>
                    </div>
                    <h3>Digital Marketing Consulting</h3>
                    <p>Expert guidance for digital excellence</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Website optimization for conversions</li>
                        <li><i class="fas fa-check"></i> Search Engine Marketing (SEM/PPC)</li>
                        <li><i class="fas fa-check"></i> Social media strategy development</li>
                        <li><i class="fas fa-check"></i> Email marketing campaign consulting</li>
                        <li><i class="fas fa-check"></i> Marketing automation implementation</li>
                    </ul>
                </div>
                
                <!-- Content Strategy -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Content Strategy & Creation</h3>
                    <p>Engaging content that connects with your audience</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Content planning & calendar development</li>
                        <li><i class="fas fa-check"></i> High-quality content creation</li>
                        <li><i class="fas fa-check"></i> Strategic content distribution</li>
                        <li><i class="fas fa-check"></i> SEO-optimized content frameworks</li>
                        <li><i class="fas fa-check"></i> Performance tracking & optimization</li>
                    </ul>
                </div>
                
                <!-- Brand Strategy -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-trademark"></i>
                    </div>
                    <h3>Brand Strategy Consulting</h3>
                    <p>Build a powerful, differentiated brand</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Brand positioning & messaging</li>
                        <li><i class="fas fa-check"></i> Competitive analysis & differentiation</li>
                        <li><i class="fas fa-check"></i> Brand activation & touchpoint strategy</li>
                        <li><i class="fas fa-check"></i> Brand voice & personality development</li>
                        <li><i class="fas fa-check"></i> Brand consistency across channels</li>
                    </ul>
                </div>
                
                <!-- Analytics -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Marketing Analytics & Reporting</h3>
                    <p>Data-driven decisions for better results</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Campaign performance analysis</li>
                        <li><i class="fas fa-check"></i> Lead generation & conversion tracking</li>
                        <li><i class="fas fa-check"></i> ROI measurement & attribution</li>
                        <li><i class="fas fa-check"></i> Custom reporting dashboards</li>
                        <li><i class="fas fa-check"></i> Actionable insights & recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Avant Vista Ventures</h2>
                <p>We create tailored, results-driven marketing strategies</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Tailored Solutions</h3>
                    <p>Strategies customized to your specific goals and challenges</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Multi-Channel Expertise</h3>
                    <p>Comprehensive knowledge across all marketing channels</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Data-Driven Approach</h3>
                    <p>Decisions backed by insights and analytics</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Sustainable Growth</h3>
                    <p>Focus on long-term success, not just quick wins</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Proven Results</h3>
                    <p>Tangible, measurable outcomes for our clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Proven Process</h2>
                <p>How we drive marketing success for your business</p>
            </div>
            
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Discovery & Research</h3>
                    <p>Understanding your business, goals, and challenges</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Strategy Development</h3>
                    <p>Crafting a customized marketing strategy</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Implementation</h3>
                    <p>Bringing the strategy to life</p>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Optimization</h3>
                    <p>Continuous monitoring and improvement</p>
                </div>
                
                <div class="step">
                    <div class="step-number">5</div>
                    <h3>Reporting</h3>
                    <p>Transparent performance insights</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="case-studies">
        <div class="container">
            <div class="section-title">
                <h2>Client Success Stories</h2>
                <p>Real results from our marketing strategies</p>
            </div>
            
            <div class="case-grid">
                <!-- E-commerce Case -->
                <div class="case-card">
                    <h3>E-Commerce Store: Revenue Increased by 120%</h3>
                    <p>Challenge: Low online sales and limited website traffic</p>
                    <p>Solution: We implemented an SEO and PPC strategy, optimized product pages, and refined their sales funnel</p>
                    
                    <div class="case-stats">
                        <div class="stat-item">
                            <div class="stat-value">120%</div>
                            <div>Revenue Increase</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">3x</div>
                            <div>Traffic Growth</div>
                        </div>
                    </div>
                </div>
                
                <!-- SaaS Case -->
                <div class="case-card">
                    <h3>SaaS Company: 80% More Qualified Leads</h3>
                    <p>Challenge: Struggling to generate high-quality leads</p>
                    <p>Solution: Optimized email marketing campaigns, revamped landing pages, and implemented targeted content strategy</p>
                    
                    <div class="case-stats">
                        <div class="stat-item">
                            <div class="stat-value">80%</div>
                            <div>Lead Increase</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">45%</div>
                            <div>Conversion Rate</div>
                        </div>
                    </div>
                </div>
                
                <!-- Retail Case -->
                <div class="case-card">
                    <h3>Retail Business: Doubled Brand Awareness</h3>
                    <p>Challenge: Limited social media presence and brand recognition</p>
                    <p>Solution: Developed social media strategy with organic posts, influencer collaborations, and paid ads</p>
                    
                    <div class="case-stats">
                        <div class="stat-item">
                            <div class="stat-value">2x</div>
                            <div>Brand Awareness</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">150%</div>
                            <div>Engagement Increase</div>
                        </div>
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
                <p>Don't just take our word for it</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Avant Vista Ventures helped us define a clear marketing strategy that led to increased lead generation and sales. Their team is knowledgeable, responsive, and results-oriented!"</p>
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
                        <p>"Thanks to Avant Vista's strategic insights and recommendations, our marketing campaigns have seen incredible success. We've significantly improved brand awareness and conversions."</p>
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
                        <p>"Their marketing consulting services gave us the clarity and strategy we needed to scale our business. Our sales and website traffic have both increased drastically!"</p>
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
                    <h2>Ready to Supercharge Your Marketing Strategy?</h2>
                    <p>Get your free marketing consultation today</p>
                </div>
                
                <div class="form-content">
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
                            <select>
                                <option value="">Service Interest</option>
                                <option>Marketing Strategy Development</option>
                                <option>Digital Marketing Consulting</option>
                                <option>Content Strategy & Creation</option>
                                <option>Brand Strategy Consulting</option>
                                <option>Marketing Analytics & Reporting</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <textarea rows="4" placeholder="Tell us about your project..."></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Request Free Consultation</button>
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
            });
        }
        
        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.benefit-card, .service-card, .step, .case-card, .testimonial-card');
            
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
            const animatedElements = document.querySelectorAll('.benefit-card, .service-card, .step, .case-card, .testimonial-card');
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