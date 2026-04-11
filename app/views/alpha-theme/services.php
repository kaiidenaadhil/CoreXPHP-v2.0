  <style>
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
        
        /* Service Page Specific Styles */
        .service-hero {
            background: linear-gradient(135deg, rgba(10, 36, 99, 0.95) 0%, rgba(94, 96, 206, 0.9) 100%);
            padding: 160px 0 100px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .service-hero::before {
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
        
        .service-hero .container {
            position: relative;
            z-index: 2;
        }
        
        .service-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .service-hero p {
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
        
        .service-category {
            margin-bottom: 100px;
            position: relative;
        }
        
        .category-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .category-header h3 {
            font-size: 2.5rem;
            display: inline-block;
            position: relative;
            padding: 0 30px;
            background: var(--bg-primary);
            z-index: 2;
        }
        
        .category-header::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient);
            z-index: 1;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }
        
        .service-detail-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 100%;
            border: 1px solid var(--card-border);
            position: relative;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .service-detail-card:hover {
            transform: translateY(-15px) rotateY(5deg);
            box-shadow: var(--card-hover-shadow);
        }
        
        .service-icon-header {
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            color: var(--secondary-teal);
            background-color: rgba(0, 180, 216, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .service-icon-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(94, 96, 206, 0.1));
            z-index: 1;
        }
        
        .service-icon-header i {
            position: relative;
            z-index: 2;
        }
        
        .service-detail-content {
            padding: 40px 30px;
            position: relative;
        }
        
        .service-detail-content::before {
            content: "";
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 4px;
            background: var(--gradient);
            border-radius: 10px;
        }
        
        .service-detail-content h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary-blue);
            text-align: center;
        }
        
        .service-features {
            list-style: none;
            margin: 30px 0;
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
        
        .service-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .service-tab-btn {
            padding: 15px 35px;
            background: none;
            border: none;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            cursor: pointer;
            position: relative;
            transition: var(--transition);
            border-radius: 50px;
            background: var(--bg-tertiary);
        }
        
        .service-tab-btn.active {
            background: var(--gradient);
            color: var(--text-inverse);
            box-shadow: 0 5px 20px rgba(0, 180, 216, 0.3);
        }
        
        .service-tab-btn:hover:not(.active) {
            background: rgba(0, 180, 216, 0.1);
        }
        
        .service-tab-content {
            display: none;
        }
        
        .service-tab-content.active {
            display: block;
        }
        
        .package-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .package-card {
            background: var(--card-bg);
            border-radius: 25px;
            padding: 40px 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            z-index: 1;
            border: 2px solid var(--medium-gray);
            display: flex;
            flex-direction: column;
            height: 100%;
            transform: translateY(0);
        }
        
        .package-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--card-hover-shadow);
        }
        
        .package-card.popular {
            border: 2px solid var(--secondary-teal);
            transform: scale(1.03);
            box-shadow: 0 15px 50px rgba(0, 180, 216, 0.3);
        }
        
        .package-card.popular:hover {
            transform: scale(1.03) translateY(-15px);
        }
        
        .popular-badge {
            position: absolute;
            top: -15px;
            right: 30px;
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 8px 25px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.9rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .package-header {
            text-align: center;
            padding-bottom: 25px;
            margin-bottom: 25px;
            border-bottom: 2px solid var(--medium-gray);
        }
        
        .package-header h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }
        
        .price {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--accent-purple);
            margin: 15px 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .price span {
            font-size: 1.2rem;
            color: var(--text-primary);
            font-weight: normal;
        }
        
        .package-features {
            margin: 30px 0;
            flex-grow: 1;
        }
        
        .package-features ul {
            list-style: none;
        }
        
        .package-features li {
            padding: 12px 0;
            display: flex;
            align-items: center;
            border-bottom: 1px dashed var(--medium-gray);
        }
        
        .package-features li:last-child {
            border-bottom: none;
        }
        
        .package-features li i {
            color: var(--secondary-teal);
            margin-right: 15px;
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }
        
        .package-cta {
            text-align: center;
            margin-top: 30px;
        }
        
        .consultation-section {
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 100px 0;
            border-radius: 30px;
            margin-top: 80px;
            position: relative;
            overflow: hidden;
        }
        
        .consultation-section::before {
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
        
        .consultation-section .container {
            position: relative;
            z-index: 2;
        }
        
        .consultation-section .section-title h2 {
            background: linear-gradient(90deg, var(--text-inverse), rgba(255,255,255,0.7));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .consultation-section .section-title p {
            color: rgba(255,255,255,0.9);
        }
        
        .consultation-section .section-title::after {
            background: rgba(255,255,255,0.5);
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }
        
        .service-benefits {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255,255,255,0.15);
        }
        
        .service-benefit {
            display: flex;
            margin-bottom: 35px;
            align-items: flex-start;
        }
        
        .benefit-icon {
            min-width: 70px;
            height: 70px;
            background: rgba(0, 180, 216, 0.15);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            font-size: 2rem;
            color: var(--text-inverse);
        }
        
        .benefit-content h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--text-inverse);
        }
        
        .benefit-content p {
            color: rgba(255,255,255,0.8);
        }
        
        .consultation-form {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.15);
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
        
        /* New Styles for Enhanced Content */
        .service-intro {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .service-intro h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-blue);
        }
        
        .service-intro p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            color: var(--text-primary);
        }
        
        .service-description {
            margin-bottom: 40px;
        }
        
        .service-description p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .benefits-list {
            margin: 30px 0;
        }
        
        .benefits-list h4 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }
        
        .service-cta {
            text-align: center;
            margin-top: 40px;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .service-hero h1 {
                font-size: 2.8rem;
            }
            
            .service-hero p {
                font-size: 1.2rem;
            }
            
            .service-intro h2 {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .service-hero {
                padding: 120px 0 70px;
            }
            
            .service-hero h1 {
                font-size: 2.3rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .category-header h3 {
                font-size: 2rem;
            }
            
            .service-tabs {
                flex-direction: column;
                align-items: center;
            }
            
            .service-tab-btn {
                width: 100%;
                max-width: 300px;
            }
            
            .service-intro h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .service-hero h1 {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
            }
            
            .category-header h3 {
                font-size: 1.7rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .service-intro h2 {
                font-size: 1.8rem;
            }
        }
    </style>

    <!-- Service Page Content -->
    <section class="service-hero">
        <div class="container">
            <div class="hero-content">
                <h1>🚀 Power Your Growth with Expert Digital Solutions</h1>
                <p>We help ambitious businesses like yours scale faster through innovative technology, growth-driven marketing, and powerful brand experiences. Let's build your success story together.</p>
                <div class="hero-buttons">
                    <a href="#consultation" class="btn">Request a Free Strategy Call</a>
                    <a href="#services" class="btn btn-outline">Explore Our Solutions</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Digital Service Solutions</h2>
                <p>Tailored Digital Solutions to Fuel Your Business Growth</p>
            </div>
            
            <div class="service-intro">
                <p>From web platforms to marketing funnels, we craft end-to-end digital ecosystems that drive real results.</p>
            </div>
            
            <div class="service-category">
                <div class="category-header">
                    <h3>Web Development & Digital Platforms</h3>
                </div>
                
                <div class="service-description">
                    <h3>Future-Ready Web Solutions Built for Results</h3>
                    <p>Our expert developers build scalable, high-performance websites and applications customized to your business goals. Whether you need a corporate website or a full-scale web app, we deliver clean code, flawless functionality, and growth-focused architecture.</p>
                    
                    <div class="benefits-list">
                        <h4>Key Benefits:</h4>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Modern, responsive design for seamless user experience</li>
                            <li><i class="fas fa-check"></i> Custom development (built on our CoreXPHP framework)</li>
                            <li><i class="fas fa-check"></i> API integrations & automation</li>
                            <li><i class="fas fa-check"></i> Optimized for performance and security</li>
                            <li><i class="fas fa-check"></i> Long-term maintenance & support options</li>
                        </ul>
                    </div>
                    
                    <div class="service-cta">
                        <a href="#consultation" class="btn">Let's Build Your Platform ➔</a>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Custom Web Development</h3>
                            <p>Bespoke web applications built to solve your unique business challenges. Our solutions are scalable, secure, and designed for performance.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Responsive, mobile-first development</li>
                                <li><i class="fas fa-check"></i> Custom functionality tailored to your needs</li>
                                <li><i class="fas fa-check"></i> Integration with existing systems</li>
                                <li><i class="fas fa-check"></i> Ongoing maintenance and support</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>UI/UX Design</h3>
                            <p>Designs That Delight, Experiences That Convert. We blend creativity with data-driven insights to craft intuitive designs that drive engagement.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Audience research & journey mapping</li>
                                <li><i class="fas fa-check"></i> Interactive prototypes & wireframes</li>
                                <li><i class="fas fa-check"></i> Beautiful, intuitive user interfaces</li>
                                <li><i class="fas fa-check"></i> Usability testing & iteration</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>E-commerce Development</h3>
                            <p>E-commerce That Converts Visitors into Loyal Buyers. We build seamless shopping experiences across web and mobile.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Custom or platform-based solutions</li>
                                <li><i class="fas fa-check"></i> Secure payment integrations</li>
                                <li><i class="fas fa-check"></i> Streamlined order management</li>
                                <li><i class="fas fa-check"></i> Mobile-first shopping experiences</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-category">
                <div class="category-header">
                    <h3>Digital Marketing & Growth</h3>
                </div>
                
                <div class="service-description">
                    <h3>Data-Driven Marketing That Delivers Results</h3>
                    <p>Our strategic marketing services help you attract, engage, and convert your ideal customers through targeted digital channels.</p>
                    
                    <div class="benefits-list">
                        <h4>Key Benefits:</h4>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Audience targeting & segmentation</li>
                            <li><i class="fas fa-check"></i> Conversion-focused campaigns</li>
                            <li><i class="fas fa-check"></i> Performance tracking & analytics</li>
                            <li><i class="fas fa-check"></i> Continuous optimization</li>
                            <li><i class="fas fa-check"></i> Transparent reporting</li>
                        </ul>
                    </div>
                    
                    <div class="service-cta">
                        <a href="#consultation" class="btn">Grow My Business ➔</a>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Search Engine Optimization (SEO)</h3>
                            <p>Rank Higher. Get Found. Drive Organic Growth. We optimize your entire digital presence to help you rank for the right keywords.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Comprehensive SEO audits & fixes</li>
                                <li><i class="fas fa-check"></i> Content marketing strategies</li>
                                <li><i class="fas fa-check"></i> Keyword research & on-page SEO</li>
                                <li><i class="fas fa-check"></i> Technical SEO (site speed, indexing)</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-hashtag"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Social Media Marketing</h3>
                            <p>Turn Followers Into Engaged Customers. We craft strategic social media campaigns that tell your brand story.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Channel-specific strategy</li>
                                <li><i class="fas fa-check"></i> Content creation & scheduling</li>
                                <li><i class="fas fa-check"></i> Community management</li>
                                <li><i class="fas fa-check"></i> Paid social advertising</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Email & CRM Automation</h3>
                            <p>Engage, Nurture & Convert Your Leads on Autopilot. Automated email workflows that deliver the right message at the right time.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Audience segmentation</li>
                                <li><i class="fas fa-check"></i> Automated workflows</li>
                                <li><i class="fas fa-check"></i> High-converting email design</li>
                                <li><i class="fas fa-check"></i> Performance tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-category">
                <div class="category-header">
                    <h3>Brand & Creative Services</h3>
                </div>
                
                <div class="service-description">
                    <h3>Compelling Brand Experiences That Resonate</h3>
                    <p>We help you craft a distinctive brand identity and create content that connects with your audience on an emotional level.</p>
                    
                    <div class="benefits-list">
                        <h4>Key Benefits:</h4>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Strategic brand positioning</li>
                            <li><i class="fas fa-check"></i> Cohesive visual identity</li>
                            <li><i class="fas fa-check"></i> Engaging content creation</li>
                            <li><i class="fas fa-check"></i> Consistent brand storytelling</li>
                            <li><i class="fas fa-check"></i> Cross-channel implementation</li>
                        </ul>
                    </div>
                    
                    <div class="service-cta">
                        <a href="#consultation" class="btn">Elevate My Brand ➔</a>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Brand Identity Design</h3>
                            <p>Build a Brand That Customers Remember & Trust. Craft a brand presence that speaks your values and sets you apart.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Logo & visual identity design</li>
                                <li><i class="fas fa-check"></i> Brand voice & messaging</li>
                                <li><i class="fas fa-check"></i> Brand guidelines & templates</li>
                                <li><i class="fas fa-check"></i> Consistent brand storytelling</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Content Creation</h3>
                            <p>Content That Connects, Converts & Builds Authority. From blog articles to social videos, we create scroll-stopping content.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Video production & editing</li>
                                <li><i class="fas fa-check"></i> SEO blog writing</li>
                                <li><i class="fas fa-check"></i> Social media content</li>
                                <li><i class="fas fa-check"></i> Infographics & visuals</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-detail-card">
                        <div class="service-icon-header">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="service-detail-content">
                            <h3>Marketing Strategy & Consulting</h3>
                            <p>Plan. Execute. Grow. Get a clear marketing roadmap aligned with your goals.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Market research & insights</li>
                                <li><i class="fas fa-check"></i> Goal-driven campaign planning</li>
                                <li><i class="fas fa-check"></i> Customer journey mapping</li>
                                <li><i class="fas fa-check"></i> KPI tracking & reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing" id="packages">
        <div class="container">
            <div class="section-title">
                <h2>Service Packages</h2>
                <p>Flexible Packages for Every Stage of Growth</p>
            </div>
            
            <div class="service-intro">
                <p>Whether you're launching, growing, or scaling, our solutions adapt to your business needs and goals.</p>
            </div>
            
            <div class="service-tabs">
                <button class="service-tab-btn active" data-tab="web">Web Development</button>
                <button class="service-tab-btn" data-tab="marketing">Digital Marketing</button>
                <button class="service-tab-btn" data-tab="brand">Brand & Creative</button>
            </div>
            
            <div class="service-tab-content active" id="web-tab">
                <div class="package-container">
                    <!-- Starter Package -->
                    <div class="package-card">
                        <div class="package-header">
                            <h3>🌱 Starter Package</h3>
                            <p>Perfect for startups and small businesses launching their digital presence.</p>
                            <div class="price">৳50,000</div>
                        </div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-check"></i> Custom responsive website (up to 5 pages)</li>
                                <li><i class="fas fa-check"></i> Basic SEO setup for search visibility</li>
                                <li><i class="fas fa-check"></i> Social media & Google Business Profile integration</li>
                                <li><i class="fas fa-check"></i> Contact form with lead capture</li>
                                <li><i class="fas fa-check"></i> 1 month of post-launch support</li>
                                <li><i class="fas fa-check"></i> Starter brand kit (logo, color palette, fonts)</li>
                            </ul>
                        </div>
                        <div class="package-cta">
                            <a href="#consultation" class="btn">Get Started ➔</a>
                        </div>
                    </div>
                    
                    <!-- Growth Package -->
                    <div class="package-card popular">
                        <div class="popular-badge">MOST POPULAR</div>
                        <div class="package-header">
                            <h3>🚀 Growth Package</h3>
                            <p>Designed for growing businesses ready to scale their online visibility and sales.</p>
                            <div class="price">৳150,000</div>
                        </div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-check"></i> <strong>All Starter Features</strong></li>
                                <li><i class="fas fa-check"></i> Advanced website features (blog, gallery, etc.)</li>
                                <li><i class="fas fa-check"></i> Social media content & management (1 month)</li>
                                <li><i class="fas fa-check"></i> Ongoing SEO optimization</li>
                                <li><i class="fas fa-check"></i> Monthly performance reports & analytics</li>
                                <li><i class="fas fa-check"></i> Lead magnet & email automation setup</li>
                                <li><i class="fas fa-check"></i> Priority support with faster response times</li>
                            </ul>
                        </div>
                        <div class="package-cta">
                            <a href="#consultation" class="btn">Start Growing ➔</a>
                        </div>
                    </div>
                    
                    <!-- Enterprise Package -->
                    <div class="package-card">
                        <div class="package-header">
                            <h3>🏆 Enterprise Package</h3>
                            <p>Comprehensive digital transformation for established brands seeking market leadership.</p>
                            <div class="price">৳300,000+</div>
                        </div>
                        <div class="package-features">
                            <ul>
                                <li><i class="fas fa-check"></i> <strong>All Growth Features</strong></li>
                                <li><i class="fas fa-check"></i> Custom web applications (CRM, booking systems)</li>
                                <li><i class="fas fa-check"></i> Multi-channel marketing strategy</li>
                                <li><i class="fas fa-check"></i> Dedicated account manager & strategy sessions</li>
                                <li><i class="fas fa-check"></i> Advanced analytics dashboards & KPI tracking</li>
                                <li><i class="fas fa-check"></i> Brand workshops & market positioning strategy</li>
                                <li><i class="fas fa-check"></i> Priority SLAs & on-demand support</li>
                            </ul>
                        </div>
                        <div class="package-cta">
                            <a href="#consultation" class="btn">Transform My Business ➔</a>
                        </div>
                    </div>
                </div>
                
                <div class="service-cta" style="margin-top: 50px;">
                    <p>💬 Not sure what fits? <a href="#consultation" style="color: var(--primary-blue); font-weight: 600;">Contact us for a custom solution ➔</a></p>
                </div>
            </div>
            
            <div class="service-tab-content" id="marketing-tab">
                <!-- Marketing packages would go here -->
            </div>
            
            <div class="service-tab-content" id="brand-tab">
                <!-- Brand packages would go here -->
            </div>
            
            <div class="consultation-section" id="consultation">
                <div class="container">
                    <div class="section-title">
                        <h2>Let's Drive Your Next Big Win</h2>
                        <p>Talk to our experts today and discover how we can unlock your business potential.</p>
                    </div>
                    
                    <div class="contact-grid">
                        <div class="service-benefits">
                            <div class="service-benefit">
                                <div class="benefit-icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Proven Results</h4>
                                    <p>We've helped businesses increase online revenue by up to 200% within 6 months.</p>
                                </div>
                            </div>
                            
                            <div class="service-benefit">
                                <div class="benefit-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Expert Team</h4>
                                    <p>Our specialists have 10+ years of experience in digital transformation.</p>
                                </div>
                            </div>
                            
                            <div class="service-benefit">
                                <div class="benefit-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Security Focused</h4>
                                    <p>All solutions include enterprise-grade security measures.</p>
                                </div>
                            </div>
                            
                            <div class="service-benefit">
                                <div class="benefit-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Data-Driven Approach</h4>
                                    <p>We base all decisions on analytics and measurable results.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="consultation-form">
                            <h3>Request Free Consultation</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="tel" placeholder="Phone Number">
                                </div>
                                
                                <div class="form-group">
                                    <select>
                                        <option value="">Service Interest</option>
                                        <option value="web">Web Development</option>
                                        <option value="design">UI/UX Design</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="seo">SEO</option>
                                        <option value="social">Social Media Marketing</option>
                                        <option value="brand">Branding</option>
                                        <option value="strategy">Marketing Strategy</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <textarea rows="5" placeholder="Tell us about your project..."></textarea>
                                </div>
                                
                                <button type="submit" class="submit-btn">Schedule My Free Consultation ➔</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Service Page Specific JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // Service tab functionality
            const serviceTabBtns = document.querySelectorAll('.service-tab-btn');
            
            serviceTabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons and contents
                    serviceTabBtns.forEach(b => b.classList.remove('active'));
                    document.querySelectorAll('.service-tab-content').forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked button
                    btn.classList.add('active');
                    
                    // Show corresponding content
                    const tabId = btn.getAttribute('data-tab');
                    document.getElementById(`${tabId}-tab`).classList.add('active');
                });
            });
            
            // Animation for service cards
            const serviceCards = document.querySelectorAll('.service-detail-card');
            const serviceObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0) rotateY(0)';
                        }, index * 150);
                        serviceObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            serviceCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(30px) rotateY(10deg)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                serviceObserver.observe(card);
            });
            
            // Animation for package cards
            const packageCards = document.querySelectorAll('.package-card');
            const packageObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 200);
                        packageObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            packageCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(40px)';
                card.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
                packageObserver.observe(card);
            });
        });
    </script>