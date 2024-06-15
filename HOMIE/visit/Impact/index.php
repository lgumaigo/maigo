<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maigo | Fast Facts</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/MAIGOLOGO.png" rel="icon">
  <link href="assets/img/MAIGOLOGO.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Apr 4 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-primary px-3 px-lg-5 d-none d-lg-block">
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
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-end">
            <div class="d-flex align-items-center justify-content-end">
                <a href="https://www.facebook.com/lgumaigoLDN/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                <!-- <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>-->
                <a href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                <!-- <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>-->
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<script>
    // JavaScript to update the current time
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
    }

    // Function to add leading zeros if necessary
    function formatTimeUnit(unit) {
        return unit < 10 ? "0" + unit : unit;
    }

    // Call the function to initially display the time
    updateClock();

    // Update the time every second
    setInterval(updateClock, 1000);
</script>


  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
    
      </div>
     <!-- <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>-->
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/MAIGOLOGO.png">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
         
         <a href="http://localhost/maigowebsite/HOMIE/HOM.php"><span>BACK</span> </a><li>
          

        <a href="http://localhost/maigo/"><span>HOME</span> </a>
</ul>   

       <!--   <a href="#"><span></span> </a>
              <ul>
                  <li><a href="#">Inn</a></li>
                  <li><a href="#">Lodging House</a></li>
                </ul>
          </li> -->
         

     <!--     <li class="dropdown"><a href="#"><span>Eat & Drink</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Cafe</a></li>
              <li><a href="#">Grill</a></li>
              <li><a href="#">Fast Food</a></li>
              <li><a href="#">Pizza Parlour</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Shop</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Market</a></li>
              <li><a href="#">Department Store</a></li>
              <li><a href="#">Merchandise</a></li>
              <li><a href="#">Pharmacy</a></li>
              <li><a href="#">Convenience Store</a></li>
              <li><a href="#">Bakery</a></li>
              <li><a href="#">Pet Shop</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Local Events</a></li>
              <li><a href="http://maigo/EVENTS.php">Upcoming Events</a></li>
              <li><a href="#">Calendar of Events</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Schools</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">MSU-MSAT</a></li>
              <li><a href="#">MNHS</a></li>
              <li><a href="#">MCES</a></li>
            </ul>
          </li>

        </ul>  -->
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Maigo <span>Fast Facts</span></h2>
          <p style="text-align: justify; text-indent: 0px;">The municipality has a land area of 121.45 square kilometers or 46.89 square miles which constitutes 3.62% of Lanao del Norte's total area. Its population as determined by the 2020 Census was 23,337. This represented 3.23% of the total population of Lanao del Norte province, or 0.46% of the overall population of the Northern Mindanao region. Based on these figures, the population density is computed at 192 inhabitants per square kilometer or 498 inhabitants per square mile..</p>
          <!--<div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>-->
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/images.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" width="60%" height="40%">
        </div>
      </div>
    </div>

   <div class="icon-boxes position-relative">
      <!--<div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            </div>
          </div><End Icon Box -->

        <!--  <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div>End Icon Box -->

        <!--  <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div><!--End Icon Box -->

        <!--  <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

       <!-- <div class="section-header">
          <h2>About Us</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>-->

        <div class="row gy-4">
          <div class="col-lg-6">
         <!--   <h3>Voluptatem dignissimos provident quasi corporis</h3>-->
            <img src="assets/img/sidecar.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p class="fst-italic">
              <h1><br>Business Hours </h1>
              In Maigo, the daily rhythm revolves around the opening and closing hours of its businesses, which serve as essential hubs for both locals and visitors. Typically, shops and services commence operations around 8 or 9 AM, welcoming early birds and those beginning their day. This period sees a steady flow of activity as people engage in shopping, attending to errands, and socializing.
During the midday hours, some establishments may temporarily close for lunch, allowing employees to recharge and take a break. However, many businesses remain open, ensuring that the needs of the community are consistently met throughout the day.
Despite the variation in closing times, the overarching goal of businesses in Maigo remains the same: to provide quality products, services, and experiences while fostering a sense of community and vitality.
              </p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h1>Public Transport</h1>
              <p class="fst-italic">
              In Maigo, public transportation primarily consists of sidecars, which are widely utilized by locals for commuting to various destinations in and around the area. These sidecars, attached to motorcycles, offer seating space for up to five people, providing a convenient and efficient mode of transportation for residents as they navigate through the town and its neighboring areas. Whether it's commuting to work, running errands, or visiting friends and family, the reliance on sidecars showcases their importance in the daily lives of the Maigo community, offering a reliable means of travel for both short and long distances.
              </p>
              <br>
              <br>
              <br>
              <br>
              <br>
              
            
              <!--<ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>-->

           <!--   <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>-->

              <div class="position-relative mt-4">
                <p> </p>
                <img src="assets/img/4.jpg"  alt="" width="450px" height="450px">
             <!--   <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-lg-6">
         <!--   <h3>Voluptatem dignissimos provident quasi corporis</h3>-->
            <img src="assets/img/climate.jpg" class="img-fluid rounded-4 mb-4" alt="">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h1><br>Climate</h1>
              <p class="fst-italic">
              The climate of Maigo, like much of the Philippines, is characterized by its tropical nature, typically featuring warm temperatures throughout the year. Situated in the Philippines, Maigo experiences a tropical climate with distinct wet and dry seasons. The region generally enjoys hot and humid conditions, with temperatures often ranging from warm to hot, especially during the summer months. The humidity can contribute to a feeling of warmth even during the cooler parts of the day. Rainfall is more prevalent during the wet season, typically occurring from June to November, while the dry season, spanning from December to May, brings sunnier skies and less precipitation.
              </p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              
              <!--<ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>-->

           <!--   <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>-->

              <div class="position-relative mt-4">
                <p> </p>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
   <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/images ().png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/images (2).png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/images (2).png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/images (2).png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/images (2).png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-.png" class="" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client.png" class="" alt=""></div>
            
            <div class="swiper-slide"><img src="assets/img/clients/client-.png" class="" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-.png" class="" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-.png" class="" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-.png" class="" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-.png" class="" alt=""></div>
          </div>
        </div>

      </div>
    </section> End Clients Section -->

 

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>