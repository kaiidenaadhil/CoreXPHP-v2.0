
<style>

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
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
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
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin-bottom: 3rem;
            color: var(--text-inverse);
            font-weight: 300;
            opacity: 0.9;
        }

        .filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
            max-width: 800px;
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.15);
            color: var(--text-inverse);
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .filter-btn:hover, .filter-btn.active {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
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

        /* Case Studies Grid */
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            text-align: center;
            margin: 4rem 0 3rem;
            position: relative;
        }

        .section-title h2 {
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
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

        .case-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin: 3rem 0;
        }

        .case-card {
            background: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--card-border);
            display: flex;
            flex-direction: column;
        }

        .case-card:hover {
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

        .case-card:hover .card-image img {
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

        .stats {
            display: flex;
            justify-content: space-between;
            margin: 1.5rem 0;
            padding-top: 1.5rem;
            border-top: 1px solid var(--medium-gray);
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

        .btn {
            display: inline-block;
            background: var(--gradient);
            color: var(--text-inverse);
            border: none;
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
            margin-top: auto;
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

        .btn-outline {
            background: transparent;
            border: 2px solid var(--text-inverse);
            color: var(--text-inverse);
        }

        .btn-outline:hover {
            background: var(--btn-outline-hover-bg);
            color: var(--btn-outline-hover-color);
        }

        /* Featured Case Study */
        .featured-case {
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

        .result-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .result-card {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid var(--medium-gray);
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

  

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            
            .featured-case {
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
            
            .case-grid {
                grid-template-columns: 1fr;
            }
            
            .filters {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>



    <!-- Hero Section -->
    <section class="hero">
        <h1>Transforming Vision into Success Stories</h1>
        <p>Discover how we've helped industry leaders overcome challenges and achieve remarkable results</p>
        
        <div class="filters">
            <button class="filter-btn active">All Industries</button>
            <button class="filter-btn">Technology</button>
            <button class="filter-btn">Healthcare</button>
            <button class="filter-btn">Finance</button>
            <button class="filter-btn">Retail</button>
            <button class="filter-btn">Manufacturing</button>
        </div>
        
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
            <span>Explore Case Studies</span>
        </div>
    </section>

    <div class="container">
        <!-- Case Studies Grid -->
        <h2 class="section-title"><h2>Featured Case Studies</h2></h2>
        <div class="case-grid">
            <div class="case-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Retail Analytics">
                    <div class="card-tag">Retail</div>
                </div>
                <div class="card-content">
                    <h3>Global Retail Analytics Platform</h3>
                    <p>Revolutionized decision-making for retail chains with real-time analytics and predictive insights, increasing profitability by 37%.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">+37%</div>
                            <div class="stat-label">Revenue Growth</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">12M</div>
                            <div class="stat-label">Data Points</div>
                        </div>
                    </div>
                    <a href="case-study-retail.html" target="_blank" class="btn">View Case Study</a>
                </div>
            </div>

            <div class="case-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Healthcare System">
                    <div class="card-tag">Healthcare</div>
                </div>
                <div class="card-content">
                    <h3>Healthcare Appointment System</h3>
                    <p>Redesigned patient experience with AI-powered scheduling reducing wait times by 65% and increasing satisfaction to 98%.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">-65%</div>
                            <div class="stat-label">Wait Time</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Satisfaction</div>
                        </div>
                    </div>
                    <a href="case-study-healthcare.html" target="_blank" class="btn">View Case Study</a>
                </div>
            </div>

            <div class="case-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Manufacturing Automation">
                    <div class="card-tag">Manufacturing</div>
                </div>
                <div class="card-content">
                    <h3>Manufacturing Automation</h3>
                    <p>Implemented intelligent robotics system that increased production capacity by 240% while reducing defects by 92%.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">240%</div>
                            <div class="stat-label">Production</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">-92%</div>
                            <div class="stat-label">Defects</div>
                        </div>
                    </div>
                    <a href="case-study-manufacturing.html" target="_blank" class="btn">View Case Study</a>
                </div>
            </div>
            
            <div class="case-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fintech Platform">
                    <div class="card-tag">Finance</div>
                </div>
                <div class="card-content">
                    <h3>Fintech Security Platform</h3>
                    <p>Developed blockchain-based security system for financial transactions, reducing fraud by 99.7% and saving $2.8M annually.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">99.7%</div>
                            <div class="stat-label">Fraud Reduction</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">$2.8M</div>
                            <div class="stat-label">Annual Savings</div>
                        </div>
                    </div>
                    <a href="case-study-fintech.html" target="_blank" class="btn">View Case Study</a>
                </div>
            </div>
            
            <div class="case-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Education Platform">
                    <div class="card-tag">Education</div>
                </div>
                <div class="card-content">
                    <h3>E-Learning Platform</h3>
                    <p>Created adaptive learning platform that improved student engagement by 180% and increased course completion rates by 65%.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">+180%</div>
                            <div class="stat-label">Engagement</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">65%</div>
                            <div class="stat-label">Completion Rate</div>
                        </div>
                    </div>
                    <a href="case-study-education.html" target="_blank" class="btn">View Case Study</a>
                </div>
            </div>
            
            <div class="case-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Logistics Solution">
                    <div class="card-tag">Logistics</div>
                </div>
                <div class="card-content">
                    <h3>Supply Chain Optimization</h3>
                    <p>Implemented AI-driven logistics solution that reduced delivery times by 42% and decreased operational costs by 28%.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value">-42%</div>
                            <div class="stat-label">Delivery Time</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">-28%</div>
                            <div class="stat-label">Operational Cost</div>
                        </div>
                    </div>
                    <a href="case-study-logistics.html" target="_blank" class="btn">View Case Study</a>
                </div>
            </div>
        </div>

        <!-- Featured Case Study -->
        <div class="featured-case">
            <div class="featured-content">
                <h2>Transforming Financial Services</h2>
                <p>When a leading global bank approached us with challenges in customer retention and digital transformation, we crafted a multi-phase solution that combined AI-driven personalization with blockchain security.</p>
                <p>Our platform analyzed over 50 million transactions to identify patterns and opportunities, resulting in hyper-personalized financial advice that increased customer engagement by 220%.</p>
                
                <div class="result-grid">
                    <div class="result-card">
                        <i class="fas fa-chart-line"></i>
                        <h4>220%</h4>
                        <p>Customer Engagement Increase</p>
                    </div>
                    <div class="result-card">
                        <i class="fas fa-shield-alt"></i>
                        <h4>99.99%</h4>
                        <p>Security Assurance</p>
                    </div>
                    <div class="result-card">
                        <i class="fas fa-dollar-sign"></i>
                        <h4>$1.2B</h4>
                        <p>Assets Retained</p>
                    </div>
                </div>
                
                <a href="case-study-finance.html" target="_blank" class="btn">Read Full Case Study</a>
            </div>
            <div class="featured-image">
                <div style="text-align: center; padding: 2rem; width: 100%;">
                    <i class="fas fa-coins" style="font-size: 8rem; color: rgba(255, 255, 255, 0.2); margin-bottom: 2rem;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 2rem; color: var(--text-inverse);">Financial Services Transformation</h3>
                    <p style="max-width: 400px; margin: 0 auto 2rem; color: rgba(255, 255, 255, 0.8);">Revolutionizing banking through technology innovation</p>
                    <a href="case-study-finance.html" target="_blank" class="btn btn-outline">View Detailed Results</a>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <h2 class="section-title"><h2>Client Success Stories</h2></h2>
        <div class="testimonials">
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">"The transformation we experienced after implementing their solution was nothing short of revolutionary. Our operational costs decreased by 40% while customer satisfaction soared."</p>
                    <div class="client-info">
                        <div class="client-avatar">SD</div>
                        <div class="client-details">
                            <h4>Sarah Donovan</h4>
                            <p>CTO, TechGlobal Inc.</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"Working with this team was a game-changer for our business. Their innovative approach solved problems we didn't even know we had and positioned us for unprecedented growth."</p>
                    <div class="client-info">
                        <div class="client-avatar">MJ</div>
                        <div class="client-details">
                            <h4>Michael Johnson</h4>
                            <p>CEO, HealthFirst Group</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"The results speak for themselves - 300% ROI in the first year. Their team's expertise and dedication to our success made all the difference in our digital transformation journey."</p>
                    <div class="client-info">
                        <div class="client-avatar">ER</div>
                        <div class="client-details">
                            <h4>Elena Rodriguez</h4>
                            <p>Director, FinTech Innovations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="cta-section">
            <h2>Ready to Transform Your Business?</h2>
            <p>Discover how our solutions can drive measurable results for your organization</p>
            <a href="#" class="btn">Schedule a Consultation</a>
        </div>
    </div>

    <script>
        // Filter functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // In a real implementation, you would filter the case studies here
            });
        });
        
        // Smooth scroll
        document.querySelector('.scroll-down').addEventListener('click', function() {
            document.querySelector('.section-title').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });
        
       
        // Observe all case cards and featured section
        document.querySelectorAll('.case-card, .featured-case').forEach(element => {
            observer.observe(element);
        });
    </script>
