<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Empowro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@700;800;900&family=Roboto+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
     

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            margin-bottom: var(--space-sm);
        }

        .mono {
            font-family: 'Roboto Mono', monospace;
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header */
        .page-header {
            text-align: center;
            margin-bottom: var(--space-lg);
        }

        .page-header h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: var(--space-sm);
        }

        .page-header p {
            color: var(--medium-gray);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Search and Filter Section */
        .search-filters {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--space-md);
            margin-bottom: var(--space-lg);
        }

        @media (min-width: 768px) {
            .search-filters {
                grid-template-columns: 1fr auto;
            }
        }

        /* Search Bar */
        .search-bar {
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 16px 20px;
            padding-left: 50px;
            border: none;
            background-color: var(--glass-bg);
            border-radius: var(--border-radius);
            font-size: 1rem;
            box-shadow: 0 0 0 2px transparent;
            transition: var(--transition);
            color: var(--text-dark);
            border: 1px solid var(--glass-border);
        }

        .search-bar input:focus {
            outline: none;
            box-shadow: 0 0 0 3px var(--royal-blue);
        }

        .search-bar i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--royal-blue);
        }

        /* Filter Buttons */
        .filter-buttons {
            display: flex;
            gap: var(--space-xs);
            overflow-x: auto;
            padding: var(--space-xs) 0;
            scrollbar-width: none;
        }

        .filter-buttons::-webkit-scrollbar {
            display: none;
        }

        .filter-button {
            padding: var(--space-sm) var(--space-md);
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            white-space: nowrap;
            font-weight: 500;
        }

        .filter-button.active {
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border-color: transparent;
        }

        /* Glass Card Styles */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: var(--border-radius);
            border: 1px solid var(--glass-border);
            box-shadow: 0 4px 24px var(--glass-shadow);
            padding: var(--space-md);
            transition: var(--transition);
            margin-bottom: var(--space-md);
        }

        .glass-card:hover {
            box-shadow: 0 8px 32px var(--glass-shadow-hover);
            transform: translateY(-4px);
        }

        /* Courses Grid */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-xl);
        }

        /* Course Card */
        .course-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
        }

        .course-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: var(--border-radius);
            margin-bottom: var(--space-sm);
        }

        .course-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: linear-gradient(135deg, var(--golden-yellow), #E67E22);
            color: var(--charcoal);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .course-header {
            margin-bottom: var(--space-sm);
        }

        .course-title {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .course-instructor {
            color: var(--medium-gray);
            font-size: 0.9rem;
            margin-bottom: var(--space-xs);
        }

        .course-rating {
            display: flex;
            align-items: center;
            margin-bottom: var(--space-xs);
        }

        .rating-stars {
            color: var(--golden-yellow);
            margin-right: var(--space-xs);
        }

        .rating-value {
            font-weight: 600;
            margin-right: 4px;
        }

        .rating-count {
            color: var(--medium-gray);
            font-size: 0.9rem;
        }

        .course-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: var(--space-sm);
            color: var(--medium-gray);
            font-size: 0.9rem;
        }

        .course-description {
            color: var(--text-dark);
            font-size: 0.95rem;
            margin-bottom: var(--space-sm);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }

        .course-tags {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-xs);
            margin-bottom: var(--space-sm);
        }

        .tag {
            background-color: var(--royal-blue);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .course-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .course-price {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--emerald);
        }

        .course-price.free {
            color: var(--emerald);
        }

        .course-actions {
            display: flex;
            gap: var(--space-xs);
        }

        .enroll-button {
            padding: var(--space-sm) var(--space-md);
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .enroll-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
        }

        .save-button {
            width: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }

        .save-button:hover {
            background-color: var(--light-gray);
        }

        .saved {
            color: var(--golden-yellow);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: var(--space-xs);
            margin-top: var(--space-lg);
        }

        .pagination-button {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
        }

        .pagination-button.active {
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border-color: transparent;
        }

        .pagination-button:hover:not(.active) {
            background-color: var(--light-gray);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .courses-grid {
                grid-template-columns: 1fr;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .search-filters {
                grid-template-columns: 1fr;
            }
            
            .filter-buttons {
                justify-content: flex-start;
            }
            
            .course-footer {
                flex-direction: column;
                gap: var(--space-sm);
                align-items: flex-start;
            }
            
            .course-actions {
                width: 100%;
            }
            
            .enroll-button {
                flex-grow: 1;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
    </style>

    <div class="container">
        <div class="page-header fade-in">
            <h1>Learning Center</h1>
            <p>Develop skills for positive change with courses from impact-driven educators</p>
        </div>

        <div class="search-filters fade-in">
            <div class="search-bar glass-card">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search courses, topics, or instructors...">
            </div>

            <div class="filter-buttons">
                <button class="filter-button active">All</button>
                <button class="filter-button">Social Impact</button>
                <button class="filter-button">Sustainability</button>
                <button class="filter-button">Community</button>
                <button class="filter-button">Leadership</button>
                <button class="filter-button">Free</button>
            </div>
        </div>

        <div class="courses-grid">
            <!-- Course 1 -->
            <div class="glass-card course-card fade-in">
                <div class="course-badge">Bestseller</div>
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Social Entrepreneurship Course" class="course-image">
                
                <div class="course-header">
                    <div class="course-title">Social Entrepreneurship 101</div>
                    <div class="course-instructor">Dr. Maya Johnson</div>
                    <div class="course-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="rating-value">4.7</div>
                        <div class="rating-count">(1,243)</div>
                    </div>
                    <div class="course-info">
                        <span>12 hours</span>
                        <span>Beginner</span>
                    </div>
                </div>
                
                <div class="course-description">
                    Learn how to build a business that creates positive social change while being financially sustainable.
                </div>
                
                <div class="course-tags">
                    <span class="tag">#SocialImpact</span>
                    <span class="tag">#Business</span>
                </div>
                
                <div class="course-footer">
                    <div class="course-price">$79.99</div>
                    <div class="course-actions">
                        <button class="save-button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="enroll-button">Enroll Now</button>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="glass-card course-card fade-in">
                <div class="course-badge">Free</div>
                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Environmental Sustainability Course" class="course-image">
                
                <div class="course-header">
                    <div class="course-title">Environmental Sustainability</div>
                    <div class="course-instructor">Prof. Alex Chen</div>
                    <div class="course-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-value">4.9</div>
                        <div class="rating-count">(892)</div>
                    </div>
                    <div class="course-info">
                        <span>8 hours</span>
                        <span>Intermediate</span>
                    </div>
                </div>
                
                <div class="course-description">
                    Explore practical strategies for sustainable living and environmental conservation in your community.
                </div>
                
                <div class="course-tags">
                    <span class="tag">#Sustainability</span>
                    <span class="tag">#Environment</span>
                </div>
                
                <div class="course-footer">
                    <div class="course-price free">Free</div>
                    <div class="course-actions">
                        <button class="save-button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="enroll-button">Enroll Now</button>
                    </div>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="glass-card course-card fade-in">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Community Leadership Course" class="course-image">
                
                <div class="course-header">
                    <div class="course-title">Community Leadership & Organizing</div>
                    <div class="course-instructor">Sarah Williams</div>
                    <div class="course-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="rating-value">4.3</div>
                        <div class="rating-count">(567)</div>
                    </div>
                    <div class="course-info">
                        <span>15 hours</span>
                        <span>Intermediate</span>
                    </div>
                </div>
                
                <div class="course-description">
                    Develop the skills to mobilize communities, facilitate meetings, and lead effective change initiatives.
                </div>
                
                <div class="course-tags">
                    <span class="tag">#Leadership</span>
                    <span class="tag">#Community</span>
                </div>
                
                <div class="course-footer">
                    <div class="course-price">$64.99</div>
                    <div class="course-actions">
                        <button class="save-button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="enroll-button">Enroll Now</button>
                    </div>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="glass-card course-card fade-in">
                <div class="course-badge">New</div>
                <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Digital Advocacy Course" class="course-image">
                
                <div class="course-header">
                    <div class="course-title">Digital Advocacy & Social Media</div>
                    <div class="course-instructor">Jamal Rodriguez</div>
                    <div class="course-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="rating-value">4.5</div>
                        <div class="rating-count">(324)</div>
                    </div>
                    <div class="course-info">
                        <span>10 hours</span>
                        <span>Beginner</span>
                    </div>
                </div>
                
                <div class="course-description">
                    Learn how to leverage digital platforms to raise awareness and drive action for social causes.
                </div>
                
                <div class="course-tags">
                    <span class="tag">#Advocacy</span>
                    <span class="tag">#Digital</span>
                </div>
                
                <div class="course-footer">
                    <div class="course-price">$49.99</div>
                    <div class="course-actions">
                        <button class="save-button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="enroll-button">Enroll Now</button>
                    </div>
                </div>
            </div>

            <!-- Course 5 -->
            <div class="glass-card course-card fade-in">
                <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Nonprofit Management Course" class="course-image">
                
                <div class="course-header">
                    <div class="course-title">Nonprofit Management Fundamentals</div>
                    <div class="course-instructor">Dr. Emily Thompson</div>
                    <div class="course-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-value">4.8</div>
                        <div class="rating-count">(742)</div>
                    </div>
                    <div class="course-info">
                        <span>20 hours</span>
                        <span>Advanced</span>
                    </div>
                </div>
                
                <div class="course-description">
                    Master the essentials of nonprofit management including fundraising, governance, and program evaluation.
                </div>
                
                <div class="course-tags">
                    <span class="tag">#Nonprofit</span>
                    <span class="tag">#Management</span>
                </div>
                
                <div class="course-footer">
                    <div class="course-price">$89.99</div>
                    <div class="course-actions">
                        <button class="save-button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="enroll-button">Enroll Now</button>
                    </div>
                </div>
            </div>

            <!-- Course 6 -->
            <div class="glass-card course-card fade-in">
                <div class="course-badge">Free</div>
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Mindfulness Course" class="course-image">
                
                <div class="course-header">
                    <div class="course-title">Mindfulness for Social Change</div>
                    <div class="course-instructor">Priya Sharma</div>
                    <div class="course-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="rating-value">4.2</div>
                        <div class="rating-count">(516)</div>
                    </div>
                    <div class="course-info">
                        <span>6 hours</span>
                        <span>Beginner</span>
                    </div>
                </div>
                
                <div class="course-description">
                    Learn mindfulness techniques to sustain your energy and avoid burnout while working for social change.
                </div>
                
                <div class="course-tags">
                    <span class="tag">#Mindfulness</span>
                    <span class="tag">#Wellbeing</span>
                </div>
                
                <div class="course-footer">
                    <div class="course-price free">Free</div>
                    <div class="course-actions">
                        <button class="save-button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="enroll-button">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <button class="pagination-button"><i class="fas fa-chevron-left"></i></button>
            <button class="pagination-button active">1</button>
            <button class="pagination-button">2</button>
            <button class="pagination-button">3</button>
            <button class="pagination-button"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
