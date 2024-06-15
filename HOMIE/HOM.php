<?php
    // Include database connection
    include_once("../connection/connection.php");
    $con = connection();

    // Fetch all news data from the database
    $query = "SELECT * FROM news ORDER BY date DESC"; // Ordering by date in descending order
    $result = $con->query($query);
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="x-icon " href="img/iimages.png">
        <title> Maigo Lanao del Norte || Official Website</title>
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
      
        <style>
    /* Import Montserrat font from Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

    /* Navbar and dropdown menu items */
    .navbar,
    .dropdown-menu {
        font-family: 'Montserrat', sans-serif !important; /* Apply Montserrat font */
    }

    /* Navigation headings */
    .navbar-nav .nav-link {
        font-family: 'Montserrat', sans-serif !important; /* Apply Montserrat font to navigation headings */
    }
</style>

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Maigo web...</span>
            </div>
        </div>
        <!-- Spinner End -->
<!-- Topbar Start -->
<style>
    /* Import Montserrat font from Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

    /* Topbar text */
    .topbar-text {
        font-family: 'Montserrat', sans-serif; /* Apply Montserrat font */
    }
</style>

<div class="container-fluid bg-primary px-3 px-lg-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-2 text-center text-lg-start mb-lg-0 topbar-text">
            <div class="d-flex flex-wrap align-items-center">
                <!-- Icon and styled current time text -->
                <span class="text-light me-2"><i class="fas fa-clock"></i></span>
                <span class="text-light fw-bold" style="font-size: 1.2rem;" id="current-time"></span>
            </div>
        </div>
      
        <div class="col-lg-4 text-center text-lg-start mb-lg-0 topbar-text">
            <!-- Icon and link to the location -->
            <div class="d-flex flex-wrap align-items-center">
                <span class="text-light me-2"><i class="fas fa-map-marker-alt"></i></span>
                <a href="https://www.google.com/maps/place/Maigo,+Lanao+del+Norte" class="text-light" target="_blank">Maigo, Lanao del Norte</a>
                <span class="text-light ms-2"><i class="far fa-calendar-alt"></i> <span id="current-date"></span></span>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-end topbar-text">
            <div class="d-flex align-items-center justify-content-end">
                <a href="https://www.facebook.com/lgumaigoLDN/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/explore/locations/216932742/maigo-lanao-del-norte/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>


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
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
               <a href="http://localhost/maigowebsite/index.php" class="navbar-brand p-0">
                  
                  <img src="img/MAIGOLOGO.png" alt="Logo">
                  <img class="rounded-circle" src="../img/images.jpeg" alt="img-admin" height="50" width="50">
  
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Explore</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigowebsite/visit/impact/index.php" class="dropdown-item">Fast Facts</a>
                                <a href="http://localhost/maigowebsite/visit/impact/getting-here.php" class="dropdown-item">Getting Here</a>
                                <a href="http://localhost/maigowebsite/visit/impact/gallery.php" class="dropdown-item">Our Gallery</a>
                                <a href="http://localhost/maigowebsite/visit/impact/culture.php" class="dropdown-item">Culture</a>
                                <a href="http://localhost/maigowebsite/visit/impact/history.php" class="dropdown-item">History</a>
                                <a href="http://localhost/maigowebsite/visit/impact/products.php" class="dropdown-item">Products</a>

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">See & Do</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigowebsite/visit/impact/beach.php" class="dropdown-item">Beach Resorts</a>
                               
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Stay</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigowebsite/visit/impact/inn.php" class="dropdown-item">Inn</a>
                               

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Eat & Drink</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigowebsite/HOMIE/cafe.php" class="dropdown-item">Cafe</a>
                                <a href="http://localhost/maigowebsite/HOMIE/fastfood.php" class="dropdown-item">Fast Food</a>
                                <a href="http://localhost/maigowebsite/HOMIE/restaurants.php" class="dropdown-item">Filipino Restaurant</a>

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigowebsite/HOMIE/market.php" class="dropdown-item">Market</a>
                                <a href="http://localhost/maigowebsite/HOMIE/store.php" class="dropdown-item">Department Store</a>
                                <a href="http://localhost/maigowebsite/HOMIE/merchandise.php" class="dropdown-item">Merchandise</a>
                                <a href="http://localhost/maigowebsite/HOMIE/pharmacy.php" class="dropdown-item">Pharmacy</a>
                                <a href="http://localhost/maigowebsite/HOMIE/convenience.php" class="dropdown-item">Convenience Store</a>
                                <a href="http://localhost/maigowebsite/HOMIE/petstore.php" class="dropdown-item">Pet Shop</a>


                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Schools</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/maigowebsite/visit/impact/msu.php" class="dropdown-item">MSU-MSAT</a>
                                <a href="http://localhost/maigowebsite/visit/impact/mnhs.php" class="dropdown-item">MNHS</a>
                                <a href="http://localhost/maigowebsite/visit/impact/mces.php" class="dropdown-item">MCES</a>
                               

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
                            
                                    <h1 class="display-2 text-capitalize text-white mb-4">Discover the Municipality of Gem
                                        <br>
                                        
                                        <FONT COLOR=aqua>M</FONT>
                                        <FONT COLOR=lime>a</FONT>
                                        <FONT COLOR=yellow>i</FONT>
                                        <FONT COLOR=orange>g</FONT>
                                        <FONT COLOR=red>o</FONT>
                                     </h1>
                                    </h1>
                                    <style>
    .custom-font {
        font-family: 'Montserrat', sans-serif;
    }
</style>

<p class="mb-5 fs-5 custom-font">Find a great place to stay, eat, shop, or visit from municipal experts.</p>

                                
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

 <!-- About Section Start -->
 <style>
    /* Custom font styles */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

    .about-section h2.section-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        color: #0056b3; /* Adjust the color as needed */
    }

    .about-section p {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        font-size: 1.1rem;
        color: #333; /* Adjust the color as needed */
    }

    .about-section a.btn {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1.2rem;
    }
</style>
<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="image-wrapper rounded overflow-hidden shadow">
                    <img src="img/banban.jpg" class="img-fluid rounded" alt="Maigo Beach">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="content-wrapper p-4 p-lg-0">
                    <h2 class="section-title mb-4 text-primary">Welcome to <span class="text-dark">MAIGO</span></h2>
                    <p class="lead mb-4">Discover the enchanting beauty of Maigo, where adventure awaits at every corner.</p>
                    <p class="mb-4">Nestled in the picturesque province of Lanao del Norte, Maigo beckons with its pristine beaches, lush forests, and vibrant culture.</p>
                    <p class="mb-4">Experience the thrill of exploring hidden gems and creating unforgettable memories amidst breathtaking landscapes.</p>
                    <a href="http://localhost/maigowebsite/history.php" class="btn btn-primary btn-lg">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->



                <!-- Services Start 
        
        Services End -->
        <style>
   /* Import Montserrat font from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

/* CSS for destination card */
.destination-card {
    position: relative; /* Position relative for absolute positioning of overlay */
    transition: transform 0.3s ease;
    height: 100%; /* Ensure the container takes up the full height */
    border: none; /* Remove default border */
    border-radius: 10px; /* Add rounded corners */
    overflow: hidden; /* Hide overflowing content */
}

.destination-card:hover {
    transform: translateY(-5px);
}

.destination-card.active {
    border: 2px solid #007bff;
    box-shadow: 0 0 20px rgba(0, 123, 255, 0.3);
    transform: translateY(-5px);
}

.destination-card .card-img-top {
    height: 200px; /* Fixed height for the images */
    object-fit: cover;
}

/* CSS for card title */
.card-title {
    font-family: 'Montserrat', sans-serif; /* Apply Montserrat font */
    margin-bottom: 0; /* Remove bottom margin for title */
}

/* CSS for card body */
.destination-card .card-body {
    padding: 1.25rem; /* Add padding */
}

.destination-card .stretched-link {
    position: absolute; /* Position link absolutely */
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1; /* Ensure link is clickable */
}

/* CSS for overlay */
.destination-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(173, 216, 230, 0); /* Transparent initially */
    z-index: 2;
    transition: background-color 0.3s ease;
}

.destination-card .read-more {
    display: none; /* Hide by default */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: bold;
    text-transform: lowercase; /* Change to lowercase */
    z-index: 3;
}

/* Show Read more text on hover */
.destination-card:hover .read-more {
    display: block;
}
.read-more u {
  text-decoration: underline; /* Add underline */
}


/* Change overlay color on hover */
.destination-card:hover::before {
    background-color: rgba(69,165,157, 0.9); /* Semi-transparent light blue */
}
<style>
    .read-more {
        text-decoration: none; /* Remove underline by default */
    }

    .read-more:hover {
        text-decoration: none; /* Remove underline on hover */
    }
    <style>
    .read-more {
        background-color: transparent; /* Set background to transparent */
        border: none; /* Remove border */
        cursor: pointer; /* Change cursor to pointer on hover */
        text-decoration: none; /* Remove default underline */
        transition: color 0.3s, background-color 0.3s; /* Add transition effect for color and background-color change */
        padding: 5px 30px; /* Add padding */
        border-radius: 5px; /* Add border radius */
        display: inline-block; /* Make it inline block */
    }

    .read-more:hover span {
        text-decoration: underline; /* Add underline on hover */
        color: lightyellow; /* Change text color on hover */
        background-color: rgba(0, 0, 0, 0.2); /* Change background color on hover */
    }
</style>



</style>




              <!-- Destination Section Start -->
<section class="destination-section py-5 bg-light">
    
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title mb-0">Popular Destinations</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            
            <!-- Destination 1: Oasis By The Sea Resort -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/o1.jpg" class="card-img-top rounded" alt="Oasis By The Sea Resort">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Oasis By The Sea Resort</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/Oasis.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/Oasis.php" class="read-more">  <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

                    </a>
                </div>
            </div>
            <!-- Destination 2: Kutitap BEACH Resort -->
            <div class="col">
    <div class="card destination-card">
        <img src="img/k1.jpg" class="card-img-top rounded" alt="Kutitap BEACH Resort">
        <div class="card-body text-center">
            <h5 class="card-title mb-0">Kutitap BEACH Resort</h5>
            <a href="http://localhost/maigowebsite/visit/impact/Kutitap.php" class="stretched-link"></a>
        </div>
        <!-- Read More overlay -->
        <a href="http://localhost/maigowebsite/visit/impact/Kutitap.php" class="read-more">  <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

            
        </a>
        
    </div>
</div>
            <!-- Destination 3: Kape Barato -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/kape.jpg" class="card-img-top rounded" alt="Kape Barato">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Kape Barato</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/kapebarato.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/kapebarato.php" class="read-more">  <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

                    </a>
                </div>
            </div>
            <!-- Destination 4: Maigo Foodhouse & Kambingan -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/kambinganlogo.jpg" class="card-img-top rounded" alt="Maigo Foodhouse & Kambingan">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Maigo Foodhouse & Kambingan</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/kambingan.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/kambingan.php" class="read-more">  <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

                    </a>
                </div>
            </div>
            <!-- Destination 5: Granaderos Beach Resort -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/GRAN.jpg" class="card-img-top rounded" alt="Granaderos Beach Resort">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Granaderos Beach Resort</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/GRAN.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/GRAN.php" class="read-more">
                    <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

                    </a>

                </div>
            </div>
            <!-- Destination 6: FOC Kitchen Maigo -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/foc.jpg" class="card-img-top rounded" alt="FOC Kitchen Maigo">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">FOC Kitchen Maigo</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/foc.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/foc.php" class="read-more">
                        <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

</a>

                </div>
            </div>
            <!-- Destination 7: Calao Beach Resort -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/calao.jpg" class="card-img-top rounded" alt="Calao Beach Resort">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Calao Beach Resort</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/calao.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/calao.php" class="read-more">
  <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>
</a>




                </div>
            </div>
            <!-- Destination 8: MOH Beach Resort -->
            <div class="col">
                <div class="card destination-card border-0 rounded">
                    <img src="img/m2.jpg" class="card-img-top rounded" alt="MOH Beach Resort">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">MOH Beach Resort</h5>
                        <a href="http://localhost/maigowebsite/visit/impact/MOH.php" class="stretched-link"></a>
                    </div>
                    <a href="http://localhost/maigowebsite/visit/impact/MOH.php" class="read-more">
                    <span style="text-transform: capitalize;"> <span style="text-decoration: underline;">r</span><span style="text-decoration: underline;">ead<span style="text-transform: lowercase;"> m</span>ore</span>

                    </a>

                </div>
            </div>
            <!-- Add more destination cards here -->
        </div>
    </div>
</section>
<script>
    // JavaScript to toggle active class on destination card click
    document.querySelectorAll('.destination-card').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.destination-card').forEach(card => {
                card.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>
<!-- Destination Section End -->

        <!-- Explore Tour Start 
        
       Explore Tour Start -->
       <style>
    /* Import Montserrat font from Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

    /* CSS for packages item */
    .packages-item {
        width: 100%;
        max-width: 350px; /* Adjust the maximum width as needed */
        margin: 0 auto; /* Center the item horizontally */
        border-radius: 10px; /* Rounded corners for the container */
        overflow: hidden; /* Hide overflowing content */
    }

    .packages-img {
        position: relative;
        overflow: hidden;
        height: 200px; /* Fixed height for the image container */
    }

    .packages-img img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover; /* Ensure images cover the entire container */
    }

    .packages-content {
        background-color: #f8f9fa; /* Set background color */
        border-radius: 0 0 10px 10px; /* Rounded corners for the bottom */
        overflow: hidden; /* Hide overflowing content */
        max-height: 150px; /* Limit the height of the content */
    }

    .packages-content h5,
    .packages-content p {
        margin-bottom: 0; /* Remove default margin */
        font-family: 'Montserrat', sans-serif; /* Apply Montserrat font */
    }

    .packages-content .row {
        margin: 0; /* Remove default margin */
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>

<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3 text-uppercase mb-4" style="font-size: 1.5rem; font-weight: bold;">STAY INFORMED!</h5>
            <h1 class="mb-0" style="font-size: 2.5rem; font-weight: bold;">Recent News</h1>
        </div>

        <div class="packages-carousel owl-carousel">
            <?php
            // Establish connection to the database
            $con = connection();

            // Check if there is news data available
            $result = $con->query("SELECT * FROM news WHERE is_archived = 0 ORDER BY date DESC"); // Select only non-archived news

            if ($result->num_rows > 0) {
                // Loop through each row of news data
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="packages-item mb-5">
                        <div class="packages-img position-relative">
                            <img src="../uploads/<?php echo $row['image']; ?>" class="img-fluid" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute bg-light"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5; padding: 10px;">
                                <!-- Additional info here -->
                                <span class="text-muted"><?php echo date('M d, Y', strtotime($row['date'])); ?></span>
                            </div>
                        </div>
                        <div class="packages-content bg-white shadow-sm rounded p-4">
                            <h5 class="mb-3 text-truncate"><?php echo $row['title']; ?></h5>
                            <p class="mb-0 text-truncate"><?php echo $row['text']; ?></p>
                            <div class="text-center mt-3">
                                <a href="../news_details.php?id=<?php echo $row['id']; ?>"
                                    class="btn btn-primary btn-hover py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                // No news data available
                echo "<div class='text-center'>No news available</div>";
            }
            ?>
        </div>
    </div>
</div>



<style>
    .custom-font {
        font-family: 'Montserrat', sans-serif;
    }
</style>

<!-- Copyright Start -->
<div class="container-fluid copyright text-body py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0 custom-font">
                <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Maigo, Lanao del Norte Official Website</a>, All rights reserved.
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="https://www.facebook.com/lgumaigoLDN/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
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







