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

        /* Shops Grid */
        .shops-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-xl);
        }

        /* Shop Card */
        .shop-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
        }

        .shop-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: var(--border-radius);
            margin-bottom: var(--space-sm);
        }

        .shop-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: var(--space-sm);
        }

        .shop-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: var(--space-sm);
            border: 2px solid var(--emerald);
            flex-shrink: 0;
        }

        .shop-info {
            flex-grow: 1;
        }

        .shop-name {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 4px;
        }

        .shop-category {
            color: var(--medium-gray);
            font-size: 0.9rem;
            margin-bottom: var(--space-xs);
        }

        .shop-description {
            color: var(--text-dark);
            font-size: 0.95rem;
            margin-bottom: var(--space-sm);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .shop-stats {
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

        .impact-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--golden-yellow), #E67E22);
            color: var(--charcoal);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .shop-tags {
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

        .shop-actions {
            display: flex;
            gap: var(--space-sm);
        }

        .shop-button {
            flex-grow: 1;
            padding: var(--space-sm);
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--space-xs);
        }

        .shop-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
        }

        .save-button {
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
            .shops-grid {
                grid-template-columns: 1fr;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .shop-stats {
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
            <h1>Marketplace</h1>
            <p>Support businesses that give back to the community and promote positive change</p>
        </div>

        <div class="search-filters fade-in">
            <div class="search-bar glass-card">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search shops or products...">
            </div>

            <div class="filter-buttons">
                <button class="filter-button active">All</button>
                <button class="filter-button">Eco-Friendly</button>
                <button class="filter-button">Handmade</button>
                <button class="filter-button">Local</button>
                <button class="filter-button">Ethical</button>
                <button class="filter-button">Social Impact</button>
            </div>
        </div>

        <div class="shops-grid">
            <!-- Shop 1 -->
            <div class="glass-card shop-card fade-in">
                <div class="impact-badge">
                    <i class="fas fa-seedling"></i>
                    <span>Eco Impact</span>
                </div>
                <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Eco Essentials Shop" class="shop-image">
                
                <div class="shop-header">
                    <img src="https://images.unsplash.com/photo-1569154941061-e231b4725ef1?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shop Avatar" class="shop-avatar">
                    <div class="shop-info">
                        <div class="shop-name">Eco Essentials</div>
                        <div class="shop-category">Sustainable Products</div>
                    </div>
                </div>
                
                <div class="shop-description">
                    Zero-waste lifestyle products that help you reduce your environmental footprint. All products are ethically sourced and plastic-free.
                </div>
                
                <div class="shop-stats">
                    <div class="stat">
                        <div class="stat-value">4.8</div>
                        <div class="stat-label">Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">524</div>
                        <div class="stat-label">Sales</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">80%</div>
                        <div class="stat-label">Gives Back</div>
                    </div>
                </div>
                
                <div class="shop-tags">
                    <span class="tag">#ZeroWaste</span>
                    <span class="tag">#EcoFriendly</span>
                    <span class="tag">#Sustainable</span>
                </div>
                
                <div class="shop-actions">
                    <button class="shop-button">
                        <i class="fas fa-store"></i>
                        Visit Shop
                    </button>
                    <button class="save-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>

            <!-- Shop 2 -->
            <div class="glass-card shop-card fade-in">
                <div class="impact-badge">
                    <i class="fas fa-hands-helping"></i>
                    <span>Social Impact</span>
                </div>
                <img src="https://images.unsplash.com/photo-1520006403909-838d6b92c22e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Artisan Collective Shop" class="shop-image">
                
                <div class="shop-header">
                    <img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shop Avatar" class="shop-avatar">
                    <div class="shop-info">
                        <div class="shop-name">Artisan Collective</div>
                        <div class="shop-category">Handmade Crafts</div>
                    </div>
                </div>
                
                <div class="shop-description">
                    Handcrafted goods made by artisans from underserved communities. Each purchase supports fair wages and cultural preservation.
                </div>
                
                <div class="shop-stats">
                    <div class="stat">
                        <div class="stat-value">4.9</div>
                        <div class="stat-label">Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">327</div>
                        <div class="stat-label">Sales</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Gives Back</div>
                    </div>
                </div>
                
                <div class="shop-tags">
                    <span class="tag">#Handmade</span>
                    <span class="tag">#FairTrade</span>
                    <span class="tag">#Artisan</span>
                </div>
                
                <div class="shop-actions">
                    <button class="shop-button">
                        <i class="fas fa-store"></i>
                        Visit Shop
                    </button>
                    <button class="save-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>

            <!-- Shop 3 -->
            <div class="glass-card shop-card fade-in">
                <div class="impact-badge">
                    <i class="fas fa-leaf"></i>
                    <span>Eco Impact</span>
                </div>
                <img src="https://images.unsplash.com/photo-1595341888016-a392ef81b7de?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Organic Harvest Shop" class="shop-image">
                
                <div class="shop-header">
                    <img src="https://images.unsplash.com/photo-1579113800032-c38bd7635818?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shop Avatar" class="shop-avatar">
                    <div class="shop-info">
                        <div class="shop-name">Organic Harvest</div>
                        <div class="shop-category">Organic Food</div>
                    </div>
                </div>
                
                <div class="shop-description">
                    Locally sourced organic produce and pantry staples. We support regenerative agriculture and sustainable farming practices.
                </div>
                
                <div class="shop-stats">
                    <div class="stat">
                        <div class="stat-value">4.7</div>
                        <div class="stat-label">Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">891</div>
                        <div class="stat-label">Sales</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">65%</div>
                        <div class="stat-label">Gives Back</div>
                    </div>
                </div>
                
                <div class="shop-tags">
                    <span class="tag">#Organic</span>
                    <span class="tag">#Local</span>
                    <span class="tag">#Sustainable</span>
                </div>
                
                <div class="shop-actions">
                    <button class="shop-button">
                        <i class="fas fa-store"></i>
                        Visit Shop
                    </button>
                    <button class="save-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>

            <!-- Shop 4 -->
            <div class="glass-card shop-card fade-in">
                <div class="impact-badge">
                    <i class="fas fa-recycle"></i>
                    <span>Upcycled</span>
                </div>
                <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Reclaimed Creations Shop" class="shop-image">
                
                <div class="shop-header">
                    <img src="https://images.unsplash.com/photo-1560472355-536de3962603?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shop Avatar" class="shop-avatar">
                    <div class="shop-info">
                        <div class="shop-name">Reclaimed Creations</div>
                        <div class="shop-category">Upcycled Furniture</div>
                    </div>
                </div>
                
                <div class="shop-description">
                    Beautiful furniture and home decor made from reclaimed materials. Each piece tells a story and reduces waste.
                </div>
                
                <div class="shop-stats">
                    <div class="stat">
                        <div class="stat-value">4.8</div>
                        <div class="stat-label">Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">216</div>
                        <div class="stat-label">Sales</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">75%</div>
                        <div class="stat-label">Gives Back</div>
                    </div>
                </div>
                
                <div class="shop-tags">
                    <span class="tag">#Upcycled</span>
                    <span class="tag">#Furniture</span>
                    <span class="tag">#EcoFriendly</span>
                </div>
                
                <div class="shop-actions">
                    <button class="shop-button">
                        <i class="fas fa-store"></i>
                        Visit Shop
                    </button>
                    <button class="save-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>

            <!-- Shop 5 -->
            <div class="glass-card shop-card fade-in">
                <div class="impact-badge">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>Social Good</span>
                </div>
                <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Hope Apparel Shop" class="shop-image">
                
                <div class="shop-header">
                    <img src="https://images.unsplash.com/photo-1566206091558-7f218b696731?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shop Avatar" class="shop-avatar">
                    <div class="shop-info">
                        <div class="shop-name">Hope Apparel</div>
                        <div class="shop-category">Ethical Clothing</div>
                    </div>
                </div>
                
                <div class="shop-description">
                    Ethically produced clothing with empowering messages. For every item sold, we donate one to someone in need.
                </div>
                
                <div class="shop-stats">
                    <div class="stat">
                        <div class="stat-value">4.9</div>
                        <div class="stat-label">Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">743</div>
                        <div class="stat-label">Sales</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Gives Back</div>
                    </div>
                </div>
                
                <div class="shop-tags">
                    <span class="tag">#Ethical</span>
                    <span class="tag">#Clothing</span>
                    <span class="tag">#SocialGood</span>
                </div>
                
                <div class="shop-actions">
                    <button class="shop-button">
                        <i class="fas fa-store"></i>
                        Visit Shop
                    </button>
                    <button class="save-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>

            <!-- Shop 6 -->
            <div class="glass-card shop-card fade-in">
                <div class="impact-badge">
                    <i class="fas fa-sun"></i>
                    <span>Renewable</span>
                </div>
                <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Solar Solutions Shop" class="shop-image">
                
                <div class="shop-header">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Shop Avatar" class="shop-avatar">
                    <div class="shop-info">
                        <div class="shop-name">Solar Solutions</div>
                        <div class="shop-category">Renewable Energy</div>
                    </div>
                </div>
                
                <div class="shop-description">
                    Affordable solar solutions for homes and communities. We help transition neighborhoods to clean energy while creating local jobs.
                </div>
                
                <div class="shop-stats">
                    <div class="stat">
                        <div class="stat-value">4.8</div>
                        <div class="stat-label">Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">158</div>
                        <div class="stat-label">Projects</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">90%</div>
                        <div class="stat-label">Gives Back</div>
                    </div>
                </div>
                
                <div class="shop-tags">
                    <span class="tag">#Solar</span>
                    <span class="tag">#Renewable</span>
                    <span class="tag">#CleanEnergy</span>
                </div>
                
                <div class="shop-actions">
                    <button class="shop-button">
                        <i class="fas fa-store"></i>
                        Visit Shop
                    </button>
                    <button class="save-button">
                        <i class="far fa-heart"></i>
                    </button>
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
        const saveButtons = document.querySelectorAll('.save-button');
        const searchInput = document.querySelector('.search-bar input');
        const shopCards = document.querySelectorAll('.shop-card');
        
    
        
        // Filter Buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // In a real app, this would filter the shop list
                const filter = this.textContent;
                console.log(`Filtering by: ${filter}`);
            });
        });
        
        // Save Buttons
        saveButtons.forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                icon.classList.toggle('far');
                icon.classList.toggle('fas');
                this.classList.toggle('saved');
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