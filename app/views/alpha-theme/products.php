<style>


        /* Hero Section */
        .products-hero {
            height: 75vh;
            min-height: 800px;
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
            color: var(--text-inverse);
            border-radius: 0 0 40px 40px;
            box-shadow: var(--shadow);
        }
        
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .products-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            max-width: 900px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .products-hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin-bottom: 3rem;
            font-weight: 300;
            opacity: 0.9;
        }

        /* Product Categories */
        .product-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 3rem 0;
        }

        .category-btn {
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
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .category-btn:hover, .category-btn.active {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        /* Section Title */
        .section-title {
            text-align: center;
            margin: 4rem 0 3rem;
            position: relative;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
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

        /* Product Grid */
        .products-grid {
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

        .product-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-tag {
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
            z-index: 2;
        }
        
        .subscription-tag {
            background: var(--secondary-teal);
        }

        .product-content {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-content h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: var(--primary-blue);
        }

        .product-content p {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            font-weight: 300;
            flex-grow: 1;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            margin: 1.5rem 0;
            padding-top: 1.5rem;
            border-top: 1px solid var(--medium-gray);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-primary);
        }
        
        .product-price {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .subscription-price {
            display: flex;
            flex-direction: column;
        }
        
        .subscription-price .price {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .subscription-price .period {
            font-size: 1rem;
            font-weight: 500;
            margin-top: 5px;
        }
        
        .price-comparison {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }
        
        .original-price {
            text-decoration: line-through;
            color: var(--dark-gray);
            font-size: 1.2rem;
        }
        
        .savings-badge {
            background: #ff6b6b;
            color: white;
            padding: 3px 8px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Featured Subscription */
        .featured-subscription {
            display: flex;
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            margin: 5rem 0;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            position: relative;
            overflow: hidden;
        }
        
        .featured-badge {
            position: absolute;
            top: 20px;
            right: -40px;
            background: var(--accent-purple);
            color: var(--text-inverse);
            padding: 10px 40px;
            transform: rotate(45deg);
            font-weight: 700;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .subscription-content {
            flex: 1;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        .subscription-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
        }

        .subscription-content p {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            line-height: 1.8;
            font-weight: 300;
            max-width: 600px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .benefit-card {
            background: rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid var(--medium-gray);
            transition: var(--transition);
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            border-color: var(--secondary-teal);
        }

        .benefit-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-teal);
        }

        .benefit-card h4 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-blue);
        }

        .benefit-card p {
            color: var(--text-primary);
            font-size: 0.9rem;
            margin: 0;
        }
        
        .pricing-block {
            display: flex;
            flex-direction: column;
            margin: 1.5rem 0;
            background: rgba(0, 180, 216, 0.05);
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid rgba(0, 180, 216, 0.2);
        }
        
        .price-option {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: var(--transition);
            cursor: pointer;
            border: 1px solid var(--medium-gray);
        }
        
        .price-option.selected {
            border-color: var(--accent-purple);
            background: rgba(94, 96, 206, 0.05);
            box-shadow: 0 5px 15px rgba(94, 96, 206, 0.1);
        }
        
        .price-option .info {
            display: flex;
            flex-direction: column;
        }
        
        .price-option .price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--accent-purple);
        }
        
        .price-option .period {
            font-size: 1rem;
            color: var(--dark-gray);
        }
        
        .price-option .savings {
            color: #27ae60;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .subscription-image {
            flex: 1;
            min-height: 500px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-purple));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .subscription-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            transform: rotate(30deg);
        }
        
        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
        
        .floating-icons i {
            position: absolute;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.2);
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
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
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
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
        
        .rating {
            color: #FFD700;
            margin: 10px 0;
            font-size: 1.1rem;
        }

        /* Subscription CTA */
        .subscribe-cta {
            background: var(--gradient);
            border-radius: 20px;
            padding: 4rem 2rem;
            text-align: center;
            margin: 5rem 0;
            color: var(--text-inverse);
            position: relative;
            overflow: hidden;
        }
        
        .subscribe-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.2;
        }

        .subscribe-cta h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--text-inverse);
            position: relative;
            z-index: 2;
        }

        .subscribe-cta p {
            max-width: 700px;
            margin: 0 auto 2.5rem;
            color: var(--text-inverse);
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .btn {
            display: inline-block;
            background: var(--text-inverse);
            color: var(--primary-blue);
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

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(10, 36, 99, 0.3);
            background: var(--gradient);
            color: var(--text-inverse);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--text-inverse);
            color: var(--text-inverse);
        }
        
        .btn-outline:hover {
            background: var(--text-inverse);
            color: var(--primary-blue);
        }

        /* Stats Counter */
        .stats-container {
            display: flex;
            justify-content: space-around;
            margin: 4rem 0;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .stat-item {
            text-align: center;
            min-width: 200px;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }
        
        .stat-label {
            font-size: 1.1rem;
            color: var(--text-primary);
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .products-hero h1 {
                font-size: 3.5rem;
            }
            
            .featured-subscription {
                flex-direction: column;
            }
            
            .subscription-image {
                min-height: 300px;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .products-hero {
                height: 85vh;
            }
            
            .products-hero h1 {
                font-size: 2.8rem;
            }
            
            .products-hero p {
                font-size: 1.2rem;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <!-- Hero Section -->
    <section class="products-hero">
        <h1>Premium Digital Products</h1>
        <p>Tools and resources to accelerate your digital journey</p>
        
        <div class="product-categories">
            <button class="category-btn active"><i class="fas fa-box"></i> All Products</button>
            <button class="category-btn"><i class="fas fa-paint-brush"></i> Templates</button>
            <button class="category-btn"><i class="fas fa-graduation-cap"></i> Courses</button>
            <button class="category-btn"><i class="fas fa-tools"></i> Tools</button>
            <button class="category-btn"><i class="fas fa-book"></i> Resources</button>
            <button class="category-btn"><i class="fas fa-sync-alt"></i> Subscriptions</button>
        </div>

        
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number" id="productCounter">2500+</div>
                <div class="stat-label">Digital Products</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" id="customerCounter">42K+</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" id="downloadCounter">1.2M+</div>
                <div class="stat-label">Downloads</div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Digital Products -->
        <div class="section-title">
            <h2>Premium Digital Products</h2>
            <p>One-time purchases for your digital toolkit</p>
        </div>
        
        <div class="products-grid">
            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1581276879432-15e50529f34b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="UI Kit">
                    <div class="product-tag">Template</div>
                </div>
                <div class="product-content">
                    <h3>Ultimate UI Design Kit</h3>
                    <p>Complete UI design system with 200+ components, styles, and templates for web and mobile applications.</p>
                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-file"></i>
                            <span>Figma, Sketch, XD</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-download"></i>
                            <span>Lifetime Access</span>
                        </div>
                    </div>
                    <div class="price-comparison">
                        <span class="original-price">$129</span>
                        <div class="product-price">$89</div>
                        <span class="savings-badge">Save 31%</span>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
            
            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Marketing Course">
                    <div class="product-tag">Course</div>
                </div>
                <div class="product-content">
                    <h3>Digital Marketing Mastery</h3>
                    <p>Comprehensive course covering SEO, social media, email marketing, and analytics with practical exercises.</p>
                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-video"></i>
                            <span>12 Hours Video</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-certificate"></i>
                            <span>Certificate</span>
                        </div>
                    </div>
                    <div class="price-comparison">
                        <span class="original-price">$199</span>
                        <div class="product-price">$149</div>
                        <span class="savings-badge">Save 25%</span>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
            
            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Data Tools">
                    <div class="product-tag">Tool</div>
                </div>
                <div class="product-content">
                    <h3>Data Visualization Toolkit</h3>
                    <p>Collection of 50+ customizable charts, graphs, and visualization templates for data presentations.</p>
                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-file-excel"></i>
                            <span>Excel, Google Sheets</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-database"></i>
                            <span>100+ Templates</span>
                        </div>
                    </div>
                    <div class="product-price">$49</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Subscription Products -->
        <div class="section-title">
            <h2>Premium Subscriptions</h2>
            <p>Unlock continuous value with our monthly plans</p>
        </div>
        
        <div class="products-grid">
            <!-- Subscription Card 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Design Library">
                    <div class="product-tag subscription-tag">Subscription</div>
                </div>
                <div class="product-content">
                    <h3>Design Assets Library</h3>
                    <p>Unlimited access to premium design assets including icons, illustrations, templates, and UI kits.</p>
                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-infinity"></i>
                            <span>Unlimited Downloads</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-sync-alt"></i>
                            <span>Weekly Updates</span>
                        </div>
                    </div>
                    <div class="subscription-price">
                        <span class="price">$19</span>
                        <span class="period">per month</span>
                    </div>
                    <a href="#" class="btn">Subscribe Now</a>
                </div>
            </div>
            
            <!-- Subscription Card 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Learning Platform">
                    <div class="product-tag subscription-tag">Subscription</div>
                </div>
                <div class="product-content">
                    <h3>Learning Platform Access</h3>
                    <p>Full access to all courses, tutorials, and learning resources with new content added weekly.</p>
                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-book"></i>
                            <span>200+ Courses</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-users"></i>
                            <span>Community Access</span>
                        </div>
                    </div>
                    <div class="subscription-price">
                        <span class="price">$29</span>
                        <span class="period">per month</span>
                    </div>
                    <a href="#" class="btn">Subscribe Now</a>
                </div>
            </div>
            
            <!-- Subscription Card 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Development Tools">
                    <div class="product-tag subscription-tag">Subscription</div>
                </div>
                <div class="product-content">
                    <h3>Developer Toolkit</h3>
                    <p>Premium tools, libraries, and resources for developers including code snippets, plugins, and templates.</p>
                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-code"></i>
                            <span>All Languages</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-tools"></i>
                            <span>Exclusive Tools</span>
                        </div>
                    </div>
                    <div class="subscription-price">
                        <span class="price">$24</span>
                        <span class="period">per month</span>
                    </div>
                    <a href="#" class="btn">Subscribe Now</a>
                </div>
            </div>
        </div>

        <!-- Featured Subscription -->
        <div class="featured-subscription">
            <div class="featured-badge">Most Popular</div>
            <div class="subscription-content">
                <h2>Ultimate Digital Bundle</h2>
                <p>Get everything you need to succeed in the digital world with our premium all-access subscription. Includes all products, courses, and tools in one comprehensive package.</p>
                
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <i class="fas fa-infinity"></i>
                        <h4>Unlimited Access</h4>
                        <p>All products, courses, and resources</p>
                    </div>
                    <div class="benefit-card">
                        <i class="fas fa-cloud-download-alt"></i>
                        <h4>Daily Updates</h4>
                        <p>New content added every day</p>
                    </div>
                    <div class="benefit-card">
                        <i class="fas fa-users"></i>
                        <h4>Community Access</h4>
                        <p>Join our exclusive member community</p>
                    </div>
                    <div class="benefit-card">
                        <i class="fas fa-headset"></i>
                        <h4>Priority Support</h4>
                        <p>24/7 dedicated support team</p>
                    </div>
                </div>
                
                <div class="pricing-block">
                    <div class="price-option selected">
                        <div class="info">
                            <div class="price">$49<span class="period">/month</span></div>
                            <div class="savings">Billed monthly</div>
                        </div>
                    </div>
                    <div class="price-option">
                        <div class="info">
                            <div class="price">$34<span class="period">/month</span></div>
                            <div class="savings">Save 30% with annual billing</div>
                        </div>
                        <div class="total">$408/year</div>
                    </div>
                </div>
                
                <a href="#" class="btn">Get Ultimate Bundle</a>
            </div>
            <div class="subscription-image">
                <div style="text-align: center; padding: 2rem; width: 100%;">
                    <i class="fas fa-crown" style="font-size: 8rem; color: rgba(255, 255, 255, 0.2); margin-bottom: 2rem;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 2rem; color: var(--text-inverse);">Ultimate Digital Bundle</h3>
                    <p style="max-width: 400px; margin: 0 auto 2rem; color: rgba(255, 255, 255, 0.8);">Everything you need in one subscription</p>
                    <a href="#" target="_blank" class="btn btn-outline">View All Features</a>
                </div>
                <div class="floating-icons">
                    <i class="fas fa-paint-brush" style="top: 10%; left: 15%;"></i>
                    <i class="fas fa-code" style="top: 30%; left: 80%;"></i>
                    <i class="fas fa-chart-line" style="top: 50%; left: 20%;"></i>
                    <i class="fas fa-video" style="top: 70%; left: 75%;"></i>
                    <i class="fas fa-book" style="top: 85%; left: 40%;"></i>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="section-title">
            <h2>Customer Experiences</h2>
            <p>What our users say about our products</p>
        </div>
        <div class="testimonials">
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">"The design assets library has transformed my workflow. I save hours each week with their premium templates and illustrations. The subscription is worth every penny!"</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="client-info">
                        <div class="client-avatar">SD</div>
                        <div class="client-details">
                            <h4>Sarah Donovan</h4>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"The learning platform subscription has accelerated my career growth. I've completed 5 courses in 3 months and already implemented new strategies at work."</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="client-info">
                        <div class="client-avatar">MJ</div>
                        <div class="client-details">
                            <h4>Michael Johnson</h4>
                            <p>Marketing Director</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"The Ultimate Bundle gives me access to everything I need. The developer toolkit alone saves me hours of work each week. Highly recommended for any digital professional!"</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="client-info">
                        <div class="client-avatar">ER</div>
                        <div class="client-details">
                            <h4>Elena Rodriguez</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Subscription CTA -->
        <div class="subscribe-cta">
            <h2>Unlock Your Digital Potential</h2>
            <p>Join thousands of creators, developers, and marketers using our premium resources</p>
            <a href="#" class="btn">Start Your Subscription Today</a>
        </div>
    </div>

    <script>
        // Filter functionality
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // In a real implementation, you would filter the products here
            });
        });
        
      
        // Price option selection
        document.querySelectorAll('.price-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.price-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
            });
        });
        
        // Counter animations
        const counters = document.querySelectorAll('.stat-number');
        const animationDuration = 2000;
        
        const animateCounter = (element, start, end, duration) => {
            let startTime = null;
            
            const step = (timestamp) => {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value + "+";
                
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            
            window.requestAnimationFrame(step);
        };
        
        // Initialize counters
        setTimeout(() => {
            animateCounter(document.getElementById('productCounter'), 0, 2500, animationDuration);
            animateCounter(document.getElementById('customerCounter'), 0, 42000, animationDuration);
            animateCounter(document.getElementById('downloadCounter'), 0, 1200000, animationDuration);
        }, 500);
        
        // Create floating icons animation
        const floatingIcons = document.querySelector('.floating-icons');
        const icons = ['fa-paint-brush', 'fa-code', 'fa-chart-line', 'fa-video', 'fa-book', 'fa-mobile-alt', 'fa-database', 'fa-cloud'];
        
        for (let i = 0; i < 12; i++) {
            const icon = document.createElement('i');
            icon.className = `fas ${icons[Math.floor(Math.random() * icons.length)]}`;
            icon.style.fontSize = `${Math.random() * 1.5 + 1}rem`;
            icon.style.top = `${Math.random() * 100}%`;
            icon.style.left = `${Math.random() * 100}%`;
            icon.style.animationDuration = `${Math.random() * 20 + 10}s`;
            icon.style.animationDelay = `${Math.random() * 5}s`;
            floatingIcons.appendChild(icon);
        }
    </script>