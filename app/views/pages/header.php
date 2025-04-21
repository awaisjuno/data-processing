<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorify - Data Processing Platform for AI/ML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Gothic&display=swap" rel="stylesheet">
    <style>
        /* ===== Base Styles ===== */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #3f37c9;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --success: #4bb543;
            --danger: #f44336;
            --warning: #ff9800;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: #f8f9fa;
            font-family: "Special Gothic", sans-serif;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        /* ===== Typography ===== */
        h1, h2, h3, h4 {
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        
        h1 { font-size: 2.5rem; }
        h2 { font-size: 2rem; }
        h3 { font-size: 1.5rem; }
        h4 { font-size: 1.25rem; }
        
        p {
            margin-bottom: 1rem;
            color: var(--gray);
        }
        
        /* ===== Buttons ===== */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 500;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.2);
        }
        
        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-lg {
            padding: 15px 30px;
            font-size: 1.1rem;
        }
        
        /* ===== Header ===== */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 15px 0;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .nav-links {
            display: flex;
            gap: 25px;
        }
        
        .nav-links a {
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .auth-buttons {
            display: flex;
            gap: 10px;
        }
        
        /* ===== Hero Section ===== */
        .hero {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fb 0%, #e8ecf8 100%);
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        
        .hero-cta {
            display: flex;
            gap: 15px;
            margin-bottom: 3rem;
        }
        
        .hero-stats {
            display: flex;
            gap: 30px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            display: block;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .hero-image {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .hero-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        
        /* ===== Features Section ===== */
        .section {
            padding: 80px 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: rgba(67, 97, 238, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            color: var(--primary);
            font-size: 1.75rem;
        }
        
        /* ===== How It Works ===== */
        .steps {
            display: flex;
            flex-direction: column;
            gap: 50px;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .step {
            display: flex;
            gap: 40px;
            align-items: center;
        }
        
        .step:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .step-number {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            font-weight: 700;
            flex-shrink: 0;
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .step-image img {
            width: 100%;
            height: auto;
        }
        
        /* ===== Testimonials ===== */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 25px;
            position: relative;
            padding-left: 20px;
        }
        
        .testimonial-content::before {
            content: '"';
            font-size: 4rem;
            color: rgba(67, 97, 238, 0.1);
            position: absolute;
            top: -20px;
            left: -10px;
            z-index: 0;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
        }
        
        .author-info p {
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        /* ===== CTA Section ===== */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .cta-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            color: rgba(255,255,255,0.9);
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        /* ===== Footer ===== */
        footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .footer-col h4 {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: #adb5bd;
        }
        
        .footer-col ul {
            list-style: none;
        }
        
        .footer-col ul li {
            margin-bottom: 12px;
        }
        
        .footer-col ul li a {
            color: #adb5bd;
            transition: all 0.3s ease;
        }
        
        .footer-col ul li a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary);
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #adb5bd;
            font-size: 0.9rem;
        }
        
        .footer-links {
            display: flex;
            gap: 20px;
        }
        
        /* ===== Responsive Design ===== */
        @media (max-width: 992px) {
            .hero {
                text-align: center;
            }
            
            .hero-content {
                margin: 0 auto 50px;
            }
            
            .hero-cta {
                justify-content: center;
            }
            
            .hero-stats {
                justify-content: center;
            }
            
            .step, .step:nth-child(even) {
                flex-direction: column;
                text-align: center;
            }
            
            .step-image {
                order: -1;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-links {
                margin: 15px 0;
            }
            
            .auth-buttons {
                margin-top: 10px;
            }
            
            h1 { font-size: 2.25rem; }
            h2 { font-size: 1.75rem; }
            
            .hero-cta, .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 20px;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Algorify</a>
                <div class="nav-links">
                    <a href="#features">Features</a>
                    <a href="#how-it-works">How It Works</a>
                    <a href="#use-cases">Use Cases</a>
                    <a href="#pricing">Pricing</a>
                </div>
                <div class="auth-buttons">
                    <a href="signin.html" class="btn btn-outline">Sign In</a>
                    <a href="signup.html" class="btn btn-primary">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>