<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions - Scriptify.US</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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

        /* Submit Manuscript Section Styling */
        .submit-manuscript {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .section-main-title {
            color: #212529;
            font-weight: 700;
            font-size: 2rem;
        }

        .section-description {
            color: #6c757d;
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
        }

        .guideline-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .guideline-heading {
            color: #0d6efd;
            font-weight: 600;
            font-size: 1.3rem;
            text-align: center;
        }

        .guideline-list {
            list-style-type: none;
            padding-left: 0;
        }

        .guideline-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 12px;
            color: #495057;
            line-height: 1.5;
        }

        .guideline-list li:before {
            content: "•";
            color: #0d6efd;
            font-weight: bold;
            font-size: 1.2rem;
            position: absolute;
            left: 0;
            top: -2px;
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

    <!-- Submit Manuscript Section -->
    <section class="submit-manuscript py-5">
        <div class="container">
            <!-- Title Row -->
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h1 class="section-main-title mb-3">Submit Your Manuscript</h1>
                    <p class="section-description">Share your story with the world. Our editorial team reviews all
                        submissions and responds within 4-6 weeks.</p>
                </div>
            </div>

            <!-- Guidelines Row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <!-- What We Accept -->
                        <div class="col-md-5 mb-4 mb-md-0">
                            <div class="guideline-card p-4 h-100">
                                <h2 class="guideline-heading mb-4">What We Accept</h2>
                                <ul class="guideline-list">
                                    <li>Fiction and non-fiction manuscripts</li>
                                    <li>Word count: 50,000 - 120,000 words</li>
                                    <li>Previously unpublished works</li>
                                    <li>All genres welcome</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Submission Requirements -->
                        <div class="col-md-5">
                            <div class="guideline-card p-4 h-100">
                                <h2 class="guideline-heading mb-4">Submission Requirements</h2>
                                <ul class="guideline-list">
                                    <li>Complete manuscript required</li>
                                    <li>Professional formatting</li>
                                    <li>Author bio and synopsis</li>
                                    <li>No simultaneous submissions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Manuscript Submission Form Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Centered Title -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Manuscript Submission Form</h2>
                </div>

                <!-- Form Container -->
                <div class="card border-0 shadow-sm p-4">
                    <form method="POST" action="../email/email_submission.php">
                        <!-- Personal Information -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label fw-bold">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label fw-bold">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email_address" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label fw-bold">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone_number">
                            </div>
                        </div>

                        <!-- Book Information -->
                        <div class="row mb-4">
                            <div class="col-md-8 mb-3">
                                <label for="bookTitle" class="form-label fw-bold">Book Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="bookTitle" name="book_title" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="wordCount" class="form-label fw-bold">Word Count <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="wordCount" name="word_count" placeholder="e.g., 75000" required>
                            </div>
                        </div>

                        <!-- Genre Selection -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Genre <span class="text-danger">*</span></label>
                            <select class="form-select" name="genre" required>
                                <option value="" selected disabled>Select a genre</option>
                                <option value="fiction">Fiction</option>
                                <option value="non-fiction">Non-Fiction</option>
                                <option value="romance">Romance</option>
                                <option value="mystery">Mystery/Thriller</option>
                                <option value="sci-fi">Science Fiction</option>
                                <option value="fantasy">Fantasy</option>
                                <option value="biography">Biography</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Text Areas -->
                        <div class="mb-4">
                            <label for="synopsis" class="form-label fw-bold">Book Synopsis <span class="text-danger">*</span>
                                <span class="text-muted">(Max 500 characters)</span></label>
                            <textarea class="form-control" id="synopsis" name="synopsis" rows="4" maxlength="500"
                                placeholder="Provide a brief synopsis of your book..." required></textarea>
                            <div class="text-end text-muted"><span id="synopsis-counter">0</span>/500 characters</div>
                        </div>

                        <div class="mb-4">
                            <label for="publications" class="form-label fw-bold">Previous Publications
                                <span class="text-muted">(Max 500 characters)</span></label>
                            <textarea class="form-control" id="publications" name="publications" rows="3" maxlength="500"
                                placeholder="List any previous publications or writing credits..."></textarea>
                            <div class="text-end text-muted"><span id="publications-counter">0</span>/500 characters</div>
                        </div>

                        <div class="mb-4">
                            <label for="platform" class="form-label fw-bold">Author Platform
                                <span class="text-muted">(Max 500 characters)</span></label>
                            <textarea class="form-control" id="platform" name="platform" rows="3" maxlength="500"
                                placeholder="Describe your online presence, social media following, speaking engagements, etc..."></textarea>
                            <div class="text-end text-muted"><span id="platform-counter">0</span>/500 characters</div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Manuscript</button>
                        </div>

                        <p class="text-muted mt-3 mb-0 text-center">
                            <small>* Required fields. We'll respond to your submission within 4-6 weeks.</small>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .card {
            border-radius: 8px;
        }

        .form-control,
        .form-select {
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            font-family: 'Poppins', sans-serif;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        textarea.form-control {
            min-height: 120px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            border-radius: 6px;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        h2 {
            color: #333;
            font-weight: 600;
        }
    </style>

    <script>
        // Character counters
        document.addEventListener('DOMContentLoaded', function() {
            const textareas = {
                'synopsis': 'synopsis-counter',
                'publications': 'publications-counter',
                'platform': 'platform-counter'
            };

            for (const [textareaId, counterId] of Object.entries(textareas)) {
                const textarea = document.getElementById(textareaId);
                const counter = document.getElementById(counterId);

                textarea.addEventListener('input', function() {
                    counter.textContent = this.value.length;
                });
            }
        });
    </script>

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