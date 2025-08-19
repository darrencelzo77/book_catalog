<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog - Scriptify.US</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0d6efd;
            --dark-blue: #0b5ed7;
        }

        body {
            font-family: 'Poppins', sans-serif;
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

        /* Book Catalog Section */
        .book-catalog {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .book-image-container {
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card {
            transition: all 0.3s ease;
            overflow: hidden;
            height: 100%;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .book-description {
            flex-grow: 1;
            margin-bottom: 1rem;
        }

        .price-button-container {
            margin-top: auto;
        }

        .btn-outline-primary {
            color: var(--primary-blue);
            border-color: var(--primary-blue);
            min-width: 120px;
            text-align: center;
            white-space: nowrap;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-blue);
            color: white;
        }

        /* Ready to Publish Section */
        .ready-to-publish {
            background-image: url('https://images.unsplash.com/photo-1589998059171-988d887df646');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;
            position: relative;
            color: white;
        }

        .ready-to-publish::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(13, 110, 253, 0.8);
        }

        .ready-to-publish .container {
            position: relative;
        }

        /* Footer Section */
        footer {
            background-color: #212529;
            color: white;
            padding: 60px 0 30px;
        }

        footer a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: var(--primary-blue);
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background-color: var(--primary-blue);
            color: white;
        }

        /* Animation Delays */
        .animate-delay-1 {
            animation-delay: 0.1s;
        }

        .animate-delay-2 {
            animation-delay: 0.2s;
        }

        .animate-delay-3 {
            animation-delay: 0.3s;
        }

        .animate-delay-4 {
            animation-delay: 0.4s;
        }

        /* Book Catalog Styling */
        .book-catalog {
            background-color: #f8f9fa;
        }

        .book-image-container {
            overflow: hidden;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }

        .book-image-container img {
            transition: transform 0.3s ease;
            width: 100%;
            height: 100%;
            object-position: top;
            /* Ensures images are aligned to top */
        }

        .card-body {
            padding-top: 1rem !important;
            /* Additional top padding */
            min-height: 200px;
            /* Set minimum height for text area */
        }

        .card:hover .book-image-container img {
            transform: scale(1.05);
        }

        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        /* Animation delays */
        .animate-delay-1 {
            animation-delay: 0.1s;
        }

        .animate-delay-2 {
            animation-delay: 0.2s;
        }

        .animate-delay-3 {
            animation-delay: 0.3s;
        }

        /* Ensure consistent button width */
        .btn-outline-primary {
            white-space: nowrap;
        }

        /* Featured Publications Section Styles */
        .featured-section {
            background-color: #f8f9fa;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #7f8c8d;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Category Filter Buttons */
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background-color: #3498db;
            color: white;
            border-color: #3498db;
        }

        /* Book Cards Container */
        .book-container {
            justify-content: center;
        }

        /* Book Card Styles */
        .book-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .book-image-container {
            position: relative;
            width: 100%;
            padding-top: 150%;
            /* Aspect ratio for book covers */
            overflow: hidden;
        }

        .book-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .book-card:hover .book-image {
            transform: scale(1.05);
        }

        .book-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: white;
            z-index: 2;
        }

        .book-badge {
            background-color: #3498db;
            /* Default blue for technology */
        }

        .book-item[data-category="fiction"] .book-badge {
            background-color: #2ecc71;
            /* Green for fiction */
        }

        .book-item[data-category="business"] .book-badge {
            background-color: #9b59b6;
            /* Purple for business */
        }

        .book-item[data-category="adventure"] .book-badge {
            background-color: #e67e22;
            /* Orange for adventure */
        }

        .book-item[data-category="self-help"] .book-badge {
            background-color: #e74c3c;
            /* Red for self-help */
        }

        .book-content {
            padding: 1.25rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .book-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .book-author {
            font-size: 0.85rem;
            color: #7f8c8d;
            margin-bottom: 0.75rem;
        }

        .book-description {
            font-size: 0.9rem;
            color: #34495e;
            margin-bottom: 1rem;
            flex-grow: 1;
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
            gap: 0.25rem;
        }

        .book-rating .stars {
            color: #f1c40f;
            font-size: 0.9rem;
        }

        .book-rating span:last-child {
            font-size: 0.85rem;
            color: #7f8c8d;
        }

        .book-link {
            background: none;
            border: none;
            color: #3498db;
            font-weight: 500;
            padding: 0.25rem 0.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .book-link:hover {
            color: #2980b9;
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .section-title {
                font-size: 2rem;
            }

            .book-title {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .btn-group {
                gap: 0.25rem;
            }

            .filter-btn {
                padding: 0.4rem 0.8rem;
                font-size: 0.85rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .section-subtitle {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .book-card {
                max-width: 300px;
                margin: 0 auto;
            }
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
                        <a class="nav-link active" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book-catalog.html">Book Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="plans.html">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="authors.html">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submissions.html">Submission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.html">Contact</a>
                    </li>
                </ul>
                <div class="get-started-btn">
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Featured Publications Section -->
    <section class="featured-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate__animated animate__fadeIn"><b style="color: black;">Featured
                        Publications</h2></b>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Discover our latest bestsellers and award-winning titles from talented authors around the world.
                </p>
            </div>

            <!-- Category Filter Buttons -->
            <div class="text-center mb-4">
                <div class="btn-group" role="group" aria-label="Book categories">
                    <button type="button" class="btn btn-outline-primary filter-btn active"
                        data-category="all">All</button>
                    <button type="button" class="btn btn-outline-primary filter-btn"
                        data-category="technology">Technology</button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-category="fiction">Literary
                        Fiction</button>
                    <button type="button" class="btn btn-outline-primary filter-btn"
                        data-category="business">Business</button>
                    <button type="button" class="btn btn-outline-primary filter-btn"
                        data-category="adventure">Adventure</button>
                    <button type="button" class="btn btn-outline-primary filter-btn"
                        data-category="self-help">Self-Help</button>
                </div>
            </div>

            <!-- All Books (Default View) -->
            <div class="row g-4 book-container" id="all-books">
                <!-- Book 1 -->
                <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp book-item" data-category="technology">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Technology</div>
                            <img src="../images/pub1.jpg" alt="The Digital Revolution" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Digital Revolution</h3>
                            <p class="book-author">by Alexandra Thompson</p>
                            <p class="book-description">
                                A comprehensive guide to understanding the digital transformation reshaping our world.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#bookModal1">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book 2 -->
                <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp animate__delay-1s book-item"
                    data-category="fiction">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Fiction</div>
                            <img src="../images/pub2.jpg" alt="Garden Secrets" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Garden Secrets</h3>
                            <p class="book-author">by Marcus Rivera</p>
                            <p class="book-description">
                                A captivating tale of love, loss, and redemption set in mysterious English gardens.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#bookModal2">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book 3 -->
                <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp animate__delay-2s book-item"
                    data-category="business">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Business</div>
                            <img src="../images/pub3.jpg" alt="Startup Success" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Startup Success</h3>
                            <p class="book-author">by Jennifer Wu</p>
                            <p class="book-description">
                                Essential strategies and insights for building successful startups in today's economy.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#bookModal3">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book 4 -->
                <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp animate__delay-3s book-item"
                    data-category="adventure">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Adventure</div>
                            <img src="../images/pub4.jpg" alt="Quantum Leaps" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Quantum Leaps</h3>
                            <p class="book-author">by David Chen</p>
                            <p class="book-description">
                                Exploring the fascinating world of quantum physics and its practical applications.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#bookModal4">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Books (Hidden by default) -->
            <div class="row g-4 book-container d-none" id="technology-books">
                <!-- Tech Book 1 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="technology">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Technology</div>
                            <img src="../images/tech1.jpg" alt="AI Superpowers" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">AI Superpowers</h3>
                            <p class="book-author">by Kai-Fu Lee</p>
                            <p class="book-description">
                                China, Silicon Valley, and the new world order in artificial intelligence.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#techModal1">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tech Book 2 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="technology">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Technology</div>
                            <img src="../images/tech2.jpg" alt="The Future Is Faster Than You Think" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Future Is Faster Than You Think</h3>
                            <p class="book-author">by Peter Diamandis</p>
                            <p class="book-description">
                                How converging technologies are transforming business, industries, and our lives.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.5</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#techModal2">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tech Book 3 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="technology">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Technology</div>
                            <img src="../images/tech3.jpg" alt="The Innovators" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Innovators</h3>
                            <p class="book-author">by Walter Isaacson</p>
                            <p class="book-description">
                                How a group of hackers, geniuses, and geeks created the digital revolution.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#techModal3">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tech Book 4 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="technology">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Technology</div>
                            <img src="../images/tech4.jpg" alt="Life 3.0" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Life 3.0</h3>
                            <p class="book-author">by Max Tegmark</p>
                            <p class="book-description">
                                Being human in the age of artificial intelligence.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.4</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#techModal4">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fiction Books (Hidden by default) -->
            <div class="row g-4 book-container d-none" id="fiction-books">
                <!-- Fiction Book 1 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="fiction">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Fiction</div>
                            <img src="../images/fic1.jpg" alt="The Midnight Library" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Midnight Library</h3>
                            <p class="book-author">by Matt Haig</p>
                            <p class="book-description">
                                A novel about all the choices that go into a life well lived.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#fictionModal1">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fiction Book 2 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="fiction">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Fiction</div>
                            <img src="../images/fic.png" alt="Where the Crawdads Sing" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Where the Crawdads Sing</h3>
                            <p class="book-author">by Delia Owens</p>
                            <p class="book-description">
                                For years, rumors of the "Marsh Girl" have haunted Barkley Cove.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#fictionModal2">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fiction Book 3 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="fiction">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Fiction</div>
                            <img src="../images/fic3.jpg" alt="The Vanishing Half" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Vanishing Half</h3>
                            <p class="book-author">by Brit Bennett</p>
                            <p class="book-description">
                                The Vignes twin sisters will always be identical. But after growing up together, their
                                lives take separate paths.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#fictionModal3">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fiction Book 4 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="fiction">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Fiction</div>
                            <img src="../images/fic4.jpg" alt="Normal People" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Normal People</h3>
                            <p class="book-author">by Sally Rooney</p>
                            <p class="book-description">
                                Connell and Marianne grow up in the same small town but their similarities end there.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.5</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#fictionModal4">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Business Books (Hidden by default) -->
            <div class="row g-4 book-container d-none" id="business-books">
                <!-- Business Book 1 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="business">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Business</div>
                            <img src="../images/bus1.jpg" alt="Atomic Habits" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Atomic Habits</h3>
                            <p class="book-author">by James Clear</p>
                            <p class="book-description">
                                An easy & proven way to build good habits & break bad ones.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#businessModal1">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Business Book 2 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="business">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Business</div>
                            <img src="../images/bus2.jpg" alt="The Lean Startup" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Lean Startup</h3>
                            <p class="book-author">by Eric Ries</p>
                            <p class="book-description">
                                How today's entrepreneurs use continuous innovation to create radically successful
                                businesses.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#businessModal2">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Business Book 3 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="business">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Business</div>
                            <img src="../images/bus3.jpg" alt="Good to Great" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Good to Great</h3>
                            <p class="book-author">by Jim Collins</p>
                            <p class="book-description">
                                Why some companies make the leap...and others don't.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#businessModal3">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Business Book 4 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="business">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Business</div>
                            <img src="../images/bus4.jpg" alt="The Hard Thing About Hard Things" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Hard Thing About Hard Things</h3>
                            <p class="book-author">by Ben Horowitz</p>
                            <p class="book-description">
                                Building a business when there are no easy answers.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#businessModal4">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adventure Books (Hidden by default) -->
            <div class="row g-4 book-container d-none" id="adventure-books">
                <!-- Adventure Book 1 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="adventure">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Adventure</div>
                            <img src="../images/adv1.png" alt="Into the Wild" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Into the Wild</h3>
                            <p class="book-author">by Jon Krakauer</p>
                            <p class="book-description">
                                The story of a young man who gave his savings to charity and hitchhiked to Alaska.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#adventureModal1">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Adventure Book 2 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="adventure">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Adventure</div>
                            <img src="../images/adv2.png" alt="The Lost City of Z" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Lost City of Z</h3>
                            <p class="book-author">by David Grann</p>
                            <p class="book-description">
                                A tale of deadly obsession in the Amazon.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.5</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#adventureModal2">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Adventure Book 3 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="adventure">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Adventure</div>
                            <img src="../images/adv3.jpg" alt="Endurance" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Endurance</h3>
                            <p class="book-author">by Alfred Lansing</p>
                            <p class="book-description">
                                Shackleton's incredible voyage to Antarctica.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#adventureModal3">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Adventure Book 4 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="adventure">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Adventure</div>
                            <img src="../images/adv4.jpg" alt="Wild" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">Wild</h3>
                            <p class="book-author">by Cheryl Strayed</p>
                            <p class="book-description">
                                From lost to found on the Pacific Crest Trail.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#adventureModal4">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Self-Help Books (Hidden by default) -->
            <div class="row g-4 book-container d-none" id="self-help-books">
                <!-- Self-Help Book 1 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="self-help">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Self-Help</div>
                            <img src="../images/self1.jpg" alt="The Subtle Art of Not Giving a F*ck" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Subtle Art of Not Giving a F*ck</h3>
                            <p class="book-author">by Mark Manson</p>
                            <p class="book-description">
                                A counterintuitive approach to living a good life.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#selfhelpModal1">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Self-Help Book 2 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="self-help">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Self-Help</div>
                            <img src="../images/self2.jpg" alt="The 7 Habits of Highly Effective People"
                                class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The 7 Habits of Highly Effective People</h3>
                            <p class="book-author">by Stephen R. Covey</p>
                            <p class="book-description">
                                Powerful lessons in personal change.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#selfhelpModal2">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Self-Help Book 3 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="self-help">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Self-Help</div>
                            <img src="../images/self3.jpg" alt="How to Win Friends and Influence People"
                                class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">How to Win Friends and Influence People</h3>
                            <p class="book-author">by Dale Carnegie</p>
                            <p class="book-description">
                                Time-tested advice for effective communication.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#selfhelpModal3">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Self-Help Book 4 -->
                <div class="col-lg-3 col-md-6 book-item" data-category="self-help">
                    <div class="book-card">
                        <div class="book-image-container">
                            <div class="book-badge">Self-Help</div>
                            <img src="../images/self4.jpg" alt="The Power of Now" class="book-image">
                        </div>
                        <div class="book-content">
                            <h3 class="book-title">The Power of Now</h3>
                            <p class="book-author">by Eckhart Tolle</p>
                            <p class="book-description">
                                A guide to spiritual enlightenment.
                            </p>
                            <div class="book-footer">
                                <div class="book-rating">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6</span>
                                </div>
                                <button class="book-link" data-bs-toggle="modal" data-bs-target="#selfhelpModal4">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 animate__animated animate__fadeIn animate__delay-4s">
                <a href="book-catalog.html" class="btn btn-outline-primary">View Full Catalog</a>
            </div>
        </div>
    </section>

    <!-- All Books Modals -->
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
                            <img src="../images/pub1.jpg" alt="The Digital Revolution" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-primary">Technology</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8 (1,245 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Alexandra Thompson</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Digital Revolution</h4>
                            <p>A comprehensive guide to understanding the digital transformation reshaping our world.
                                This book delves into the technologies driving change, from artificial intelligence to
                                blockchain, and examines their impact on business, society, and individual lives.</p>
                            <p>The Digital Revolution provides readers with a roadmap for navigating the complexities of
                                our digital future, offering practical insights for both tech professionals and curious
                                minds alike.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> January 2023</li>
                                <li><strong>Pages:</strong> 320</li>
                                <li><strong>ISBN:</strong> 978-1234567890</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook</li>
                                <li><strong>Publisher:</strong> TechFuture Press</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $24.99</button>
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
                            <img src="../images/pub2.jpg" alt="Garden Secrets" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-success">Fiction</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9 (2,187 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Marcus Rivera</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Garden Secrets</h4>
                            <p>A captivating tale of love, loss, and redemption set in mysterious English gardens.
                                Follow protagonist Eleanor as she uncovers family secrets hidden for generations in the
                                overgrown hedges and forgotten greenhouses of Hartfield Manor.</p>
                            <p>This beautifully written novel weaves together past and present, revealing how the
                                gardens hold the key to understanding Eleanor's own identity and the tragic love story
                                that shaped her family's history.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> March 2023</li>
                                <li><strong>Pages:</strong> 412</li>
                                <li><strong>ISBN:</strong> 978-0987654321</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Bloomsbury Literary</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $19.99</button>
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
                            <img src="../images/pub3.jpg" alt="Startup Success" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-info">Business</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7 (956 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Jennifer Wu</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Startup Success</h4>
                            <p>Essential strategies and insights for building successful startups in today's economy.
                                Drawing from interviews with 100 founders, this book provides practical advice on
                                fundraising, team building, product development, and scaling operations.</p>
                            <p>Jennifer Wu, a serial entrepreneur and angel investor, shares hard-won lessons from both
                                her own experiences and those of other successful founders across various industries.
                            </p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> November 2022</li>
                                <li><strong>Pages:</strong> 278</li>
                                <li><strong>ISBN:</strong> 978-1122334455</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook</li>
                                <li><strong>Publisher:</strong> Venture Press</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $27.99</button>
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
                            <img src="../images/pub4.jpg" alt="Quantum Leaps" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark">Science</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9 (1,532 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by David Chen</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Quantum Leaps</h4>
                            <p>Exploring the fascinating world of quantum physics and its practical applications. This
                                accessible guide explains complex concepts through real-world examples and shows how
                                quantum technologies are revolutionizing computing, medicine, and cryptography.</p>
                            <p>Written by renowned physicist David Chen, Quantum Leaps makes cutting-edge science
                                understandable for non-specialists while providing valuable insights for professionals
                                in the field.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> September 2023</li>
                                <li><strong>Pages:</strong> 356</li>
                                <li><strong>ISBN:</strong> 978-5566778899</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Science Horizon</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $29.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Books Modals -->
    <!-- Tech Modal 1 -->
    <div class="modal fade" id="techModal1" tabindex="-1" aria-labelledby="techModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/tech1.jpg" alt="AI Superpowers" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-primary">Technology</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6 (1,087 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Kai-Fu Lee</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>AI Superpowers</h4>
                            <p>China, Silicon Valley, and the new world order in artificial intelligence. Dr. Kai-Fu
                                Lee, one of the world's most respected experts on AI, reveals how China has suddenly
                                caught up to the US at an astonishingly rapid pace.</p>
                            <p>This book provides clear explanations of how AI works and how it's transforming multiple
                                industries, while offering a vision for how humans can thrive in the age of AI by
                                focusing on creativity and compassion.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> September 2018</li>
                                <li><strong>Pages:</strong> 272</li>
                                <li><strong>ISBN:</strong> 978-1328546395</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Houghton Mifflin Harcourt</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $22.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Modal 2 -->
    <div class="modal fade" id="techModal2" tabindex="-1" aria-labelledby="techModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/tech2.jpg" alt="The Future Is Faster Than You Think"
                                class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-primary">Technology</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.5 (892 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Peter Diamandis</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Future Is Faster Than You Think</h4>
                            <p>How converging technologies are transforming business, industries, and our lives. From
                                artificial intelligence to blockchain, from drones to 3D printing, this book explores
                                how these technologies are converging to transform every aspect of our lives.</p>
                            <p>Diamandis and Kotler examine how rapid technological change will impact industries like
                                retail, advertising, education, healthcare, and entertainment, and what it means for our
                                future.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> January 2020</li>
                                <li><strong>Pages:</strong> 384</li>
                                <li><strong>ISBN:</strong> 978-1982109667</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Simon & Schuster</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $21.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Modal 3 -->
    <div class="modal fade" id="techModal3" tabindex="-1" aria-labelledby="techModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/tech3.jpg" alt="The Innovators" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-primary">Technology</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7 (1,243 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Walter Isaacson</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Innovators</h4>
                            <p>How a group of hackers, geniuses, and geeks created the digital revolution. Beginning
                                with Ada Lovelace, Lord Byron's daughter, who pioneered computer programming in the
                                1840s, Isaacson explores the fascinating personalities that created our digital world.
                            </p>
                            <p>This is the story of how their minds worked and what made them so inventive. It's also a
                                narrative of how their ability to collaborate and master the art of teamwork made them
                                even more creative.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> October 2014</li>
                                <li><strong>Pages:</strong> 560</li>
                                <li><strong>ISBN:</strong> 978-1476708690</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Simon & Schuster</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $20.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Modal 4 -->
    <div class="modal fade" id="techModal4" tabindex="-1" aria-labelledby="techModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/tech4.jpg" alt="Life 3.0" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-primary">Technology</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.4 (1,076 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Max Tegmark</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Life 3.0</h4>
                            <p>Being human in the age of artificial intelligence. How will AI affect crime, war,
                                justice, jobs, society and our very sense of being human? This book guides you through
                                the most controversial issues around AI today.</p>
                            <p>Tegmark, a professor at MIT, doesn't just describe what could happen with AI in the
                                future, but also suggests how we can help create a desirable future with advanced AI
                                through thoughtful planning and policy.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> July 2017</li>
                                <li><strong>Pages:</strong> 384</li>
                                <li><strong>ISBN:</strong> 978-1101970317</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Knopf</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $18.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fiction Books Modals -->
    <!-- Fiction Modal 1 -->
    <div class="modal fade" id="fictionModal1" tabindex="-1" aria-labelledby="fictionModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/fic1.jpg" alt="The Midnight Library" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-success">Fiction</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8 (2,345 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Matt Haig</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Midnight Library</h4>
                            <p>A novel about all the choices that go into a life well lived. Between life and death
                                there is a library, and within that library, the shelves go on forever. Every book
                                provides a chance to try another life you could have lived.</p>
                            <p>Nora Seed finds herself faced with this possibility. As she tries lives where she's an
                                Olympic swimmer, a rock star, a glaciologist, she must search within herself to decide
                                what is truly fulfilling in life, and what makes it worth living in the first place.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> August 2020</li>
                                <li><strong>Pages:</strong> 304</li>
                                <li><strong>ISBN:</strong> 978-0525559474</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Viking</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $16.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fiction Modal 2 -->
    <div class="modal fade" id="fictionModal2" tabindex="-1" aria-labelledby="fictionModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/fic.png" alt="Where the Crawdads Sing" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-success">Fiction</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9 (3,217 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Delia Owens</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Where the Crawdads Sing</h4>
                            <p>For years, rumors of the "Marsh Girl" have haunted Barkley Cove, a quiet town on the
                                North Carolina coast. So in late 1969, when handsome Chase Andrews is found dead, the
                                locals immediately suspect Kya Clark, the so-called Marsh Girl.</p>
                            <p>But Kya is not what they say. Sensitive and intelligent, she has survived for years alone
                                in the marsh that she calls home, finding friends in the gulls and lessons in the sand.
                                Then the time comes when she yearns to be touched and loved.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> August 2018</li>
                                <li><strong>Pages:</strong> 384</li>
                                <li><strong>ISBN:</strong> 978-0735219090</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> G.P. Putnam's Sons</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $17.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fiction Modal 3 -->
    <div class="modal fade" id="fictionModal3" tabindex="-1" aria-labelledby="fictionModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/fic3.jpg" alt="The Vanishing Half" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-success">Fiction</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7 (1,876 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Brit Bennett</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Vanishing Half</h4>
                            <p>The Vignes twin sisters will always be identical. But after growing up together in a
                                small, southern black community and running away at age sixteen, their lives take
                                separate paths.</p>
                            <p>One sister lives with her black daughter in the same southern town she once tried to
                                escape. The other secretly passes for white, and her white husband knows nothing of her
                                past. Still, even separated by so many miles and just as many lies, the fates of the
                                twins remain intertwined.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> June 2020</li>
                                <li><strong>Pages:</strong> 352</li>
                                <li><strong>ISBN:</strong> 978-0525536291</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Riverhead Books</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $18.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fiction Modal 4 -->
    <div class="modal fade" id="fictionModal4" tabindex="-1" aria-labelledby="fictionModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/fic4.jpg" alt="Normal People" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-success">Fiction</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.5 (1,543 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Sally Rooney</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Normal People</h4>
                            <p>Connell and Marianne grow up in the same small town but their similarities end there. In
                                school, Connell is popular and well-liked, while Marianne is a loner. But when the two
                                strike up a conversation - awkward but electrifying - something life-changing begins.
                            </p>
                            <p>A year later, they're both studying at Trinity College in Dublin. Marianne has found her
                                feet in a new social world while Connell hangs at the sidelines, shy and uncertain.
                                Throughout their years at university, Marianne and Connell circle one another, straying
                                toward other people and possibilities but always magnetically drawn back together.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> April 2019</li>
                                <li><strong>Pages:</strong> 273</li>
                                <li><strong>ISBN:</strong> 978-1984822178</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Hogarth</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $15.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Books Modals -->
    <!-- Business Modal 1 -->
    <div class="modal fade" id="businessModal1" tabindex="-1" aria-labelledby="businessModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/bus1.jpg" alt="Atomic Habits" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-info">Business</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9 (3,456 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by James Clear</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Atomic Habits</h4>
                            <p>An easy & proven way to build good habits & break bad ones. No matter your goals, Atomic
                                Habits offers a proven framework for improving - every day. James Clear, one of the
                                world's leading experts on habit formation, reveals practical strategies that will teach
                                you exactly how to form good habits, break bad ones, and master the tiny behaviors that
                                lead to remarkable results.</p>
                            <p>If you're having trouble changing your habits, the problem isn't you. The problem is your
                                system. Bad habits repeat themselves again and again not because you don't want to
                                change, but because you have the wrong system for change.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> October 2018</li>
                                <li><strong>Pages:</strong> 320</li>
                                <li><strong>ISBN:</strong> 978-0735211292</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Avery</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $16.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Modal 2 -->
    <div class="modal fade" id="businessModal2" tabindex="-1" aria-labelledby="businessModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/bus2.jpg" alt="The Lean Startup" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-info">Business</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6 (2,345 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Eric Ries</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Lean Startup</h4>
                            <p>How today's entrepreneurs use continuous innovation to create radically successful
                                businesses. The Lean Startup approach fosters companies that are both more capital
                                efficient and that leverage human creativity more effectively.</p>
                            <p>Inspired by lessons from lean manufacturing, it relies on "validated learning," rapid
                                scientific experimentation, as well as a number of counter-intuitive practices that
                                shorten product development cycles, measure actual progress without resorting to vanity
                                metrics, and learn what customers really want.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> September 2011</li>
                                <li><strong>Pages:</strong> 336</li>
                                <li><strong>ISBN:</strong> 978-0307887894</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Crown Business</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $17.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Modal 3 -->
    <div class="modal fade" id="businessModal3" tabindex="-1" aria-labelledby="businessModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/bus3.jpg" alt="Good to Great" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-info">Business</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7 (2,876 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Jim Collins</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Good to Great</h4>
                            <p>Why some companies make the leap...and others don't. Built to Last, the defining
                                management study of the nineties, showed how great companies triumph over time and how
                                long-term sustained performance can be engineered into the DNA of an enterprise from the
                                very beginning.</p>
                            <p>But what about companies that are not born with great DNA? How can good companies,
                                mediocre companies, even bad companies achieve enduring greatness? The findings include:
                                Level 5 Leadership, First Who...Then What, Confront the Brutal Facts, The Hedgehog
                                Concept, and more.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> October 2001</li>
                                <li><strong>Pages:</strong> 320</li>
                                <li><strong>ISBN:</strong> 978-0066620992</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Harper Business</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $19.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Modal 4 -->
    <div class="modal fade" id="businessModal4" tabindex="-1" aria-labelledby="businessModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/bus4.jpg" alt="The Hard Thing About Hard Things"
                                class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-info">Business</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8 (2,143 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Ben Horowitz</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Hard Thing About Hard Things</h4>
                            <p>Building a business when there are no easy answers. Ben Horowitz, cofounder of Andreessen
                                Horowitz and one of Silicon Valley's most respected and experienced entrepreneurs,
                                offers essential advice on building and running a startup—practical wisdom for managing
                                the toughest problems business school doesn't cover.</p>
                            <p>While many people talk about how great it is to start a business, very few are honest
                                about how difficult it is to run one. Ben Horowitz analyzes the problems that confront
                                leaders every day, sharing the insights he's gained developing, managing, selling,
                                buying, investing in, and supervising technology companies.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> March 2014</li>
                                <li><strong>Pages:</strong> 304</li>
                                <li><strong>ISBN:</strong> 978-0062273208</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Harper Business</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $18.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Adventure Books Modals -->
    <!-- Adventure Modal 1 -->
    <div class="modal fade" id="adventureModal1" tabindex="-1" aria-labelledby="adventureModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/adv1.png" alt="Into the Wild" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark">Adventure</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7 (2,345 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Jon Krakauer</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Into the Wild</h4>
                            <p>The story of a young man who gave his savings to charity and hitchhiked to Alaska. In
                                April 1992, Christopher McCandless walked into the wilderness north of Mt. McKinley and
                                gave up all contact with the world.</p>
                            <p>Four months later, his decomposed body was found by a party of moose hunters. How
                                McCandless came to die is the unforgettable story of Into the Wild. Krakauer brings
                                McCandless's uncompromising pilgrimage out of the shadows, revealing the extremes to
                                which he took the ideals he cherished.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> January 1996</li>
                                <li><strong>Pages:</strong> 207</li>
                                <li><strong>ISBN:</strong> 978-0385486804</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Villard</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $15.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Adventure Modal 2 -->
    <div class="modal fade" id="adventureModal2" tabindex="-1" aria-labelledby="adventureModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/adv2.png" alt="The Lost City of Z" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark">Adventure</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.5 (1,876 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by David Grann</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Lost City of Z</h4>
                            <p>A tale of deadly obsession in the Amazon. After stumbling upon a hidden trove of diaries,
                                New Yorker writer David Grann set out to solve "the greatest exploration mystery of the
                                20th century": What happened to the British explorer Percy Fawcett and his quest for the
                                Lost City of Z?</p>
                            <p>In 1925, Fawcett ventured into the Amazon to find an ancient civilization, hoping to make
                                one of the most important discoveries in history. For centuries Europeans believed the
                                world's largest jungle concealed the glittering kingdom of El Dorado. Thousands had died
                                looking for it, leaving many convinced that the Amazon was a "green hell" that swallowed
                                people up.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> February 2009</li>
                                <li><strong>Pages:</strong> 352</li>
                                <li><strong>ISBN:</strong> 978-0385513531</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Doubleday</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $16.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Adventure Modal 3 -->
    <div class="modal fade" id="adventureModal3" tabindex="-1" aria-labelledby="adventureModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/adv3.jpg" alt="Endurance" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark">Adventure</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.9 (2,543 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Alfred Lansing</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Endurance</h4>
                            <p>Shackleton's incredible voyage to Antarctica. In August 1914, polar explorer Ernest
                                Shackleton boarded the Endurance and set sail for Antarctica, where he planned to cross
                                the last uncharted continent on foot.</p>
                            <p>In January 1915, after battling its way through a thousand miles of pack ice and only a
                                day's sail short of its destination, the Endurance became locked in an island of ice.
                                Thus began the legendary ordeal of Shackleton and his crew of twenty-seven men. What
                                happened next would become legend.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> March 1959</li>
                                <li><strong>Pages:</strong> 282</li>
                                <li><strong>ISBN:</strong> 978-0786706211</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Basic Books</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $18.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Adventure Modal 4 -->
    <div class="modal fade" id="adventureModal4" tabindex="-1" aria-labelledby="adventureModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/adv4.jpg" alt="Wild" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark">Adventure</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6 (2,187 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Cheryl Strayed</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Wild</h4>
                            <p>From lost to found on the Pacific Crest Trail. At twenty-two, Cheryl Strayed thought she
                                had lost everything. In the wake of her mother's death, her family scattered and her own
                                marriage was soon destroyed.</p>
                            <p>Four years later, with nothing more to lose, she made the most impulsive decision of her
                                life: to hike the Pacific Crest Trail from the Mojave Desert through California and
                                Oregon to Washington State—and to do it alone. She had no experience as a long-distance
                                hiker, and the trail was little more than "an idea, vague and outlandish and full of
                                promise."</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> March 2012</li>
                                <li><strong>Pages:</strong> 315</li>
                                <li><strong>ISBN:</strong> 978-0307476074</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Knopf</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $17.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Self-Help Books Modals -->
    <!-- Self-Help Modal 1 -->
    <div class="modal fade" id="selfhelpModal1" tabindex="-1" aria-labelledby="selfhelpModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/self1.jpg" alt="The Subtle Art of Not Giving a F*ck"
                                class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-danger">Self-Help</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6 (2,765 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Mark Manson</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Subtle Art of Not Giving a F*ck</h4>
                            <p>A counterintuitive approach to living a good life. In this generation-defining self-help
                                guide, a superstar blogger cuts through the crap to show us how to stop trying to be
                                "positive" all the time so that we can truly become better, happier people.</p>
                            <p>For decades, we've been told that positive thinking is the key to a happy, rich life. But
                                those days are over. "Fuck positivity," Mark Manson says. "Let's be honest, shit is
                                fucked and we have to live with it." Manson makes the argument that human beings are
                                flawed and limited—"not everybody can be extraordinary, there are winners and losers in
                                society, and some of it is not fair or your fault."</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> September 2016</li>
                                <li><strong>Pages:</strong> 224</li>
                                <li><strong>ISBN:</strong> 978-0062457714</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> HarperOne</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $16.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Self-Help Modal 2 -->
    <div class="modal fade" id="selfhelpModal2" tabindex="-1" aria-labelledby="selfhelpModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/self2.jpg" alt="The 7 Habits of Highly Effective People"
                                class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-danger">Self-Help</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.8 (3,456 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Stephen R. Covey</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The 7 Habits of Highly Effective People</h4>
                            <p>Powerful lessons in personal change. The 7 Habits of Highly Effective People has
                                captivated readers for nearly three decades. It has transformed the lives of presidents
                                and CEOs, educators and parents—millions of people of all ages and occupations.</p>
                            <p>Covey's seven habits—be proactive; begin with the end in mind; put first things first;
                                think win/win; seek first to understand, then to be understood; synergize; and sharpen
                                the saw—are so compelling and resonate with readers of all backgrounds because they
                                focus on timeless principles of fairness, integrity, honesty, and human dignity.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> August 1989</li>
                                <li><strong>Pages:</strong> 381</li>
                                <li><strong>ISBN:</strong> 978-0743269513</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Free Press</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $18.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Self-Help Modal 3 -->
    <div class="modal fade" id="selfhelpModal3" tabindex="-1" aria-labelledby="selfhelpModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/self3.jpg" alt="How to Win Friends and Influence People"
                                class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-danger">Self-Help</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.7 (3,210 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Dale Carnegie</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>How to Win Friends and Influence People</h4>
                            <p>Time-tested advice for effective communication. For more than sixty years the rock-solid,
                                time-tested advice in this book has carried thousands of now famous people up the ladder
                                of success in their business and personal lives.</p>
                            <p>You can take your job, your relationships, or your life to the next level by applying the
                                principles of human relations discovered by Dale Carnegie. His advice has stood the test
                                of time and will teach you how to: make friends quickly and easily, increase your
                                popularity, win people to your way of thinking, and become a better speaker and a more
                                entertaining conversationalist.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> October 1936</li>
                                <li><strong>Pages:</strong> 291</li>
                                <li><strong>ISBN:</strong> 978-0671027032</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> Simon & Schuster</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $14.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Self-Help Modal 4 -->
    <div class="modal fade" id="selfhelpModal4" tabindex="-1" aria-labelledby="selfhelpModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../images/self4.jpg" alt="The Power of Now" class="img-fluid rounded">
                            <div class="mt-3">
                                <span class="badge bg-danger">Self-Help</span>
                                <div class="mt-2">
                                    <span class="stars">⭐⭐⭐⭐⭐</span>
                                    <span>4.6 (2,987 reviews)</span>
                                </div>
                                <p class="mt-2"><small>by Eckhart Tolle</small></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>The Power of Now</h4>
                            <p>A guide to spiritual enlightenment. To make the journey into The Power of Now we will
                                need to leave our analytical mind and its false created self, the ego, behind. Although
                                the journey is challenging, Eckhart Tolle offers simple language and a
                                question-and-answer format to guide us.</p>
                            <p>The message is simple: living in the now is the truest path to happiness and
                                enlightenment. While this message may not seem stunningly original or fresh, Tolle's
                                clear writing, supportive voice, and enthusiasm make this an excellent manual for anyone
                                who's ever wondered what exactly "living in the now" means.</p>
                            <h4 class="mt-4">Details</h4>
                            <ul>
                                <li><strong>Published:</strong> August 1997</li>
                                <li><strong>Pages:</strong> 236</li>
                                <li><strong>ISBN:</strong> 978-1577314806</li>
                                <li><strong>Format:</strong> Hardcover, Paperback, eBook, Audiobook</li>
                                <li><strong>Publisher:</strong> New World Library</li>
                                <li><strong>Language:</strong> English</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart - $15.99</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Filter Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');

            // Add click event listeners to each button
            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Get category from data attribute
                    const category = this.getAttribute('data-category');

                    // Hide all book containers
                    document.querySelectorAll('.book-container').forEach(container => {
                        container.classList.add('d-none');
                    });

                    // Show the selected category or all books
                    if (category === 'all') {
                        document.getElementById('all-books').classList.remove('d-none');
                    } else {
                        document.getElementById(`${category}-books`).classList.remove('d-none');
                    }
                });
            });
        });
    </script>

    <!-- Ready to Publish Section -->
    <section class="ready-to-publish py-5 position-relative" style="background-image: url('../images/banner1.jpeg');">
        <!-- Blue overlay with opacity -->
        <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-primary" style="opacity: 0.8;"></div>

        <div class="container position-relative text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Ready to Publish Your Story?</h2>
                    <p class="lead mb-5">Join thousands of successful authors who have brought their stories to life
                        with our comprehensive publishing services. Your literary journey starts here.</p>

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
                    <p class="mb-4">Helping authors showcase their awesome books to the world with professional
                        publishing services.</p>
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
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Submission Guidelines</a>
                        </li>
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

        document.addEventListener('DOMContentLoaded', function () {

        });
    </script>
</body>

</html>