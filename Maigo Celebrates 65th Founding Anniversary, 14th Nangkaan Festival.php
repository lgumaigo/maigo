<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Maigo Official Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav .search-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }

            .topnav a,
            .topnav input[type=text],
            .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
        </style>
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
                <span class="sr-only">MAIGO</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-info px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <!--  <a href="https://www.google.com/maps/place/Maigo,+Lanao+del+Norte/@8.0997915,123.8947862,12z/data=!3m1!4b1!4m6!3m5!1s0x3255af4c749116cb:0xa0be461bcd0cd87a!8m2!3d8.1144279!4d123.986149!16zL20vMDZyYjB4?entry=ttu" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Maigo, Lanao del Norte</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>09999999999</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>lgumaigoldn@gmail.com</a> -->
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/lgumaigoLDN"
                            class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/maigomps"
                            class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/"
                            class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <img src="img/MAIGOLOGO.png" alt="Logo"> <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="EVENTS.php" class="dropdown-item">Events</a>
                                <a href="NEWS.php" class="dropdown-item">News</a>

                            </div>
                        </div>
                    </div>
                    
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start 
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Discover The Gems of <FONT COLOR=aqua>M</FONT><FONT COLOR=lime>a</FONT><FONT COLOR=yellow>i</FONT><FONT COLOR=orange>g</FONT><FONT COLOR=red>o</FONT></h1>
                  
            </div>
        </div>
-->
        <!-- Header End -->


        <!-- Team Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="img/nangkaan.jpg" class="img-fluid w-100" alt="Image">

            </div>
            <!-- <div class="header-carousel-item">
                <img src="img/footerbg.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy Center</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                        <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
      Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        <!--  <label for="choice"><h4><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WHAT WOULD YOU LIKE TO DO?</strong> &nbsp; &nbsp; </h4></label>
  <select name="forma" onchange="location = this.value;">
      <option value=" "><h4>I &nbsp; WANT &nbsp; TO  &nbsp;. &nbsp;. &nbsp;. &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</h4></option>
    <option value="birthcert.php">REGISTER A BIRTH CERTIFICATE</option>
    <option value="pumpernickel">APPLY FOR A BUILDING PERMIT</option>
    <option value="reeses">APPLY FOR PRE-MARRIAGE COUNSELING ORIENTATION</option>
  </select>-->

        <!-- Services Start -->
        <!--<div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Stay Informed!</h4>
                </div>
                <h3 class="display-3 mb-4">News and Events 
                
                </h3>
                <p class="mb-0">Read latest news and events </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/1event.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Maigo Celebrates 65th Founding Anniversary, 14th Nangkaan Festival</h5>
                               
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/2event.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">MSU-MSAT Joins the 65th Araw ng Maigo Celebration</h5>
                                
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/3news.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Maigo MPS Joined the Kick Off Program for the 65th Araw ng Maigo</h5>
                              
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/4news.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Ground Breaking Ceremony of the New Municipal Hall</h5>
                               <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/5news.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Work Injuries</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/service-6.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Spot Injuries</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/service-7.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Regular Therapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/service-8.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Back Pain</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Scroll Up</a>
                </div>
            </div>
        </div>
    </div>
     Services End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">

                <h2 class="averta-extrabold">Maigo Celebrates 65th Founding Anniversary, 14th Nangkaan Festival

                </h2>
                <i class="fa fa-calendar"> <span class="averta-regular"> DATE :Feb 27, 2024</span></i><br>
                <i class="fa fa-user"> <span class="averta-regular"> Author • Municipality of Maigo</span> </i><br><br>

                MAIGO, Lanao del Norte (PIA) -- Maigo town celebrated its 65th Araw ng Maigo and 14th Nangkaan Festival
                to highlight cultural pride and pay homage to its abundant jackfruit harvests.

                Maigo Mayor Rafael 'Paeng' Rizalda expressed gratitude to the community for their unwavering support of
                his administration and their active participation in the festivities. He also acknowledged the continued
                support of their development partners, especially the provincial government.<br>

            </div>
            <!--<div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/CS.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">34th Civil Registration Month</h5>
                               
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/Holy-Week.png" class="img-fluid rounded-top w-100" alt="" >
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Holy Week</h5>
                                
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/3news.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Maigo MPS Joined the Kick Off Program for the 65th Araw ng Maigo</h5>
                              
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/4news.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Ground Breaking Ceremony of the New Municipal Hall</h5>
                               <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p> 
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/5news.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Work Injuries</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/service-6.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Spot Injuries</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/service-7.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Regular Therapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="img/service-8.jpg" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Back Pain</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Scroll Up</a>-->
        </div>
        </div>
        </div>
        </div>

        <!---eam End -->
        <!-- Footer Start -->
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

    </body>

</php>