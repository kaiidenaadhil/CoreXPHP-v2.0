<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Members | Empowro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@700;800;900&family=Roboto+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
      

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
            font-size: 2.2rem;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: var(--space-sm);
        }

        .page-header p {
            color: var(--medium-gray);
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Search and Filter Section */
        .search-filters {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--space-md);
            margin-bottom: var(--space-md);
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
            padding: 14px 16px;
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
            font-size: 0.9rem;
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

        /* User Grid */
        .users-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-xl);
        }

        /* User Card - Compact Version */
        .user-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
        }

        .user-card-main {
            display: flex;
            align-items: center;
            margin-bottom: var(--space-sm);
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: var(--space-sm);
            border: 2px solid var(--emerald);
            flex-shrink: 0;
        }

        .user-info {
            flex-grow: 1;
            min-width: 0; /* Allows text truncation */
        }

        .username {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-title {
            color: var(--medium-gray);
            font-size: 0.8rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-stats {
            display: flex;
            gap: var(--space-md);
            margin-bottom: var(--space-sm);
            justify-content: space-between;
        }

        .stat {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
        }

        .stat-value {
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--emerald);
        }

        .stat-label {
            font-size: 0.7rem;
            color: var(--medium-gray);
        }

        .user-interests {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-xs);
            margin-bottom: var(--space-sm);
        }

        .interest {
            background-color: var(--royal-blue);
            color: white;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 0.7rem;
        }

        .user-actions {
            display: flex;
            gap: var(--space-xs);
        }

        .follow-button {
            flex-grow: 1;
            padding: 8px;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .follow-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
        }

        .message-button {
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .message-button:hover {
            background-color: var(--light-gray);
        }

        .user-level {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--royal-blue), #8E44AD);
            color: white;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: var(--space-xs);
            margin-top: var(--space-lg);
        }

        .pagination-button {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .pagination-button.active {
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border-color: transparent;
        }

        .pagination-button:hover:not(.active) {
            background-color: var(--light-gray);
        }

        /* Dark Mode Toggle */
        .dark-mode-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 900;
            transition: var(--transition);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .users-grid {
                grid-template-columns: 1fr;
            }
            
            .page-header h1 {
                font-size: 1.8rem;
            }
            
            .user-stats {
                flex-wrap: wrap;
                gap: var(--space-xs);
            }
            
            .stat {
                flex: 0 0 calc(50% - var(--space-xs));
            }
        }

        @media (max-width: 480px) {
            .search-filters {
                grid-template-columns: 1fr;
            }
            
            .filter-buttons {
                justify-content: flex-start;
            }
            
            .user-card-main {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .user-avatar {
                margin-bottom: var(--space-xs);
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
            <h1>Community Members</h1>
            <p>Connect with like-minded changemakers and expand your network</p>
        </div>

        <div class="search-filters fade-in">
            <div class="search-bar glass-card">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search members...">
            </div>

            <div class="filter-buttons">
                <button class="filter-button active">All</button>
                <button class="filter-button">Eco</button>
                <button class="filter-button">Social</button>
                <button class="filter-button">Community</button>
                <button class="filter-button">Education</button>
                <button class="filter-button">Health</button>
            </div>
        </div>

        <div class="users-grid">
            <!-- User 1 -->
            <div class="glass-card user-card fade-in">
                <div class="user-level">Lvl 8</div>
                <div class="user-card-main">
                    <img src="https://i.pravatar.cc/150?img=5" alt="User Avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="username">Sarah Johnson</div>
                        <div class="user-title">Environmental Activist</div>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-value">842</div>
                        <div class="stat-label">GI Score</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">124</div>
                        <div class="stat-label">Deeds</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">2.4k</div>
                        <div class="stat-label">Followers</div>
                    </div>
                </div>
                
                <div class="user-interests">
                    <span class="interest">#Environment</span>
                    <span class="interest">#Community</span>
                </div>
                
                <div class="user-actions">
                    <button class="follow-button">Follow</button>
                    <button class="message-button"><i class="fas fa-envelope"></i></button>
                </div>
            </div>

            <!-- User 2 -->
            <div class="glass-card user-card fade-in">
                <div class="user-level">Lvl 9</div>
                <div class="user-card-main">
                    <img src="https://i.pravatar.cc/150?img=8" alt="User Avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="username">Michael Chen</div>
                        <div class="user-title">Social Justice Advocate</div>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-value">1,250</div>
                        <div class="stat-label">GI Score</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">187</div>
                        <div class="stat-label">Deeds</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">3.1k</div>
                        <div class="stat-label">Followers</div>
                    </div>
                </div>
                
                <div class="user-interests">
                    <span class="interest">#SocialJustice</span>
                    <span class="interest">#Hunger</span>
                </div>
                
                <div class="user-actions">
                    <button class="follow-button">Follow</button>
                    <button class="message-button"><i class="fas fa-envelope"></i></button>
                </div>
            </div>

            <!-- User 3 -->
            <div class="glass-card user-card fade-in">
                <div class="user-level">Lvl 7</div>
                <div class="user-card-main">
                    <img src="https://i.pravatar.cc/150?img=32" alt="User Avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="username">Elena Rodriguez</div>
                        <div class="user-title">Community Organizer</div>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-value">956</div>
                        <div class="stat-label">GI Score</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">142</div>
                        <div class="stat-label">Deeds</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">1.8k</div>
                        <div class="stat-label">Followers</div>
                    </div>
                </div>
                
                <div class="user-interests">
                    <span class="interest">#Community</span>
                    <span class="interest">#ElderCare</span>
                </div>
                
                <div class="user-actions">
                    <button class="follow-button">Follow</button>
                    <button class="message-button"><i class="fas fa-envelope"></i></button>
                </div>
            </div>

            <!-- User 4 -->
            <div class="glass-card user-card fade-in">
                <div class="user-level">Lvl 6</div>
                <div class="user-card-main">
                    <img src="https://i.pravatar.cc/150?img=44" alt="User Avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="username">Alex Thompson</div>
                        <div class="user-title">Education Advocate</div>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-value">721</div>
                        <div class="stat-label">GI Score</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">98</div>
                        <div class="stat-label">Deeds</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">1.2k</div>
                        <div class="stat-label">Followers</div>
                    </div>
                </div>
                
                <div class="user-interests">
                    <span class="interest">#Education</span>
                    <span class="interest">#Tutoring</span>
                </div>
                
                <div class="user-actions">
                    <button class="follow-button">Follow</button>
                    <button class="message-button"><i class="fas fa-envelope"></i></button>
                </div>
            </div>

            <!-- User 5 -->
            <div class="glass-card user-card fade-in">
                <div class="user-level">Lvl 5</div>
                <div class="user-card-main">
                    <img src="https://i.pravatar.cc/150?img=22" alt="User Avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="username">Jamal Williams</div>
                        <div class="user-title">Mental Health Advocate</div>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-value">689</div>
                        <div class="stat-label">GI Score</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">76</div>
                        <div class="stat-label">Deeds</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">980</div>
                        <div class="stat-label">Followers</div>
                    </div>
                </div>
                
                <div class="user-interests">
                    <span class="interest">#MentalHealth</span>
                    <span class="interest">#Wellness</span>
                </div>
                
                <div class="user-actions">
                    <button class="follow-button">Follow</button>
                    <button class="message-button"><i class="fas fa-envelope"></i></button>
                </div>
            </div>

            <!-- User 6 -->
            <div class="glass-card user-card fade-in">
                <div class="user-level">Lvl 7</div>
                <div class="user-card-main">
                    <img src="https://i.pravatar.cc/150?img=12" alt="User Avatar" class="user-avatar">
                    <div class="user-info">
                        <div class="username">Priya Sharma</div>
                        <div class="user-title">Zero Waste Advocate</div>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-value">812</div>
                        <div class="stat-label">GI Score</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">115</div>
                        <div class="stat-label">Deeds</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">1.5k</div>
                        <div class="stat-label">Followers</div>
                    </div>
                </div>
                
                <div class="user-interests">
                    <span class="interest">#ZeroWaste</span>
                    <span class="interest">#Sustainability</span>
                </div>
                
                <div class="user-actions">
                    <button class="follow-button">Follow</button>
                    <button class="message-button"><i class="fas fa-envelope"></i></button>
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

    <!-- Dark Mode Toggle -->
    <div class="dark-mode-toggle">
        <i class="fas fa-moon"></i>
    </div>

    <script>
        // DOM Elements
        const darkModeToggle = document.querySelector('.dark-mode-toggle');
        const filterButtons = document.querySelectorAll('.filter-button');
        const followButtons = document.querySelectorAll('.follow-button');
        const searchInput = document.querySelector('.search-bar input');
        const userCards = document.querySelectorAll('.user-card');
        

        
        // Filter Buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // In a real app, this would filter the user list
                const filter = this.textContent;
                console.log(`Filtering by: ${filter}`);
            });
        });
        
        // Follow Buttons
        followButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent === 'Follow') {
                    this.textContent = 'Following';
                    this.style.background = 'linear-gradient(135deg, var(--golden-yellow), #E67E22)';
                } else {
                    this.textContent = 'Follow';
                    this.style.background = 'linear-gradient(135deg, var(--emerald), var(--royal-blue))';
                }
            });
        });
        
        // Search Functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            userCards.forEach(card => {
                const username = card.querySelector('.username').textContent.toLowerCase();
                const title = card.querySelector('.user-title').textContent.toLowerCase();
                const interests = card.querySelector('.user-interests').textContent.toLowerCase();
                
                if (username.includes(searchTerm) || title.includes(searchTerm) || interests.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        
        // Simulate loading animation
        setTimeout(() => {
            document.querySelectorAll('.fade-in').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            });
        }, 100);
    </script>
