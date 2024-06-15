<?php
    // Include database connection
    include_once("connection/connection.php");
    $con = connection();

    // Fetch all news data from the database ordered by date in descending order
    $query = "SELECT * FROM news ORDER BY date DESC"; // Ordering by date in descending order
    $result = $con->query($query);
    $result = $con->query($query);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/png" href="img/iimages.png">                

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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                      
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Know Maigo</a>
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
                        <div class="navbar-nav  ">
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

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/products.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                        
                            <h1 class="display-1 text-capitalize text-white mb-4">Discover and Explore</h1>
                            <p class="mb-5 fs-5 animated slideInDown">"Maigo Flourishes: Rich Crops, Unity in Diversity"
                            </p>
                         <!--   <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a> -->
                        </div>
                    </div>
                </div>
                
                <div class="header-carousel-item">
                    <img src="img/gal3.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                       
                            <h1 class="display-1 text-capitalize text-white mb-4">Tara sa Maigo</h1>
                            <p class="mb-5 fs-5"> "Maigo, Lanao del Norte: A hidden gem nestled between lush landscapes and serene waters"
                            </p>
                     <!---       <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a> -->
                        </div>
                    </div>
                </div>
                
                <div class="header-carousel-item">
                    <img src="img/col.png" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                        
                            <h1 class="display-1 text-capitalize text-white mb-4">Discover and Explore</h1>
                            <p class="mb-5 fs-5 animated slideInDown">"Maigo Flourishes: Rich Crops, Unity in Diversity"
                            </p>
                         <!--   <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->
<br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Adjust the column width based on your preference -->
            <label for="choice"><h4><strong> WHAT WOULD YOU LIKE TO DO?</strong> &nbsp; &nbsp; </h4></label>
            <select name="forma" onchange="location = this.value;" class="form-select">
                <option value=" "><h4>I &nbsp; WANT &nbsp; TO  &nbsp;. &nbsp;. &nbsp;. &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</h4></option>
                <option value="birthcert.php">REGISTER A BIRTH CERTIFICATE</option>
                <option value="buildingpermit.php">APPLY FOR A BUILDING PERMIT</option>
                <option value="marriage.php">APPLY FOR PRE-MARRIAGE COUNSELING ORIENTATION</option>
            </select>
        </div>
    </div>
</div>
       <!-- Services Start -->
       <div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Stay Informed!</h4>
            </div>
            <h3 class="display-3 mb-4">News and Events</h3>
            <p class="mb-0">Read the latest news and events!</p>
        </div>
        <div class="row g-4 justify-content-center">
        <style>
    .service-item {
        width: 100%;
        height: 400px; /* Fixed height for each item container */
        display: flex;
        flex-direction: column;
        overflow: hidden; /* Hide overflow to ensure consistent size */
    }

    .service-img {
        height: 60%; /* Adjust height of image container */
        overflow: hidden;
    }

    .service-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .service-content {
        padding: 20px;
        background-color: #fff;
        flex-grow: 1;
    }

    .service-title {
        overflow: hidden;
        text-overflow: ellipsis; /* Add ellipsis for text overflow */
        white-space: nowrap; /* Prevent text from wrapping */
    }
</style>

<div class="row g-4 justify-content-center">
<?php
// Include database connection
include_once("connection/connection.php");
$con = connection();

// Start session to store search term


// Fetch all news data from the database
$query = "SELECT * FROM news ORDER BY date DESC"; // Fetch only 6 items
$result = $con->query($query);

// Initialize search term variable
$searchTerm = "";

// Check if the search term is submitted via POST method
if (isset($_POST['search'])) {
    // Store the search term in session variable
    $_SESSION['searchTerm'] = $_POST['search'];
}

// Check if search term is stored in session
if (isset($_SESSION['searchTerm'])) {
    $searchTerm = $_SESSION['searchTerm'];
    // Prevent SQL injection
    $searchTerm = $con->real_escape_string($searchTerm);
}

// Fetch news data based on the search term
$query = "SELECT * FROM news WHERE title LIKE '%$searchTerm%' AND is_archived = 0 ORDER BY date DESC LIMIT 8"; // Fetch only 6 items
$result = $con->query($query);

// Check if there is an error with the query execution
if (!$result) {
    echo "Error: " . $con->error; // Display the error message
} else {
    // Check if there are any rows returned by the query
    if ($result->num_rows > 0) {
        // Initialize counter variable
        $counter = 0;
        // Loop through each row of news data
        while ($row = $result->fetch_assoc()) {
            // Limit the title to 30 characters
            $limited_title = (strlen($row['title']) > 30) ? substr($row['title'], 0, 30) . '...' : $row['title'];
?>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded">
                    <div class="service-img rounded-top">
                        <img src="uploads/<?php echo $row['image']; ?>" class="img-fluid rounded-top w-100" alt="">
                    </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4 service-title"><?php echo $row['title']; ?></h5>
                            <a href="news_details.php?id=<?php echo $row['id']; ?>"
                                class="btn btn-info rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

<?php
            // Increment the counter
            $counter++;
            // Check if the counter reaches 6
        }
    } else {
        // No news data available
        echo '
            <div class="col-lg-8 text-center">
                <h2 class="section-title mb-4">No Events Found</h2>
                <p class="mb-4">We\'re sorry, but there are no news articles matching your search. Please try again with a different keyword.</p>
            </div>
        ';
    }
}

// Close the database connection
$con->close();
?>
</div>
<STYLE>
                .button {
  background-color: #008CBA; /* blue */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
                </style>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="NEWS.php" class="btn btn-primary rounded-pill text-white py-3 px-5">More</a>
                
            </div>
        </div>
    </div>
</div>
        

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
$query = "SELECT * FROM events WHERE title LIKE '%$searchTerm%' AND is_archived = 0 ORDER BY date DESC LIMIT 6"; // Fetch only non-archived items
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



<style>
                .button {
  background-color: #008CBA; /* blue */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
                </style>
 <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
               <a href="EVENTS.php" class="btn btn-primary rounded-pill text-white py-3 px-5">More</a>
                
            </div>
            </div>
        </div>
        </div>
        <!-- Blog End -->


     


        <!-- Book Appointment Start -->
        <div class="container-fluid appointment py-10">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-10 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                            <h4 class="sub-title pe-3 mb-0"> To know more about Maigo,</h4>
                            <h2 class="display-4 mb-4 "; text-align="justify">Discover Maigo's scenic beauty, vibrant culture, and friendly locals</h2>
                            <p class="mb-4"; text-align="justify">A place where scenic beauty, vibrant culture, and friendly locals come together to create an unforgettable experience.Maigo invites you to explore its hidden treasures and immerse yourself in its rich heritage. Maigo offers something for everyone. So come, explore, and make memories that will last a lifetime.</p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="mb-4">
                                            <h5 class="mb-3">Rural Serenity</h5>
                                            <p class="mb-0">Maigo offers a tranquil escape from the hustle and bustle of city life.</p>
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="mb-3">Culture Discovery</h5>
                                            <p class="mb-0">Visitors can explore its charming rural communities and indulge in the rich local culture.</p>
                                        </div>
                                        <div class="text-start mb-4">
                                            <a href="history.php" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="video h-100">
                                        <img src="img/banban.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=-jcRNIbhNMI" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                 
                </div>
            </div>
        </div> 
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


        <!-- Team Start 
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                    </div>
                    <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Message Physio Therapist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Rehabilitation Therapist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Doctor of Physical therapy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Doctor of Physical therapy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Team End -->


        <!-- Testimonial Start 
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Clients are Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Testimonial End -->


        <!-- Blog Start 
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                    </div>
                    <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Remove back Pain While Working on o physio</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">Regular excercise can slow ageing process</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Blog End -->


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
        
    </body>

</php>