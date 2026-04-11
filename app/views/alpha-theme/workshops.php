 <style>

        /* Hero Section */
        .workshop-hero {
            height: 70vh;
            min-height: 500px;
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
        }
        
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .workshop-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            max-width: 900px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .workshop-hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin-bottom: 3rem;
            font-weight: 300;
            opacity: 0.9;
        }

        /* Workshop Categories */
        .workshop-categories {
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
        }

        .category-btn:hover, .category-btn.active {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        /* Workshop Grid */
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

        .workshop-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin: 3rem 0;
        }

        .workshop-card {
            background: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--card-border);
            display: flex;
            flex-direction: column;
        }

        .workshop-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--card-hover-shadow);
        }

        .workshop-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .workshop-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .workshop-card:hover .workshop-image img {
            transform: scale(1.05);
        }

        .workshop-tag {
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

        .workshop-content {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .workshop-content h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: var(--primary-blue);
        }

        .workshop-content p {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            font-weight: 300;
            flex-grow: 1;
        }

        .workshop-meta {
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

        .workshop-price {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Featured Workshop */
        .featured-workshop {
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

        .workshop-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .stat-card {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid var(--medium-gray);
        }

        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-teal);
        }

        .stat-card h4 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-blue);
        }

        .stat-card p {
            color: var(--text-primary);
            font-size: 0.9rem;
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

        /* Registration CTA */
        .register-cta {
            background: var(--gradient);
            border-radius: 20px;
            padding: 4rem 2rem;
            text-align: center;
            margin: 5rem 0;
            color: var(--text-inverse);
        }

        .register-cta h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--text-inverse);
        }

        .register-cta p {
            max-width: 700px;
            margin: 0 auto 2.5rem;
            color: var(--text-inverse);
            font-size: 1.2rem;
            opacity: 0.9;
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


        /* Responsive */
        @media (max-width: 992px) {
            .workshop-hero h1 {
                font-size: 3.5rem;
            }
            
            .featured-workshop {
                flex-direction: column;
            }
            
            .featured-image {
                min-height: 300px;
            }
            
            .workshop-stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .workshop-hero {
                height: 80vh;
            }
            
            .workshop-hero h1 {
                font-size: 2.8rem;
            }
            
            .workshop-hero p {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .workshop-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="workshop-hero">
        <h1>Master Digital Skills Through Workshops</h1>
        <p>Hands-on learning experiences designed to boost your career and creativity</p>
        
        <div class="workshop-categories">
            <button class="category-btn active">All Workshops</button>
            <button class="category-btn">Web Development</button>
            <button class="category-btn">UI/UX Design</button>
            <button class="category-btn">Data Science</button>
            <button class="category-btn">Digital Marketing</button>
            <button class="category-btn">Cloud Computing</button>
        </div>
    </section>

    <div class="container">
        <!-- Upcoming Workshops -->
        <div class="section-title">
            <h2>Upcoming Workshops</h2>
        </div>
        
        <div class="workshop-grid">
            <!-- Workshop Card 1 -->
            <div class="workshop-card">
                <div class="workshop-image">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="React Workshop">
                    <div class="workshop-tag">Development</div>
                </div>
                <div class="workshop-content">
                    <h3>Advanced React Patterns</h3>
                    <p>Master advanced React patterns and techniques to build scalable, maintainable applications with hooks, context, and state management.</p>
                    <div class="workshop-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>June 15-16, 2023</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>9:00 AM - 4:00 PM</span>
                        </div>
                    </div>
                    <div class="workshop-price">$349</div>
                    <a href="#" class="btn">Register Now</a>
                </div>
            </div>
            
            <!-- Workshop Card 2 -->
            <div class="workshop-card">
                <div class="workshop-image">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="UI Design Workshop">
                    <div class="workshop-tag">Design</div>
                </div>
                <div class="workshop-content">
                    <h3>UI Design Fundamentals</h3>
                    <p>Learn the core principles of UI design, color theory, typography, and layout to create visually stunning and user-friendly interfaces.</p>
                    <div class="workshop-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>June 20-21, 2023</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>10:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                    <div class="workshop-price">$299</div>
                    <a href="#" class="btn">Register Now</a>
                </div>
            </div>
            
            <!-- Workshop Card 3 -->
            <div class="workshop-card">
                <div class="workshop-image">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Data Science Workshop">
                    <div class="workshop-tag">Data Science</div>
                </div>
                <div class="workshop-content">
                    <h3>Data Visualization with Python</h3>
                    <p>Transform complex data into compelling visual stories using Python libraries like Matplotlib, Seaborn, and Plotly.</p>
                    <div class="workshop-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>June 25, 2023</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>1:00 PM - 6:00 PM</span>
                        </div>
                    </div>
                    <div class="workshop-price">$249</div>
                    <a href="#" class="btn">Register Now</a>
                </div>
            </div>
            
            <!-- Workshop Card 4 -->
            <div class="workshop-card">
                <div class="workshop-image">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Marketing Workshop">
                    <div class="workshop-tag">Marketing</div>
                </div>
                <div class="workshop-content">
                    <h3>Social Media Strategy Masterclass</h3>
                    <p>Develop winning social media strategies that drive engagement, build communities, and generate measurable results for your business.</p>
                    <div class="workshop-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>July 5-6, 2023</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>9:30 AM - 3:30 PM</span>
                        </div>
                    </div>
                    <div class="workshop-price">$399</div>
                    <a href="#" class="btn">Register Now</a>
                </div>
            </div>
            
            <!-- Workshop Card 5 -->
            <div class="workshop-card">
                <div class="workshop-image">
                    <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cloud Workshop">
                    <div class="workshop-tag">Cloud</div>
                </div>
                <div class="workshop-content">
                    <h3>AWS Solutions Architect Bootcamp</h3>
                    <p>Accelerate your cloud career with this intensive workshop covering AWS core services, architecture patterns, and best practices.</p>
                    <div class="workshop-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>July 10-12, 2023</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>8:30 AM - 4:30 PM</span>
                        </div>
                    </div>
                    <div class="workshop-price">$599</div>
                    <a href="#" class="btn">Register Now</a>
                </div>
            </div>
            
            <!-- Workshop Card 6 -->
            <div class="workshop-card">
                <div class="workshop-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mobile Workshop">
                    <div class="workshop-tag">Mobile</div>
                </div>
                <div class="workshop-content">
                    <h3>Flutter for Cross-Platform Apps</h3>
                    <p>Build beautiful, natively compiled applications for mobile, web, and desktop from a single codebase using Google's Flutter framework.</p>
                    <div class="workshop-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>July 18-19, 2023</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>10:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                    <div class="workshop-price">$349</div>
                    <a href="#" class="btn">Register Now</a>
                </div>
            </div>
        </div>

        <!-- Featured Workshop -->
        <div class="featured-workshop">
            <div class="featured-content">
                <h2>Comprehensive Web Development Bootcamp</h2>
                <p>Our flagship workshop takes you from HTML basics to full-stack development in just 5 days. Learn modern JavaScript, React, Node.js, and databases in an intensive, hands-on environment.</p>
                <p>Whether you're starting your coding journey or leveling up your skills, this workshop provides the foundation for a successful career in web development.</p>
                
                <div class="workshop-stats">
                    <div class="stat-card">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h4>25+ Hours</h4>
                        <p>Hands-on instruction</p>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-laptop-code"></i>
                        <h4>12 Projects</h4>
                        <p>Real-world applications</p>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-user-graduate"></i>
                        <h4>95%</h4>
                        <p>Career advancement rate</p>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-users"></i>
                        <h4>8:1</h4>
                        <p>Student to mentor ratio</p>
                    </div>
                </div>
                
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="featured-image">
                <div style="text-align: center; padding: 2rem; width: 100%;">
                    <i class="fas fa-laptop-code" style="font-size: 8rem; color: rgba(255, 255, 255, 0.2); margin-bottom: 2rem;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 2rem; color: var(--text-inverse);">Web Development Bootcamp</h3>
                    <p style="max-width: 400px; margin: 0 auto 2rem; color: rgba(255, 255, 255, 0.8);">Transform your career in 5 intensive days</p>
                    <a href="#" target="_blank" class="btn">View Curriculum</a>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="section-title">
            <h2>Workshop Experiences</h2>
        </div>
        <div class="testimonials">
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-content">"The React workshop completely transformed how I approach frontend development. I went from knowing basics to building complex applications with confidence."</p>
                    <div class="client-info">
                        <div class="client-avatar">SD</div>
                        <div class="client-details">
                            <h4>Sarah Donovan</h4>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"As a designer, learning data visualization opened up new career opportunities. The practical exercises were exactly what I needed to apply these concepts immediately."</p>
                    <div class="client-info">
                        <div class="client-avatar">MJ</div>
                        <div class="client-details">
                            <h4>Michael Johnson</h4>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-content">"The AWS bootcamp was worth every penny. I passed my Solutions Architect exam just two weeks after completing the workshop and got a 25% salary increase."</p>
                    <div class="client-info">
                        <div class="client-avatar">ER</div>
                        <div class="client-details">
                            <h4>Elena Rodriguez</h4>
                            <p>Cloud Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Registration CTA -->
        <div class="register-cta">
            <h2>Ready to Level Up Your Skills?</h2>
            <p>Join our community of learners and gain practical, in-demand skills that will transform your career</p>
            <a href="#" class="btn">Browse All Workshops</a>
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
                
                // In a real implementation, you would filter the workshops here
            });
        });
        
    </script>