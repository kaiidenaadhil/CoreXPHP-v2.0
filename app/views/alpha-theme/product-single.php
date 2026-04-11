<style>
        /* Breadcrumb */
        .breadcrumb {
            padding: 10px 0 20px;
            font-size: 0.9rem;
            color: var(--dark-gray);
            display: flex;
            flex-wrap: wrap;
        }
        
        .breadcrumb a {
            color: var(--primary-blue);
            text-decoration: none;
            margin-right: 8px;
        }
        
        .breadcrumb span {
            margin: 0 8px;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }

        /* Product Section - Mobile First Approach */
        .product-container {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin: 1rem 0 4rem;
        }
        
        @media (min-width: 992px) {
            .product-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 3rem;
            }
        }

        .product-gallery {
            order: 1; /* Gallery first on mobile */
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        @media (min-width: 992px) {
            .product-gallery {
                order: 0; /* Reset order on desktop */
                position: sticky;
                top: 20px;
                height: fit-content;
            }
        }
        
        .main-image {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: linear-gradient(135deg, var(--bg-secondary), var(--bg-tertiary));
            display: flex;
            align-items: center;
            justify-content: center;
            aspect-ratio: 4/3;
        }
        
        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 20px;
        }
        
        .thumbnails {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }
        
        .thumbnail {
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid transparent;
            transition: var(--transition);
            background: linear-gradient(135deg, var(--bg-secondary), var(--bg-tertiary));
            display: flex;
            align-items: center;
            justify-content: center;
            aspect-ratio: 1/1;
        }
        
        .thumbnail:hover, .thumbnail.active {
            border-color: var(--accent-purple);
            transform: translateY(-5px);
        }
        
        .thumbnail img {
            width: 90%;
            height: 90%;
            object-fit: contain;
        }

        .product-info {
            padding: 0.5rem;
        }
        
        .product-tag {
            display: inline-block;
            background: var(--accent-purple);
            color: var(--text-inverse);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }
        
        .product-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.3rem;
            margin-bottom: 1rem;
            color: var(--primary-blue);
            line-height: 1.2;
        }
        
        @media (min-width: 768px) {
            .product-title {
                font-size: 2.8rem;
            }
        }
        
        .product-subtitle {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            font-weight: 300;
            max-width: 600px;
        }
        
        .product-description {
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            line-height: 1.8;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.2rem;
            margin: 2rem 0;
        }
        
        @media (min-width: 576px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        .feature-card {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1rem;
            border-radius: 12px;
            background: var(--bg-secondary);
            box-shadow: var(--shadow);
        }
        
        .feature-icon {
            background: rgba(0, 180, 216, 0.1);
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--secondary-teal);
            font-size: 1.4rem;
        }
        
        .feature-content h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--primary-blue);
        }
        
        .feature-content p {
            color: var(--text-primary);
            font-size: 0.95rem;
        }

        /* Pricing Section */
        .pricing-section {
            background: var(--bg-secondary);
            border-radius: 20px;
            padding: 1.8rem;
            margin: 2rem 0;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }
        
        @media (min-width: 768px) {
            .pricing-section {
                padding: 2.5rem;
            }
        }
        
        .pricing-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            gap: 1rem;
        }
        
        .pricing-title {
            font-size: 1.6rem;
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        @media (min-width: 768px) {
            .pricing-title {
                font-size: 1.8rem;
            }
        }
        
        .price-tag {
            display: flex;
            align-items: baseline;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .price {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        @media (min-width: 768px) {
            .price {
                font-size: 2.5rem;
            }
        }
        
        .original-price {
            font-size: 1.3rem;
            text-decoration: line-through;
            color: var(--dark-gray);
        }
        
        .savings-badge {
            background: #27ae60;
            color: white;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .license-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.2rem;
            margin: 1.5rem 0;
        }
        
        @media (min-width: 576px) {
            .license-options {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }
        
        .license-card {
            background: var(--bg-primary);
            border-radius: 16px;
            padding: 1.5rem;
            border: 2px solid var(--medium-gray);
            transition: var(--transition);
            cursor: pointer;
            position: relative;
        }
        
        @media (min-width: 768px) {
            .license-card {
                padding: 2rem;
            }
        }
        
        .license-card:hover, .license-card.selected {
            border-color: var(--accent-purple);
            transform: translateY(-5px);
            box-shadow: var(--card-hover-shadow);
        }
        
        .license-card.selected::after {
            content: '✓';
            position: absolute;
            top: -12px;
            right: -12px;
            background: var(--accent-purple);
            color: var(--text-inverse);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: var(--shadow);
        }
        
        .license-card h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--primary-blue);
        }
        
        .license-price {
            font-size: 1.6rem;
            font-weight: 700;
            margin: 1rem 0;
        }
        
        .license-features {
            list-style: none;
            margin: 1.2rem 0;
        }
        
        .license-features li {
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .license-features li::before {
            content: '✓';
            color: #27ae60;
            font-weight: bold;
        }
        
        .buy-options {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        @media (min-width: 576px) {
            .buy-options {
                flex-direction: row;
            }
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient);
            color: var(--text-inverse);
            border: none;
            padding: 14px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
            gap: 10px;
        }
        
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(10, 36, 99, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--accent-purple);
            color: var(--accent-purple);
        }
        
        .btn-outline:hover {
            background: var(--accent-purple);
            color: var(--text-inverse);
        }
        
        .btn-large {
            padding: 16px;
            font-size: 1.1rem;
        }
        
        @media (min-width: 576px) {
            .btn {
                width: auto;
            }
        }

        /* Testimonials */
        .testimonials {
            margin: 3rem 0;
        }
        
        .section-title {
            text-align: center;
            margin: 3rem 0 2rem;
            position: relative;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 15px;
        }
        
        @media (min-width: 768px) {
            .section-title h2 {
                font-size: 2.5rem;
            }
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient);
            border-radius: 10px;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        @media (min-width: 768px) {
            .testimonial-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 2rem;
            }
        }

        .testimonial-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            position: relative;
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--card-hover-shadow);
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 15px;
            left: 15px;
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            color: rgba(0, 180, 216, 0.1);
            line-height: 1;
        }
        
        @media (min-width: 768px) {
            .testimonial-card::before {
                font-size: 4rem;
            }
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
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
            font-size: 1.1rem;
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
            font-size: 1rem;
        }

        /* FAQ Section */
        .faq-section {
            margin: 3rem 0;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            background: var(--card-bg);
            border-radius: 12px;
            margin-bottom: 1rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            overflow: hidden;
        }
        
        .faq-question {
            padding: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--primary-blue);
        }
        
        .faq-answer {
            padding: 0 1.5rem 1.2rem;
            color: var(--text-primary);
            display: none;
            line-height: 1.7;
        }
        
        .faq-item.active .faq-answer {
            display: block;
        }
        
        .faq-question i {
            transition: var(--transition);
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

 
    </style>

    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="#">Home</a> <span>/</span> <a href="#">Design Resources</a> <span>/</span> <span>Ultimate UI Design Kit</span>
        </div>
        
        <!-- Product Section -->
        <div class="product-container">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="https://images.unsplash.com/photo-1581276879432-15e50529f34b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="UI Design Kit Preview" id="mainImage">
                </div>
                <div class="thumbnails">
                    <div class="thumbnail active" data-image="https://images.unsplash.com/photo-1581276879432-15e50529f34b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80">
                        <img src="https://images.unsplash.com/photo-1581276879432-15e50529f34b?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Thumbnail 1">
                    </div>
                    <div class="thumbnail" data-image="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80">
                        <img src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Thumbnail 2">
                    </div>
                    <div class="thumbnail" data-image="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Thumbnail 3">
                    </div>
                    <div class="thumbnail" data-image="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Thumbnail 4">
                    </div>
                </div>
            </div>
            
            <div class="product-info">
                <span class="product-tag">Bestseller</span>
                <h1 class="product-title">Ultimate UI Design Kit</h1>
                <p class="product-subtitle">Complete design system for modern web and mobile applications</p>
                
                <div class="product-description">
                    <p>The Ultimate UI Design Kit is a comprehensive design system that helps you create beautiful, consistent, and functional user interfaces. With over 200 components, 50+ templates, and a complete style guide, you'll have everything you need to accelerate your design process.</p>
                    <p>Created by professional designers, this kit follows the latest design trends and best practices. It's fully customizable and compatible with Figma, Sketch, and Adobe XD.</p>
                </div>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-object-group"></i>
                        </div>
                        <div class="feature-content">
                            <h4>200+ Components</h4>
                            <p>Buttons, cards, navigation, forms, and more - all fully customizable</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Color System</h4>
                            <p>Carefully curated color palettes with light and dark mode support</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-font"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Typography</h4>
                            <p>Modern font pairings with complete typography scale</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Fully Responsive</h4>
                            <p>Designed to work perfectly on all device sizes</p>
                        </div>
                    </div>
                </div>
                
                <!-- Pricing Section -->
                <div class="pricing-section">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Choose Your License</h3>
                        <div class="price-tag">
                            <span class="original-price">$129</span>
                            <span class="price">$89</span>
                            <span class="savings-badge">Save 31%</span>
                        </div>
                    </div>
                    
                    <div class="license-options">
                        <div class="license-card selected" data-license="standard">
                            <h4>Standard License</h4>
                            <div class="license-price">$89</div>
                            <p>Perfect for freelancers and small projects</p>
                            <ul class="license-features">
                                <li>Use for 1 project</li>
                                <li>Personal or client work</li>
                                <li>Lifetime updates</li>
                                <li>1 year of support</li>
                            </ul>
                        </div>
                        
                        <div class="license-card" data-license="extended">
                            <h4>Extended License</h4>
                            <div class="license-price">$249</div>
                            <p>For agencies and SaaS products</p>
                            <ul class="license-features">
                                <li>Use for unlimited projects</li>
                                <li>Client and commercial work</li>
                                <li>Lifetime updates</li>
                                <li>Priority support</li>
                                <li>Source files included</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="buy-options">
                        <button class="btn btn-large" id="addToCart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                        <button class="btn btn-outline btn-large">
                            <i class="fas fa-heart"></i> Save for Later
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonials -->
        <div class="testimonials">
            <div class="section-title">
                <h2>What Designers Say</h2>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">"This UI kit has saved me countless hours of design work. The components are well-organized and easy to customize. The attention to detail is impressive!"</p>
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
                    <p class="testimonial-content">"I've used many UI kits, but this one stands out for its completeness and modern design. The documentation made it easy to implement in our design system."</p>
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
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"The value for money is incredible. I purchased the extended license for our agency and it's been a game-changer for our workflow. Highly recommended!"</p>
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
                            <p>Creative Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            
            <div class="faq-container">
                <div class="faq-item active">
                    <div class="faq-question">
                        What design tools are supported?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        The UI Kit is available for Figma, Sketch, and Adobe XD. You'll receive files for all three platforms when you purchase the kit.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Can I use this for commercial projects?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        With the Standard License, you can use the kit for personal projects and client work. For commercial products (SaaS, templates, etc.), you'll need the Extended License.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do I get free updates?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! All purchases include lifetime updates. We regularly add new components and improve existing ones based on user feedback.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What is your refund policy?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We offer a 30-day money-back guarantee. If you're not satisfied with the product, contact us for a full refund.
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <script>

        // Image gallery functionality
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.getElementById('mainImage');
        
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                // Remove active class from all thumbnails
                thumbnails.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked thumbnail
                this.classList.add('active');
                
                // Update main image
                const newImage = this.getAttribute('data-image');
                mainImage.src = newImage;
            });
        });
        
        // License selection
        const licenseCards = document.querySelectorAll('.license-card');
        
        licenseCards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove selected class from all cards
                licenseCards.forEach(c => c.classList.remove('selected'));
                
                // Add selected class to clicked card
                this.classList.add('selected');
            });
        });
        
        // FAQ accordion
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', function() {
                // Close all items
                faqItems.forEach(i => {
                    if (i !== item) {
                        i.classList.remove('active');
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
            });
        });
        
        // Add to cart animation
        const addToCartBtn = document.getElementById('addToCart');
        
        addToCartBtn.addEventListener('click', function() {
            // Animation effect
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fas fa-check"></i> Added to Cart!';
            this.disabled = true;
            
            // Reset button after delay
            setTimeout(() => {
                this.innerHTML = originalText;
                this.disabled = false;
            }, 2000);
        });
    </script>
