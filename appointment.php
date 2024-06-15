<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Terapia - Physical Therapy Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find
                            A Location</a>
                        <a href="#" class="text-light me-4"><i
                                class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="#" class="text-light me-0"><i
                                class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.php" class="dropdown-item active">Appointment</a>
                                <a href="feature.php" class="dropdown-item">Features</a>
                                <a href="blog.php" class="dropdown-item">Our Blog</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="#"
                        class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book
                        Appointment</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Book Appointment</h1>
                    <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Appointment</li>
                    </ol>
            </div>
        </div>
        <!-- Header End -->
<!--modal video-->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <!-- Replace 'VIDEO_ID' with the ID extracted from your YouTube link -->
                    <iframe class=<iframe width="560" height="315" src="https://www.youtube.com/embed/-jcRNIbhNMI?si=6rdwfnKeeClTvVvH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div> </center>
        <!-- Book Appointment End -->

<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                        
                        <img src="img/MAIGOLOGO.png" alt="Logo" style="width: 150px; height: auto;">

                        <p>
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/profile.php?id=61553329635120"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://twitter.com/maigomps?lang=en"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/"><i class="fab fa-instagram"></i></a>
                                
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Know Maigo</h4>
                            <a href="municipalmayor.php"><i class="fas fa-angle-right me-2"></i> The Municipality Mayor</a>
                            <a href="municipalityprofile.php"><i class="fas fa-angle-right me-2"></i> Municipality Profile</a>
                            <a href="history.php"><i class="fas fa-angle-right me-2"></i> History</a>
                            <a href="council.php"><i class="fas fa-angle-right me-2"></i> Council</a>
                            <a href="missionvision.php"><i class="fas fa-angle-right me-2"></i> Mission & Vision</a>
                            <a href="map.php"><i class="fas fa-angle-right me-2"></i> Map</a>
                            <a href="resolutions.php"><i class="fas fa-angle-right me-2"></i> Resolutions & Ordinances</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">For Residents</h4>
                            <a href="nationalgov.php"><i class="fas fa-angle-right me-2"></i> National Governments/Agencies</a>
                            <a href="barangay.php"><i class="fas fa-angle-right me-2"></i> Barangays</a>
                            <a href="departments.php"><i class="fas fa-angle-right me-2"></i> Departments</a>
                            <a href="hotline.php"><i class="fas fa-angle-right me-2"></i> Hotline Directory</a><br><br>
                           
                            <a href="http://localhost/maigowebsite/NEWS.php"><i class="fas fa-angle-right me-2"></i> News</a>
                            <a href="EVENTS.php"><i class="fas fa-angle-right me-2"></i> Events</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Transparency</h4>
                            <a href="bids.php"><i class="fas fa-angle-right me-2"></i> Bids and Procurement</a>
                            <a href="full.php"><i class="fas fa-angle-right me-2"></i> Full Disclosure Policy</a>
                           
                        </div>
                    </div>
                    
                  <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site
                                Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://phpcodex.com">HTML Codex</a> Distributed By
                        <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>

    </body>

</php>