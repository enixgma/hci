<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>StudentMS</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 100px;
            background-color: #111;
        }

        .logo {
            font-size: 1.5rem;
            color: #fff;
            font-weight: bold;
        }

        .nav-links a {
            margin: 0 15px;
            text-decoration: none;
            color: #b5b5b5;
            font-size: 1rem;
        }

        .nav-links a.active,
        .nav-links a:focus,
        .nav-links a:active {
            color: #4caf50;
            font-weight: bold;
        }

        /* Auth Buttons */
        .auth-buttons a {
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .login-btn {
            background-color: #333;
            color: #fff;
            margin-right: 10px;
        }

        .signup-btn {
            background-color: #fff;
            color: #000;
            border-radius: 20px;
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 100px;
            gap: 40px;
            background-color: #000;
        }

        .content-area {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-size: 3rem;
            margin: 0;
            line-height: 1.2;
        }

        .highlight {
            color: #4caf50;
        }

        p {
            margin-top: 10px;
            color: #b5b5b5;
            font-size: 1rem;
        }

        /* Buttons */
        .btn-group {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }

        .get-started, .learn-more {
            padding: 12px 24px;
            font-size: 1rem;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            cursor: pointer;
        }

        .get-started {
            background-color: #4caf50;
            color: #fff;
        }

        .learn-more {
            background-color: #333;
            color: #fff;
        }

        /* Image Section */
        .image-area {
            width: 50%;
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
            margin-top: -60px;
        }

        .img-fluid {
            width: 100%;
            max-width: 350px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        .footer {
            background-color: #111;
            padding: 15px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #b5b5b5;
            font-size: 0.9rem;
        }

        .footer-text {
            font-size: 0.9rem;
        }

        .social-icons {
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            color: #b5b5b5;
            font-size: 1.2rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #4caf50;
        }

    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i> StudentMS
        </div>
        <div class="nav-links">
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="auth-buttons">
            <a href="signup.php" class="signup-btn">Sign Up</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="content-area">
            <h1><span class="highlight">Student</span> Management System</h1>
            <p>
                Monitor student progress, manage courses, and enhance productivity
                with our comprehensive and user-friendly platform.
            </p>
            <div class="btn-group">
                <a href="signup.php" class="get-started">Get Started</a>
                <a href="about.php" class="learn-more">Learn More</a>
            </div>
        </div>

        <!-- Image Section -->
        <div class="image-area">
            <img src="img/sms.jpg" alt="Students" class="img-fluid">
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-text">© 2025 StudentMS. All rights reserved.</div>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </footer>

</body>
</html>
