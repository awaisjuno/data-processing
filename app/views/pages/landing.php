<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Algorify - Data Processing Platform</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Base Styles */
    :root {
      --primary: #4361ee;
      --primary-dark: #3a56d4;
      --secondary: #3f37c9;
      --light: #f8f9fa;
      --dark: #212529;
      --gray: #6c757d;
      --success: #4bb543;
      --danger: #f44336;
      --warning: #ff9800;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      line-height: 1.6;
      color: var(--dark);
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
    }
    
    /* Button Styles */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 5px;
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
    
    /* Header */
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
      font-size: 24px;
      font-weight: 700;
      color: var(--primary);
      text-decoration: none;
    }
    
    .nav-links {
      display: flex;
      gap: 20px;
    }
    
    .nav-links a {
      color: var(--dark);
      text-decoration: none;
      font-weight: 500;
    }
    
    .nav-links a:hover {
      color: var(--primary);
    }
    
    .auth-buttons {
      display: flex;
      gap: 10px;
    }
    
    /* Hero Section */
    .hero {
      padding: 80px 0;
      background: linear-gradient(135deg, #f5f7fb 0%, #e8ecf8 100%);
    }
    
    .hero-content {
      max-width: 600px;
      margin-bottom: 40px;
    }
    
    .hero h1 {
      font-size: 42px;
      line-height: 1.2;
      margin-bottom: 20px;
    }
    
    .hero p {
      font-size: 18px;
      color: var(--gray);
      margin-bottom: 30px;
    }
    
    .hero-cta {
      display: flex;
      gap: 15px;
    }
    
    /* Features Section */
    .section {
      padding: 80px 0;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 50px;
    }
    
    .section-title h2 {
      font-size: 36px;
      margin-bottom: 15px;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .feature-card {
      background: white;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .feature-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: rgba(67, 97, 238, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      color: var(--primary);
      font-size: 24px;
    }
    
    /* Testimonials */
    .testimonial-card {
      background: white;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .testimonial-content {
      font-style: italic;
      margin-bottom: 20px;
    }
    
    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    
    .testimonial-author img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }
    
    /* CTA Section */
    .cta {
      background: var(--primary);
      color: white;
      padding: 80px 0;
      text-align: center;
    }
    
    .cta h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    
    .cta p {
      font-size: 18px;
      margin-bottom: 30px;
      opacity: 0.9;
    }
    
    /* Footer */
    footer {
      background: var(--dark);
      color: white;
      padding: 60px 0 20px;
    }
    
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      margin-bottom: 40px;
    }
    
    .footer-col h3 {
      margin-bottom: 20px;
    }
    
    .footer-col ul {
      list-style: none;
    }
    
    .footer-col ul li {
      margin-bottom: 10px;
    }
    
    .footer-col ul li a {
      color: #adb5bd;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .footer-col ul li a:hover {
      color: white;
    }
    
    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.1);
      color: #adb5bd;
      font-size: 14px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 15px;
      }
      
      .nav-links {
        margin: 15px 0;
      }
      
      .hero-cta {
        flex-direction: column;
      }
      
      .hero h1 {
        font-size: 32px;
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Process, Analyze & Share Datasets for AI/ML</h1>
        <p>Algorify simplifies data preparation with powerful processing tools and collaborative features for machine learning projects.</p>
        <div class="hero-cta">
          <a href="signup.html" class="btn btn-primary">Start for Free</a>
          <a href="#demo" class="btn btn-outline">Watch Demo</a>
        </div>
      </div>
      <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Data visualization">
    </div>
  </section>

  <!-- Features Section -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-title">
        <h2>Powerful Features</h2>
        <p>Everything you need to prepare datasets for machine learning</p>
      </div>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-file-upload"></i>
          </div>
          <h3>Multi-Format Upload</h3>
          <p>Upload CSV, Excel, JSON, and other common data formats with automatic type detection.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-project-diagram"></i>
          </div>
          <h3>Smart Processing</h3>
          <p>Automated data cleaning, normalization, and transformation pipelines.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-share-alt"></i>
          </div>
          <h3>Collaboration</h3>
          <p>Share datasets with team members or the community with controlled permissions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section" style="background: #f9fafc;">
    <div class="container">
      <div class="section-title">
        <h2>What Our Users Say</h2>
      </div>
      
      <div class="features-grid">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"Algorify cut our data preparation time in half. The ability to share datasets with my research team has been invaluable."</p>
          </div>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
            <div>
              <h4>Sarah Johnson</h4>
              <p>Data Scientist</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"As a professor, I recommend Algorify to my students. The intuitive interface makes data processing accessible."</p>
          </div>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
            <div>
              <h4>Dr. Michael Chen</h4>
              <p>Professor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <div class="container">
      <h2>Ready to streamline your data workflow?</h2>
      <p>Join thousands of data professionals using Algorify</p>
      <div class="hero-cta">
        <a href="signup.html" class="btn btn-primary">Get Started</a>
        <a href="#demo" class="btn btn-outline" style="color: white; border-color: white;">Schedule a Demo</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h3>Algorify</h3>
          <p>The data processing platform for AI/ML teams and researchers.</p>
        </div>
        
        <div class="footer-col">
          <h4>Product</h4>
          <ul>
            <li><a href="#features">Features</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#">Updates</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Tutorials</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2023 Algorify. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>