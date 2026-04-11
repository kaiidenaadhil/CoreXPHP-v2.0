<style>

        /* Blog Hero */
        .blog-hero {
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

        .blog-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            max-width: 900px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .blog-hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin-bottom: 3rem;
            font-weight: 300;
            opacity: 0.9;
        }

        .blog-search {
            position: relative;
            max-width: 600px;
            width: 100%;
            margin: 2rem auto 0;
        }

        .blog-search input {
            width: 100%;
            padding: 18px 30px;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            color: var(--primary-blue);
        }

        .blog-search button {
            position: absolute;
            right: 8px;
            top: 8px;
            background: var(--gradient);
            color: var(--text-inverse);
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            cursor: pointer;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .blog-search button:hover {
            transform: scale(1.1);
        }

        /* Blog Layout */
        .blog-container {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 3rem;
            padding: 2rem 0;
        }

        /* Featured Post */
        .featured-post {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 4rem;
            border: 1px solid var(--card-border);
        }

        .featured-content {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .featured-content .category {
            display: inline-block;
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .featured-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
            line-height: 1.2;
        }

        .featured-content p {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .post-meta {
            display: flex;
            align-items: center;
            margin-top: 1rem;
            color: var(--text-primary);
        }

        .post-meta img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }

        .featured-image {
            position: relative;
            overflow: hidden;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .featured-post:hover .featured-image img {
            transform: scale(1.05);
        }

        /* Blog Grid */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .blog-card {
            background: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--card-border);
            display: flex;
            flex-direction: column;
            position: relative;
            height: 100%;
        }

        .blog-card:hover {
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

        .blog-card:hover .card-image img {
            transform: scale(1.1);
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
            z-index: 2;
        }

        .card-content {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 1.5rem;
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

        .post-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 1.5rem;
            border-top: 1px solid var(--medium-gray);
            color: var(--text-primary);
            font-size: 0.9rem;
        }

        .read-time {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Blog Sidebar */
        .sidebar {
            padding-left: 2rem;
            border-left: 1px solid var(--medium-gray);
        }

        .sidebar-widget {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 1.8rem;
            margin-bottom: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--card-border);
        }

        .sidebar h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
            position: relative;
            padding-bottom: 10px;
        }

        .sidebar h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--gradient);
            border-radius: 3px;
        }

        /* Popular Posts */
        .popular-posts {
            list-style: none;
        }

        .popular-post {
            display: flex;
            gap: 15px;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--medium-gray);
            transition: var(--transition);
        }

        .popular-post:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .popular-post:hover {
            transform: translateX(5px);
        }

        .popular-post img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
        }

        .popular-post-content h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--primary-blue);
        }

        .popular-post-content .post-date {
            color: var(--text-primary);
            font-size: 0.85rem;
        }

        /* Categories */
        .categories {
            list-style: none;
        }

        .category {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid var(--medium-gray);
            color: var(--text-primary);
            transition: var(--transition);
        }

        .category:last-child {
            border-bottom: none;
        }

        .category:hover {
            color: var(--primary-blue);
            transform: translateX(5px);
        }

        .category-count {
            background: var(--bg-tertiary);
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        /* Tags */
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag {
            background: var(--bg-tertiary);
            color: var(--text-primary);
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 0.9rem;
            transition: var(--transition);
            text-decoration: none;
        }

        .tag:hover {
            background: var(--gradient);
            color: var(--text-inverse);
            transform: translateY(-3px);
        }

        /* Newsletter */
        .newsletter input {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid var(--medium-gray);
            border-radius: 50px;
            margin-bottom: 15px;
            background: var(--bg-tertiary);
            color: var(--text-primary);
        }

        .newsletter button {
            width: 100%;
            padding: 14px;
            background: var(--gradient);
            color: var(--text-inverse);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .newsletter button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(10, 36, 99, 0.2);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin: 3rem 0;
        }

        .pagination a {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 5px;
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .pagination a:hover, 
        .pagination a.active {
            background: var(--gradient);
            color: var(--text-inverse);
            transform: translateY(-5px);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .blog-container {
                grid-template-columns: 1fr 300px;
            }
        }

        @media (max-width: 992px) {
            .blog-hero h1 {
                font-size: 3.5rem;
            }
            
            .blog-container {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                padding-left: 0;
                border-left: none;
                padding-top: 2rem;
                border-top: 1px solid var(--medium-gray);
            }
            
            .featured-post {
                grid-template-columns: 1fr;
            }
            
            .featured-image {
                height: 400px;
            }
        }

        @media (max-width: 768px) {
            .blog-hero {
                height: 60vh;
            }
            
            .blog-hero h1 {
                font-size: 2.8rem;
            }
            
            .blog-hero p {
                font-size: 1.2rem;
            }
            
            .featured-content h2 {
                font-size: 2.2rem;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .blog-hero {
                height: 80vh;
            }
            
            .blog-hero h1 {
                font-size: 2.2rem;
            }
            
            .featured-content {
                padding: 2rem;
            }
            
            .featured-content h2 {
                font-size: 1.8rem;
            }
            
            .popular-post {
                flex-direction: column;
            }
        }
    </style>



    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <h1>Insights & Articles</h1>
        <p>Discover the latest trends, tips, and industry insights</p>
        
        <div class="blog-search">
            <input type="text" placeholder="Search articles...">
            <button><i class="fas fa-search"></i></button>
        </div>
    </section>

    <div class="container">
        <!-- Featured Post -->
        <div class="featured-post">
            <div class="featured-image">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Featured Post">
            </div>
            <div class="featured-content">
                <span class="category">Technology</span>
                <h2>The Future of AI in Business: Opportunities and Challenges</h2>
                <p>Artificial Intelligence is transforming industries at an unprecedented pace. In this article, we explore how businesses can leverage AI while navigating the ethical considerations and implementation challenges.</p>
                <div class="post-meta">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author">
                    <div>
                        <h4>Michael Johnson</h4>
                        <p>May 12, 2023 · 8 min read</p>
                    </div>
                </div>
                <a href="#" class="btn">Read Full Article</a>
            </div>
        </div>

        <div class="blog-container">
            <main class="blog-content">
                <div class="blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="blog-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Web Design">
                            <div class="card-tag">Design</div>
                        </div>
                        <div class="card-content">
                            <h3>10 Web Design Trends Dominating 2023</h3>
                            <p>Discover the latest web design trends that are shaping user experiences and driving conversions in the digital landscape.</p>
                            <div class="post-info">
                                <span>June 5, 2023</span>
                                <span class="read-time"><i class="far fa-clock"></i> 6 min</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Card 2 -->
                    <div class="blog-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Programming">
                            <div class="card-tag">Development</div>
                        </div>
                        <div class="card-content">
                            <h3>Building Scalable Applications with Microservices</h3>
                            <p>Learn how microservices architecture can help you build more resilient, scalable applications that grow with your business needs.</p>
                            <div class="post-info">
                                <span>May 28, 2023</span>
                                <span class="read-time"><i class="far fa-clock"></i> 9 min</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Card 3 -->
                    <div class="blog-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Marketing">
                            <div class="card-tag">Marketing</div>
                        </div>
                        <div class="card-content">
                            <h3>Data-Driven Marketing Strategies for 2023</h3>
                            <p>How to leverage analytics and customer insights to create marketing campaigns that deliver measurable results.</p>
                            <div class="post-info">
                                <span>May 15, 2023</span>
                                <span class="read-time"><i class="far fa-clock"></i> 7 min</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Card 4 -->
                    <div class="blog-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Analytics">
                            <div class="card-tag">Analytics</div>
                        </div>
                        <div class="card-content">
                            <h3>Turning Data into Actionable Business Insights</h3>
                            <p>Practical techniques for transforming raw data into strategic insights that drive business decisions and growth.</p>
                            <div class="post-info">
                                <span>May 3, 2023</span>
                                <span class="read-time"><i class="far fa-clock"></i> 8 min</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Card 5 -->
                    <div class="blog-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Leadership">
                            <div class="card-tag">Leadership</div>
                        </div>
                        <div class="card-content">
                            <h3>Remote Team Management: Best Practices</h3>
                            <p>Effective strategies for leading distributed teams and maintaining productivity, engagement, and company culture.</p>
                            <div class="post-info">
                                <span>April 22, 2023</span>
                                <span class="read-time"><i class="far fa-clock"></i> 5 min</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Card 6 -->
                    <div class="blog-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Innovation">
                            <div class="card-tag">Innovation</div>
                        </div>
                        <div class="card-content">
                            <h3>Fostering Innovation in Established Companies</h3>
                            <p>How large organizations can create environments that encourage innovation and adapt to changing markets.</p>
                            <div class="post-info">
                                <span>April 10, 2023</span>
                                <span class="read-time"><i class="far fa-clock"></i> 10 min</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="pagination">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                </div>
            </main>
            
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h3>Popular Posts</h3>
                    <ul class="popular-posts">
                        <li class="popular-post">
                            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Popular Post">
                            <div class="popular-post-content">
                                <h4>10 Web Design Trends Dominating 2023</h4>
                                <p class="post-date">June 5, 2023</p>
                            </div>
                        </li>
                        <li class="popular-post">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Popular Post">
                            <div class="popular-post-content">
                                <h4>Building Scalable Applications with Microservices</h4>
                                <p class="post-date">May 28, 2023</p>
                            </div>
                        </li>
                        <li class="popular-post">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Popular Post">
                            <div class="popular-post-content">
                                <h4>Data-Driven Marketing Strategies for 2023</h4>
                                <p class="post-date">May 15, 2023</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="sidebar-widget">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li class="category">
                            <span>Technology</span>
                            <span class="category-count">18</span>
                        </li>
                        <li class="category">
                            <span>Design</span>
                            <span class="category-count">12</span>
                        </li>
                        <li class="category">
                            <span>Development</span>
                            <span class="category-count">15</span>
                        </li>
                        <li class="category">
                            <span>Marketing</span>
                            <span class="category-count">9</span>
                        </li>
                        <li class="category">
                            <span>Leadership</span>
                            <span class="category-count">7</span>
                        </li>
                        <li class="category">
                            <span>Innovation</span>
                            <span class="category-count">11</span>
                        </li>
                    </ul>
                </div>
                
                <div class="sidebar-widget">
                    <h3>Popular Tags</h3>
                    <div class="tags">
                        <a href="#" class="tag">AI</a>
                        <a href="#" class="tag">Web Design</a>
                        <a href="#" class="tag">JavaScript</a>
                        <a href="#" class="tag">React</a>
                        <a href="#" class="tag">SEO</a>
                        <a href="#" class="tag">UX/UI</a>
                        <a href="#" class="tag">Cloud</a>
                        <a href="#" class="tag">Startup</a>
                        <a href="#" class="tag">Productivity</a>
                        <a href="#" class="tag">Cybersecurity</a>
                    </div>
                </div>
                
                <div class="sidebar-widget newsletter">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get the latest insights delivered to your inbox</p>
                    <input type="email" placeholder="Your email address">
                    <button>Subscribe</button>
                </div>
            </aside>
        </div>
    </div>
