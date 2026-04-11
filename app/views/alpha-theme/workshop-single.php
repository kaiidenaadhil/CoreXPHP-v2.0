<style>
        /* Hero Section */
        .workshop-hero {
            height: 70vh;
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

        .workshop-details {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
            max-width: 800px;
        }

        .detail-item {
            background: rgba(255, 255, 255, 0.15);
            color: var(--text-inverse);
            border-radius: 12px;
            padding: 1rem 1.8rem;
            min-width: 180px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .detail-item h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
            opacity: 0.8;
        }

        .detail-item p {
            font-size: 1.2rem;
            font-weight: 500;
        }

        /* Workshop Layout */
        .workshop-container {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 3rem;
            padding: 2rem 0;
        }

        /* Workshop Content */
        .workshop-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
            position: relative;
            padding-bottom: 15px;
        }

        .workshop-content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--gradient);
            border-radius: 5px;
        }

        .workshop-description {
            margin-bottom: 3rem;
        }

        .workshop-description p {
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            line-height: 1.8;
        }

        /* What You'll Learn */
        .learning-section {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }

        .learning-section h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .learning-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .learning-item {
            display: flex;
            gap: 15px;
            padding: 10px 0;
        }

        .learning-item i {
            color: var(--secondary-teal);
            font-size: 1.2rem;
            margin-top: 5px;
        }

        /* Workshop Agenda */
        .agenda-section {
            margin-bottom: 3rem;
        }

        .agenda-item {
            display: flex;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid var(--medium-gray);
        }

        .agenda-time {
            min-width: 150px;
            font-weight: 600;
            color: var(--primary-blue);
        }

        .agenda-content h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }

        /* Instructor Section */
        .instructor-section {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .instructor-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
            border: 5px solid var(--medium-gray);
        }

        .instructor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .instructor-info h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }

        .instructor-title {
            color: var(--secondary-teal);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--medium-gray);
            color: var(--primary-blue);
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--gradient);
            color: var(--text-inverse);
            transform: translateY(-3px);
        }

        /* Registration Card */
        .registration-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
            position: sticky;
            top: 20px;
            margin-bottom: 2rem;
        }

        .price-section {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid var(--medium-gray);
        }

        .price-section .price {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--secondary-teal), var(--accent-purple));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 15px 0;
        }

        .price-section .price-note {
            color: var(--text-primary);
            font-size: 0.9rem;
            margin-top: 10px;
        }

        .register-form {
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-blue);
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid var(--medium-gray);
            border-radius: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            background: var(--bg-tertiary);
            color: var(--text-primary);
        }

        .form-group input:focus, 
        .form-group select:focus {
            border-color: var(--secondary-teal);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 180, 216, 0.1);
        }

        .btn {
            display: inline-block;
            background: var(--gradient);
            color: var(--text-inverse);
            border: none;
            padding: 16px 32px;
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
            margin-top: 10px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            font-size: 1.1rem;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(10, 36, 99, 0.3);
        }

        .guarantee {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(0, 180, 216, 0.05);
            border-radius: 10px;
            margin-top: 20px;
            border: 1px solid rgba(0, 180, 216, 0.1);
        }

        .guarantee i {
            font-size: 2rem;
            color: var(--secondary-teal);
        }

        /* FAQ Section */
        .faq-section {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }

        .faq-section h2 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .faq-item {
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--medium-gray);
            padding-bottom: 1.5rem;
        }

        .faq-question {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary-blue);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .faq-answer {
            color: var(--text-primary);
            line-height: 1.7;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }


        /* Responsive */
        @media (max-width: 1200px) {
            .workshop-container {
                grid-template-columns: 1fr;
            }
            
            .registration-card {
                position: static;
                max-width: 600px;
                margin: 0 auto 3rem;
            }
        }

        @media (max-width: 992px) {
            .workshop-hero h1 {
                font-size: 3.5rem;
            }
            
            .instructor-section {
                flex-direction: column;
                text-align: center;
            }
            
            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .workshop-hero {
                height: 100vh;
            }
            
            .workshop-hero h1 {
                font-size: 2.8rem;
            }
            
            .workshop-hero p {
                font-size: 1.2rem;
            }
            
            .detail-item {
                min-width: 140px;
                padding: 1rem;
            }
            
            .workshop-content h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 576px) {
            .workshop-hero {
                height: 90vh;
            }
            
            .workshop-hero h1 {
                font-size: 2.2rem;
            }
            
            .workshop-details {
                gap: 1rem;
            }
            
            .learning-items {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="workshop-hero">
        <h1>Advanced React Patterns Workshop</h1>
        <p>Master advanced techniques to build scalable, maintainable React applications</p>
        
        <div class="workshop-details">
            <div class="detail-item">
                <h3>Date</h3>
                <p>June 15-16, 2023</p>
            </div>
            <div class="detail-item">
                <h3>Time</h3>
                <p>9:00 AM - 4:00 PM</p>
            </div>
            <div class="detail-item">
                <h3>Location</h3>
                <p>Virtual (Live Online)</p>
            </div>
            <div class="detail-item">
                <h3>Duration</h3>
                <p>14 Hours</p>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="workshop-container">
            <main class="workshop-content">
                <!-- Workshop Description -->
                <div class="workshop-description">
                    <h2>About This Workshop</h2>
                    <p>This intensive 2-day workshop is designed for React developers who want to take their skills to the next level. You'll learn advanced patterns and techniques used by industry professionals to build scalable, maintainable applications.</p>
                    <p>Through hands-on exercises and real-world examples, you'll gain practical experience with complex state management, performance optimization, and architectural patterns that will transform how you build React applications.</p>
                    <p>Whether you're working on a large enterprise application or a complex SPA, this workshop will provide you with the tools and knowledge to write cleaner, more efficient, and more maintainable code.</p>
                </div>
                
                <!-- What You'll Learn -->
                <div class="learning-section">
                    <h3><i class="fas fa-graduation-cap"></i> What You'll Learn</h3>
                    <div class="learning-items">
                        <div class="learning-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Advanced Hooks Patterns</h4>
                                <p>Custom hooks for complex state logic and side effects</p>
                            </div>
                        </div>
                        <div class="learning-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>State Management Strategies</h4>
                                <p>Context API, Redux alternatives, and state machines</p>
                            </div>
                        </div>
                        <div class="learning-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Performance Optimization</h4>
                                <p>Memoization, lazy loading, and virtualization</p>
                            </div>
                        </div>
                        <div class="learning-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Component Composition</h4>
                                <p>Compound components, render props, and HOCs</p>
                            </div>
                        </div>
                        <div class="learning-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Testing Strategies</h4>
                                <p>Advanced testing patterns for complex components</p>
                            </div>
                        </div>
                        <div class="learning-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Architecture Patterns</h4>
                                <p>Feature-based organization and scalable architecture</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Workshop Agenda -->
                <div class="agenda-section">
                    <h2>Workshop Agenda</h2>
                    <div class="agenda-item">
                        <div class="agenda-time">Day 1: 9:00 AM - 4:00 PM</div>
                        <div class="agenda-content">
                            <h4>Advanced Component Patterns</h4>
                            <p>Compound components, render props, higher-order components, controlled vs uncontrolled components, custom hooks patterns</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">Day 1: 1:00 PM - 2:00 PM</div>
                        <div class="agenda-content">
                            <h4>Lunch Break</h4>
                            <p>Time to relax and network with other participants</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">Day 1: 2:00 PM - 4:00 PM</div>
                        <div class="agenda-content">
                            <h4>State Management Deep Dive</h4>
                            <p>Context API patterns, state machines with XState, Redux alternatives, global state management strategies</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">Day 2: 9:00 AM - 12:00 PM</div>
                        <div class="agenda-content">
                            <h4>Performance Optimization</h4>
                            <p>Memoization techniques, code splitting, lazy loading, virtualization, profiling and debugging performance issues</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">Day 2: 1:00 PM - 4:00 PM</div>
                        <div class="agenda-content">
                            <h4>Testing & Architecture</h4>
                            <p>Testing complex components, integration testing, architectural patterns for scalability, Q&A session</p>
                        </div>
                    </div>
                </div>
                
                <!-- Instructor Section -->
                <div class="instructor-section">
                    <div class="instructor-image">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Instructor">
                    </div>
                    <div class="instructor-info">
                        <h3>Michael Rodriguez</h3>
                        <div class="instructor-title">Senior Frontend Architect</div>
                        <p>Michael is a React expert with over 10 years of experience building complex applications for Fortune 500 companies. He's contributed to open-source React projects and has trained hundreds of developers worldwide.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Section -->
                <div class="faq-section">
                    <h2>Frequently Asked Questions</h2>
                    <div class="faq-item">
                        <div class="faq-question">
                            What level of React knowledge do I need?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>This workshop is designed for intermediate to advanced React developers. You should be comfortable with core React concepts (components, props, state, hooks) and have at least 6 months of practical React experience.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            What do I need to bring?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You'll need a laptop with Node.js (v14 or higher) installed. We recommend using VS Code as your editor, but you're free to use any editor you prefer. All workshop materials will be provided electronically.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            Will the sessions be recorded?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, all workshop sessions will be recorded and available to participants for 90 days after the workshop. You'll receive access to the recordings within 24 hours of each session.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            What is your refund policy?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We offer a full refund if you cancel at least 14 days before the workshop. Cancellations made 7-13 days before will receive a 50% refund. Unfortunately, we cannot issue refunds for cancellations made less than 7 days before the workshop.</p>
                        </div>
                    </div>
                </div>
            </main>
            
            <!-- Registration Card -->
            <aside class="registration-card">
                <div class="price-section">
                    <h3>Workshop Registration</h3>
                    <div class="price">$349</div>
                    <p>Early Bird Pricing (Ends June 1)</p>
                    <p class="price-note">Regular Price: $499</p>
                </div>
                
                <div class="register-form">
                    <h3>Register Now</h3>
                    <p>Secure your spot in this limited-seating workshop</p>
                    
                    <form id="registrationForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" required placeholder="John Smith">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" required placeholder="john@example.com">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" id="company" placeholder="Company Name (Optional)">
                        </div>
                        <div class="form-group">
                            <label for="experience">React Experience</label>
                            <select id="experience" required>
                                <option value="">Select your experience level</option>
                                <option value="beginner">Less than 6 months</option>
                                <option value="intermediate">6 months - 2 years</option>
                                <option value="advanced">2+ years</option>
                            </select>
                        </div>
                        <button type="submit" class="btn">Complete Registration</button>
                    </form>
                    
                    <div class="guarantee">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <h4>Satisfaction Guarantee</h4>
                            <p>If you're not satisfied with the workshop, we'll refund 100% of your fee.</p>
                        </div>
                    </div>
                </div>
                
                <div class="included-items">
                    <h3>What's Included</h3>
                    <ul>
                        <li>14 hours of live instruction</li>
                        <li>Workshop materials and code samples</li>
                        <li>Certificate of completion</li>
                        <li>Access to private Slack community</li>
                        <li>90-day access to session recordings</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>

    <script>
 
        // Form submission
        const registrationForm = document.getElementById('registrationForm');
        registrationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for registering! You will receive a confirmation email shortly.');
            registrationForm.reset();
        });
    </script>
