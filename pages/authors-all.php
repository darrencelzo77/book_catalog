 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Authors - Scriptify.US</title>

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

         .card {
             transition: transform 0.3s ease;
         }

         .card:hover {
             transform: translateY(-5px);
         }

         .object-fit-cover {
             object-fit: cover;
             object-position: top center;
         }

         .badge {
             font-size: 0.75rem;
             font-weight: 500;
             letter-spacing: 0.5px;
         }

         /* Emerging Authors Section Styling */
         .emerging-authors {
             font-family: 'Poppins', sans-serif;
             background-color: #f8f9fa;
         }

         .section-main-title {
             color: #212529;
             font-weight: 700;
         }

         .section-subtitle {
             color: #6c757d;
             font-size: 1.1rem;
         }

         .genre-label {
             color: #0d6efd;
             font-weight: 600;
             font-size: 0.9rem;
             margin-bottom: 8px;
         }

         .author-card {
             background-color: white;
             border-radius: 8px;
             box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
             height: 100%;
             display: flex;
             flex-direction: column;
             align-items: center;
         }

         .author-img {
             width: 80px;
             height: 80px;
             border-radius: 50%;
             object-fit: cover;
             border: 2px solid #0d6efd;
         }

         .author-name {
             color: #212529;
             font-weight: 600;
             font-size: 1rem;
             margin-bottom: 5px;
         }

         .book-count {
             color: #6c757d;
             font-size: 0.8rem;
             margin-bottom: 5px;
         }

         .latest-book {
             color: #212529;
             font-size: 0.85rem;
             font-weight: 500;
             margin-bottom: 10px;
         }

         .discover-btn {
             background-color: #0d6efd;
             color: white;
             border: none;
             border-radius: 4px;
             padding: 5px 10px;
             font-size: 0.8rem;
             cursor: pointer;
             transition: all 0.3s;
             margin-top: auto;
         }

         .discover-btn:hover {
             background-color: #0b5ed7;
         }
     </style>

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
                         <a class="nav-link" href="submissions">Submission</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="contacts">Contact</a>
                     </li>
                 </ul>
                 <div class="get-started-btn">
                     <a href="#" class="btn btn-primary">Get Started</a>
                 </div>
             </div>
         </div>
     </nav>

     <!-- Authors Section -->
     <div class="container my-5">
         <h1 class="text-center mb-5"><b>Our Authors</b></h1>

         <?php
            if (file_exists('../admin/includes/systemconfig.php')) include_once('../admin/includes/systemconfig.php');

            // Query: Get authors with their books, genres, and categories
            $sql = "SELECT b.authorid, b.author_name, b.details, b.picture_url AS author_picture,
                   COUNT(a.id) AS total_books,
                   MAX(a.title) AS latest_book,
                   c.name AS genre_name
            FROM tblauthors b
            LEFT JOIN tblbooks a ON a.authorid = b.authorid
            LEFT JOIN tblgenres c ON a.genreid = c.genreid
            GROUP BY b.authorid, b.author_name, b.details, b.picture_url, c.name";

            $rs = mysqli_query($db_connection, $sql);

            $authors = [];
            while ($rw = mysqli_fetch_assoc($rs)) {
                $authorId = $rw['authorid'];

                if (!isset($authors[$authorId])) {
                    $authors[$authorId] = [
                        'name' => $rw['author_name'],
                        'details' => $rw['details'],
                        'picture' => $rw['author_picture'],
                        'total_books' => $rw['total_books'],
                        'latest_book' => $rw['latest_book'],
                        'genres' => []
                    ];
                }

                if (!empty($rw['genre_name'])) {
                    $authors[$authorId]['genres'][] = $rw['genre_name'];
                }
            }
            ?>

         <div class="row g-4">
             <?php foreach ($authors as $authorId => $author): ?>
                 <div class="col-md-3">
                     <div class="card h-100 border-0 shadow-sm">
                         <div class="card-img-top overflow-hidden" style="height: 250px;">
                             <img src="../admin/pages/picture_author/<?= htmlspecialchars($author['picture']) ?>"
                                 alt="<?= htmlspecialchars($author['name']) ?>"
                                 class="img-fluid w-100 h-100 object-fit-cover">
                         </div>
                         <div class="card-body">
                             <?php if (!empty($author['genres'])): ?>
                                 <span class="badge bg-primary mb-2"><?= htmlspecialchars(implode(", ", $author['genres'])) ?></span>
                             <?php else: ?>
                                 <span class="badge bg-secondary mb-2">General</span>
                             <?php endif; ?>
                             <h3 class="h5"><?= htmlspecialchars($author['name']) ?></h3>
                             <p class="card-text"><?= htmlspecialchars(substr($author['details'], 0, 100)) ?>...</p>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <span class="text-muted"><?= $author['total_books'] ?> books</span>
                                 <a target="_blank" href="authors-info?authorid=<?php echo $authorId; ?>" class="btn btn-sm btn-outline-primary">Reach Out</a>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endforeach; ?>
         </div>
     </div>
     <div class="text-center mt-4">
         <a href="authors" class="btn btn-primary">View All Authors</a>
     </div>

     <div class="process-cta text-center mt-5 animate__animated animate__fadeIn animate__delay-0.1s">
         <h3 class="cta-title">Become a Published Author</h3>
         <p class="cta-subtitle">
             Join our community of successful authors and share your story with the world.
         </p>
         <a href="#" class="btn btn-primary mt-3">Submit Your Manuscript</a>
     </div>
     <br>
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