<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communities | Empowro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@700;800;900&family=Roboto+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>

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

        /* Communities Grid */
        .communities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-xl);
        }

        /* Community Card */
        .community-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
        }

        .community-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: var(--space-sm);
        }

        .community-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: var(--space-sm);
            border: 3px solid var(--emerald);
            flex-shrink: 0;
        }

        .community-info {
            flex-grow: 1;
        }

        .community-name {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 4px;
        }

        .community-category {
            color: var(--medium-gray);
            font-size: 0.9rem;
            margin-bottom: var(--space-xs);
        }

        .community-description {
            color: var(--text-dark);
            font-size: 0.95rem;
            margin-bottom: var(--space-sm);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .community-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: var(--space-sm);
            background-color: var(--light-gray);
            padding: var(--space-sm);
            border-radius: var(--border-radius-sm);
        }

        .stat {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
        }

        .stat-value {
            font-weight: 700;
            font-size: 1rem;
            color: var(--emerald);
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--medium-gray);
        }

        .community-tags {
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

        .community-actions {
            display: flex;
            gap: var(--space-sm);
        }

        .join-button {
            flex-grow: 1;
            padding: var(--space-sm);
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .join-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
        }

        .join-button.joined {
            background: linear-gradient(135deg, var(--golden-yellow), #E67E22);
        }

        .view-button {
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }

        .view-button:hover {
            background-color: var(--light-gray);
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
            .communities-grid {
                grid-template-columns: 1fr;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .community-stats {
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
            
            .community-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .community-avatar {
                margin-right: 0;
                margin-bottom: var(--space-sm);
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
            <h1>Communities</h1>
            <p>Join communities of changemakers working on causes you care about</p>
        </div>

        <div class="search-filters fade-in">
            <div class="search-bar glass-card">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search communities...">
            </div>

            <div class="filter-buttons">
                <button class="filter-button active">All</button>
                <button class="filter-button">Environment</button>
                <button class="filter-button">Social Justice</button>
                <button class="filter-button">Education</button>
                <button class="filter-button">Health</button>
                <button class="filter-button">Community</button>
            </div>
        </div>

        <div class="communities-grid">
            <!-- Community 1 -->
            <div class="glass-card community-card fade-in">
                <div class="community-header">
                    <img src="https://images.unsplash.com/photo-1569163139394-de44aa9a21dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Community Avatar" class="community-avatar">
                    <div class="community-info">
                        <div class="community-name">Eco Warriors</div>
                        <div class="community-category">Environmental Conservation</div>
                    </div>
                </div>
                
                <div class="community-description">
                    Join our mission to protect the planet through clean-up initiatives, conservation efforts, and sustainable living advocacy.
                </div>
                
                <div class="community-stats">
                    <div class="stat">
                        <div class="stat-value">2.4k</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">48</div>
                        <div class="stat-label">Events</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">High</div>
                        <div class="stat-label">Activity</div>
                    </div>
                </div>
                
                <div class="community-tags">
                    <span class="tag">#Environment</span>
                    <span class="tag">#Sustainability</span>
                    <span class="tag">#Conservation</span>
                </div>
                
                <div class="community-actions">
                    <button class="join-button">Join Community</button>
                    <button class="view-button"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Community 2 -->
            <div class="glass-card community-card fade-in">
                <div class="community-header">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Community Avatar" class="community-avatar">
                    <div class="community-info">
                        <div class="community-name">Food Rescue Collective</div>
                        <div class="community-category">Hunger Relief</div>
                    </div>
                </div>
                
                <div class="community-description">
                    Fighting food waste and hunger by connecting surplus food with people in need through our network of volunteers.
                </div>
                
                <div class="community-stats">
                    <div class="stat">
                        <div class="stat-value">1.8k</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">32</div>
                        <div class="stat-label">Events</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">High</div>
                        <div class="stat-label">Activity</div>
                    </div>
                </div>
                
                <div class="community-tags">
                    <span class="tag">#Hunger</span>
                    <span class="tag">#FoodRescue</span>
                    <span class="tag">#Community</span>
                </div>
                
                <div class="community-actions">
                    <button class="join-button">Join Community</button>
                    <button class="view-button"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Community 3 -->
            <div class="glass-card community-card fade-in">
                <div class="community-header">
                    <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Community Avatar" class="community-avatar">
                    <div class="community-info">
                        <div class="community-name">Education Equality</div>
                        <div class="community-category">Education Access</div>
                    </div>
                </div>
                
                <div class="community-description">
                    Working to ensure all children have access to quality education regardless of their background or circumstances.
                </div>
                
                <div class="community-stats">
                    <div class="stat">
                        <div class="stat-value">1.5k</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">27</div>
                        <div class="stat-label">Events</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">Medium</div>
                        <div class="stat-label">Activity</div>
                    </div>
                </div>
                
                <div class="community-tags">
                    <span class="tag">#Education</span>
                    <span class="tag">#Equality</span>
                    <span class="tag">#Tutoring</span>
                </div>
                
                <div class="community-actions">
                    <button class="join-button">Join Community</button>
                    <button class="view-button"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Community 4 -->
            <div class="glass-card community-card fade-in">
                <div class="community-header">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Community Avatar" class="community-avatar">
                    <div class="community-info">
                        <div class="community-name">Elder Support Network</div>
                        <div class="community-category">Community Care</div>
                    </div>
                </div>
                
                <div class="community-description">
                    Providing companionship, assistance, and support to elderly community members to combat loneliness and improve quality of life.
                </div>
                
                <div class="community-stats">
                    <div class="stat">
                        <div class="stat-value">980</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">19</div>
                        <div class="stat-label">Events</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">Medium</div>
                        <div class="stat-label">Activity</div>
                    </div>
                </div>
                
                <div class="community-tags">
                    <span class="tag">#ElderCare</span>
                    <span class="tag">#Community</span>
                    <span class="tag">#Support</span>
                </div>
                
                <div class="community-actions">
                    <button class="join-button">Join Community</button>
                    <button class="view-button"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Community 5 -->
            <div class="glass-card community-card fade-in">
                <div class="community-header">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Community Avatar" class="community-avatar">
                    <div class="community-info">
                        <div class="community-name">Mental Health Advocates</div>
                        <div class="community-category">Health & Wellness</div>
                    </div>
                </div>
                
                <div class="community-description">
                    Breaking stigmas around mental health and providing support, resources, and community for those struggling with mental health challenges.
                </div>
                
                <div class="community-stats">
                    <div class="stat">
                        <div class="stat-value">2.1k</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">36</div>
                        <div class="stat-label">Events</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">High</div>
                        <div class="stat-label">Activity</div>
                    </div>
                </div>
                
                <div class="community-tags">
                    <span class="tag">#MentalHealth</span>
                    <span class="tag">#Wellness</span>
                    <span class="tag">#Support</span>
                </div>
                
                <div class="community-actions">
                    <button class="join-button">Join Community</button>
                    <button class="view-button"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Community 6 -->
            <div class="glass-card community-card fade-in">
                <div class="community-header">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Community Avatar" class="community-avatar">
                    <div class="community-info">
                        <div class="community-name">Zero Waste Living</div>
                        <div class="community-category">Sustainable Lifestyle</div>
                    </div>
                </div>
                
                <div class="community-description">
                    Learn and share tips for reducing waste, living sustainably, and minimizing your environmental footprint through everyday choices.
                </div>
                
                <div class="community-stats">
                    <div class="stat">
                        <div class="stat-value">1.3k</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">24</div>
                        <div class="stat-label">Events</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">Medium</div>
                        <div class="stat-label">Activity</div>
                    </div>
                </div>
                
                <div class="community-tags">
                    <span class="tag">#ZeroWaste</span>
                    <span class="tag">#Sustainability</span>
                    <span class="tag">#EcoFriendly</span>
                </div>
                
                <div class="community-actions">
                    <button class="join-button">Join Community</button>
                    <button class="view-button"><i class="fas fa-eye"></i></button>
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

 

    <script>
        // DOM Elements
        const darkModeToggle = document.querySelector('.dark-mode-toggle');
        const filterButtons = document.querySelectorAll('.filter-button');
        const joinButtons = document.querySelectorAll('.join-button');
        const searchInput = document.querySelector('.search-bar input');
        const communityCards = document.querySelectorAll('.community-card');
        
        
        // Filter Buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // In a real app, this would filter the community list
                const filter = this.textContent;
                console.log(`Filtering by: ${filter}`);
            });
        });
        
        // Join Buttons
        joinButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent === 'Join Community') {
                    this.textContent = 'Joined';
                    this.classList.add('joined');
                } else {
                    this.textContent = 'Join Community';
                    this.classList.remove('joined');
                }
            });
        });
        
        // Search Functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            communityCards.forEach(card => {
                const name = card.querySelector('.community-name').textContent.toLowerCase();
                const category = card.querySelector('.community-category').textContent.toLowerCase();
                const description = card.querySelector('.community-description').textContent.toLowerCase();
                const tags = card.querySelector('.community-tags').textContent.toLowerCase();
                
                if (name.includes(searchTerm) || category.includes(searchTerm) || description.includes(searchTerm) || tags.includes(searchTerm)) {
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