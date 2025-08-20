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
            min-height: 100px;
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
            height: 50%;
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

        /* Book Card Styling */
        .book-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            transition: transform 0.2s ease-in-out;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        /* Image fixed ratio */
        .book-image-container {
            width: 100%;
            height: 90px;
            /* adjust height here */
            overflow: hidden;
        }


        /* Book Content */
        .book-content {
            flex: 1;
            padding: 12px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Title & description */
        .book-title {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 4px;
            line-height: 1.2;
            height: 40px;
            /* keep titles aligned */
            overflow: hidden;
        }

        .book-description {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.3;
            height: 48px;
            /* limit description text */
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Footer aligned */
        .book-footer {
            margin-top: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
                        <a class="nav-link active" href="../">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book-catalog">Book Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="plans.html">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="authors">Authors</a>
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
                <h2 class="section-title animate__animated animate__fadeIn">
                    <b style="color: black;">Featured Publications</b>
                </h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Discover our latest bestsellers and award-winning titles from talented authors around the world.
                </p>
            </div>

            <?php
            if (file_exists('../admin/includes/systemconfig.php')) include_once('../admin/includes/systemconfig.php');

            // Get all books with categories + genres
            $sql = "SELECT a.id AS bookid, a.title, a.description, a.published_date,a.link,
                   a.pages, a.isbn, a.publisher, a.picture_url, a.rating, a.review_count, a.created_at,
                   b.authorid, b.author_name, b.details, b.picture_url as author_picture,
                   c.genreid, c.name AS genre_name, d.catid, d.name AS categoryname
            FROM tblbooks a
            JOIN tblauthors b ON a.authorid=b.authorid
            JOIN tblgenres c ON a.genreid=c.genreid
            JOIN tblcategories d ON c.category_id=d.catid";

            $rs = mysqli_query($db_connection, $sql);

            // Group categories and genres
            $categories = [];
            $books = [];
            while ($rw = mysqli_fetch_assoc($rs)) {
                $catId = $rw['catid'];
                $genreId = $rw['genreid'];

                // Group categories -> genres
                if (!isset($categories[$catId])) {
                    $categories[$catId] = [
                        'name' => $rw['categoryname'],
                        'genres' => []
                    ];
                }
                if (!isset($categories[$catId]['genres'][$genreId])) {
                    $categories[$catId]['genres'][$genreId] = $rw['genre_name'];
                }

                // Store books for later
                $books[] = $rw;
            }
            ?>

            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar Categories with Genres (Accordion Design) -->
                    <div class="col-md-3 col-lg-2 mb-4">
                        <div class="accordion" id="categoryAccordion">
                            <?php foreach ($categories as $catId => $catData): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?= $catId ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $catId ?>" aria-expanded="false" aria-controls="collapse<?= $catId ?>">
                                            <?= htmlspecialchars($catData['name']) ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?= $catId ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $catId ?>" data-bs-parent="#categoryAccordion">
                                        <div class="accordion-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item filter-item" data-genre="all">Show All</li>
                                                <?php foreach ($catData['genres'] as $genreId => $genreName): ?>
                                                    <li class="list-group-item filter-item" data-genre="<?= $genreId ?>">
                                                        <?= htmlspecialchars($genreName) ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Books Grid -->
                    <div class="col-md-9 col-lg-10">
                        <div class="row g-4 book-container" id="all-books">
                            <?php
                            $count = 0;
                            foreach ($books as $book):
                                $count++;
                                // Hide books after the 6th one
                                $hiddenClass = ($count > 4) ? "d-none extra-book" : "";
                            ?>
                                <div class="col-lg-3 col-md-4 animate__animated animate__fadeInUp book-item <?= $hiddenClass ?>" data-genre="<?= $book['genreid'] ?>">
                                    <div class="book-card">
                                        <div class="book-image-container">
                                            <div class="book-badge"><?= htmlspecialchars($book['genre_name']) ?></div>
                                            <img src="../admin/pages/picture_book/<?= htmlspecialchars($book['picture_url']) ?>" alt="<?= htmlspecialchars($book['title']) ?>" class="book-image">
                                        </div>
                                        <div class="book-content">
                                            <h3 class="book-title"><?= htmlspecialchars($book['title']) ?></h3>
                                            <p class="book-author">by <?= htmlspecialchars($book['author_name']) ?></p>
                                            <p class="book-description"><?= htmlspecialchars(substr($book['description'], 0, 80)) ?>...</p>
                                            <div class="book-footer">
                                                <div class="book-rating"><span class="stars">⭐⭐⭐⭐</span> <span><?= htmlspecialchars($book['rating']) ?></span></div>
                                                <button class="book-link btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal<?= $book['bookid'] ?>">View Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Book Modal -->
                                <div class="modal fade" id="bookModal<?= $book['bookid'] ?>" tabindex="-1" aria-labelledby="bookModalLabel<?= $book['bookid'] ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="bookModalLabel<?= $book['bookid'] ?>"><?= htmlspecialchars($book['title']) ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="../admin/pages/picture_book/<?= htmlspecialchars($book['picture_url']) ?>" alt="<?= htmlspecialchars($book['title']) ?>" class="img-fluid rounded shadow">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6>Author: <?= htmlspecialchars($book['author_name']) ?></h6>
                                                        <p><strong>Genre:</strong> <?= htmlspecialchars($book['genre_name']) ?></p>
                                                        <p><strong>Publisher:</strong> <?= htmlspecialchars($book['publisher']) ?></p>
                                                        <p><strong>Published Date:</strong> <?= htmlspecialchars($book['published_date']) ?></p>
                                                        <p><strong>ISBN:</strong> <?= htmlspecialchars($book['isbn']) ?></p>
                                                        <p><strong>Pages:</strong> <?= htmlspecialchars($book['pages']) ?></p>
                                                        <p><strong>Description:</strong><br><?= nl2br(htmlspecialchars($book['description'])) ?></p>
                                                        <p><strong>Rating:</strong> ⭐ <?= htmlspecialchars($book['rating']) ?> (<?= htmlspecialchars($book['review_count']) ?> reviews)</p>
                                                        <p><strong>Link:</strong> <?= htmlspecialchars($book['link']) ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <?php if (count($books) > 4): ?>
                            <div class="text-center mt-4">
                                <button id="toggleMoreBtn" class="btn btn-outline-primary">View More</button>
                            </div>
                        <?php endif; ?>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Filtering Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterItems = document.querySelectorAll(".filter-item");
            const books = document.querySelectorAll(".book-item");

            function filterBooks(genre) {
                books.forEach(book => {
                    if (genre === "all" || book.getAttribute("data-genre") === genre) {
                        book.style.display = "block";
                        book.classList.add("animate__fadeInUp");
                    } else {
                        book.style.display = "none";
                        book.classList.remove("animate__fadeInUp");
                    }
                });
            }

            filterItems.forEach(item => {
                item.addEventListener("click", function() {
                    const genre = this.getAttribute("data-genre");
                    filterBooks(genre);

                    filterItems.forEach(i => i.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>




    <!-- JavaScript for Filter Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');

            // Add click event listeners to each button
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Filtering logic (your existing code)
            const filterItems = document.querySelectorAll(".filter-item");
            const books = document.querySelectorAll(".book-item");

            function filterBooks(genre) {
                books.forEach(book => {
                    if (genre === "all" || book.getAttribute("data-genre") === genre) {
                        book.style.display = "block";
                        book.classList.add("animate__fadeInUp");
                    } else {
                        book.style.display = "none";
                        book.classList.remove("animate__fadeInUp");
                    }
                });
            }

            filterItems.forEach(item => {
                item.addEventListener("click", function() {
                    const genre = this.getAttribute("data-genre");
                    filterBooks(genre);

                    filterItems.forEach(i => i.classList.remove("active"));
                    this.classList.add("active");
                });
            });

            // 👉 Toggle View More / Hide
            const toggleBtn = document.getElementById("toggleMoreBtn");
            const extraBooks = document.querySelectorAll(".extra-book");

            if (toggleBtn) {
                toggleBtn.addEventListener("click", function() {
                    const isHidden = extraBooks[0].classList.contains("d-none");

                    if (isHidden) {
                        // Show books
                        extraBooks.forEach(el => el.classList.remove("d-none"));
                        toggleBtn.textContent = "Hide";
                    } else {
                        // Hide books
                        extraBooks.forEach(el => el.classList.add("d-none"));
                        toggleBtn.textContent = "View More";
                    }
                });
            }
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
        document.addEventListener('DOMContentLoaded', function() {

        });
    </script>
</body>

</html>