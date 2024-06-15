

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon " href="img/iimages.png">
    <title>MAIGO || Events</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
            * {box-sizing: border-box;}
            
            body {
              margin: 0;
              font-family: Arial, Helvetica, sans-serif;
            }
            
            .topnav {
              overflow: hidden;
             
              float: center;
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
            
             .search-container {
                float: center;
                width: 300px;
                height: 40px;
                background: #fff;
                margin: 2px auto 1px; 
                border-radius:  10px;
                border: 1px solid #ddd;
                padding-left: 10px;

                

            }
            
             input[type=text] {
                                padding: 0px;
                                margin-top: 8px;
                                font-size: 17px;
                                border: none;
                                margin-left:0px;              ;
                                background: transparent;
                                width: 500px;
                                outline: 0;
                                color: #000000;
                                

            }
            
             .search-container button {
              float: right;
              padding: 6px 10px;
              margin-top: 0px;
              margin-right: 18px;
              background: #ddd;
              font-size: 20px;
              border: none;
              background: transparent;
              cursor: pointer;
            }
            ::placeholder{
                color:black;
            }
            
             .search-container button:hover {
              color: #e8d830;
            }
            
            @media screen and (max-width: 600px) {
              .topnav .search-container {
                float: none;
              }
              .topnav a, .topnav input[type=text], .topnav .search-container button {
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
                <a href="index.php" class="nav-item nav-link">Home</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Know Maigo</a>
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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">For Residents</a>
                    <div class="dropdown-menu m-0">
                        <a href="nationalgov.php" class="dropdown-item">National Government/Offices</a>
                        <a href="barangay.php" class="dropdown-item">Barangays</a>
                        <a href="departments.php" class="dropdown-item">Departments</a>
                        <a href="hotline.php" class="dropdown-item">Hotline Directory</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="http://localhost/maigowebsite/HOMIE/HOM.php" class="nav-item nav-link">For Visitors</a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="EVENTS.php" class="dropdown-item">Events</a>
                        <a href="NEWS.php" class="dropdown-item">News</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Transparency</a>
                    <div class="dropdown-menu m-0">
                        <a href="bids.php" class="dropdown-item">Bids & Procurement</a>
                        <a href="full.php" class="dropdown-item">Full Disclosure Policy</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- search button -->
        <div class="search-container">
    <div class="row">
        <form id="search-form" action="#" method="POST">
            <input type="text" id="search-input" name="search" placeholder="Search..." autocomplete="off" style="color: blue;" value="<?php echo isset($_POST['search']) ? $_POST['search'] : ''; ?>">
        </form>
    </div>
</div>

<!-- Search results will appear here -->
<div id="search-results" class="topnav"></div>

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
            <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3">
                    <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">What's Happening in <br>
                      
                        <FONT COLOR=aqua>M</FONT>
                        <FONT COLOR=lime>a</FONT>
                        <FONT COLOR=yellow>i</FONT>
                        <FONT COLOR=orange>g</FONT>
                        <FONT COLOR=red>o</FONT>
                        </h1>
                        </p>
                </div>
            </div>
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


    </div>
    </div>
    </div>
    </div>
    <!-- Services End -->

   
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Stay Updated!</h4>
                    </div>
                    <h1 class="display-3 mb-4">Upcoming Activities and Events</h1>
                    <p class="mb-0">Get ready to mark your calendars and clear your schedules because we have a lineup of thrilling activities and events coming your way soon!</p>
                </div>
                <div class="row g-4 justify-content-center">
                <style>
    .blog-item {
        /* Set fixed dimensions for blog items */
        width: 100%;
        height: 100%;
    }

    .blog-img {
        /* Set fixed dimensions for blog image */
        width: 100%;
        height: 200px; /* Adjust as needed */
        overflow: hidden; /* Hide overflow if image is larger */
    }

    .blog-img img {
        /* Ensure images fill their container */
        width: 100%;
        height: 100%;
        object-fit: cover; /* Maintain aspect ratio and cover container */
    }

    .blog-centent {
        /* Set padding for blog content */
        padding: 20px;
    }
</style>
<?php
// Include database connection
include_once("connection/connection.php");
$con = connection();

// Initialize the search term variable
$searchTerm = "";

// Check if the search term is submitted via POST method
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
    // Prevent SQL injection
    $searchTerm = $con->real_escape_string($searchTerm);
}

// Fetch events data based on the search term and non-archived status
$query = "SELECT * FROM events WHERE title LIKE '%$searchTerm%' AND is_archived = 0 ORDER BY date DESC"; // Fetch only non-archived items
$result = $con->query($query);

// Check if there is an error with the query execution
if (!$result) {
    echo "Error: " . $con->error; // Display the error message
} else {
    // Check if there are any rows returned by the query
    if ($result->num_rows > 0) {
        // Initialize counter variable
        $counter = 0;
        // Loop through each row of events data
        while ($row = $result->fetch_assoc()) {
            // Limit the title to 30 characters
            $limited_title = (strlen($row['title']) > 30) ? substr($row['title'], 0, 30) . '...' : $row['title'];
?>
            <!-- Display event item -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item rounded">
                    <div class="blog-img">
                        <img src="uploads/<?php echo $row['image']; ?>" class="img-fluid w-100" alt="Image">
                    </div>
                    <div class="blog-centent p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>
                                <?php echo $row['date']; ?></p>
                        </div>
                        <a href="events_details.php?id=<?php echo $row['id']; ?>"><?php echo $limited_title; ?></a>
                    </div>
                </div>
            </div>
<?php
            // Increment the counter
            $counter++;
            // Check if the counter reaches 6
        }
    } else {
        // No events data available
        echo '
                            <div class="col-lg-8 text-center">
                                <h2 class="section-title mb-4">No Events Found</h2>
                                <p class="mb-4">We\'re sorry, but there are no events matching your search. Please try again with a different keyword.</p>
                            </div>
                       ';
    }
}

// Close the database connection
$con->close();
?>




            </div>
        </div></div>
        <!-- Blog End -->


        <!---eam End -->

        <!-- Footer Start -->
        <br><br><br><br> <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
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
                
            </div></div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
     <center>   <div class="container-fluid bg-info copyright bg-info py-4">
            <div class="container">
              <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                      <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Maigo Official Website</a>, All right reserved.</CENTER></span>
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

        <script>
        // Function to perform live search
       function liveSearch() {
    var searchQuery = document.getElementById("search-input").value.trim();

    if (searchQuery === "") {
        clearSearchResults();
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("search-results").innerHTML = xhr.responseText;
            $('.header-carousel').hide(); 
            $('.container-fluid.blog').hide(); 
            $('.container-fluid.footer').hide(); 
        }
    };
    xhr.open("GET", "events_live_search.php?query=" + searchQuery, true);
    xhr.send();
}

function clearSearchResults() {
    document.getElementById("search-results").innerHTML = "";
    $('.header-carousel').show(); 
    $('.container-fluid.blog').show(); 
    $('.container-fluid.footer').show(); 
}

document.getElementById("search-input").addEventListener("keyup", function(event) {
    var searchQuery = event.target.value.trim();

    // If Enter key is pressed and search query is not empty, trigger search
    if (event.key === "Enter" && searchQuery !== "") {
        liveSearch();
    } else if (searchQuery === "") { // If search query is empty, clear search results
        clearSearchResults();
    }
});

document.getElementById("search-button").addEventListener("click", function(event) {
    liveSearch();
}); 

  





        </script>

</body>

</html>
