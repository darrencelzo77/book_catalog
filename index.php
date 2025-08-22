<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scriptify.US</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --primary-dark: #0b5ed7;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            padding: 8px 15px !important;
            color: #333 !important;
        }

        .nav-link:hover {
            color: var(--primary) !important;
        }

        .navbar-nav {
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        .get-started-btn {
            position: absolute;
            right: 15px;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            padding: 120px 0;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                url('images/banner.jpg');
            background-size: cover;
            background-position: center;
        }

        .hero-container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 50px;
        }

        .hero-text {
            flex: 1;
            max-width: 550px;
        }

        h1 {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 25px;
            color: #212529;
            line-height: 1.3;
        }

        .hero-description {
            font-size: 1.2rem;
            font-weight: 400;
            margin-bottom: 35px;
            color: #495057;
        }

        .hero-image-container {
            flex: 1;
            max-width: 500px;
            position: relative;
        }

        .book-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            animation: float 6s ease-in-out infinite;
        }

        .stats-box {
            position: absolute;
            bottom: -30px;
            right: 30px;
            background: white;
            padding: 20px 25px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 250px;
            text-align: center;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .stats-number {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.8rem;
            line-height: 1;
        }

        .stats-text {
            font-size: 1rem;
            font-weight: 400;
            color: #6c757d;
            margin-top: 5px;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary);
            border: none;
            padding: 12px 30px;
            font-weight: 500;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 10px 28px;
            font-weight: 500;
            border-radius: 30px;
            transition: all 0.3s ease;
            margin-left: 15px;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }

        /* Animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-delay-1 {
            animation-delay: 0.2s;
        }

        .animate-delay-2 {
            animation-delay: 0.4s;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
            }

            .hero-text {
                max-width: 100%;
            }

            .hero-buttons {
                justify-content: center;
            }

            .stats-box {
                position: relative;
                right: auto;
                bottom: auto;
                margin: 30px auto 0;
            }
        }


        /* Retailers Section Styles */
        .retailers-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 60px;
            color: #212529;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary);
            margin: 20px auto 0;
            border-radius: 2px;
        }

        .retailers-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .retailer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
            transition: all 0.3s ease;
        }

        .retailer-logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 15px;
            filter: grayscale(100%) opacity(0.7);
            transition: all 0.3s ease;
        }

        .retailer-name {
            font-weight: 500;
            color: #495057;
            transition: all 0.3s ease;
        }

        .retailer-item:hover {
            transform: translateY(-5px);
        }

        .retailer-item:hover .retailer-logo {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.1);
        }

        .retailer-item:hover .retailer-name {
            color: var(--primary);
            font-weight: 600;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .retailers-container {
                gap: 30px;
            }

            .retailer-item {
                width: 100px;
            }

            .retailer-logo {
                width: 60px;
                height: 60px;
            }
        }


        /* Featured Publications Section */
        .featured-section {
            background-color: white;
            padding: 80px 0;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.2rem;
            color: #212529;
            margin-bottom: 15px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        .book-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #eee;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .book-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .book-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .book-card:hover .book-image {
            transform: scale(1.03);
        }

        .book-badge {
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
            border-radius: 0 0 5px 5px;
            position: absolute;
            top: 0;
            left: 20px;
            z-index: 2;
        }

        .book-content {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .book-title {
            font-weight: 600;
            font-size: 1.2rem;
            margin-top: 0;
            color: #212529;
        }

        .book-author {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .book-description {
            font-size: 0.9rem;
            color: #495057;
            margin-bottom: 15px;
            flex: 1;
        }

        .book-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .book-rating {
            display: flex;
            align-items: center;
        }

        .stars {
            color: #ffc107;
            margin-right: 5px;
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        .book-link {
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .book-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .book-image-container {
                height: 220px;
            }
        }

        @media (max-width: 768px) {
            .book-image-container {
                height: 300px;
            }
        }


        /* Services Section */
        .services-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.2rem;
            color: #212529;
            margin-bottom: 15px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        .service-card {
            background: #fff;
            border-radius: 10px;
            padding: 30px 20px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            color: var(--primary);
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-title {
            font-weight: 600;
            font-size: 1.2rem;
            color: #212529;
            margin-bottom: 15px;
        }

        .service-description {
            font-size: 0.9rem;
            color: #495057;
            margin-bottom: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .service-card {
                padding: 25px 15px;
            }
        }

        @media (max-width: 768px) {
            .service-card {
                max-width: 350px;
                margin: 0 auto;
            }
        }

        /* Process Section */
        .process-section {
            background-color: white;
            padding: 80px 0;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.2rem;
            color: #212529;
            margin-bottom: 15px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        .process-steps-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .process-step {
            background: #fff;
            border-radius: 10px;
            padding: 30px 20px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .step-icon-container {
            position: relative;
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
        }

        .step-icon {
            font-size: 2.5rem;
            color: var(--primary);
            position: relative;
            z-index: 2;
            line-height: 80px;
        }

        .step-number {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: var(--primary);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
            z-index: 3;
        }

        .step-title {
            font-weight: 600;
            font-size: 1.3rem;
            color: #212529;
            margin-bottom: 15px;
        }

        .step-description {
            font-size: 0.95rem;
            color: #495057;
            margin-bottom: 0;
        }

        .process-cta {
            max-width: 600px;
            margin: 40px auto 0;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .cta-title {
            font-weight: 600;
            font-size: 1.5rem;
            color: #212529;
            margin-bottom: 10px;
        }

        .cta-subtitle {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 0;
        }

        @media (max-width: 992px) {
            .process-step {
                padding: 25px 15px;
            }
        }

        @media (max-width: 768px) {
            .process-step {
                max-width: 350px;
                margin: 0 auto;
            }
        }

        /* Testimonials Section */
        .testimonials-section {
            background-color: #f8f9fa;
            padding: 100px 0;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.2rem;
            color: #212529;
            margin-bottom: 15px;
        }

        .rating-summary {
            margin-bottom: 50px;
        }

        .rating-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        .rating-stars {
            color: #ffc107;
            font-size: 1.5rem;
            letter-spacing: 3px;
            margin: 5px 0;
        }

        .rating-count {
            font-size: 1rem;
            color: #6c757d;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 80px 50px 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            margin: 0 15px;
        }

        .author-img-container {
            width: 120px;
            height: 120px;
            margin: -60px auto 20px;
            position: relative;
        }

        .author-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-content {
            padding-top: 20px;
        }

        .testimonial-text {
            font-size: 1.1rem;
            color: #495057;
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            padding: 0 20px;
        }

        .testimonial-text:before,
        .testimonial-text:after {
            content: '"';
            font-size: 2rem;
            color: rgba(13, 110, 253, 0.2);
            position: absolute;
            font-family: serif;
        }

        .testimonial-text:before {
            left: 0;
            top: -10px;
        }

        .testimonial-text:after {
            right: 0;
            bottom: -20px;
        }

        .author-info {
            margin-top: 20px;
        }

        .author-name {
            font-weight: 600;
            font-size: 1.2rem;
            color: #212529;
            margin-bottom: 5px;
        }

        .author-title {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 0;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            opacity: 1;
        }

        .carousel-control-prev {
            left: -25px;
        }

        .carousel-control-next {
            right: -25px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: brightness(0) saturate(100%) invert(35%) sepia(98%) saturate(1866%) hue-rotate(204deg) brightness(98%) contrast(101%);
            width: 1.5rem;
            height: 1.5rem;
        }

        @media (max-width: 768px) {
            .testimonial-card {
                margin: 0;
                padding: 30px 20px 40px;
            }

            .author-img-container {
                width: 100px;
                height: 100px;
                margin: -50px auto 15px;
            }

            .testimonial-text {
                font-size: 1rem;
                padding: 0 10px;
            }

            .carousel-control-prev {
                left: 10px;
            }

            .carousel-control-next {
                right: 10px;
            }
        }

        /* FEATURED AUTHORS */
        body {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-blue: #0d6efd;
            --secondary-blue: #0b5ed7;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        .btn-primary:hover {
            background-color: var(--secondary-blue);
            border-color: var(--secondary-blue);
        }

        .btn-outline-primary {
            color: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-blue);
            color: white;
        }

        .badge.bg-primary {
            background-color: var(--primary-blue) !important;
        }

        /* Author image container styling */
        .author-image-container {
            height: 250px;
            /* Fixed height */
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .author-image-container {
                height: 200px;
            }
        }

        /* Card hover effect */
        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Ready to Publish Section Styling */
        .ready-to-publish {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Footer Styling */
        footer a:hover {
            color: var(--bs-primary) !important;
            transition: color 0.3s ease;
        }

        /* Ensure Poppins font is used */
        body {
            font-family: 'Poppins', sans-serif;
        }


        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");

        .modal-content {
            font-family: 'Poppins', sans-serif;
            border-radius: 10px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: 1px solid #eee;
        }

        .modal-title {
            font-weight: 600;
        }

        .book-link {
            background: none;
            border: none;
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
            padding: 0;
        }

        .book-link:hover {
            text-decoration: underline;
        }

        .badge {
            font-size: 0.8rem;
            font-weight: 500;
            padding: 5px 10px;
        }
    </style>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container position-relative">
            <a class="navbar-brand" href="#">SCRIPTIFY.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/book-catalog">Book Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/plans.html">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/authors">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/submissions">Submission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/contacts">Contact</a>
                    </li>
                </ul>
                <div class="get-started-btn">
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-container">
                <div class="hero-text animate__animated animate__fadeInLeft">
                    <h1>Content that is worth publishing.</h1>
                    <p class="hero-description">
                        Helping authors like you showcase your awesome book to the world with professional publishing, marketing, and distribution services.
                    </p>
                    <div class="hero-buttons d-flex">
                        <a href="pages/book-catalog" class="btn btn-outline-primary animate__animated animate__fadeInUp animate-delay-2">View Our Books</a>
                    </div>
                </div>
                <div class="hero-image-container animate__animated animate__fadeInRight">
                    <img src="images/banner2.jpeg" alt="Published Books" class="book-image">
                    <div class="stats-box">
                        <div class="stats-number">500+ Books Published</div>
                        <div class="stats-text">This year alone</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Retailers Section -->
    <section class="retailers-section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn">Trusted by Leading Retailers</h2>
            <div class="retailers-container">
                <!-- Amazon -->
                <div class="retailer-item animate__animated animate__fadeIn animate__delay-1s">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" class="retailer-logo">
                    <span class="retailer-name">Amazon</span>
                </div>

                <!-- Barnes & Noble -->
                <div class="retailer-item animate__animated animate__fadeIn animate__delay-1s">
                    <img src="images/logo1.jpg" alt="Barnes & Noble" class="retailer-logo">
                    <span class="retailer-name">Barnes & Noble</span>
                </div>

                <!-- Apple Books -->
                <div class="retailer-item animate__animated animate__fadeIn animate__delay-2s">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple Books" class="retailer-logo">
                    <span class="retailer-name">Apple Books</span>
                </div>

                <!-- Google Books -->
                <div class="retailer-item animate__animated animate__fadeIn animate__delay-2s">
                    <img src="images/banner3.png" alt="Google Books" class="retailer-logo">
                    <span class="retailer-name">Google Books</span>
                </div>

                <!-- Kobo -->
                <div class="retailer-item animate__animated animate__fadeIn animate__delay-3s">
                    <img src="images/banner4.png" alt="Kobo" class="retailer-logo">
                    <span class="retailer-name">Kobo</span>
                </div>

                <!-- Book Depository -->
                <div class="retailer-item animate__animated animate__fadeIn animate__delay-3s">
                    <img src="images/banner5.png" alt="Book Depository" class="retailer-logo">
                    <span class="retailer-name">Book Depository</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Publications Section -->
    <section class="featured-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate__animated animate__fadeIn">Featured Publications</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Discover our latest bestsellers and award-winning titles from talented authors around the world.
                </p>
            </div>

            <div class="row g-4">
                <?php
                if (file_exists('admin/includes/systemconfig.php')) include_once('admin/includes/systemconfig.php');

                $sql = "SELECT b.id, b.title, b.description, b.picture_url, b.rating, 
                           a.author_name, g.name AS genre_name
                    FROM tblbooks b
                    LEFT JOIN tblauthors a ON b.authorid = a.authorid
                    LEFT JOIN tblgenres g ON b.genreid = g.genreid
                    ORDER BY b.created_at DESC
                    LIMIT 4";

                $rs = mysqli_query($db_connection, $sql);

                while ($rw = mysqli_fetch_assoc($rs)):
                ?>
                    <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
                        <div class="book-card">
                            <div class="book-image-container">
                                <div class="book-badge"><?= htmlspecialchars($rw['genre_name'] ?? 'General') ?></div>
                                <img src="admin/pages/picture_book/<?= htmlspecialchars($rw['picture_url']) ?>"
                                    alt="<?= htmlspecialchars($rw['title']) ?>"
                                    class="book-image">
                            </div>
                            <div class="book-content">
                                <h3 class="book-title"><?= htmlspecialchars($rw['title']) ?></h3>
                                <p class="book-author">by <?= htmlspecialchars($rw['author_name']) ?></p>
                                <p class="book-description">
                                    <?= htmlspecialchars(substr($rw['description'], 0, 100)) ?>...
                                </p>
                                <div class="book-footer">
                                    <div class="book-rating">
                                        <span class="stars">
                                            <?php
                                            $stars = floor($rw['rating']);
                                            echo str_repeat("⭐", $stars);
                                            ?>
                                        </span>
                                        <span><?= htmlspecialchars($rw['rating']) ?></span>
                                    </div>
                                    <a href="pages/book-catalog" class="book-link">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="text-center mt-5 animate__animated animate__fadeIn animate__delay-4s">
                <a href="pages/book-catalog" class="btn btn-outline-primary">View Full Catalog</a>
            </div>
        </div>
    </section>


    <!-- Book Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="bookModal1" tabindex="-1" aria-labelledby="bookModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/pub1.jpg" alt="The Digital Revolution" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-primary">Technology</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8</span>
                                </div>
                                <p class="mt-2"><small>by Alexandra Thompson</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Digital Revolution</h4>
                            <p>A comprehensive guide to understanding the digital transformation reshaping our world. This book delves into the technologies driving change, from artificial intelligence to blockchain, and examines their impact on business, society, and individual lives.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> January 2023</li>
                                <li><strong>Pages:</strong> 320</li>
                                <li><strong>ISBN:</strong> 978-1234567890</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="bookModal2" tabindex="-1" aria-labelledby="bookModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/pub2.jpg" alt="Garden Secrets" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-success">Fiction</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <p class="mt-2"><small>by Marcus Rivera</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Garden Secrets</h4>
                            <p>A captivating tale of love, loss, and redemption set in mysterious English gardens. Follow protagonist Eleanor as she uncovers family secrets hidden for generations in the overgrown hedges and forgotten greenhouses of Hartfield Manor.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> March 2023</li>
                                <li><strong>Pages:</strong> 412</li>
                                <li><strong>ISBN:</strong> 978-0987654321</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="bookModal3" tabindex="-1" aria-labelledby="bookModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/pub3.jpg" alt="Startup Success" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-info">Business</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <p class="mt-2"><small>by Jennifer Wu</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Startup Success</h4>
                            <p>Essential strategies and insights for building successful startups in today's economy. Drawing from interviews with 100 founders, this book provides practical advice on fundraising, team building, product development, and scaling operations.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> November 2022</li>
                                <li><strong>Pages:</strong> 278</li>
                                <li><strong>ISBN:</strong> 978-1122334455</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="bookModal4" tabindex="-1" aria-labelledby="bookModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="images/pub4.jpg" alt="Quantum Leaps" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark">Science</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <p class="mt-2"><small>by David Chen</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Quantum Leaps</h4>
                            <p>Exploring the fascinating world of quantum physics and its practical applications. This accessible guide explains complex concepts through real-world examples and shows how quantum technologies are revolutionizing computing, medicine, and cryptography.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> September 2023</li>
                                <li><strong>Pages:</strong> 356</li>
                                <li><strong>ISBN:</strong> 978-5566778899</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Publishing Services Section -->
    <section class="services-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate__animated animate__fadeIn">Our Publishing Services</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    We provide end-to-end publishing solutions to help authors bring their stories to life and reach readers worldwide.
                </p>
            </div>

            <div class="row g-4">
                <!-- Book Publishing -->
                <div class="col-md-4 col-lg-2 animate__animated animate__fadeInUp">
                    <div class="service-card text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-book-open fa-3x"></i>
                        </div>
                        <h3 class="service-title">Book Publishing</h3>
                        <p class="service-description">
                            Complete publishing services from manuscript to market-ready book with professional formatting and distribution.
                        </p>
                    </div>
                </div>

                <!-- Editorial Services -->
                <div class="col-md-4 col-lg-2 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="service-card text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-edit fa-3x"></i>
                        </div>
                        <h3 class="service-title">Editorial Services</h3>
                        <p class="service-description">
                            Professional editing, proofreading, and developmental editing to ensure your book meets industry standards.
                        </p>
                    </div>
                </div>

                <!-- Cover Design -->
                <div class="col-md-4 col-lg-2 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="service-card text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-palette fa-3x"></i>
                        </div>
                        <h3 class="service-title">Cover Design</h3>
                        <p class="service-description">
                            Eye-catching book covers that capture your story's essence and attract readers in any format.
                        </p>
                    </div>
                </div>

                <!-- Marketing & Promotion -->
                <div class="col-md-4 col-lg-2 animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="service-card text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-bullhorn fa-3x"></i>
                        </div>
                        <h3 class="service-title">Marketing & Promotion</h3>
                        <p class="service-description">
                            Comprehensive marketing strategies including social media campaigns, book reviews, and promotional materials.
                        </p>
                    </div>
                </div>

                <!-- Distribution -->
                <div class="col-md-4 col-lg-2 animate__animated animate__fadeInUp animate__delay-4s">
                    <div class="service-card text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-globe fa-3x"></i>
                        </div>
                        <h3 class="service-title">Distribution</h3>
                        <p class="service-description">
                            Worldwide distribution through major retailers including Amazon, Barnes & Noble, and international platforms.
                        </p>
                    </div>
                </div>

                <!-- Book Trailers -->
                <div class="col-md-4 col-lg-2 animate__animated animate__fadeInUp animate__delay-5s">
                    <div class="service-card text-center">
                        <div class="service-icon mb-3">
                            <i class="fas fa-video fa-3x"></i>
                        </div>
                        <h3 class="service-title">Book Trailers</h3>
                        <p class="service-description">
                            Professional video trailers and promotional content to showcase your book across digital platforms.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 animate__animated animate__fadeIn animate__delay-6s">
                <a href="#" class="btn btn-outline-primary">View All Services</a>
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Process Section -->
    <section class="process-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate__animated animate__fadeIn">Our Straightforward Process</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    From manuscript to bestseller, we make publishing simple with our proven four-step approach.
                </p>
            </div>

            <div class="process-steps-container">
                <div class="row justify-content-center g-4">
                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
                        <div class="process-step text-center">
                            <div class="step-icon-container">
                                <i class="fas fa-pen-fancy step-icon"></i>
                                <div class="step-number">1</div>
                            </div>
                            <h3 class="step-title">You Write</h3>
                            <p class="step-description">
                                Focus on crafting your masterpiece. We handle everything else once your manuscript is ready.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="process-step text-center">
                            <div class="step-icon-container">
                                <i class="fas fa-edit step-icon"></i>
                                <div class="step-number">2</div>
                            </div>
                            <h3 class="step-title">We Edit & Design</h3>
                            <p class="step-description">
                                Our expert editors polish your work while designers create stunning covers.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="process-step text-center">
                            <div class="step-icon-container">
                                <i class="fas fa-book step-icon"></i>
                                <div class="step-number">3</div>
                            </div>
                            <h3 class="step-title">We Publish</h3>
                            <p class="step-description">
                                Your book goes live across all major platforms with global distribution.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="process-step text-center">
                            <div class="step-icon-container">
                                <i class="fas fa-bullhorn step-icon"></i>
                                <div class="step-number">4</div>
                            </div>
                            <h3 class="step-title">We Market</h3>
                            <p class="step-description">
                                Strategic campaigns help your book reach the right readers worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="process-cta text-center mt-5 animate__animated animate__fadeIn animate__delay-4s">
                <h3 class="cta-title">Ready to Start Your Publishing Journey?</h3>
                <p class="cta-subtitle">
                    Join hundreds of successful authors who trust us with their stories.
                </p>
                <a href="#" class="btn btn-primary mt-3">Get Your Free Quote</a>
            </div>
        </div>
    </section>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Testimonials / Author Highlights Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate__animated animate__fadeIn">What Our Authors Say</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Discover the talented authors contributing to our collection of award-winning books.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <?php
                if (file_exists('admin/includes/systemconfig.php')) include_once('admin/includes/systemconfig.php');

                // Fetch authors and count of books
                $sql = "SELECT a.authorid, a.author_name, a.details, a.picture_url, COUNT(b.id) AS book_count
                    FROM tblauthors a
                    LEFT JOIN tblbooks b ON a.authorid = b.authorid
                    GROUP BY a.authorid
                    ORDER BY a.author_name ASC
                    LIMIT 3"; // show 5 authors
                $rs = mysqli_query($db_connection, $sql);

                while ($rw = mysqli_fetch_assoc($rs)):
                ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm text-center">
                            <div class="card-img-top overflow-hidden" style="height: 250px;">
                                <img src="admin/pages/picture_author/<?= htmlspecialchars($rw['picture_url']) ?>"
                                    alt="<?= htmlspecialchars($rw['author_name']) ?>"
                                    class="img-fluid w-100 h-100 object-fit-cover">
                            </div>
                            <div class="card-body">
                                <h3 class="h5"><?= htmlspecialchars($rw['author_name']) ?></h3>
                                <p class="card-text"><?= htmlspecialchars(substr($rw['details'], 0, 120)) ?>...</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="text-muted"><?= $rw['book_count'] ?> books</span>
                                    <a href="pages/authors" class="btn btn-sm btn-outline-primary">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>




    <!-- New Section: Meet Our Featured Authors with Images -->
    <div class="container my-5">
        <h2 class="text-center mb-4"><b>Meet Our Featured Authors</b></h2>
        <p class="text-center mb-5">Discover the talented writers whose stories have captivated readers worldwide through our publishing platform.</p>

        <div class="row">
            <?php
            if (file_exists('admin/includes/systemconfig.php')) include_once('admin/includes/systemconfig.php');

            // Fetch featured authors with book count
            $sql = "SELECT a.authorid, a.author_name, a.details, a.picture_url, 
                       COUNT(b.id) AS book_count
                FROM tblauthors a
                LEFT JOIN tblbooks b ON a.authorid = b.authorid
                GROUP BY a.authorid
                ORDER BY book_count DESC
                LIMIT 6"; // get top 6 authors
            $rs = mysqli_query($db_connection, $sql);

            while ($rw = mysqli_fetch_assoc($rs)):
            ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="author-image-container" style="background-image: url('admin/pages/picture_author/<?= htmlspecialchars($rw['picture_url']) ?>'); height: 250px; background-size: cover; background-position: center;"></div>
                        <div class="card-body">
                            <h3 class="card-title"><?= htmlspecialchars($rw['author_name']) ?></h3>
                            <p class="card-text"><?= htmlspecialchars(substr($rw['details'], 0, 120)) ?>...</p>
                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-2"><?= $rw['book_count'] ?> Books</span>
                                <!-- Optional: replace with dynamic awards if available -->
                                <span class="badge bg-primary text-white">Featured Author</span>
                            </div>
                            <a href="pages/authors" class="btn btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="text-center mt-4">
            <a href="pages/authors" class="btn btn-primary">View All Authors</a>
        </div>
    </div>

    <!-- Ready to Publish Section -->
    <section class="ready-to-publish py-5 position-relative" style="background-image: url('images/banner1.jpeg');">

        <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-primary" style="opacity: 0.8;"></div>

        <div class="container position-relative text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Ready to Publish Your Story?</h2>
                    <p class="lead mb-5">Join thousands of successful authors who have brought their stories to life with our comprehensive publishing services. Your literary journey starts here.</p>

                    <div class="d-flex flex-wrap justify-content-center gap-4 mb-5">
                        <div class="text-center px-3">
                            <h3 class="fw-bold">500+</h3>
                            <p>Books Published</p>
                        </div>
                        <div class="text-center px-3">
                            <h3 class="fw-bold">95%</h3>
                            <p>Author Satisfaction</p>
                        </div>
                        <div class="text-center px-3">
                            <h3 class="fw-bold">50+</h3>
                            <p>Countries Reached</p>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="#" class="btn btn-light btn-lg px-4">Start Publishing Today</a>
                        <a href="#" class="btn btn-outline-light btn-lg px-4">Submission Guidelines</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-4 mb-4">
                    <h4 class="text-uppercase mb-4">SCRIPTIFY.</h4>
                    <p class="mb-4">Helping authors showcase their awesome books to the world with professional publishing services.</p>
                    <address>
                        <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i> 1915 5th Avenue</p>
                        <p class="mb-1"> New York, NY 10001</p>
                        <p><i class="bi bi-envelope-fill me-2"></i> info@scriptify.com</p>
                    </address>
                </div>

                <!-- Services Column -->
                <div class="col-md-4 col-lg-2 mb-4">
                    <h4 class="text-uppercase mb-4">Services</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Book Publishing</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Editorial Services</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Cover Design</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Marketing</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Distribution</a></li>
                    </ul>
                </div>

                <!-- Resources Column -->
                <div class="col-md-4 col-lg-2 mb-4">
                    <h4 class="text-uppercase mb-4">Resources</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Book Catalog</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Author Profiles</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Submission Guidelines</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Publishing Plans</a></li>
                    </ul>
                </div>

                <!-- Connect Column -->
                <div class="col-md-4 col-lg-2 mb-4">
                    <h4 class="text-uppercase mb-4">Connect</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Newsletter</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blog</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Support</a></li>
                    </ul>
                </div>

                <!-- Social Media Column -->
                <div class="col-lg-2 mb-4">
                    <h4 class="text-uppercase mb-4">Follow Us</h4>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">© 2025 Scriptify.US. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none me-3">Terms of Service</a>
                    <a href="#" class="text-white text-decoration-none">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

        });
    </script>
</body>

</html>