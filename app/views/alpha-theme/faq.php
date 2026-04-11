<style>
        /* FAQ Specific Styles */
        .faq-hero {
            background: linear-gradient(135deg, rgba(10, 36, 99, 0.95) 0%, rgba(94, 96, 206, 0.9) 100%);
            color: var(--text-inverse);
            padding: 150px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .faq-hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .faq-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--text-inverse);
        }
        
        .faq-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .search-box {
            max-width: 600px;
            margin: 40px auto 0;
            position: relative;
        }
        
        .search-box input {
            width: 100%;
            padding: 16px 25px;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--text-primary);
        }
        
        .search-box button {
            position: absolute;
            right: 5px;
            top: 5px;
            background: var(--gradient);
            border: none;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .search-box button:hover {
            transform: rotate(15deg);
        }
        
        .faq-section {
            padding: 100px 0;
            background-color: var(--bg-primary);
        }
        
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-category {
            margin-bottom: 60px;
        }
        
        .faq-category h2 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            color: var(--primary-blue);
            position: relative;
            padding-bottom: 15px;
        }
        
        .faq-category h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient);
            border-radius: 10px;
        }
        
        .faq-item {
            background: var(--card-bg);
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border-left: 4px solid var(--secondary-teal);
            transition: var(--transition);
        }
        
        .faq-item:hover {
            box-shadow: var(--card-hover-shadow);
        }
        
        .faq-question {
            padding: 25px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--primary-blue);
        }
        
        .faq-question i {
            transition: var(--transition);
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            color: var(--text-primary);
            line-height: 1.7;
        }
        
        .faq-item.active .faq-answer {
            padding: 0 30px 30px;
            max-height: 500px;
        }
        
        .faq-contact {
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 80px 0;
            text-align: center;
        }
        
        .faq-contact h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--text-inverse);
        }
        
        .faq-contact p {
            max-width: 700px;
            margin: 0 auto 40px;
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        @media (max-width: 768px) {
            .faq-hero h1 {
                font-size: 2.5rem;
            }
            
            .faq-category h2 {
                font-size: 1.8rem;
            }
            
            .faq-question {
                padding: 20px;
                font-size: 1rem;
            }
            
            .faq-answer {
                padding: 0 20px;
            }
            
            .faq-item.active .faq-answer {
                padding: 0 20px 20px;
            }
        }
    </style>

    <!-- FAQ Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <div class="faq-hero-content">
                <h1>Frequently Asked Questions</h1>
                <p>Find answers to common questions about our services, products, and processes.</p>
                
                <div class="search-box">
                    <input type="text" placeholder="Search for questions or topics...">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-container">
                
                <!-- General Questions -->
                <div class="faq-category">
                    <h2>General Questions</h2>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What is AVANT VISTA VENTURES? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>AVANT VISTA VENTURES is a digital transformation agency that specializes in helping SMEs and startups with innovative digital solutions. We offer services ranging from web development and digital marketing to custom software solutions and business process automation.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            How long has your company been in business? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We've been empowering businesses with digital solutions since 2015. With over 8 years of experience, we've developed expertise across various industries and technologies.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What industries do you serve? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We work with a diverse range of industries including e-commerce, healthcare, education, finance, real estate, and more. Our solutions are tailored to meet the specific needs of each industry.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Do you offer free consultations? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer a free 30-minute consultation to understand your business needs and discuss how we can help you achieve your digital transformation goals.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Services Questions -->
                <div class="faq-category">
                    <h2>Services</h2>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What services do you offer? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our services include:</p>
                            <ul>
                                <li>Custom Web Application Development</li>
                                <li>E-commerce Solutions</li>
                                <li>Digital Marketing & SEO</li>
                                <li>UI/UX Design</li>
                                <li>Mobile App Development</li>
                                <li>Cloud Solutions & DevOps</li>
                                <li>Business Process Automation</li>
                                <li>Data Analytics & BI Solutions</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Do you provide ongoing support after project completion? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer various maintenance and support packages to ensure your digital solutions continue to perform optimally. Our support includes regular updates, security patches, and technical assistance.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Can you work with our existing technology stack? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely. We're experienced with a wide range of technologies and can integrate with your existing systems. If needed, we can also recommend migrations to more suitable technologies.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Process Questions -->
                <div class="faq-category">
                    <h2>Process & Timeline</h2>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What is your typical project process? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our process typically follows these stages:</p>
                            <ol>
                                <li>Discovery & Requirement Analysis</li>
                                <li>Planning & Proposal</li>
                                <li>Design & Prototyping</li>
                                <li>Development & Implementation</li>
                                <li>Testing & Quality Assurance</li>
                                <li>Deployment & Launch</li>
                                <li>Maintenance & Support</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            How long does a typical project take? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Project timelines vary based on complexity. A simple website might take 2-4 weeks, while a complex custom application could take 3-6 months. We provide detailed timelines during the proposal stage.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            How involved do we need to be during the project? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We believe in collaborative partnerships. Your involvement is crucial during requirement gathering, review stages, and feedback cycles. We'll schedule regular check-ins to keep you updated on progress.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Pricing Questions -->
                <div class="faq-category">
                    <h2>Pricing & Payments</h2>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What is your pricing model? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We offer flexible pricing models based on project requirements:</p>
                            <ul>
                                <li><strong>Fixed Price:</strong> For well-defined projects with clear requirements</li>
                                <li><strong>Time & Materials:</strong> For projects with evolving requirements</li>
                                <li><strong>Retainer:</strong> For ongoing support and maintenance</li>
                                <li><strong>Dedicated Team:</strong> For long-term projects requiring dedicated resources</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Do you offer payment plans? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer flexible payment plans. Typically, we require a deposit to begin work, with subsequent payments tied to project milestones. We're happy to discuss payment options that work for your budget.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Are there any hidden costs? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We believe in transparency. All costs will be clearly outlined in your proposal. Any potential additional costs will be discussed and approved by you before proceeding.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- Contact CTA Section -->
    <section class="faq-contact">
        <div class="container">
            <h2>Still have questions?</h2>
            <p>Can't find the answer you're looking for? Our team is ready to help you with any questions about our services and how we can support your business growth.</p>
            <a href="/contact" class="btn btn-outline">Contact Us</a>
        </div>
    </section>


    <script>
        // FAQ Accordion Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Close other open items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                });
            });
            
            // Search functionality
            const searchInput = document.querySelector('.search-box input');
            const searchButton = document.querySelector('.search-box button');
            
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase();
                const faqItems = document.querySelectorAll('.faq-item');
                
                if (searchTerm.length < 2) {
                    // Show all if search term is too short
                    faqItems.forEach(item => {
                        item.style.display = 'block';
                    });
                    return;
                }
                
                let foundResults = false;
                
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                        item.classList.add('active'); // Open matching items
                        foundResults = true;
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                if (!foundResults) {
                    // You could show a "no results" message here
                    console.log('No results found');
                }
            }
            
            searchButton.addEventListener('click', performSearch);
            searchInput.addEventListener('keyup', function(event) {
                if (event.key === 'Enter') {
                    performSearch();
                }
            });
        });
    </script>
