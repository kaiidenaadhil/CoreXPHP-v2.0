<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Empowro – foster goodness · deter evil</title>
    <link rel="icon" type="image/svg+xml" href="<?= ASSETS ?>/img/logo.svg">
    <!-- Google Fonts for English: Inter & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&family=Poppins:wght@700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ---------- design tokens – original charcoal (#2C3E50) ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --emerald: #10b981;
            --royal-blue: #3b82f6;
            --golden-yellow: #fbbf24;
            --charcoal: #2C3E50;        /* original dark blue-grey */
            --off-white: #f8fafc;
            --light-gray: #e2e8f0;
            --medium-gray: #94a3b8;
            --text-dark: #2C3E50;        /* use charcoal for text */
            --text-light: #ffffff;

            --glass-bg: rgba(255, 255, 255, 0.85);
            --glass-border: rgba(255, 255, 255, 0.4);
            --glass-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
            --glass-shadow-hover: 0 16px 40px rgba(0, 0, 0, 0.12);

            --space-xs: clamp(0.5rem, 1.5vw, 0.75rem);
            --space-sm: clamp(0.75rem, 2vw, 1rem);
            --space-md: clamp(1rem, 3vw, 1.5rem);
            --space-lg: clamp(1.5rem, 4vw, 2rem);
            --space-xl: clamp(2rem, 6vw, 3rem);
            --space-2xl: clamp(2.5rem, 8vw, 4rem);

            --border-radius-sm: 12px;
            --border-radius: 20px;
            --border-radius-lg: 32px;

            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: all 0.5s cubic-bezier(0.2, 0.9, 0.3, 1);

            --header-height: 80px;
            --z-header: 100;
            --z-overlay: 200;
            --z-mobile-nav: 300;
            --z-fab: 400;               /* for floating button */
        }

        .dark-mode {
            --glass-bg: rgba(30, 41, 59, 0.9);
            --glass-border: rgba(255, 255, 255, 0.15);
            --off-white: #0b1120;
            --light-gray: #1e293b;
            --text-dark: #f1f5f9;        /* light text for dark backgrounds */
        }

        body {
            font-family: 'Inter', 'SolaimanLipi', sans-serif;  /* Inter for English, SolaimanLipi for Bangla fallback */
            background-color: var(--off-white);
            color: var(--text-dark);
            line-height: 1.5;
            transition: background-color 0.3s, color 0.3s;
            overflow-x: hidden;
            min-height: 100vh;
        }

        h1, h2, h3, h4 {
            font-family: 'Poppins', 'SolaimanLipi', sans-serif; /* Poppins for headings, SolaimanLipi for Bangla */
            font-weight: 800;
            letter-spacing: -0.02em;
            line-height: 1.2;
        }

        .container {
            width: min(100% - 2rem, 1200px);
            margin-inline: auto;
        }

        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
        }

        /* ---------- header ---------- */
        header {
            position: sticky;
            top: 0;
            z-index: var(--z-header);
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            transition: var(--transition);
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: var(--header-height);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            z-index: calc(var(--z-header) + 1);
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            background: linear-gradient(145deg, var(--emerald), var(--royal-blue));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            box-shadow: 0 10px 20px -8px rgba(16,185,129,0.3);
            transition: var(--transition);
        }
        .logo-icon img { width: 28px; height: 28px; filter: brightness(0) invert(1); }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(145deg, var(--emerald), var(--royal-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .desktop-nav ul {
            display: flex;
            gap: clamp(1.5rem, 3vw, 2.5rem);
            list-style: none;
        }
        .desktop-nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            position: relative;
            padding: 0.25rem 0;
        }
        .desktop-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2.5px;
            background: linear-gradient(90deg, var(--emerald), var(--royal-blue));
            transition: width 0.25s ease;
            border-radius: 2px;
        }
        .desktop-nav a:hover::after { width: 100%; }

        .btn {
            padding: 0.6rem 1.8rem;
            border-radius: 60px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            white-space: nowrap;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .btn-primary {
            background: linear-gradient(145deg, var(--emerald), var(--royal-blue));
            color: white;
            box-shadow: 0 10px 20px -8px rgba(59,130,246,0.5);
        }
        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 30px -8px rgba(59,130,246,0.6);
        }
        .btn-secondary {
            background: transparent;
            color: var(--royal-blue);
            border: 1.5px solid var(--royal-blue);
            backdrop-filter: blur(4px);
        }
        .btn-secondary:hover {
            background: rgba(59,130,246,0.08);
            transform: translateY(-2px);
            border-color: var(--emerald);
            color: var(--emerald);
        }

        /* ---------- floating theme toggle (bottom right) ---------- */
        .theme-toggle-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            border: 2px solid var(--royal-blue);
            color: var(--royal-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            font-size: 1.8rem;
            z-index: var(--z-fab);
        }
        .theme-toggle-float:hover {
            transform: scale(1.1) translateY(-5px);
            border-color: var(--emerald);
            color: var(--emerald);
            box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        }
        .dark-mode .theme-toggle-float {
            color: var(--golden-yellow);
            border-color: var(--golden-yellow);
        }
        .dark-mode .theme-toggle-float:hover {
            color: var(--golden-yellow);
            border-color: var(--emerald);
        }

        /* ---------- mobile toggle ---------- */
        .mobile-nav-toggle {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 6px;
            width: 48px;
            height: 48px;
            background: rgba(255,255,255,0.9);
            border: 1.5px solid var(--charcoal);
            border-radius: 50%;
            cursor: pointer;
            backdrop-filter: blur(8px);
            transition: background 0.2s, transform 0.2s, border-color 0.2s;
            box-shadow: 0 6px 16px rgba(0,0,0,0.15);
        }
        .dark-mode .mobile-nav-toggle {
            background: rgba(30,41,59,0.9);
            border-color: var(--text-light);
        }
        .mobile-nav-toggle span {
            display: block;
            width: 24px;
            height: 3px;
            background: var(--charcoal);
            border-radius: 4px;
            transition: transform 0.3s ease, opacity 0.2s, background 0.2s;
            transform-origin: center;
        }
        .dark-mode .mobile-nav-toggle span {
            background: var(--text-light);
        }
        .mobile-nav-toggle.active {
            background: var(--emerald);
            border-color: var(--emerald);
        }
        .mobile-nav-toggle.active span {
            background: white;
        }
        .mobile-nav-toggle.active span:nth-child(1) { transform: translateY(9px) rotate(45deg); }
        .mobile-nav-toggle.active span:nth-child(2) { opacity: 0; }
        .mobile-nav-toggle.active span:nth-child(3) { transform: translateY(-9px) rotate(-45deg); }

        .mobile-nav {
            position: fixed;
            top: 0;
            right: 0;
            width: 85%;
            max-width: 360px;
            height: 100dvh;
            background: var(--glass-bg);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            padding: var(--space-lg) var(--space-lg) var(--space-lg);
            transform: translateX(100%) scale(0.96);
            opacity: 0;
            visibility: hidden;
            transition: transform 0.4s ease, opacity 0.3s ease, visibility 0.3s;
            box-shadow: -8px 0 40px rgba(0,0,0,0.2);
            border-left: 1px solid var(--glass-border);
            z-index: var(--z-mobile-nav);
            overflow-y: auto;
        }
        .mobile-nav.active {
            transform: translateX(0) scale(1);
            opacity: 1;
            visibility: visible;
        }
        .mobile-nav-close {
            display: flex;
            justify-content: flex-end;
            margin-bottom: var(--space-md);
        }
        .mobile-nav-close button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(0,0,0,0.1);
            border: none;
            font-size: 1.5rem;
            color: var(--charcoal);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
        }
        .dark-mode .mobile-nav-close button {
            color: var(--text-light);
            background: rgba(255,255,255,0.1);
        }
        .mobile-nav-close button:hover {
            background: var(--emerald);
            color: white;
        }
        .mobile-nav ul { list-style: none; }
        .mobile-nav li {
            margin-bottom: 1.2rem;
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .mobile-nav.active li {
            opacity: 1;
            transform: translateX(0);
        }
        .mobile-nav li:nth-child(1) { transition-delay: 0.05s; }
        .mobile-nav li:nth-child(2) { transition-delay: 0.1s; }
        .mobile-nav li:nth-child(3) { transition-delay: 0.15s; }
        .mobile-nav li:nth-child(4) { transition-delay: 0.2s; }
        .mobile-nav li:nth-child(5) { transition-delay: 0.25s; }
        .mobile-nav li:nth-child(6) { transition-delay: 0.3s; }
        .mobile-nav a {
            display: block;
            padding: 0.8rem 1.2rem;
            color: var(--text-dark);
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 500;
            border-radius: 20px;
            transition: background 0.2s, padding-left 0.2s;
        }
        .mobile-nav a:hover {
            background: rgba(16,185,129,0.1);
            padding-left: 1.8rem;
            color: var(--emerald);
        }
        .mobile-nav .btn {
            margin-top: 0.5rem;
            width: 100%;
            justify-content: center;
        }
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(5px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s, backdrop-filter 0.3s;
            z-index: var(--z-overlay);
        }
        .overlay.active { opacity: 1; visibility: visible; backdrop-filter: blur(5px); }

        /* ---------- hero ---------- */
        .hero {
            padding: calc(var(--header-height) + var(--space-2xl)) 0 var(--space-2xl);
            background: radial-gradient(circle at 80% 20%, rgba(16,185,129,0.1) 0%, rgba(59,130,246,0.05) 70%, transparent 100%),
                        linear-gradient(145deg, var(--light-gray), var(--off-white));
            transition: var(--transition);
        }
        .hero-container {
            display: flex;
            align-items: center;
            gap: var(--space-2xl);
            flex-wrap: wrap;
        }
        .hero-content {
            flex: 1 1 400px;
        }
        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4rem);
            line-height: 1.1;
            background: linear-gradient(145deg, var(--emerald) 20%, var(--royal-blue) 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: var(--space-md);
        }
        .hero p {
            font-size: clamp(1rem, 2.5vw, 1.3rem);
            color: var(--charcoal);
            max-width: 550px;
            margin-bottom: var(--space-lg);
            opacity: 0.85;
        }
        .hero-actions {
            display: flex;
            gap: var(--space-sm);
            flex-wrap: wrap;
        }

        .hero-visual {
            flex: 1 1 300px;
            display: flex;
            justify-content: center;
            position: relative;
            min-height: 300px;
        }
        .ripple-container {
            position: relative;
            width: min(400px, 80vw);
            height: min(400px, 80vw);
        }
        .ripple-circle {
            position: absolute;
            border-radius: 50%;
            border: 2px solid;
            animation: ripple 4s infinite ease-out;
            opacity: 0.6;
        }
        .ripple-circle:nth-child(1) { width: 30%; height: 30%; top: 35%; left: 35%; border-color: var(--emerald); animation-delay: 0s; }
        .ripple-circle:nth-child(2) { width: 50%; height: 50%; top: 25%; left: 25%; border-color: var(--royal-blue); animation-delay: 0.8s; }
        .ripple-circle:nth-child(3) { width: 70%; height: 70%; top: 15%; left: 15%; border-color: var(--golden-yellow); animation-delay: 1.6s; }
        .ripple-circle:nth-child(4) { width: 90%; height: 90%; top: 5%; left: 5%; border-color: var(--charcoal); animation-delay: 2.4s; }
        @keyframes ripple { 0% { transform: scale(0.9); opacity: 0.9; } 100% { transform: scale(1.3); opacity: 0; } }

        .floating-element {
            position: absolute;
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 60px;
            padding: 0.6rem 1.2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-weight: 600;
            color: var(--charcoal);
            animation: float 5s infinite alternate;
            white-space: nowrap;
        }
        .floating-element i { font-size: 1.3rem; }
        .floating-element:nth-child(1) { top: 15%; left: 5%; animation-duration: 5s; }
        .floating-element:nth-child(2) { bottom: 20%; right: 5%; animation-duration: 6s; background: rgba(59,130,246,0.2); }
        .floating-element:nth-child(3) { top: 40%; right: 10%; animation-duration: 7s; background: rgba(16,185,129,0.15); }
        @keyframes float { 0% { transform: translateY(0) rotate(0deg); } 100% { transform: translateY(-20px) rotate(1deg); } }

        .mobile-floating-elements {
            display: none;
            justify-content: center;
            gap: var(--space-md);
            margin-top: var(--space-xl);
        }
        .mobile-floating-element {
            background: var(--glass-bg);
            backdrop-filter: blur(8px);
            border: 1px solid var(--glass-border);
            border-radius: 40px;
            padding: 0.8rem 1.2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 0.9rem;
            box-shadow: var(--glass-shadow);
        }

        /* ---------- sections ---------- */
        .about, .how-it-works {
            padding: var(--space-2xl) 0;
            transition: var(--transition);
        }
        .about { background: var(--light-gray); }
        .how-it-works { background: var(--off-white); }

        .section-title {
            font-size: clamp(2rem, 5vw, 2.8rem);
            text-align: center;
            margin-bottom: var(--space-sm);
            color: var(--charcoal);
        }
        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto var(--space-xl);
            color: var(--charcoal);
            opacity: 0.8;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(260px, 100%), 1fr));
            gap: var(--space-lg);
        }
        .feature-card {
            background: var(--glass-bg);
            backdrop-filter: blur(8px);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius-lg);
            padding: var(--space-xl) var(--space-lg);
            text-align: center;
            transition: var(--transition-slow);
            box-shadow: var(--glass-shadow);
        }
        .feature-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: var(--glass-shadow-hover);
            border-color: rgba(16,185,129,0.3);
        }
        .feature-icon {
            width: 80px; height: 80px;
            margin: 0 auto var(--space-md);
            background: linear-gradient(145deg, var(--emerald), var(--royal-blue));
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem; color: white;
            box-shadow: 0 12px 24px -12px var(--royal-blue);
        }
        .feature-title {
            font-size: 1.5rem;
            margin-bottom: var(--space-sm);
            color: var(--charcoal);
        }
        .feature-desc {
            color: var(--charcoal);
            opacity: 0.8;
        }

        .steps-container {
            display: flex; justify-content: space-around; gap: var(--space-xl); flex-wrap: wrap;
            margin-top: var(--space-xl);
        }
        .step {
            flex: 1 1 200px; text-align: center; position: relative;
        }
        .step:not(:last-child)::after {
            content: '';
            position: absolute; top: 40px; right: -20%; width: 40%; height: 2px;
            background: linear-gradient(90deg, var(--emerald), transparent);
        }
        .step-number {
            width: 90px; height: 90px;
            background: linear-gradient(145deg, var(--emerald), var(--royal-blue));
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem; font-weight: 800; color: white;
            margin: 0 auto var(--space-md);
            box-shadow: 0 16px 30px -10px var(--emerald);
        }
        .step-title {
            font-size: 1.8rem; color: var(--charcoal);
        }
        .step-desc {
            color: var(--charcoal); opacity: 0.8;
        }

        .impact {
            background: linear-gradient(145deg, var(--emerald), var(--royal-blue));
            color: white;
            padding: var(--space-2xl) 0;
            text-align: center;
            position: relative; isolation: isolate;
        }
        .impact::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.2) 0%, transparent 60%);
            z-index: -1;
        }
        .impact-quote {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 700;
            max-width: 800px; margin: 0 auto var(--space-xl);
        }
        .impact-stats {
            display: flex; justify-content: center; gap: var(--space-2xl); flex-wrap: wrap;
        }
        .stat-number { font-size: 3.5rem; font-weight: 800; line-height: 1; }
        .stat-label { font-size: 1.2rem; opacity: 0.9; }

        .cta {
            padding: var(--space-2xl) 0;
            text-align: center;
            background: var(--light-gray);
        }
        .cta-title {
            font-size: clamp(2rem,5vw,2.8rem);
            color: var(--charcoal);
        }
        .cta-desc {
            color: var(--charcoal); opacity: 0.8;
        }

        /* ---------- footer – always dark ---------- */
        footer {
            background: #2C3E50;
            color: white;
            padding: var(--space-2xl) 0 var(--space-xl);
        }
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--space-xl);
        }
        .footer-column h3 {
            color: white;
            font-size: 1.3rem;
            margin-bottom: var(--space-md);
            position: relative;
            padding-bottom: 0.5rem;
        }
        .footer-column h3::after {
            content: '';
            position: absolute; bottom: 0; left: 0; width: 40px; height: 3px;
            background: linear-gradient(90deg, var(--emerald), var(--royal-blue));
        }
        .footer-links { list-style: none; }
        .footer-links li { margin-bottom: 0.8rem; }
        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            display: inline-flex; align-items: center; gap: 0.5rem;
            transition: 0.2s;
        }
        .footer-links a:hover { color: var(--emerald); transform: translateX(5px); }
        .social-links { display: flex; gap: 1rem; margin-top: 1.5rem; }
        .social-links a {
            width: 42px; height: 42px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: white;
            transition: 0.2s;
        }
        .social-links a:hover { background: var(--emerald); transform: translateY(-5px); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: var(--space-xl);
            padding-top: var(--space-lg);
            display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-md);
        }
        .footer-legal { display: flex; gap: var(--space-md); flex-wrap: wrap; }
        .footer-legal a { color: rgba(255,255,255,0.6); text-decoration: none; font-size: 0.9rem; }
        .footer-legal a:hover { color: var(--emerald); }

        /* ---------- responsive ---------- */
        @media (max-width: 768px) {
            .desktop-nav, .header-actions .btn { display: none; }
            .mobile-nav-toggle { display: flex; }
            .hero-container { flex-direction: column; text-align: center; }
            .hero-actions { justify-content: center; }
            .floating-element { display: none; }
            .mobile-floating-elements { display: flex; }
            .step:not(:last-child)::after { display: none; }
            .impact-stats { gap: var(--space-xl); }
        }

        @media (max-width: 600px) {
            .feature-card { padding: var(--space-lg) var(--space-md); }
            .step { flex-basis: 100%; }
            .step-number { width: 70px; height: 70px; font-size: 1.8rem; }
        }

        @media (max-width: 480px) {
            .btn { width: 100%; max-width: 280px; }
            .hero-actions { flex-direction: column; align-items: center; }
            .footer-bottom { flex-direction: column; text-align: center; }
            .footer-legal { justify-content: center; }
            .feature-card { padding: var(--space-md); }
            .feature-icon { width: 70px; height: 70px; font-size: 1.8rem; }
            .feature-title { font-size: 1.3rem; }
            .theme-toggle-float { bottom: 20px; right: 20px; width: 50px; height: 50px; font-size: 1.5rem; }
        }

        @media (max-width: 360px) {
            .container { width: 100%; padding: 0 1rem; }
            .hero h1 { font-size: 2.2rem; }
            .feature-card { padding: var(--space-sm); }
        }

        [data-animate] {
            opacity: 0; transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        [data-animate].revealed { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-icon"><img src="<?= ASSETS ?>/img/logo.svg" alt=""></div>
                <span class="logo-text">Empowro</span>
            </div>
            <nav class="desktop-nav">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#how-it-works">How it works</a></li>
                    <li><a href="#impact">Impact</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <a href="<?=ROOT?>/login" class="btn btn-secondary">Log in</a>
                <a href="<?=ROOT?>/register" class="btn btn-primary">Join now</a>
            </div>
            <button class="mobile-nav-toggle" aria-label="menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>

        <nav class="mobile-nav" aria-hidden="true">
            <div class="mobile-nav-close">
                <button class="mobile-close-btn" aria-label="close menu"><i class="fas fa-times"></i></button>
            </div>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#how-it-works">How it works</a></li>
                <li><a href="#impact">Impact</a></li>
                <li><a href="<?=ROOT?>/login" class="btn btn-secondary">Log in</a></li>
                <li><a href="<?=ROOT?>/register" class="btn btn-primary">Join now</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>
    </header>

    <!-- Floating theme toggle (bottom right) -->
    <div class="theme-toggle-float" id="themeToggleFloat" aria-label="Switch dark/light mode">
        <i class="fas fa-sun"></i>
    </div>

    <section class="hero" id="home">
        <div class="container hero-container">
            <div class="hero-content" data-animate>
                <h1>Fostering goodness, deterring evil</h1>
                <p>A community‑driven movement inspiring positive action and empowering change — one deed at a time.</p>
                <div class="hero-actions">
                    <a href="<?=ROOT?>/register" class="btn btn-primary">Join the movement</a>
                    <a href="#about" class="btn btn-secondary">Learn more</a>
                </div>
            </div>
            <div class="hero-visual" data-animate>
                <div class="floating-element"><i class="fas fa-seedling"></i> Good deeds</div>
                <div class="floating-element"><i class="fas fa-chart-line"></i> Impact</div>
                <div class="floating-element"><i class="fas fa-hand-holding-heart"></i> Community</div>
                <div class="ripple-container">
                    <div class="ripple-circle"></div><div class="ripple-circle"></div><div class="ripple-circle"></div><div class="ripple-circle"></div>
                </div>
            </div>
        </div>
        <div class="mobile-floating-elements">
            <div class="mobile-floating-element"><i class="fas fa-seedling"></i><span>Good deeds</span></div>
            <div class="mobile-floating-element"><i class="fas fa-chart-line"></i><span>Impact</span></div>
            <div class="mobile-floating-element"><i class="fas fa-hand-holding-heart"></i><span>Community</span></div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2 class="section-title" data-animate>Our mission</h2>
            <p class="section-subtitle" data-animate>Empowro is where ethics meets action. We track good deeds, connect communities, and inspire collective change.</p>
            <div class="features-grid" id="features">
                <div class="feature-card" data-animate><div class="feature-icon"><i class="fas fa-chart-simple"></i></div><h3 class="feature-title">Good index</h3><p class="feature-desc">Track & reward positive actions with our unique scoring system.</p></div>
                <div class="feature-card" data-animate><div class="feature-icon"><i class="fas fa-store"></i></div><h3 class="feature-title">Ethical marketplace</h3><p class="feature-desc">Discover products & services that align with our values.</p></div>
                <div class="feature-card" data-animate><div class="feature-icon"><i class="fas fa-users"></i></div><h3 class="feature-title">Community hubs</h3><p class="feature-desc">Connect with like‑minded people in themed groups.</p></div>
                <div class="feature-card" data-animate><div class="feature-icon"><i class="fas fa-bullhorn"></i></div><h3 class="feature-title">Pledges & campaigns</h3><p class="feature-desc">Commit to actions & join structured initiatives for change.</p></div>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <h2 class="section-title" data-animate>How it works</h2>
            <p class="section-subtitle" data-animate>Three simple steps to start making a difference</p>
            <div class="steps-container">
                <div class="step" data-animate><div class="step-number">1</div><h3 class="step-title">Join</h3><p class="step-desc">Create your profile & connect with global change‑makers.</p></div>
                <div class="step" data-animate><div class="step-number">2</div><h3 class="step-title">Act</h3><p class="step-desc">Log good deeds, join campaigns, shop ethically, make pledges.</p></div>
                <div class="step" data-animate><div class="step-number">3</div><h3 class="step-title">Inspire</h3><p class="step-desc">Share your journey, recognise others, create a ripple effect.</p></div>
            </div>
        </div>
    </section>

    <section class="impact" id="impact">
        <div class="container">
            <div class="impact-quote" data-animate>“Every pledge creates a ripple of goodness.”</div>
            <div class="impact-stats">
                <div class="stat" data-animate><div class="stat-number" data-count="50">0</div><div class="stat-label">Community members</div></div>
                <div class="stat" data-animate><div class="stat-number" data-count="120">0</div><div class="stat-label">Good deeds logged</div></div>
                <div class="stat" data-animate><div class="stat-number" data-count="2">0</div><div class="stat-label">Raised for causes (K+)</div></div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2 class="cta-title" data-animate>Be the change. Join Empowro today.</h2>
            <p class="cta-desc section-subtitle" data-animate>Join our growing community and start making a measurable difference.</p>
            <div class="cta-actions" data-animate>
                <a href="<?=ROOT?>/register" class="btn btn-primary">Sign up free</a>
                <a href="#features" class="btn btn-secondary">Explore Empowro</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-column"><h3>Empowro</h3><p style="color:rgba(255,255,255,0.7);">Ethics meets action. Join us in fostering goodness.</p><div class="social-links"><a href="#" aria-label="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a><a href="#" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></div></div>
                <div class="footer-column"><h3>Quick links</h3><ul class="footer-links"><li><a href="#about"><i class="fas fa-chevron-right"></i> About</a></li><li><a href="#features"><i class="fas fa-chevron-right"></i> Features</a></li><li><a href="#how-it-works"><i class="fas fa-chevron-right"></i> How it works</a></li><li><a href="#impact"><i class="fas fa-chevron-right"></i> Impact</a></li></ul></div>
                <div class="footer-column"><h3>Resources</h3><ul class="footer-links"><li><a href="#"><i class="fas fa-chevron-right"></i> Blog</a></li><li><a href="#"><i class="fas fa-chevron-right"></i> Help center</a></li><li><a href="#"><i class="fas fa-chevron-right"></i> Guidelines</a></li><li><a href="#"><i class="fas fa-chevron-right"></i> Press kit</a></li></ul></div>
                <div class="footer-column"><h3>Contact</h3><ul class="footer-links"><li><a href="#"><i class="fas fa-envelope"></i> hello@empowro.com</a></li><li><a href="#"><i class="fas fa-phone"></i> +1 (555) 123-4567</a></li><li><a href="#"><i class="fas fa-map-pin"></i> 123 Goodness St, Hope City</a></li></ul></div>
            </div>
            <div class="footer-bottom"><p>© 2025 Empowro. All rights reserved.</p><div class="footer-legal"><a href="#">Privacy</a><a href="#">Terms</a><a href="#">Cookies</a></div></div>
        </div>
    </footer>

    <script>
        (function() {
            // Dark mode toggle using floating button
            const themeToggle = document.getElementById('themeToggleFloat');
            const icon = themeToggle.querySelector('i');
            const body = document.body;

            // Check for saved preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                body.classList.add('dark-mode');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }

            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                if (body.classList.contains('dark-mode')) {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                    localStorage.setItem('theme', 'dark');
                } else {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                    localStorage.setItem('theme', 'light');
                }
            });

            // Mobile menu
            const toggle = document.querySelector('.mobile-nav-toggle');
            const nav = document.querySelector('.mobile-nav');
            const overlay = document.querySelector('.overlay');
            const closeBtn = document.querySelector('.mobile-close-btn');

            function openMenu() {
                nav.classList.add('active');
                overlay.classList.add('active');
                toggle.classList.add('active');
                toggle.setAttribute('aria-expanded', 'true');
                nav.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }
            function closeMenu() {
                nav.classList.remove('active');
                overlay.classList.remove('active');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
                nav.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            toggle.addEventListener('click', (e) => {
                e.stopPropagation();
                nav.classList.contains('active') ? closeMenu() : openMenu();
            });
            overlay.addEventListener('click', closeMenu);
            if (closeBtn) closeBtn.addEventListener('click', closeMenu);
            document.querySelectorAll('.mobile-nav a').forEach(link => link.addEventListener('click', closeMenu));
            window.addEventListener('keydown', (e) => e.key === 'Escape' && closeMenu());
            window.addEventListener('resize', () => window.innerWidth > 768 && closeMenu());

            // Scroll animations
            const animatedElements = document.querySelectorAll('[data-animate]');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('revealed');
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -20px 0px' });
            animatedElements.forEach(el => observer.observe(el));

            // Counting stats
            const stats = document.querySelectorAll('.stat-number');
            const impactSection = document.querySelector('.impact');
            let counted = false;
            const countObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !counted) {
                        counted = true;
                        stats.forEach(stat => {
                            const target = parseInt(stat.getAttribute('data-count'), 10);
                            let current = 0;
                            const step = target / 60;
                            const timer = setInterval(() => {
                                current += step;
                                if (current >= target) {
                                    stat.textContent = target + (target === 2 ? 'K+' : 'K+');
                                    clearInterval(timer);
                                } else {
                                    stat.textContent = Math.floor(current) + 'K+';
                                }
                            }, 16);
                        });
                    }
                });
            }, { threshold: 0.3 });
            if (impactSection) countObserver.observe(impactSection);
        })();
    </script>
</body>
</html>