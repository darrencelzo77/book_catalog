<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - Scriptify.US</title>

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

    <!-- Contact Us Section - Modern Redesign -->
    <section class="contact-section py-5 bg-light">
        <div class="container">
            <!-- Centered Header with Animation -->
            <div class="text-center mb-5">
                <div class="contact-icon mb-3 animate__animated animate__fadeIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="#0d6efd" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                </div>
                <h1 class="fw-bold mb-3 display-5">Get in Touch</h1>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    We're here to help you with your publishing journey. Reach out and we'll respond within 24 hours.
                </p>
            </div>

            <!-- Contact Content - Equal Columns -->
            <div class="row g-4 justify-content-center">
                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="card-body">
                            <h2 class="h4 mb-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0d6efd"
                                    class="me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                Contact Information
                            </h2>

                            <div class="contact-info">
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="h6 text-uppercase text-muted mb-2">Office Address</h3>
                                        <p class="mb-0">1915 5th Avenue<br>New York, NY 10001<br>United States</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="me-3 text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="h6 text-uppercase text-muted mb-2">Phone</h3>
                                        <p class="mb-1">+1 (555) 123-4567</p>
                                        <small class="text-muted">Mon - Fri, 9:00 AM - 6:00 PM EST</small>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="me-3 text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="h6 text-uppercase text-muted mb-2">Email</h3>
                                        <p class="mb-0">
                                            <a href="mailto:info@scriptify.com"
                                                class="text-decoration-none">info@scriptify.com</a><br>
                                            <a href="mailto:support@scriptify.com"
                                                class="text-decoration-none">support@scriptify.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="me-3 text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="h6 text-uppercase text-muted mb-2">Business Hours</h3>
                                        <p class="mb-0">
                                            Monday - Friday: 9:00 AM - 6:00 PM<br>
                                            Saturday: 10:00 AM - 4:00 PM<br>
                                            Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-3">
                                <h3 class="h6 text-uppercase text-muted mb-3">Connect With Us</h3>
                                <div class="social-links d-flex gap-3">
                                    <a href="#" class="text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231.047s2.389-.008 3.232-.047c.78-.036 1.203-.166 1.485-.276.373-.146.64-.32.92-.599.28-.28.453-.547.598-.92.11-.282.24-.705.275-1.485.038-.843.046-1.096.046-3.231 0-2.136-.008-2.388-.046-3.231-.036-.78-.166-1.203-.276-1.485a2.47 2.47 0 0 0-.599-.92c-.28-.28-.546-.453-.92-.598-.28-.11-.704-.24-1.485-.276-.843-.038-1.024-.046-3.231-.046-2.136 0-2.39.008-3.232.046-.78.036-1.204.166-1.486.276-.373.145-.64.319-.92.599-.28.28-.453.546-.598.92-.11.281-.24.705-.275 1.485-.039.842-.047 1.096-.047 3.231 0 2.136.008 2.388.046 3.231.036.78.166 1.204.276 1.486.145.373.319.64.599.92.28.28.546.453.92.598.282.11.705.24 1.485.276.843.038 1.125.047 3.232.047s2.389-.009 3.232-.047c.78-.036 1.203-.166 1.485-.276a2.478 2.478 0 0 0 .92-.598 2.48 2.48 0 0 0 .6-.92c.109-.281.24-.705.275-1.485.038-.843.046-1.125.046-3.232 0-2.136-.008-2.389-.046-3.232-.036-.78-.166-1.203-.276-1.485a2.455 2.455 0 0 0-.92-.598c-.28-.111-.703-.24-1.485-.276h-.063zM8 1.44a6.56 6.56 0 1 1 0 13.12 6.56 6.56 0 0 1 0-13.12zm0 1.107a5.453 5.453 0 1 0 0 10.906 5.453 5.453 0 0 0 0-10.906zM6.044 8c0-1.073.872-1.944 1.956-1.944 1.084 0 1.956.871 1.956 1.944 0 1.084-.872 1.956-1.956 1.956-1.084 0-1.956-.872-1.956-1.956zm1.956-.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm.94 2.064a.5.5 0 1 1-.872-.488.5.5 0 0 1 .872.488zm-.94-1.064a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-primary bg-primary bg-opacity-10 p-2 rounded-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231.047s2.389-.008 3.232-.047c.78-.036 1.203-.166 1.485-.276.373-.146.64-.32.92-.599.28-.28.453-.547.598-.92.11-.282.24-.705.275-1.485.038-.843.046-1.096.046-3.231 0-2.136-.008-2.388-.046-3.231-.036-.78-.166-1.203-.276-1.485a2.47 2.47 0 0 0-.599-.92c-.28-.28-.546-.453-.92-.598-.28-.11-.704-.24-1.485-.276-.843-.038-1.024-.046-3.231-.046-2.136 0-2.39.008-3.232.046-.78.036-1.204.166-1.486.276-.373.145-.64.319-.92.599-.28.28-.453.546-.598.92-.11.281-.24.705-.275 1.485-.039.842-.047 1.096-.047 3.231 0 2.136.008 2.388.046 3.231.036.78.166 1.204.276 1.486.145.373.319.64.599.92.28.28.546.453.92.598.282.11.705.24 1.485.276.843.038 1.125.047 3.232.047s2.389-.009 3.232-.047c.78-.036 1.203-.166 1.485-.276a2.478 2.478 0 0 0 .92-.598 2.48 2.48 0 0 0 .6-.92c.109-.281.24-.705.275-1.485.038-.843.046-1.125.046-3.232 0-2.136-.008-2.389-.046-3.232-.036-.78-.166-1.203-.276-1.485a2.455 2.455 0 0 0-.92-.598c-.28-.111-.703-.24-1.485-.276h-.063zM8 1.44a6.56 6.56 0 1 1 0 13.12 6.56 6.56 0 0 1 0-13.12zm0 1.107a5.453 5.453 0 1 0 0 10.906 5.453 5.453 0 0 0 0-10.906zM6.044 8c0-1.073.872-1.944 1.956-1.944 1.084 0 1.956.871 1.956 1.944 0 1.084-.872 1.956-1.956 1.956-1.084 0-1.956-.872-1.956-1.956zm1.956-.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm.94 2.064a.5.5 0 1 1-.872-.488.5.5 0 0 1 .872.488zm-.94-1.064a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-5">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="card-body">
                            <h2 class="h4 mb-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0d6efd"
                                    class="me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                </svg>
                                Send us a Message
                            </h2>

                            <form action="../email/email_inquiry.php" method="POST" class="needs-validation" novalidate>
                                <div class="mb-4">
                                    <label for="inquiryType" class="form-label fw-bold">Inquiry Type <span class="text-danger">*</span></label>
                                    <select class="form-select" id="inquiryType" name="inquiryType" required>
                                        <option value="" selected disabled>Select inquiry type</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="publishing">Publishing Services</option>
                                        <option value="manuscript">Manuscript Submission</option>
                                        <option value="support">Author Support</option>
                                        <option value="marketing">Marketing & Promotion</option>
                                        <option value="technical">Technical Support</option>
                                        <option value="partnership">Partnership Opportunities</option>
                                        <option value="media">Media & Press</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select an inquiry type.
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="fullName" class="form-label fw-bold">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="John Smith" required>
                                    <div class="invalid-feedback">
                                        Please provide your full name.
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="(555) 123-4567">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subject" class="form-label fw-bold">Subject <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Your subject" required>
                                        <div class="invalid-feedback">
                                            Please provide a subject.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label fw-bold">Message <span class="text-danger">*</span>
                                        <span class="text-muted">(Max 500 characters)</span>
                                    </label>
                                    <textarea class="form-control" id="message" name="message" rows="5" maxlength="500"
                                        placeholder="Tell us about your project or inquiry..." required></textarea>
                                    <div class="text-end text-muted"><span id="message-counter">0</span>/500 characters</div>
                                    <div class="invalid-feedback">
                                        Please provide your message.
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                        </svg>
                                        Send Message
                                    </button>
                                    <p class="text-muted mt-3 mb-0 text-center">
                                        <small>* Required fields. We'll respond within 24 hours.</small>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Import Poppins font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        .contact-section {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .contact-icon svg {
            transition: transform 0.3s ease;
        }

        .contact-icon:hover svg {
            transform: scale(1.1) rotate(5deg);
        }

        .card {
            border-radius: 12px;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(13, 110, 253, 0.1) !important;
        }

        .form-control,
        .form-select {
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        textarea.form-control {
            min-height: 150px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            padding: 12px 24px;
            border-radius: 8px;
            text-transform: uppercase;
            font-size: 0.95rem;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(13, 110, 253, 0.2);
        }

        .text-primary {
            color: #0d6efd !important;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: rgba(13, 110, 253, 0.2) !important;
            transform: translateY(-3px);
        }

        .invalid-feedback {
            font-size: 0.85rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .contact-icon svg {
                width: 48px;
                height: 48px;
            }

            h1.display-5 {
                font-size: 2rem;
            }

            .lead {
                font-size: 1rem;
            }
        }
    </style>

    <script>
        // Character counter for message
        document.addEventListener('DOMContentLoaded', function() {
            const messageTextarea = document.getElementById('message');
            const counter = document.getElementById('message-counter');

            messageTextarea.addEventListener('input', function() {
                counter.textContent = this.value.length;
            });

            // Form validation
            const form = document.querySelector('.needs-validation');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
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