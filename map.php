<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="x-icon " href="img/iimages.png">
        <title>Map</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://www.iligan.gov.ph/css/main.css?704814706">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/png" href="https://www.iligan.gov.ph/assets/img/citycouncil.png" data-default="https://www.iligan.gov.ph/assets/img/citycouncil.png" data-error="https://www.iligan.gov.ph/assets/img/citycouncil.png" id="favicon">

    </head>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 94%;
      height: 100%;
    }
    .side-img-link {
      z-index: 999;
      position: fixed;
      top: 200px;
      right: 0px;
      cursor: pointer;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Google tag (gtag.js) -->
</head><body class="main-body">
  <main class="po-bg-white">
    <div class="sticky-header">
  <header class="bg-dark text-dark top-header">
    <!-- Topbar Start -->
<div class="container-fluid bg-info px-3 px-lg-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-2 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap align-items-center">
                <!-- Icon and styled current time text -->
                <span class="text-light me-2"><i class="fas fa-clock"></i></span>
                <span class="text-light fw-bold" style="font-size: 1.2rem;" id="current-time"></span>
            </div>
        </div>
      
        <div class="col-lg-4 text-center text-lg-start mb-lg-0">
            <!-- Icon and link to the location -->
            <div class="d-flex flex-wrap align-items-center">
                <span class="text-light me-2"><i class="fas fa-map-marker-alt"></i></span>
                <a href="https://www.google.com/maps/place/Maigo,+Lanao+del+Norte" class="text-light" target="_blank">Maigo, Lanao del Norte</a>
                <span class="text-light ms-2"><i class="far fa-calendar-alt"></i> <span id="current-date"></span></span>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-end">
    <div class="d-flex align-items-center justify-content-end">
        <a href="https://www.facebook.com/lgumaigoLDN/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
        <!-- <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>-->
        <a href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
        <!-- <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>-->
    </div>
    <style>
        .d-flex a {
            text-decoration: none; /* Remove underline from links */
        }
        .btn-square {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</div>

    </div>
</div>
<!-- Topbar End -->

<script>
    // JavaScript to update the current time and date
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // Handle midnight (0 hours)
        var minutes = formatTimeUnit(now.getMinutes());
        var seconds = formatTimeUnit(now.getSeconds());
        var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;
        // Update the styled current time text
        document.getElementById("current-time").textContent = timeString;
        
        // Get the current date
        var currentDate = now.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        // Update the styled current date text
        document.getElementById("current-date").textContent = currentDate;
    }

    // Function to add leading zeros if necessary
    function formatTimeUnit(unit) {
        return unit < 10 ? "0" + unit : unit;
    }

    // Call the function to initially display the time and date
    updateClock();

    // Update the time and date every second
    setInterval(updateClock, 1000);
</script>



        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                  
                <img src="img/MAIGOLOGO.png" alt="Logo">
                <img class="rounded-circle" src="img/images.jpeg" alt="img-admin" height="50" width="50">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                      
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" >Know Maigo</a>
                            <div class="dropdown-menu m-0">
                                <a href="municipalmayor.php" class="dropdown-item">The Municipal Mayor</a>
                                <a href="municipalityprofile.php" class="dropdown-item">Municipality Profile</a>
                                <a href="history.php" class="dropdown-item">History</a>
                                <a href="council.php" class="dropdown-item">Council</a>
                                <a href="missionvision.php" class="dropdown-item">Mission & Vision</a>
                                <a href="map.php" class="dropdown-item">Map</a>
                                <a href="resolutions.php" class="dropdown-item">Resolutions & Ordinances</a>
                               
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >For Residents</a>
                            <div class="dropdown-menu m-0">
                                <a href="nationalgov.php" class="dropdown-item">National Government/Offices</a>
                                <a href="barangay.php" class="dropdown-item">Barangays</a>
                                <a href="departments.php" class="dropdown-item">Departments</a>
                                <a href="hotline.php" class="dropdown-item">Hotline Directory</a>
                                
                               
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="http://localhost/maigowebsite/HOMIE/HOM.php" class="nav-item nav-link ">For Visitors</a>
                          
                        </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="http://localhost/maigowebsite/NEWS.php" class="dropdown-item">News</a>
                            <a href="EVENTS.php" class="dropdown-item">Events</a>    
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Transparency</a>
                        <div class="dropdown-menu m-0">
                            <a href="bids.php" class="dropdown-item">Bids & Procurement</a>
                           
                            <a href="full.php" class="dropdown-item">Full Disclosure Policy</a>
                            
                           
                        </div>
                    </div>
                    

                 <!---   <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a>
                </div> -->
            </nav>



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Map</h1>
                    <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Know Maigo</a></li>
                        <li class="breadcrumb-item active text-primary">Map</li>
                    </ol>
            </div>
        </div>
        <!-- Header End -->

        <div class="container mt-4">
        <div class="row row-content row-width">
          <div class="col-md-3 col-for-side-nav">
            <div class="fixed-sidebar">
              <ul class="col-12 col-lg-auto pages-side-nav-ul">
                <li><a href="http://localhost/maigowebsite/municipalmayor.php" class="px-2 text-dark averta-regular">The Municipality Mayor</a></li>
                <li><a href="http://localhost/maigowebsite/municipalityprofile.php" class="px-2 text-dark averta-regular">The Municipality Profile</a></li>
                <li><a href="http://localhost/maigowebsite/history.php" class="px-2 text-dark averta-regular">History</a></li>
                <li><a href="http://localhost/maigowebsite/council.php" class="px-2 text-dark averta-regular ">  Council</a></li>
                <li><a href="http://localhost/maigowebsite/missionvision.php" class="px-2 text-dark averta-regular  ">Mission &amp; Vision</a></li>
                <li><a href="http://localhost/maigowebsite/map.php" class="px-2 text-dark averta-regular active-side-nav">Maps</a></li>
                <li><a href="http://localhost/maigowebsite/resolutions.php" class="px-2 text-dark averta-regular">Resolutions and Ordinances</a></li>
              </ul>
            </div>
          </div>

        <!-- Google Map Start -->
        <center>
            <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="w-75 mb-n2" style="height: 450px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126400.47695797667!2d123.89478546175043!3d8.099961494325997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3255af4c749116cb%3A0xa0be461bcd0cd87a!2sMaigo%2C%20Lanao%20del%20Norte!5e0!3m2!1sen!2sph!4v1711893375244!5m2!1sen!2sph"
                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </center>
        <!-- Google Map End -->

        <!-- Header Start -->
        <div class="container-fluid hero-header bg-light py-5 mb-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h4 class="display-4 mb-3 animated slideInDown"> Flood Hazard Map</h4>
                        <!--  <p class="text-primary fs-5 mb-4">Effective Governance, Quality Services, Ecosystem Protection</p> -->

                        <p class="animated slideInDown" style="text-align: justify;line-height: 2;">Below is the
                            Elevation map of Maigo,Philippines, which displays range of elevation with different
                            colours.
                            The elevation map of Maigo,Philippines is generated using elevation data from NASA's 90m
                            resolution SRTM data.
                            The maps also provides idea of topography and contour of Maigo,Philippines.
                            Maigo,Philippines Elevation Map is displayed at different zoom levels.</p>
                        <!-- <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a> -->
                        <a href="https://www.floodmap.net/Elevation/ElevationMap/?gi=1703554#google_vignette">Maigo,Philippines
                            Elevation Map </a>
                    </div>
                    <div class="col-lg-6 animated fadeIn">
                        <img class="img-fluid " style="animation-duration: 3s;" src="img/floodmap.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animated fadeIn">
                        <img class="img-fluid " src="img/rainy.jpg" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-4 mb-3 animated slideInDown">Rain-Induced Landslide</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Header Start -->
        <div class="container-fluid hero-header bg-light py-5 mb-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h4 class="display-4 mb-3 animated slideInDown"> Infrastructure and Utilities Map</h4>
                        <!--  <p class="text-primary fs-5 mb-4">Effective Governance, Quality Services, Ecosystem Protection</p> -->


                        <!-- <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a> -->

                    </div>
                    <div class="col-lg-6 animated fadeIn">
                        <img class="img-fluid " style="animation-duration: 3s;" src="img/infras.jpg" alt="">
                    </div>
                </div>
            </div>
        </div></div>
</div>
<!-- About End -->

<!-- About End -->


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
    <a class="btn-square btn btn-primary text-white rounded-circle mx-1 d-flex justify-content-center align-items-center" href="https://www.facebook.com/profile.php?id=61553329635120">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a class="btn-square btn btn-primary text-white rounded-circle mx-1 d-flex justify-content-center align-items-center" href="https://twitter.com/maigomps?lang=en">
        <i class="fab fa-twitter"></i>
    </a>
    <a class="btn-square btn btn-primary text-white rounded-circle mx-1 d-flex justify-content-center align-items-center" href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/">
        <i class="fab fa-instagram"></i>
    </a>
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
                  <style>  /* Make all text in footer white */
/* Make all text in footer white */
.footer,
.footer * {
    color: white;
}

/* Style the links in the footer */
.footer-item a {
    color: white;
    text-decoration: none; /* Remove underlines */
}

/* Style the links on hover */
.footer-item a:hover {
    color: lightgray;
}

</style>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <CENTER> <span class="text-white"><a href="#"><i
                                        class="fas fa-copyright text-light me-2"></i>Maigo Official Website</a>, All
                                right reserved.</CENTER></span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". ***/-->
                        <!--     Designed By <a class="border-bottom" href="https://phpcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function modal_show_quicklinks(){
        $("#quick-links-modal").modal('show');
    }
</script>    <script>
      jQuery( "li#for-knowiligan a" ).addClass( "active-header" );
    </script>

</body></html>