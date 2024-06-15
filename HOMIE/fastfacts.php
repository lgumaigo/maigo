<?php
    // Include database connection
    include_once("../connection/connection.php");
    $con = connection();

    // Fetch all news data from the database
    $query = "SELECT * FROM news"; // Assuming "news" is your table name
    $result = $con->query($query);
?>


<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="x-icon " href="img/iimages.png">
        <title>Maigo | Fast Facts</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


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
                <span class="sr-only">Maigo...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
      <!--  <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                                class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                                class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>

            </div>
        </div>-->
        <!-- Topbar End -->
        

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="http://localhost/maigo/index.php" class="navbar-brand p-0">
                    <img src="img/MAIGOLOGO(1).png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Explore</a>
                            <div class="dropdown-menu m-0">
                                <a href="HOMIE/fastfacts.php" class="dropdown-item">Fast Facts</a>
                                <a href="http://localhost/maigo/visit/impact/getting-here.php" class="dropdown-item">Getting Here</a>
                                <a href="#" class="dropdown-item">Our Gallery</a>
                                <a href="#" class="dropdown-item">Culture</a>
                                <a href="http://localhost/maigo/visit/impact/history.php" class="dropdown-item">History</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">See & Do</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigo/visit/impact/beach.php" class="dropdown-item">Beach Resorts</a>
                             
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Stay</a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Inn</a>
                                <a href="#" class="dropdown-item">Lodging House</a>

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Eat & Drink</a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Cafe</a>
                                <a href="#" class="dropdown-item">Grill</a>
                                <a href="#" class="dropdown-item">Fast Food</a>
                                <a href="#" class="dropdown-item">Pizza Parlor</a>
                                <a href="#" class="dropdown-item">Filipino Restaurant</a>

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Market</a>
                                <a href="#" class="dropdown-item">Department Store</a>
                                <a href="#" class="dropdown-item">Merchandise</a>
                                <a href="#" class="dropdown-item">Pharmacy</a>
                                <a href="#" class="dropdown-item">Convenience Store</a>
                                <a href="#" class="dropdown-item">Pet Shop</a>


                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/banner.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 800px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">
                            
                                    <h1 class="display-2 text-capitalize text-white mb-4">Facts of Maigo
                                        <br>
                                    
                                     </h1>
                                    </h1>
                                    <p class="mb-5 fs-5">Maigo is a coastal municipality in the province of Lanao del Norte.

The municipality has a land area of 121.45 square kilometers or 46.89 square miles which constitutes 3.62% of Lanao del Norte's total area. Its population as determined by the 2020 Census was 23,337. This represented 3.23% of the total population of Lanao del Norte province, or 0.46% of the overall population of the Northern Mindanao region. Based on these figures, the population density is computed at 192 inhabitants per square kilometer or 498 inhabitants per square mile.


                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                     <!--   <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                            href="#">Discover Now</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Carousel End -->
            </div>
           <!-- <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
                <div class="container">
                    <div class="position-relative rounded-pill w-100 mx-auto p-5"
                        style="background: rgba(19, 53, 123, 0.8);">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Search for places, products or services">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
                            style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                    </div>
                </div>
            </div>-->
            <!-- Navbar & Hero End -->

            <!-- About Start -->
            <div class="container-fluid about py-5">
                <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-5">
                                <div class="h-100"
                                    style="border: 1px solid; border-color: transparent #13357B transparent #13357B;">
                                <img src="img/banban.jpg" class="img-fluid w-100 h-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7"   
                                style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8))">
                                <h1 class="mb-4">Public <span class="text-primary">Transport</span></h1>
                                <p class="mb-4">ADD INFORMATION HERE</p>
                                <p class="mb-4">ADD INFORMATION HERE</p>

                            </div>
                        </div>
                </div>

                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            
                            <div class="col-lg-7"   
                                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8))">
                                    <h1 class="mb-4">Public <span class="text-primary">Transport</span></h1>
                                    <p class="mb-4">ADD INFORMATION HERE</p>
                                    <p class="mb-4">ADD INFORMATION HERE</p>

                            </div>
                            <div class="col-lg-5">
                                <div class="h-100"
                                    style="border: 1px solid; border-color: transparent #13357B transparent #13357B;">
                                <img src="img/banban.jpg" class="img-fluid w-100 h-100" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="h-100"
                                style="border: 1px solid; border-color: transparent #13357B transparent #13357B;">
                             <img src="img/banban.jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7"   
                            style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8))">
                            <h1 class="mb-4">Public <span class="text-primary">Transport</span></h1>
                            <p class="mb-4">ADD INFORMATION HERE</p>
                            <p class="mb-4">ADD INFORMATION HERE</p>

                        </div>
                    </div>
                </div>
                    

            </div>
                <!-- About End -->

                <!-- Services Start 
        
        Services End -->

                <!-- Destination Start -->
          <!--      <div class="container-fluid destination py-5">
                    <div class="container py-5">
                        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                            <h5 class="section-title px-3">Destination</h5>
                            <h1 class="mb-0">Popular Destination</h1>
                        </div>
                        <div class="tab-class text-center">
                            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                                <li class="nav-item">
                                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                                        data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 150px;">FEATURES</span>
                                    </a>
                                </li>
                                <!--<li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">USA</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Canada</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Europe</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">China</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">Singapore</span>
                            </a>
                        </li>-->
                   <!--         </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                        <div class="col-xl-8">
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <div class="destination-img">
                                                        <img class="img-fluid rounded w-100" src="img/krispy king.png"
                                                            alt="">
                                                        <BR> <BR>
                                                        <div class="destination-overlay p-4">
                                                            <a
                                                                href="http://localhost/knowmaigocindy2/Crispy%20King.php">
                                                                <h4>
                                                                    <font color="white">Crispy King
                                                                    </font>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div class="search-icon">
                                                            <a href="img/krispy king.png"
                                                                data-lightbox="destination-1"><i
                                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="destination-img">
                                                        <br> <img class="img-fluid rounded w-50" src="img/moh.webp"
                                                            alt="">
                                                        <div class="destination-overlay p-4">
                                                            <a
                                                                href="http://localhost/knowmaigocindy2/Kutitap%20BEACH%20Resort%20-%20sonny&reneecanoy.php">
                                                                <h4>
                                                                    <font color="white">Kutitap BEACH Resort -
                                                                        sonny&reneecanoy</font>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <BR> <BR>
                                                        <div class="search-icon">
                                                            <a href="img/moh.webp" data-lightbox="destination-2"><i
                                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="destination-img">
                                                        <img class="img-fluid rounded w-100" src="img/kape.jpg" alt="">
                                                        <div class="destination-overlay p-4">
                                                            <a
                                                                href="http://localhost/knowmaigocindy2/Kape%20Barato.php">
                                                                <h4>
                                                                    <font color="white">Kape Barato
                                                                    </font>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div class="search-icon">
                                                            <a href="img/kape.jpg" data-lightbox="destination-7"><i
                                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="destination-img">
                                                        <img class="img-fluid rounded w-100" src="img/kambinganlogo.jpg"
                                                            alt="">
                                                        <div class="destination-overlay p-4">
                                                            <a
                                                                href="http://localhost/knowmaigocindy2/MaigoFoodHouse.php">
                                                                <h4>
                                                                    <font color="white">Maigo Foodhouse & Kambingan
                                                                    </font>
                                                                </h4>
                                                            </a>
                                                        </div>
                                                        <div class="search-icon">
                                                            <a href="img/kambinganlogo.jpg"
                                                                data-lightbox="destination-8"><i
                                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="destination-img h-100">
                                                <img class="img-fluid rounded w-100 h-100" src="img/foc.jpg"
                                                    style="object-fit: cover; min-height: 300px;" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a
                                                        href="http://localhost/knowmaigocindy2/FOC%20Kitchen%20Maigo.php">
                                                        <h4>
                                                            <font color="white">FOC Kitchen Maigo
                                                            </font>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/foc.jpg" data-lightbox="destination-4"><i
                                                            class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/GRAN.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a
                                                        href="http://localhost/knowmaigocindy2/Granaderos%20Beach%20Resort.php">
                                                        <h4>
                                                            <font color="white">Granaderos Beach Resort
                                                            </font>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/GRAN.jpg" data-lightbox="destination-4"><i
                                                            class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/calao.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a
                                                        href="http://localhost/knowmaigocindy2/Calao%20Beach%20Resort.php">
                                                        <h4>
                                                            <font color="white">Calao Beach Resort</font>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/calao.jpg" data-lightbox="destination-5"><i
                                                            class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/MOHCANOY.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a
                                                        href="http://localhost/knowmaigocindy2/Kutitap%20BEACH%20Resort%20-%20sonny&reneecanoy.php">
                                                        <h4>
                                                            <font color="white">Kutitap BEACH Resort - sonny&reneecanoy
                                                            </font>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/MOHCANOY.jpg" data-lightbox="destination-6"><i
                                                            class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Destination End -->

        <!-- Explore Tour Start 
        
       Explore Tour Start -->

        <!-- Packages Start -->
        <!--<div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">STAY INFORMED!</h5>
                    <h1 class="mb-0">Recent News</h1>
                </div>
                <div class="packages-carousel owl-carousel">


                    <?php
        // Check if there is news data available
        if ($result->num_rows > 0) {
            // Loop through each row of news data
            while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="../uploads/<?php echo $row['image']; ?>" class="img-fluid w-100 rounded-top"
                                alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>MSUMSAT - Maigo</small>

                            </div>
                            <div class="packages-price py-2 px-4"></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5><?php echo $row['title']; ?></h5><br>

                                <p class="mb-4"><?php echo $row['text'];?></p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="../news_details.php?id=<?php echo $row['id']; ?>"
                                        class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
            }
        } else {
            // No news data available
            echo "No news available";
        }
        ?>


                </div>
            </div>
            <!-- Packages End -->

            <!-- Copyright Start -->
            <div class="container-fluid copyright text-body py-4">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 text-center text-md-end mb-md-0">
                            <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Maigo, Lanao del Norte
                                Official Website</a>, All right reserved.
                        </div>
                        <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/lgumaigoLDN/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                        <!--<div class="col-md-6 text-center text-md-start">
                       /*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". ***/
                        Designed By <a class="text-white" href="https://phpcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>-->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
                class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</php>