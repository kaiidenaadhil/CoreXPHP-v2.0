<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next-Gen Profile | Empowro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Core brand colors */
            --emerald: #2ECC71;
            --royal-blue: #4A90E2;
            --golden-yellow: #F5C518;
            --charcoal: #2C3E50;
            --off-white: #F9F9F9;
            --light-gray: #ECF0F1;
            --medium-gray: #BDC3C7;
            --text-dark: #2C3E50;
            --text-light: #FFFFFF;
            
            /* Next-gen color extensions */
            --neon-cyan: #0FF0FC;
            --neon-magenta: #FF00FF;
            --deep-space: #0D1B2A;
            --stellar-purple: #7B4DFF;
            
            /* Spacing system */
            --space-3xs: 0.25rem;
            --space-2xs: 0.5rem;
            --space-xs: 0.75rem;
            --space-sm: 1rem;
            --space-md: 1.5rem;
            --space-lg: 2rem;
            --space-xl: 3rem;
            --space-2xl: 4rem;
            --space-3xl: 6rem;
            
            /* Border radius */
            --radius-sm: 8px;
            --radius: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;
            --radius-circle: 50%;
            
            /* Transitions */
            --transition-fast: 0.2s ease;
            --transition: 0.3s ease;
            --transition-slow: 0.5s ease;
            
            /* Shadows */
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
            --shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
            --shadow-lg: 0 8px 30px rgba(0, 0, 0, 0.18);
            --shadow-glow: 0 0 20px rgba(46, 204, 113, 0.4);
            
            /* Z-index */
            --z-dropdown: 100;
            --z-sticky: 200;
            --z-modal: 300;
            --z-toast: 400;
            
            /* Grid system */
            --grid-columns: 12;
            --grid-gap: 1.5rem;
        }

        /* Dark mode variables */
        [data-theme="dark"] {
            --background-primary: #0D1B2A;
            --background-secondary: #1B263B;
            --background-tertiary: #415A77;
            --text-primary: #E0E1DD;
            --text-secondary: #B3B8C2;
            --border-color: #415A77;
        }

        /* Light mode variables */
        [data-theme="light"] {
            --background-primary: #FFFFFF;
            --background-secondary: #F8F9FA;
            --background-tertiary: #E9ECEF;
            --text-primary: #212529;
            --text-secondary: #495057;
            --border-color: #DEE2E6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background-primary);
            color: var(--text-primary);
            line-height: 1.6;
            transition: background-color var(--transition), color var(--transition);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            margin-bottom: var(--space-sm);
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 var(--space-md);
        }

        /* Next-gen profile header */
        .profile-header {
            position: relative;
            margin-top: var(--space-lg);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            background: var(--background-secondary);
            margin-bottom: var(--space-xl);
        }

        .cover-container {
            height: 320px;
            position: relative;
            overflow: hidden;
        }

        .cover-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue), var(--stellar-purple));
        }

        .cover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(13, 27, 42, 0.7), transparent 30%, transparent 70%, rgba(13, 27, 42, 0.9));
        }

        .avatar-container {
            position: absolute;
            bottom: -80px;
            left: var(--space-xl);
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 2;
        }

        .avatar {
            width: 160px;
            height: 160px;
            border-radius: var(--radius-circle);
            border: 4px solid var(--background-primary);
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3.5rem;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .avatar::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: rotate(45deg);
            animation: shine 6s infinite linear;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        .avatar-edit {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: var(--background-primary);
            width: 44px;
            height: 44px;
            border-radius: var(--radius-circle);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid var(--border-color);
        }

        .avatar-edit:hover {
            background: var(--background-secondary);
            transform: scale(1.1) rotate(15deg);
        }

        .profile-info {
            padding: var(--space-2xl) var(--space-xl) var(--space-xl);
            position: relative;
        }

        .user-meta {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: var(--space-lg);
            align-items: start;
        }

        .user-details h1 {
            font-size: 2.5rem;
            margin-bottom: var(--space-xs);
            font-weight: 800;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .user-handle {
            color: var(--text-secondary);
            margin-bottom: var(--space-sm);
            font-weight: 500;
            font-size: 1.2rem;
        }

        .user-bio {
            margin-bottom: var(--space-md);
            max-width: 600px;
            line-height: 1.6;
            font-size: 1.1rem;
        }

        .user-meta-details {
            display: flex;
            gap: var(--space-md);
            margin-bottom: var(--space-md);
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        .user-stats {
            display: flex;
            gap: var(--space-xl);
            margin: var(--space-lg) 0;
        }

        .stat {
            text-align: center;
            padding: var(--space-md);
            border-radius: var(--radius);
            background: var(--background-tertiary);
            min-width: 100px;
            transition: var(--transition);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .stat::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--emerald), var(--royal-blue));
        }

        .stat:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--emerald);
            margin-bottom: var(--space-xs);
            font-family: 'Outfit', sans-serif;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .action-buttons {
            display: flex;
            gap: var(--space-sm);
            flex-wrap: wrap;
        }

        .btn {
            padding: var(--space-sm) var(--space-lg);
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition-slow);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
            box-shadow: var(--shadow-glow);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.5);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--border-color);
            color: var(--text-primary);
        }

        .btn-outline:hover {
            background: var(--background-tertiary);
            transform: translateY(-3px);
        }

        /* Tabs Navigation */
        .tabs-container {
            position: sticky;
            top: 0;
            background: var(--background-secondary);
            z-index: var(--z-sticky);
            box-shadow: var(--shadow);
            margin-bottom: var(--space-xl);
            border-radius: var(--radius);
        }

        .tabs {
            display: flex;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding: 0 var(--space-md);
        }

        .tabs::-webkit-scrollbar {
            display: none;
        }

        .tab {
            padding: var(--space-md) var(--space-lg);
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            position: relative;
            color: var(--text-secondary);
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            border-bottom: 3px solid transparent;
        }

        .tab.active {
            color: var(--emerald);
            font-weight: 600;
            border-bottom: 3px solid var(--emerald);
        }

        .tab:hover {
            color: var(--text-primary);
            background: var(--background-tertiary);
        }

        /* Content Area */
        .content {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--space-xl);
        }

        @media (min-width: 1024px) {
            .content {
                grid-template-columns: 7fr 5fr;
            }
        }

        /* Posts */
        .posts {
            display: flex;
            flex-direction: column;
            gap: var(--space-lg);
        }

        .post {
            background: var(--background-secondary);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .post::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, var(--emerald), var(--royal-blue));
        }

        .post:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-5px);
        }

        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: var(--space-md);
        }

        .post-avatar {
            width: 56px;
            height: 56px;
            border-radius: var(--radius-circle);
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: var(--space-md);
            flex-shrink: 0;
            font-size: 1.2rem;
        }

        .post-meta {
            flex: 1;
            min-width: 0;
        }

        .post-author {
            font-weight: 700;
            margin-bottom: 2px;
            font-family: 'Outfit', sans-serif;
        }

        .post-handle {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 2px;
        }

        .post-date {
            font-size: 0.9rem;
            color: var(--text-secondary);
            display: flex;
            align-items: center;
            gap: var(--space-xs);
        }

        .post-content {
            margin-bottom: var(--space-md);
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .post-tags {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-xs);
            margin-bottom: var(--space-md);
        }

        .tag {
            background-color: var(--background-tertiary);
            color: var(--text-primary);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            transition: var(--transition);
            cursor: pointer;
        }

        .tag:hover {
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            color: white;
        }

        .post-actions {
            display: flex;
            justify-content: space-around;
            border-top: 1px solid var(--border-color);
            padding-top: var(--space-md);
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            color: var(--text-secondary);
            cursor: pointer;
            transition: var(--transition);
            padding: var(--space-xs) var(--space-sm);
            border-radius: var(--radius-sm);
            font-size: 0.95rem;
        }

        .action-btn:hover {
            background: var(--background-tertiary);
            color: var(--text-primary);
        }

        .action-btn.liked {
            color: #E0245E;
        }

        .action-btn.retweeted {
            color: #17BF63;
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: var(--space-lg);
        }

        .card {
            background: var(--background-secondary);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--emerald), var(--royal-blue));
        }

        .card-header {
            font-weight: 700;
            margin-bottom: var(--space-md);
            padding-bottom: var(--space-xs);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: 'Outfit', sans-serif;
        }

        .card-more {
            color: var(--royal-blue);
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .card-more:hover {
            color: var(--emerald);
        }

        .badges {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--space-md);
        }

        .badge {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: var(--space-md);
            border-radius: var(--radius);
            transition: var(--transition);
            cursor: pointer;
            background: var(--background-tertiary);
        }

        .badge:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow);
        }

        .badge-icon {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-circle);
            background: linear-gradient(135deg, var(--golden-yellow), #E67E22);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: var(--space-sm);
        }

        .badge-name {
            font-size: 0.85rem;
            font-weight: 600;
        }

        .community-list {
            list-style: none;
        }

        .community-item {
            display: flex;
            align-items: center;
            gap: var(--space-md);
            padding: var(--space-md) 0;
            border-bottom: 1px solid var(--border-color);
            transition: var(--transition);
            cursor: pointer;
        }

        .community-item:last-child {
            border-bottom: none;
        }

        .community-item:hover {
            background: var(--background-tertiary);
            border-radius: var(--radius);
            padding-left: var(--space-md);
            padding-right: var(--space-md);
        }

        .community-icon {
            width: 44px;
            height: 44px;
            border-radius: var(--radius-circle);
            background: var(--background-tertiary);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.2rem;
        }

        /* Theme switcher */
        .theme-switch {
            position: fixed;
            bottom: var(--space-xl);
            right: var(--space-xl);
            width: 60px;
            height: 60px;
            border-radius: var(--radius-circle);
            background: var(--background-secondary);
            color: var(--text-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: var(--shadow-lg);
            cursor: pointer;
            z-index: var(--z-sticky);
            transition: var(--transition);
            border: 2px solid var(--border-color);
        }

        .theme-switch:hover {
            transform: rotate(30deg) scale(1.1);
        }

        /* Responsive Design */
        @media (max-width: 1023px) {
            .user-meta {
                grid-template-columns: 1fr;
            }
            
            .avatar-container {
                left: 50%;
                transform: translateX(-50%);
                text-align: center;
            }
            
            .profile-info {
                text-align: center;
                padding-top: 100px;
            }
            
            .user-details {
                width: 100%;
            }
            
            .user-stats {
                justify-content: center;
            }
            
            .action-buttons {
                justify-content: center;
            }
        }

        @media (max-width: 767px) {
            .cover-container {
                height: 240px;
            }
            
            .avatar {
                width: 120px;
                height: 120px;
                font-size: 2.5rem;
            }
            
            .avatar-container {
                bottom: -60px;
            }
            
            .user-details h1 {
                font-size: 2rem;
            }
            
            .user-stats {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .stat {
                flex: 1;
                min-width: 120px;
            }
            
            .badges {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .theme-switch {
                bottom: var(--space-md);
                right: var(--space-md);
            }
        }

        @media (max-width: 480px) {
            .cover-container {
                height: 200px;
            }
            
            .avatar {
                width: 100px;
                height: 100px;
                font-size: 2rem;
            }
            
            .profile-info {
                padding: var(--space-xl) var(--space-md) var(--space-lg);
            }
            
            .user-details h1 {
                font-size: 1.8rem;
            }
            
            .btn {
                padding: var(--space-sm) var(--space-md);
                font-size: 0.9rem;
            }
            
            .badges {
                grid-template-columns: 1fr;
            }
        }

        /* Animation for elements */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }

        /* High contrast support */
        @media (prefers-contrast: high) {
            :root {
                --text-primary: #000000;
                --text-secondary: #333333;
            }
            
            .btn-outline {
                border-width: 2px;
            }
        }

        /* Reduced motion support */
        @media (prefers-reduced-motion: reduce) {
            * {
                transition: none !important;
                animation: none !important;
            }
        }
    </style>
</head>
<body data-theme="light">
    <div class="container">
        <!-- Next-gen Profile Header -->
        <div class="profile-header">
            <div class="cover-container">
                <div class="cover-photo"></div>
                <div class="cover-overlay"></div>
                <div class="avatar-container">
                    <div class="avatar">
                        J
                        <div class="avatar-edit">
                            <i class="fas fa-camera"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-info">
                <div class="user-meta">
                    <div class="user-details">
                        <h1>Jamal Williams</h1>
                        <div class="user-handle">@jamalw · Community Leader</div>
                        <p class="user-bio">Dedicated to creating positive change through community action and environmental advocacy. Building a better future, one good deed at a time.</p>
                        <div class="user-meta-details">
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>New York, NY</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-link"></i>
                                <span>jamalwilliams.com</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Joined March 2022</span>
                            </div>
                        </div>
                        <div class="user-stats">
                            <div class="stat">
                                <div class="stat-value">689</div>
                                <div class="stat-label">Goodness</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">142</div>
                                <div class="stat-label">Following</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">287</div>
                                <div class="stat-label">Followers</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">42</div>
                                <div class="stat-label">Deeds</div>
                            </div>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Follow
                        </button>
                        <button class="btn btn-outline">
                            <i class="fas fa-envelope"></i> Message
                        </button>
                        <button class="btn btn-outline">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="tabs-container">
            <div class="tabs">
                <div class="tab active">
                    <i class="fas fa-stream"></i> Posts
                </div>
                <div class="tab">
                    <i class="fas fa-seedling"></i> Good Deeds
                </div>
                <div class="tab">
                    <i class="fas fa-comments"></i> Replies
                </div>
                <div class="tab">
                    <i class="fas fa-image"></i> Media
                </div>
                <div class="tab">
                    <i class="fas fa-award"></i> Badges
                </div>
                <div class="tab">
                    <i class="fas fa-chart-line"></i> Impact
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content">
            <!-- Main Content -->
            <div class="posts">
                <!-- Post 1 -->
                <div class="post fade-in">
                    <div class="post-header">
                        <div class="post-avatar">J</div>
                        <div class="post-meta">
                            <div class="post-author">Jamal Williams</div>
                            <div class="post-handle">@jamalw · 3h</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Just organized a neighborhood cleanup at Jefferson Park! So grateful for everyone who came out to help. Together we collected over 20 bags of trash and recycled materials. 🌿</p>
                    </div>
                    <div class="post-tags">
                        <span class="tag">#CommunityLove</span>
                        <span class="tag">#EcoFriendly</span>
                        <span class="tag">#NeighborhoodPride</span>
                    </div>
                    <div class="post-actions">
                        <div class="action-btn">
                            <i class="far fa-comment"></i>
                            <span>24</span>
                        </div>
                        <div class="action-btn">
                            <i class="fas fa-retweet"></i>
                            <span>12</span>
                        </div>
                        <div class="action-btn">
                            <i class="far fa-heart"></i>
                            <span>38</span>
                        </div>
                        <div class="action-btn">
                            <i class="fas fa-share"></i>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post fade-in">
                    <div class="post-header">
                        <div class="post-avatar">J</div>
                        <div class="post-meta">
                            <div class="post-author">Jamal Williams</div>
                            <div class="post-handle">@jamalw · 2d</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Looking for volunteers to help with our community garden project this Saturday. We'll be planting vegetables that will be donated to local food banks. No experience needed - just willing hands! 👩‍🌾👨‍🌾</p>
                    </div>
                    <div class="post-tags">
                        <span class="tag">#VolunteersNeeded</span>
                        <span class="tag">#CommunityGarden</span>
                        <span class="tag">#ZeroHunger</span>
                    </div>
                    <div class="post-actions">
                        <div class="action-btn">
                            <i class="far fa-comment"></i>
                            <span>18</span>
                        </div>
                        <div class="action-btn retweeted">
                            <i class="fas fa-retweet"></i>
                            <span>7</span>
                        </div>
                        <div class="action-btn liked">
                            <i class="fas fa-heart"></i>
                            <span>42</span>
                        </div>
                        <div class="action-btn">
                            <i class="fas fa-share"></i>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post fade-in">
                    <div class="post-header">
                        <div class="post-avatar">J</div>
                        <div class="post-meta">
                            <div class="post-author">Jamal Williams</div>
                            <div class="post-handle">@jamalw · 1w</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>So proud of our community for coming together to support the local shelter. We collected over 200 items of clothing and raised $1,500 for their programs. Every little bit helps! 🙌</p>
                    </div>
                    <div class="post-tags">
                        <span class="tag">#CommunitySupport</span>
                        <span class="tag">#Shelter</span>
                        <span class="tag">#MakeADifference</span>
                    </div>
                    <div class="post-actions">
                        <div class="action-btn">
                            <i class="far fa-comment"></i>
                            <span>32</span>
                        </div>
                        <div class="action-btn">
                            <i class="fas fa-retweet"></i>
                            <span>15</span>
                        </div>
                        <div class="action-btn liked">
                            <i class="fas fa-heart"></i>
                            <span>57</span>
                        </div>
                        <div class="action-btn">
                            <i class="fas fa-share"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="card">
                    <div class="card-header">
                        Achievements
                        <span class="card-more">See all</span>
                    </div>
                    <div class="badges">
                        <div class="badge">
                            <div class="badge-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div class="badge-name">Green Thumb</div>
                        </div>
                        <div class="badge">
                            <div class="badge-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="badge-name">Community Builder</div>
                        </div>
                        <div class="badge">
                            <div class="badge-icon">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <div class="badge-name">Eco Warrior</div>
                        </div>
                        <div class="badge">
                            <div class="badge-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div class="badge-name">Helper</div>
                        </div>
                        <div class="badge">
                            <div class="badge-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="badge-name">Champion</div>
                        </div>
                        <div class="badge">
                            <div class="badge-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="badge-name">Rising Star</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Communities
                        <span class="card-more">See all</span>
                    </div>
                    <ul class="community-list">
                        <li class="community-item">
                            <div class="community-icon" style="color: var(--emerald);">
                                <i class="fas fa-tree"></i>
                            </div>
                            <div>Eco Warriors</div>
                        </li>
                        <li class="community-item">
                            <div class="community-icon" style="color: var(--royal-blue);">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div>Food Rescue Collective</div>
                        </li>
                        <li class="community-item">
                            <div class="community-icon" style="color: var(--golden-yellow);">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div>Elder Support Network</div>
                        </li>
                        <li class="community-item">
                            <div class="community-icon" style="color: var(--stellar-purple);">
                                <i class="fas fa-book-reader"></i>
                            </div>
                            <div>Education Equality</div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        Recent Activity
                    </div>
                    <ul class="community-list">
                        <li class="community-item">
                            <div class="community-icon" style="background: rgba(46, 204, 113, 0.2); color: var(--emerald);">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div>Logged a good deed</div>
                        </li>
                        <li class="community-item">
                            <div class="community-icon" style="background: rgba(74, 144, 226, 0.2); color: var(--royal-blue);">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>Joined Eco Warriors</div>
                        </li>
                        <li class="community-item">
                            <div class="community-icon" style="background: rgba(245, 197, 24, 0.2); color: var(--golden-yellow);">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>Earned Green Thumb badge</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Theme Switcher -->
    <div class="theme-switch" id="themeSwitch">
        <i class="fas fa-moon"></i>
    </div>

    <script>
        // Theme switching functionality
        const themeSwitch = document.getElementById('themeSwitch');
        const body = document.body;
        const themeIcon = themeSwitch.querySelector('i');
        
        // Check for saved theme preference or respect OS preference
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
            body.setAttribute('data-theme', 'dark');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        }
        
        themeSwitch.addEventListener('click', () => {
            if (body.getAttribute('data-theme') === 'light') {
                body.setAttribute('data-theme', 'dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
                localStorage.setItem('theme', 'dark');
            } else {
                body.setAttribute('data-theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
                localStorage.setItem('theme', 'light');
            }
        });

        // Tab functionality
        const tabs = document.querySelectorAll('.tab');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                // Show loading state
                document.querySelectorAll('.post').forEach(post => {
                    post.style.opacity = '0.5';
                });
                
                // Simulate content loading
                setTimeout(() => {
                    document.querySelectorAll('.post').forEach(post => {
                        post.style.opacity = '1';
                    });
                }, 300);
            });
        });

        // Like button functionality
        const likeButtons = document.querySelectorAll('.action-btn:nth-child(3)');
        
        likeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const icon = button.querySelector('i');
                const count = button.querySelector('span');
                
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    button.classList.add('liked');
                    count.textContent = parseInt(count.textContent) + 1;
                    
                    // Add a subtle animation
                    button.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        button.style.transform = 'scale(1)';
                    }, 200);
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    button.classList.remove('liked');
                    count.textContent = parseInt(count.textContent) - 1;
                }
            });
        });

        // Follow button functionality
        const followBtn = document.querySelector('.btn-primary');
        
        followBtn.addEventListener('click', function() {
            if (this.textContent.includes('Follow')) {
                this.innerHTML = '<i class="fas fa-check"></i> Following';
                this.style.background = 'var(--background-tertiary)';
                this.style.color = 'var(--text-primary)';
                this.style.boxShadow = 'none';
            } else {
                this.innerHTML = '<i class="fas fa-plus"></i> Follow';
                this.style.background = 'linear-gradient(135deg, var(--emerald), var(--royal-blue))';
                this.style.color = 'white';
                this.style.boxShadow = 'var(--shadow-glow)';
            }
        });

        // Add subtle animations to elements when they come into view
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all posts and cards
        document.querySelectorAll('.post, .card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>