<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Empowro</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --off-white: #F9F9F9;
            --charcoal: #1a2a3a;
            --emerald: #10b981;
            --royal-blue: #3b82f6;
            --golden-yellow: #f59e0b;
            --coral-red: #ef4444;
            --lavender: #a855f7;
            --teal: #06b6d4;
            
            --gradient-primary: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            --gradient-secondary: linear-gradient(135deg, var(--lavender), var(--teal));
            --gradient-dark: linear-gradient(135deg, #1e293b, #0f172a);
            
            --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 15px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px rgba(0, 0, 0, 0.15);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--charcoal);
            background-color: var(--off-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Header styles would be here from your existing file */

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-dark);
            color: white;
            padding: 80px 0;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(46, 204, 113, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(52, 152, 219, 0.15) 0%, transparent 50%);
        }

        .hero-content {
            max-width: 800px;
            text-align: center;
            z-index: 2;
            padding: 0 20px;
        }

        .hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 800;
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 36px;
            background: var(--gradient-primary);
            color: white;
            text-decoration: none;
            border-radius: 100px;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: var(--charcoal);
        }

        /* Section Common Styles */
        .section {
            padding: 100px 0;
        }

        .section-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: #64748b;
            max-width: 600px;
            margin-bottom: 60px;
        }

        /* Our Story Section */
        .our-story {
            background: white;
            position: relative;
        }

        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .story-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transform: rotate(-2deg);
        }

        .story-image::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: 10px;
            bottom: 10px;
            background: var(--gradient-primary);
            border-radius: 20px;
            z-index: -1;
        }

        .image-placeholder {
            height: 400px;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            font-size: 1.1rem;
            border-radius: 20px;
            transform: rotate(2deg);
        }

        .story-content {
            padding-left: 20px;
        }

        /* Mission & Vision */
        .mission-vision {
            background: var(--off-white);
        }

        .mv-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .mv-card {
            background: white;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .mv-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .mv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: var(--gradient-primary);
        }

        .mv-icon {
            font-size: 3.5rem;
            margin-bottom: 24px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .mv-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 16px;
        }

        /* Core Values */
        .values {
            background: white;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .value-card {
            background: var(--off-white);
            padding: 40px 30px;
            border-radius: 16px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid #e2e8f0;
        }

        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: transparent;
        }

        .value-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            font-size: 2rem;
        }

        .value-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.4rem;
            margin-bottom: 16px;
        }

        /* Impact Highlights */
        .impact {
            background: var(--gradient-dark);
            color: white;
        }

        .impact .section-title::after {
            background: var(--gradient-primary);
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 40px;
        }

        .impact-card {
            text-align: center;
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .impact-card:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.1);
        }

        .impact-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .counter {
            font-size: 3.5rem;
            font-weight: 800;
            margin: 15px 0;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Team Section */
        .team {
            background: var(--off-white);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }

        .team-member {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            position: relative;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .team-img {
            height: 320px;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            position: relative;
            overflow: hidden;
        }

        .team-info {
            padding: 24px;
            text-align: center;
        }

        .team-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.4rem;
            margin-bottom: 8px;
        }

        .team-role {
            color: var(--royal-blue);
            font-weight: 600;
            margin-bottom: 16px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 16px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--off-white);
            color: var(--charcoal);
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--gradient-primary);
            color: white;
        }

        /* CTA Section */
        .cta-banner {
            padding: 100px 0;
            background: var(--gradient-primary);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(0, 0, 0, 0.1) 0%, transparent 50%);
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .cta-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            margin-bottom: 24px;
        }

        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .story-grid {
                gap: 40px;
            }
            
            .mv-grid {
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .section {
                padding: 80px 0;
            }
            
            .story-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .story-content {
                padding-left: 0;
            }
            
            .mv-grid {
                grid-template-columns: 1fr;
            }
            
            .impact-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }
            
            .impact-grid {
                grid-template-columns: 1fr;
            }
            
            .value-card, .mv-card {
                padding: 30px 20px;
            }
            
            .hero {
                min-height: 80vh;
            }
        }
    </style>
</head>
<body>
    <!-- Header would be here from your existing file -->

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">About Empowro</h1>
                    <p class="hero-subtitle">A movement to foster goodness, unity, and justice.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn">
                            <i class="fas fa-arrow-right"></i>
                            Join the Movement
                        </a>
                        <a href="#" class="btn btn-outline" style="margin-left: 16px;">
                            <i class="fas fa-play-circle"></i>
                            Watch Video
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="section our-story">
            <div class="container">
                <h2 class="section-title">Our Story</h2>
                <p class="section-subtitle">How we began our journey to make the world a better place</p>
                
                <div class="story-grid">
                    <div class="story-image">
                        <div class="image-placeholder">
                            <i class="fas fa-image fa-3x"></i>
                            <span style="margin-left: 10px;">Collaboration Image</span>
                        </div>
                    </div>
                    <div class="story-content">
                        <p>Empowro was born from the belief that small actions can create big change. We wanted to build a safe, ethical, and inspiring space where individuals, communities, and organizations come together to foster good deeds and deter harmful actions.</p>
                        <p style="margin-top: 20px;">Our journey began when a group of passionate individuals recognized the power of collective action. Today, we're proud to have created a platform that empowers people across the globe to make a difference in their communities.</p>
                        <p style="margin-top: 20px;">We believe that by connecting people with shared values and providing them with the tools they need, we can create a ripple effect of positivity that transforms societies.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="section mission-vision">
            <div class="container">
                <h2 class="section-title">Our Purpose</h2>
                <p class="section-subtitle">What drives us forward every single day</p>
                
                <div class="mv-grid">
                    <div class="mv-card animate-on-scroll">
                        <div class="mv-icon">🎯</div>
                        <h3 class="mv-title">Our Mission</h3>
                        <p>To create an accessible digital platform that empowers people to act for good, share ideas, and support causes that matter.</p>
                    </div>
                    
                    <div class="mv-card animate-on-scroll">
                        <div class="mv-icon">🌍</div>
                        <h3 class="mv-title">Our Vision</h3>
                        <p>A world where unity, kindness, and justice are the foundation of every digital and physical community.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="section values">
            <div class="container">
                <h2 class="section-title">Core Values</h2>
                <p class="section-subtitle">The principles that guide everything we do</p>
                
                <div class="values-grid">
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="value-title">Integrity</h3>
                        <p>We act with honesty and transparency in all our dealings.</p>
                    </div>
                    
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="value-title">Unity</h3>
                        <p>We bring people together for positive change and collective action.</p>
                    </div>
                    
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="value-title">Action</h3>
                        <p>We encourage doing, not just talking about making a difference.</p>
                    </div>
                    
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="value-title">Empowerment</h3>
                        <p>We give every voice a platform to be heard and make an impact.</p>
                    </div>
                    
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3 class="value-title">Responsibility</h3>
                        <p>We protect our users and communities with ethical practices.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Highlights Section -->
        <section class="section impact">
            <div class="container">
                <h2 class="section-title">Our Impact</h2>
                <p class="section-subtitle">The change we've created together so far</p>
                
                <div class="impact-grid">
                    <div class="impact-card animate-on-scroll">
                        <div class="impact-icon">🌱</div>
                        <div class="counter" data-target="10000">0</div>
                        <p>Good Deeds Logged</p>
                    </div>
                    
                    <div class="impact-card animate-on-scroll">
                        <div class="impact-icon">🤝</div>
                        <div class="counter" data-target="500">0</div>
                        <p>Communities United</p>
                    </div>
                    
                    <div class="impact-card animate-on-scroll">
                        <div class="impact-icon">🎓</div>
                        <div class="counter" data-target="200">0</div>
                        <p>Educational Campaigns Launched</p>
                    </div>
                    
                    <div class="impact-card animate-on-scroll">
                        <div class="impact-icon">🌍</div>
                        <div class="counter" data-target="50">0</div>
                        <p>Global Challenges Completed</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="section team">
            <div class="container">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="section-subtitle">The passionate people behind Empowro</p>
                
                <div class="team-grid">
                    <div class="team-member animate-on-scroll">
                        <div class="team-img">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Alex Johnson</h3>
                            <p class="team-role">Founder & CEO</p>
                            <p>Passionate about social change and technology innovation.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-member animate-on-scroll">
                        <div class="team-img">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Maria Rodriguez</h3>
                            <p class="team-role">Community Director</p>
                            <p>Building bridges between people and causes that matter.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-member animate-on-scroll">
                        <div class="team-img">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">David Kim</h3>
                            <p class="team-role">Tech Lead</p>
                            <p>Creating technical solutions for a better tomorrow.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-member animate-on-scroll">
                        <div class="team-img">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <div class="team-info">
                            <h3 class="team-name">Sarah Williams</h3>
                            <p class="team-role">Partnership Manager</p>
                            <p>Connecting organizations for greater collective impact.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Banner -->
        <section class="cta-banner">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title">Together, we can foster goodness and deter evil.</h2>
                    <p class="cta-text">Join thousands of change-makers who are already making a difference in their communities through Empowro.</p>
                    <a href="#" class="btn">
                        <i class="fas fa-rocket"></i>
                        Get Started Today
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer would be here from your existing file -->

    <script>
        // Animation on scroll functionality
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });
            
            // Counter animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // The lower the slower
            
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    
                    // Lower speed to make counting slower
                    const inc = target / speed;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };
                
                // Start counter when element is in view
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5
                });
                
                counterObserver.observe(counter);
            });
        });
    </script>
</body>
</html>