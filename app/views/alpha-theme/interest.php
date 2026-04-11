<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic Selection | Empowro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@700;800;900&family=Roboto+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>

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

        /* Topic Selection Container */
        .topic-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .topic-header {
            text-align: center;
            margin-bottom: var(--space-lg);
        }

        .topic-header h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: var(--space-sm);
        }

        .topic-header p {
            color: var(--medium-gray);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Search Bar */
        .search-bar {
            position: relative;
            margin-bottom: var(--space-lg);
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

        /* Topic Grid */
        .topic-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--space-md);
            margin-bottom: var(--space-xl);
        }

        .topic-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .topic-card.selected {
            box-shadow: 0 0 0 3px var(--emerald);
        }

        .topic-card-header {
            display: flex;
            align-items: center;
            margin-bottom: var(--space-sm);
        }

        .topic-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: var(--space-sm);
            font-size: 1.2rem;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
        }

        .topic-title {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .topic-description {
            color: var(--medium-gray);
            margin-bottom: var(--space-sm);
            flex-grow: 1;
        }

        .topic-meta {
            display: flex;
            justify-content: space-between;
            color: var(--medium-gray);
            font-size: 0.9rem;
        }

        .topic-followers {
            display: flex;
            align-items: center;
        }

        .topic-followers i {
            margin-right: 5px;
        }

        .topic-check {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: var(--emerald);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            opacity: 0;
            transition: var(--transition);
        }

        .topic-card.selected .topic-check {
            opacity: 1;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: var(--space-md);
            margin-top: var(--space-lg);
        }

        .primary-button {
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            padding: var(--space-sm) var(--space-lg);
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
        }

        .primary-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(46, 204, 113, 0.4);
        }

        .secondary-button {
            background: transparent;
            color: var(--royal-blue);
            padding: var(--space-sm) var(--space-lg);
            border: 2px solid var(--royal-blue);
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .secondary-button:hover {
            background-color: rgba(74, 144, 226, 0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .topic-grid {
                grid-template-columns: 1fr;
            }
            
            .topic-header h1 {
                font-size: 2rem;
            }
            
            .action-buttons {
                flex-direction: column;
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

    <div class="topic-container">
        <div class="topic-header fade-in">
            <h1>Choose Your Interests</h1>
            <p>Select topics to personalize your feed with content that matters to you</p>
        </div>

        <div class="search-bar glass-card fade-in">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search topics...">
        </div>

        <div class="topic-grid">
            <!-- Environment Topics -->
            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="topic-title">Environmental Conservation</div>
                </div>
                <div class="topic-description">
                    Join the conversation about protecting our planet, climate action, and sustainable living.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>24.5k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>12.3k posts</span>
                    </div>
                </div>
            </div>

            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div class="topic-title">Zero Waste Lifestyle</div>
                </div>
                <div class="topic-description">
                    Tips, tricks, and discussions about reducing waste and living more sustainably.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>18.2k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>8.7k posts</span>
                    </div>
                </div>
            </div>

            <!-- Social Justice Topics -->
            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <div class="topic-title">Social Justice</div>
                </div>
                <div class="topic-description">
                    Discussions about equality, human rights, and creating a more just society for all.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>32.8k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>15.6k posts</span>
                    </div>
                </div>
            </div>

            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="topic-title">Criminal Justice Reform</div>
                </div>
                <div class="topic-description">
                    Exploring ways to create a more equitable and effective justice system.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>14.3k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>6.2k posts</span>
                    </div>
                </div>
            </div>

            <!-- Community Topics -->
            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="topic-title">Community Building</div>
                </div>
                <div class="topic-description">
                    How to create stronger, more resilient communities through connection and mutual support.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>21.7k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>9.8k posts</span>
                    </div>
                </div>
            </div>

            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="topic-title">Local Activism</div>
                </div>
                <div class="topic-description">
                    Making change where you live - connecting with local organizations and initiatives.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>16.4k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>7.1k posts</span>
                    </div>
                </div>
            </div>

            <!-- Education Topics -->
            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="topic-title">Education Equity</div>
                </div>
                <div class="topic-description">
                    Ensuring all students have access to quality education regardless of background.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>19.6k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>8.3k posts</span>
                    </div>
                </div>
            </div>

            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="topic-title">Digital Literacy</div>
                </div>
                <div class="topic-description">
                    Promoting skills needed to navigate our increasingly digital world effectively.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>12.8k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>5.4k posts</span>
                    </div>
                </div>
            </div>

            <!-- Health & Wellness -->
            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="topic-title">Mental Health Awareness</div>
                </div>
                <div class="topic-description">
                    Breaking stigmas and promoting understanding around mental health issues.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>28.3k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>13.7k posts</span>
                    </div>
                </div>
            </div>

            <div class="glass-card topic-card fade-in">
                <div class="topic-check">
                    <i class="fas fa-check"></i>
                </div>
                <div class="topic-card-header">
                    <div class="topic-icon">
                        <i class="fas fa-apple-alt"></i>
                    </div>
                    <div class="topic-title">Food Security</div>
                </div>
                <div class="topic-description">
                    Ensuring all community members have access to nutritious, affordable food.
                </div>
                <div class="topic-meta">
                    <div class="topic-followers">
                        <i class="fas fa-users"></i>
                        <span>15.9k followers</span>
                    </div>
                    <div class="topic-posts">
                        <i class="fas fa-file-alt"></i>
                        <span>6.8k posts</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="action-buttons">
            <button class="secondary-button">Skip for now</button>
            <button class="primary-button">Continue with 5 topics selected</button>
        </div>
    </div>



    <script>
        // DOM Elements
        const darkModeToggle = document.querySelector('.dark-mode-toggle');
        const topicCards = document.querySelectorAll('.topic-card');
        const continueButton = document.querySelector('.primary-button');
        
        // Selected topics count
        let selectedCount = 0;
        

        
        // Topic selection
        topicCards.forEach(card => {
            card.addEventListener('click', function() {
                this.classList.toggle('selected');
                
                // Update selected count
                selectedCount = document.querySelectorAll('.topic-card.selected').length;
                
                // Update button text
                continueButton.textContent = `Continue with ${selectedCount} topics selected`;
                
                // Enable/disable button based on selection
                if (selectedCount > 0) {
                    continueButton.disabled = false;
                } else {
                    continueButton.disabled = true;
                }
            });
        });
        
        // Search functionality
        const searchInput = document.querySelector('.search-bar input');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            topicCards.forEach(card => {
                const title = card.querySelector('.topic-title').textContent.toLowerCase();
                const description = card.querySelector('.topic-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        
        // Continue button action
        continueButton.addEventListener('click', function() {
            alert(`You've selected ${selectedCount} topics! Your feed will be personalized accordingly.`);
            // In a real app, this would save selections and redirect to the main feed
        });
    </script>