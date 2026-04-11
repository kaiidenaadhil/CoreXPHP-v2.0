  <style>
        /* Hero Section */
        .case-hero {
            height: 80vh;
            min-height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 2rem;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            background-size: 200% 200%;
            animation: gradientAnimation 15s ease infinite;
            margin-bottom: 4rem;
        }
        
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .case-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: var(--text-inverse);
            letter-spacing: -1px;
            max-width: 900px;
        }

        .case-hero .client-name {
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .case-hero .overview {
            font-size: 1.3rem;
            max-width: 700px;
            margin-bottom: 2rem;
            color: var(--text-inverse);
            font-weight: 300;
            opacity: 0.9;
        }

        .case-meta {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
            max-width: 800px;
        }

        .meta-item {
            background: rgba(255, 255, 255, 0.15);
            color: var(--text-inverse);
            border-radius: 12px;
            padding: 1rem 1.8rem;
            min-width: 200px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .meta-item h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
            opacity: 0.8;
        }

        .meta-item p {
            font-size: 1.2rem;
            font-weight: 500;
        }

        /* Content Sections */
        .case-section {
            margin: 5rem 0;
        }

        .section-header {
            margin-bottom: 3rem;
            text-align: center;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-header p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: var(--text-primary);
        }

        .section-divider {
            width: 100px;
            height: 4px;
            background: var(--gradient);
            border-radius: 10px;
            margin: 1.5rem auto;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .content-text {
            padding: 1rem;
        }

        .content-text h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
        }

        .content-text p {
            margin-bottom: 1.5rem;
            color: var(--text-primary);
        }

        .content-image {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 400px;
        }

        .content-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Stats Section */
        .stats-section {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 4rem;
            margin: 5rem 0;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.02);
            border: 1px solid var(--medium-gray);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
        }

        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--secondary-teal);
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text-primary);
        }

        /* Testimonial */
        .testimonial-section {
            background: var(--bg-secondary);
            border-radius: 20px;
            padding: 4rem;
            margin: 5rem 0;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            position: relative;
        }

        .testimonial-section::before {
            content: '"';
            position: absolute;
            top: 30px;
            left: 50px;
            font-family: 'Playfair Display', serif;
            font-size: 8rem;
            color: rgba(0, 180, 216, 0.1);
            line-height: 1;
        }

        .testimonial-content {
            font-size: 1.5rem;
            font-style: italic;
            margin-bottom: 2rem;
            color: var(--text-primary);
            position: relative;
            z-index: 1;
            max-width: 900px;
        }

        .client-info {
            display: flex;
            align-items: center;
        }

        .client-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--text-inverse);
        }

        .client-details h4 {
            font-weight: 600;
            margin-bottom: 0.2rem;
            color: var(--primary-blue);
            font-size: 1.4rem;
        }

        .client-details p {
            color: var(--text-primary);
            font-size: 1.1rem;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient);
            border-radius: 20px;
            padding: 5rem 2rem;
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

        /* Back Button */
        .back-btn {
            position: absolute;
            top: 30px;
            left: 30px;
            z-index: 100;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: var(--text-inverse);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(5px);
        }

        .back-btn:hover {
            transform: translateX(-5px);
            background: rgba(255, 255, 255, 0.3);
        }


        /* Responsive */
        @media (max-width: 992px) {
            .case-hero h1 {
                font-size: 3rem;
            }
            
            .content-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .case-hero {
                height: auto;
                padding: 6rem 2rem 3rem;
            }
            
            .case-hero h1 {
                font-size: 2.5rem;
            }
            
            .case-meta {
                flex-direction: column;
                gap: 1rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .testimonial-section {
                padding: 3rem 2rem;
            }
            
            .testimonial-content {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body data-theme="light">

    <!-- Hero Section -->
    <section class="case-hero">
        <div class="client-name">Retail Giant Corporation</div>
        <h1>Global Retail Analytics Platform</h1>
        <p class="overview">Revolutionizing decision-making for retail chains with real-time analytics and predictive insights</p>
        
        <div class="case-meta">
            <div class="meta-item">
                <h3>Industry</h3>
                <p>Retail & E-commerce</p>
            </div>
            <div class="meta-item">
                <h3>Timeline</h3>
                <p>8 Months</p>
            </div>
            <div class="meta-item">
                <h3>Location</h3>
                <p>Global Implementation</p>
            </div>
            <div class="meta-item">
                <h3>Results</h3>
                <p>+37% Revenue Growth</p>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- The Challenge -->
        <section class="case-section">
            <div class="section-header">
                <h2>The Challenge</h2>
                <div class="section-divider"></div>
                <p>Facing market disruption and changing consumer behavior, our client needed a solution to transform their decision-making process</p>
            </div>
            
            <div class="content-grid">
                <div class="content-text">
                    <h3>Struggling with Data Overload</h3>
                    <p>Retail Giant Corporation, with over 2,000 stores worldwide, was drowning in disconnected data sources. Their legacy systems couldn't process the 12 million daily data points generated across their global operations.</p>
                    <p>Decision-makers were forced to rely on outdated weekly reports, missing critical opportunities for optimization. Inventory mismanagement led to $78M in annual waste, while customer insights were delayed by weeks.</p>
                    <p>As e-commerce competitors gained market share with real-time personalization, Retail Giant's leadership knew they needed a transformative solution to regain their competitive edge.</p>
                </div>
                <div class="content-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Retail Challenge">
                </div>
            </div>
        </section>

        <!-- The Solution -->
        <section class="case-section">
            <div class="section-header">
                <h2>Our Solution</h2>
                <div class="section-divider"></div>
                <p>We built a unified analytics platform powered by AI and machine learning to transform data into actionable insights</p>
            </div>
            
            <div class="content-grid">
                <div class="content-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Retail Solution">
                </div>
                <div class="content-text">
                    <h3>Real-time Intelligence Platform</h3>
                    <p>We designed and implemented a cloud-based analytics platform that integrates 23 disparate data sources into a single unified dashboard. Using advanced machine learning algorithms, we created predictive models that anticipate market trends and consumer behavior.</p>
                    <p>The solution features:</p>
                    <ul style="margin-left: 1.5rem; margin-bottom: 1.5rem;">
                        <li>Real-time inventory optimization across all locations</li>
                        <li>Personalized customer journey mapping</li>
                        <li>Predictive sales forecasting with 94% accuracy</li>
                        <li>Automated replenishment systems</li>
                        <li>Competitive pricing intelligence</li>
                    </ul>
                    <p>Our platform processes over 12 million data points daily, transforming raw information into actionable business intelligence accessible to decision-makers at all levels.</p>
                </div>
            </div>
        </section>

        <!-- The Results -->
        <section class="case-section">
            <div class="section-header">
                <h2>The Results</h2>
                <div class="section-divider"></div>
                <p>Transformative outcomes that redefined Retail Giant's position in the global market</p>
            </div>
            
            <div class="stats-section">
                <div class="stats-grid">
                    <div class="stat-card">
                        <i class="fas fa-chart-line"></i>
                        <div class="stat-value">+37%</div>
                        <div class="stat-label">Revenue Growth</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-percentage"></i>
                        <div class="stat-value">-42%</div>
                        <div class="stat-label">Inventory Waste</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="stat-value">+28%</div>
                        <div class="stat-label">Average Order Value</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-clock"></i>
                        <div class="stat-value">65%</div>
                        <div class="stat-label">Faster Decisions</div>
                    </div>
                </div>
            </div>
            
            <div class="content-grid">
                <div class="content-text">
                    <h3>Business Transformation</h3>
                    <p>Within six months of implementation, Retail Giant saw remarkable improvements across all key performance indicators. The predictive analytics platform identified emerging market trends 3-4 weeks faster than competitors, allowing for strategic inventory positioning.</p>
                    <p>Personalization algorithms increased customer retention by 33% and boosted average order value by 28%. Real-time inventory optimization reduced waste by 42%, saving $32M annually.</p>
                    <p>Most importantly, the platform empowered local managers with actionable insights, reducing decision-making time by 65% and improving regional performance by an average of 19%.</p>
                </div>
                <div class="content-image">
                    <img src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Retail Results">
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="case-section">
            <div class="testimonial-section">
                <p class="testimonial-content">"The retail analytics platform transformed how we operate at every level. What used to take weeks of analysis now happens in real-time. We've not only increased profitability but have fundamentally changed how we understand our customers."</p>
                <div class="client-info">
                    <div class="client-avatar">SD</div>
                    <div class="client-details">
                        <h4>Sarah Donovan</h4>
                        <p>Chief Operations Officer, Retail Giant Corporation</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <div class="cta-section">
            <h2>Ready to Transform Your Business?</h2>
            <p>Discover how our data-driven solutions can create similar results for your organization</p>
            <a href="#" class="btn">Schedule a Consultation</a>
        </div>
    </div>

</body>
</html>