<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | AVANT VISTA VENTURES | Premium Digital Transformation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Jobs Specific Styles */
        .jobs-hero {
            background: linear-gradient(135deg, rgba(10, 36, 99, 0.95) 0%, rgba(94, 96, 206, 0.9) 100%);
            color: var(--text-inverse);
            padding: 150px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .jobs-hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .jobs-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--text-inverse);
        }
        
        .jobs-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .jobs-filter {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            margin: -40px auto 60px;
            max-width: 1200px;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 10;
        }
        
        .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .filter-group {
            margin-bottom: 15px;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-blue);
        }
        
        .filter-group select, .filter-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--medium-gray);
            border-radius: 8px;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            background-color: var(--bg-tertiary);
            color: var(--text-primary);
        }
        
        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .jobs-section {
            padding: 60px 0 100px;
            background-color: var(--bg-primary);
        }
        
        .jobs-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .job-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-left: 4px solid var(--secondary-teal);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .job-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
        }
        
        .job-header {
            padding: 25px 30px;
            border-bottom: 1px solid var(--medium-gray);
        }
        
        .job-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }
        
        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .job-meta-item {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: var(--text-primary);
        }
        
        .job-meta-item i {
            margin-right: 8px;
            color: var(--secondary-teal);
        }
        
        .job-id {
            background: var(--gradient);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }
        
        .job-body {
            padding: 20px 30px;
            flex-grow: 1;
        }
        
        .job-details {
            margin-bottom: 20px;
        }
        
        .detail-item {
            margin-bottom: 10px;
            display: flex;
        }
        
        .detail-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--primary-blue);
        }
        
        .job-footer {
            padding: 0 30px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .salary-range {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--accent-purple);
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
        }
        
        .pagination-button {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid var(--medium-gray);
            background: var(--card-bg);
            color: var(--text-primary);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .pagination-button:hover, .pagination-button.active {
            background: var(--gradient);
            color: var(--text-inverse);
            border-color: transparent;
        }
        
        .job-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .job-modal.active {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-content {
            background: var(--card-bg);
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            padding: 40px;
            position: relative;
            transform: scale(0.9);
            transition: all 0.3s ease;
        }
        
        .job-modal.active .modal-content {
            transform: scale(1);
        }
        
        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-primary);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .modal-close:hover {
            color: var(--secondary-teal);
            transform: rotate(90deg);
        }
        
        .modal-header {
            margin-bottom: 30px;
            padding-right: 30px;
        }
        
        .modal-body {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .modal-section {
            margin-bottom: 25px;
        }
        
        .modal-section h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.3rem;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--secondary-teal);
        }
        
        .requirements-list, .responsibilities-list, .benefits-list {
            list-style-type: none;
        }
        
        .requirements-list li, .responsibilities-list li, .benefits-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        
        .requirements-list li:before, .responsibilities-list li:before {
            content: "•";
            color: var(--secondary-teal);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .benefits-list li:before {
            content: "✓";
            color: var(--secondary-teal);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .modal-footer {
            margin-top: 30px;
            text-align: center;
        }
        
        @media (max-width: 992px) {
            .modal-body {
                grid-template-columns: 1fr;
            }
            
            .jobs-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .jobs-hero h1 {
                font-size: 2.5rem;
            }
            
            .filter-grid {
                grid-template-columns: 1fr;
            }
            
            .job-footer {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .job-title {
                font-size: 1.3rem;
            }
            
            .job-meta {
                flex-direction: column;
                gap: 8px;
            }
        }
        
        @media (max-width: 576px) {
            .jobs-hero h1 {
                font-size: 2rem;
            }
            
            .jobs-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Scroll progress indicator -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Pre-header Section -->
    <div class="pre-header">
        <div class="container">
            <div class="pre-header-content">
                <div class="trending-news">
                    <span>TRENDING</span>
                    <p>New: CoreXPHP Framework v2.0 released with enhanced security features →</p>
                </div>
                <button class="pre-header-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="/"><img src="<?php echo ASSETS?>/img/logo.svg" alt="Avant Vista Ventures Logo" style="width:180px"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/workshops">Workshops</a></li>
                    <li><a href="/case-studies">Case Studies</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </button>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Full Screen Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-menu-close" id="mobileMenuClose">
            <i class="fas fa-times"></i>
        </button>
        <ul class="mobile-nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/workshops">Workshops</a></li>
            <li><a href="/case-studies">Case Studies</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>

    <!-- Jobs Hero Section -->
    <section class="jobs-hero">
        <div class="container">
            <div class="jobs-hero-content">
                <h1>Join Our Team</h1>
                <p>Be part of a dynamic digital marketing agency that's transforming the industry. Explore our current openings and find where you fit in our vision.</p>
                <a href="#openings" class="btn btn-outline">View Open Positions</a>
            </div>
        </div>
    </section>

    <!-- Jobs Filter Section -->
    <div class="container">
        <div class="jobs-filter">
            <h2 style="text-align: center; margin-bottom: 25px; color: var(--primary-blue);">Find Your Perfect Role</h2>
            <div class="filter-grid">
                <div class="filter-group">
                    <label for="department">Department</label>
                    <select id="department">
                        <option value="">All Departments</option>
                        <option value="Creative">Creative</option>
                        <option value="Technology">Technology</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="Operations">Operations</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="location">Location</label>
                    <select id="location">
                        <option value="">All Locations</option>
                        <option value="Remote">Remote</option>
                        <option value="New York">New York</option>
                        <option value="London">London</option>
                        <option value="Singapore">Singapore</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="job-type">Job Type</label>
                    <select id="job-type">
                        <option value="">All Types</option>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="search">Search Keywords</label>
                    <input type="text" id="search" placeholder="Job title, skills, etc.">
                </div>
            </div>
            <div class="filter-buttons">
                <button class="btn" id="apply-filters">Apply Filters</button>
                <button class="btn btn-secondary" id="reset-filters">Reset</button>
            </div>
        </div>
    </div>

    <!-- Jobs Section -->
    <section class="jobs-section" id="openings">
        <div class="container">
            <div class="section-title">
                <h2>Current Openings</h2>
                <p>Explore our available positions and find where your skills can make the most impact</p>
            </div>
            
            <div class="jobs-container">
                <div class="jobs-grid" id="jobs-grid">
                    <!-- Job cards will be dynamically inserted here -->
                </div>
                
                <div class="pagination" id="pagination">
                    <!-- Pagination will be dynamically inserted here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Job Modal -->
    <div class="job-modal" id="jobModal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose">
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-header">
                <h2 id="modal-title"></h2>
                <div class="job-meta">
                    <div class="job-meta-item">
                        <i class="fas fa-building"></i>
                        <span id="modal-department"></span>
                    </div>
                    <div class="job-meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span id="modal-location"></span>
                    </div>
                    <div class="job-meta-item">
                        <i class="fas fa-clock"></i>
                        <span id="modal-type"></span>
                    </div>
                </div>
                <div class="salary-range" id="modal-salary"></div>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h3>Requirements</h3>
                    <ul class="requirements-list" id="modal-requirements">
                        <!-- Requirements will be dynamically inserted here -->
                    </ul>
                </div>
                <div class="modal-section">
                    <h3>Responsibilities</h3>
                    <ul class="responsibilities-list" id="modal-responsibilities">
                        <!-- Responsibilities will be dynamically inserted here -->
                    </ul>
                </div>
                <div class="modal-section">
                    <h3>Benefits</h3>
                    <ul class="benefits-list" id="modal-benefits">
                        <!-- Benefits will be dynamically inserted here -->
                    </ul>
                </div>
                <div class="modal-section">
                    <h3>Job Details</h3>
                    <div class="detail-item">
                        <span class="detail-label">Job ID:</span>
                        <span id="modal-id"></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Posted By:</span>
                        <span id="modal-postedby"></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Posted On:</span>
                        <span id="modal-postedat"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" id="apply-now">Apply Now</a>
            </div>
        </div>
    </div>

    <!-- Cookie Consent -->
    <div class="cookie-consent" id="cookieConsent">
        <div class="cookie-text">
            <h4>Privacy & Cookies Policy</h4>
            <p>We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.</p>
        </div>
        <div class="cookie-buttons">
            <button class="btn" id="acceptCookies">Accept All</button>
            <button class="btn btn-secondary" id="customizeCookies">Customize</button>
        </div>
    </div>

    <!-- Back to top button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <!-- Company Overview -->
                <div class="footer-column">
                    <h3>AVANT VISTA VENTURES</h3>
                    <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 20px;">
                        Empowering SMEs and startups with impactful, affordable, and scalable digital transformation services.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Company -->
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/products">Products</a></li>
                        <li><a href="/workshops">Workshops</a></li>
                        <li><a href="/case-studies">Case Studies</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/partners">Partners</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-of-service">Terms of Service</a></li>
                        <li><a href="/faq">FAQs</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 20px;">
                        Subscribe for digital insights and workshop updates.
                    </p>
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email Address" style="width: 100%; padding: 12px; border-radius: 30px; border: none;">
                        </div>
                        <button type="submit" class="btn" style="width: 100%; margin-top: 10px;">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; <?php echo date("Y");?> AVANT VISTA VENTURES. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Sample job data
        const jobsData = [
            {
                id: "MKT-2023-001",
                title: "Senior Digital Marketing Strategist",
                department: "Marketing",
                location: "Remote",
                type: "Full-time",
                salary: "$75,000 - $95,000",
                requirements: [
                    "5+ years experience in digital marketing",
                    "Proven track record with SEO/SEM campaigns",
                    "Experience with marketing analytics tools",
                    "Strong analytical and project management skills",
                    "Bachelor's degree in Marketing or related field"
                ],
                responsibilities: [
                    "Develop and implement digital marketing strategies",
                    "Manage SEO/SEM campaigns across multiple platforms",
                    "Analyze campaign performance and optimize accordingly",
                    "Collaborate with creative team on content strategy",
                    "Prepare and present reports to clients and stakeholders"
                ],
                benefits: [
                    "Health, dental, and vision insurance",
                    "Flexible working hours",
                    "Remote work options",
                    "Professional development budget",
                    "Quarterly performance bonuses"
                ],
                postedBy: "HR Director",
                postedAt: "2023-10-15",
                isActive: true
            },
            {
                id: "CRE-2023-002",
                title: "Content Creator & SEO Specialist",
                department: "Creative",
                location: "New York",
                type: "Full-time",
                salary: "$60,000 - $75,000",
                requirements: [
                    "3+ years experience in content creation",
                    "Strong understanding of SEO principles",
                    "Excellent writing and editing skills",
                    "Experience with WordPress and CMS platforms",
                    "Portfolio of published work"
                ],
                responsibilities: [
                    "Create engaging content for various digital platforms",
                    "Optimize content for search engines",
                    "Collaborate with marketing team on content strategy",
                    "Research industry-related topics and trends",
                    "Edit and proofread content before publication"
                ],
                benefits: [
                    "Health insurance",
                    "401(k) matching",
                    "Paid time off",
                    "Flexible schedule",
                    "Creative freedom on projects"
                ],
                postedBy: "Creative Director",
                postedAt: "2023-10-20",
                isActive: true
            },
            {
                id: "TECH-2023-003",
                title: "Frontend Developer",
                department: "Technology",
                location: "Remote",
                type: "Full-time",
                salary: "$85,000 - $110,000",
                requirements: [
                    "5+ years experience in frontend development",
                    "Proficiency in HTML, CSS, JavaScript",
                    "Experience with React, Vue, or Angular",
                    "Knowledge of responsive design principles",
                    "Familiarity with version control systems"
                ],
                responsibilities: [
                    "Develop responsive web applications",
                    "Collaborate with UX/UI designers",
                    "Optimize applications for maximum speed",
                    "Implement SEO best practices",
                    "Maintain and improve website functionality"
                ],
                benefits: [
                    "Competitive salary",
                    "Remote work flexibility",
                    "Health and wellness benefits",
                    "Continuous learning opportunities",
                    "Latest hardware and software"
                ],
                postedBy: "CTO",
                postedAt: "2023-10-18",
                isActive: true
            },
            {
                id: "MKT-2023-004",
                title: "Social Media Manager",
                department: "Marketing",
                location: "London",
                type: "Full-time",
                salary: "£45,000 - £55,000",
                requirements: [
                    "4+ years experience in social media management",
                    "Experience with social media analytics tools",
                    "Excellent written and verbal communication skills",
                    "Ability to create engaging content",
                    "Knowledge of social media advertising"
                ],
                responsibilities: [
                    "Develop and implement social media strategy",
                    "Create and schedule engaging content",
                    "Monitor and respond to audience interactions",
                    "Analyze social media performance metrics",
                    "Manage social media advertising campaigns"
                ],
                benefits: [
                    "Private health insurance",
                    "Work-from-home flexibility",
                    "28 days paid vacation",
                    "Professional development allowance",
                    "Team building events"
                ],
                postedBy: "Marketing Manager",
                postedAt: "2023-10-22",
                isActive: true
            },
            {
                id: "SALES-2023-005",
                title: "Sales Development Representative",
                department: "Sales",
                location: "New York",
                type: "Full-time",
                salary: "$55,000 - $70,000 + Commission",
                requirements: [
                    "2+ years experience in sales or business development",
                    "Excellent communication and interpersonal skills",
                    "Ability to work in a fast-paced environment",
                    "Familiarity with CRM software",
                    "Goal-oriented mindset"
                ],
                responsibilities: [
                    "Identify and qualify new sales opportunities",
                    "Initiate contact with potential clients",
                    "Schedule meetings for sales team",
                    "Maintain accurate records in CRM",
                    "Achieve monthly quota of qualified opportunities"
                ],
                benefits: [
                    "Uncapped commission structure",
                    "Health and dental insurance",
                    "Sales training and development",
                    "Quarterly team incentives",
                    "Career advancement opportunities"
                ],
                postedBy: "Sales Director",
                postedAt: "2023-10-17",
                isActive: true
            },
            {
                id: "OPS-2023-006",
                title: "Project Manager",
                department: "Operations",
                location: "Singapore",
                type: "Full-time",
                salary: "SGD 70,000 - 90,000",
                requirements: [
                    "PMP certification preferred",
                    "5+ years experience in project management",
                    "Experience with Agile methodologies",
                    "Excellent organizational skills",
                    "Strong leadership abilities"
                ],
                responsibilities: [
                    "Plan and execute digital projects",
                    "Coordinate cross-functional teams",
                    "Manage project timelines and budgets",
                    "Identify and mitigate project risks",
                    "Communicate with stakeholders"
                ],
                benefits: [
                    "Comprehensive health insurance",
                    "Annual performance bonus",
                    "Flexible work arrangements",
                    "Professional certification support",
                    "Wellness programs"
                ],
                postedBy: "Operations Director",
                postedAt: "2023-10-19",
                isActive: true
            }
        ];

        document.addEventListener('DOMContentLoaded', function() {
            const jobsGrid = document.getElementById('jobs-grid');
            const pagination = document.getElementById('pagination');
            const jobModal = document.getElementById('jobModal');
            const modalClose = document.getElementById('modalClose');
            const applyFiltersBtn = document.getElementById('apply-filters');
            const resetFiltersBtn = document.getElementById('reset-filters');
            
            let currentPage = 1;
            const jobsPerPage = 6;
            let filteredJobs = [...jobsData];
            
            // Initialize the page
            displayJobs(filteredJobs, currentPage);
            setupPagination(filteredJobs);
            
            // Event listeners for filters
            applyFiltersBtn.addEventListener('click', function() {
                filterJobs();
            });
            
            resetFiltersBtn.addEventListener('click', function() {
                document.getElementById('department').value = '';
                document.getElementById('location').value = '';
                document.getElementById('job-type').value = '';
                document.getElementById('search').value = '';
                filteredJobs = [...jobsData];
                currentPage = 1;
                displayJobs(filteredJobs, currentPage);
                setupPagination(filteredJobs);
            });
            
            // Modal close event
            modalClose.addEventListener('click', function() {
                jobModal.classList.remove('active');
            });
            
            // Close modal when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target === jobModal) {
                    jobModal.classList.remove('active');
                }
            });
            
            // Filter jobs based on selected criteria
            function filterJobs() {
                const department = document.getElementById('department').value;
                const location = document.getElementById('location').value;
                const type = document.getElementById('job-type').value;
                const search = document.getElementById('search').value.toLowerCase();
                
                filteredJobs = jobsData.filter(job => {
                    return (
                        (department === '' || job.department === department) &&
                        (location === '' || job.location === location) &&
                        (type === '' || job.type === type) &&
                        (search === '' || 
                         job.title.toLowerCase().includes(search) ||
                         job.requirements.some(req => req.toLowerCase().includes(search)))
                    );
                });
                
                currentPage = 1;
                displayJobs(filteredJobs, currentPage);
                setupPagination(filteredJobs);
            }
            
            // Display jobs for the current page
            function displayJobs(jobs, page) {
                jobsGrid.innerHTML = '';
                
                const startIndex = (page - 1) * jobsPerPage;
                const endIndex = startIndex + jobsPerPage;
                const paginatedJobs = jobs.slice(startIndex, endIndex);
                
                if (paginatedJobs.length === 0) {
                    jobsGrid.innerHTML = `
                        <div class="no-results" style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                            <h3 style="color: var(--primary-blue); margin-bottom: 20px;">No jobs found</h3>
                            <p>Try adjusting your filters to see more results.</p>
                        </div>
                    `;
                    return;
                }
                
                paginatedJobs.forEach(job => {
                    const jobCard = document.createElement('div');
                    jobCard.className = 'job-card';
                    jobCard.innerHTML = `
                        <div class="job-header">
                            <h3 class="job-title">${job.title}</h3>
                            <div class="job-meta">
                                <div class="job-meta-item">
                                    <i class="fas fa-building"></i>
                                    <span>${job.department}</span>
                                </div>
                                <div class="job-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>${job.location}</span>
                                </div>
                                <div class="job-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>${job.type}</span>
                                </div>
                            </div>
                            <span class="job-id">${job.id}</span>
                        </div>
                        <div class="job-body">
                            <div class="job-details">
                                <div class="detail-item">
                                    <span class="detail-label">Salary:</span>
                                    <span>${job.salary}</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-footer">
                            <div class="salary-range">${job.salary}</div>
                            <button class="btn view-details" data-id="${job.id}">View Details</button>
                        </div>
                    `;
                    jobsGrid.appendChild(jobCard);
                });
                
                // Add event listeners to view details buttons
                document.querySelectorAll('.view-details').forEach(button => {
                    button.addEventListener('click', function() {
                        const jobId = this.getAttribute('data-id');
                        const job = jobsData.find(j => j.id === jobId);
                        if (job) {
                            showJobDetails(job);
                        }
                    });
                });
            }
            
            // Set up pagination
            function setupPagination(jobs) {
                const pageCount = Math.ceil(jobs.length / jobsPerPage);
                pagination.innerHTML = '';
                
                if (pageCount <= 1) return;
                
                // Previous button
                if (pageCount > 1) {
                    const prevButton = document.createElement('button');
                    prevButton.className = 'pagination-button';
                    prevButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
                    prevButton.addEventListener('click', function() {
                        if (currentPage > 1) {
                            currentPage--;
                            displayJobs(filteredJobs, currentPage);
                            updatePaginationButtons();
                        }
                    });
                    pagination.appendChild(prevButton);
                }
                
                // Page buttons
                for (let i = 1; i <= pageCount; i++) {
                    const pageButton = document.createElement('button');
                    pageButton.className = 'pagination-button';
                    if (i === currentPage) pageButton.classList.add('active');
                    pageButton.textContent = i;
                    pageButton.addEventListener('click', function() {
                        currentPage = i;
                        displayJobs(filteredJobs, currentPage);
                        updatePaginationButtons();
                    });
                    pagination.appendChild(pageButton);
                }
                
                // Next button
                if (pageCount > 1) {
                    const nextButton = document.createElement('button');
                    nextButton.className = 'pagination-button';
                    nextButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
                    nextButton.addEventListener('click', function() {
                        if (currentPage < pageCount) {
                            currentPage++;
                            displayJobs(filteredJobs, currentPage);
                            updatePaginationButtons();
                        }
                    });
                    pagination.appendChild(nextButton);
                }
                
                function updatePaginationButtons() {
                    const buttons = pagination.querySelectorAll('.pagination-button');
                    buttons.forEach((button, index) => {
                        if (index === currentPage) {
                            button.classList.add('active');
                        } else {
                            button.classList.remove('active');
                        }
                    });
                }
            }
            
            // Show job details in modal
            function showJobDetails(job) {
                document.getElementById('modal-title').textContent = job.title;
                document.getElementById('modal-department').textContent = job.department;
                document.getElementById('modal-location').textContent = job.location;
                document.getElementById('modal-type').textContent = job.type;
                document.getElementById('modal-salary').textContent = job.salary;
                document.getElementById('modal-id').textContent = job.id;
                document.getElementById('modal-postedby').textContent = job.postedBy;
                document.getElementById('modal-postedat').textContent = job.postedAt;
                
                // Set requirements
                const requirementsList = document.getElementById('modal-requirements');
                requirementsList.innerHTML = '';
                job.requirements.forEach(req => {
                    const li = document.createElement('li');
                    li.textContent = req;
                    requirementsList.appendChild(li);
                });
                
                // Set responsibilities
                const responsibilitiesList = document.getElementById('modal-responsibilities');
                responsibilitiesList.innerHTML = '';
                job.responsibilities.forEach(resp => {
                    const li = document.createElement('li');
                    li.textContent = resp;
                    responsibilitiesList.appendChild(li);
                });
                
                // Set benefits
                const benefitsList = document.getElementById('modal-benefits');
                benefitsList.innerHTML = '';
                job.benefits.forEach(benefit => {
                    const li = document.createElement('li');
                    li.textContent = benefit;
                    benefitsList.appendChild(li);
                });
                
                // Set apply now link
                document.getElementById('apply-now').href = `/apply?job=${job.id}`;
                
                // Show modal
                jobModal.classList.add('active');
            }
        });
    </script>
    <script src="<?php echo ASSETS?>/js/main.js"></script>
</body>
</html>