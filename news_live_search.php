

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon " href="img/iimages.png">
    <title>MAIGO || News</title>
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



<style>
    /* Common styles for service-item and card */
    .service-item,
    .card {
        width: 100%;
        height: 400px; /* Fixed height for each item container */
        display: flex;
        flex-direction: column;
        overflow: hidden; /* Hide overflow to ensure consistent size */
    }

    .service-img,
    .card-img-top {
        height: 60%; /* Adjust height of image container */
        overflow: hidden;
    }

    .service-img img,
    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .service-content,
    .card-body {
        padding: 20px;
        background-color: #fff;
        flex-grow: 1;
    }

    .service-title,
    .card-title {
        overflow: hidden;
        text-overflow: ellipsis; /* Add ellipsis for text overflow */
        white-space: nowrap; /* Prevent text from wrapping */
    }
</style>
<?php
// Include database connection
include_once("connection/connection.php");
$con = connection();

$searchQuery = isset($_GET['query']) ? $con->real_escape_string($_GET['query']) : '';

// Fetch news data based on the search query
$query = "SELECT * FROM news WHERE title LIKE '%$searchQuery%'";
$result = $con->query($query);

// Display search results
if ($result) {
    if ($result->num_rows > 0) {
        $count = 0;
        while ($row = $result->fetch_assoc()) {
            // Open a new row after every 4 items or at the beginning
            if ($count % 4 == 0) {
                echo '<div class="row">';
            }
?>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s"><br><br><br><br>
                <div class="card">
                    <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <a href="news_details.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary">Read More</a>
                    </div> 
                </div> 
            </div><br><br>
<?php
            $count++;
            // Close the row after every 4 items
            if ($count % 4 == 0) {
                echo '</div>'; // Close the row div
            }
        }
        // Close the last row if not already closed
        if ($count % 4 != 0) {
            echo '</div>'; // Close the row div
        }
    } else {
        echo "<p>No results found</p>";
    }
} else {
    echo "<p>Error: " . $con->error . "</p>";
}
?>
<!-- JavaScript to trigger search on input change -->
<script>
document.addNewsListener('DOMContentLoaded', function() {
    document.getElementById('searchInput').addNewsListener('input', function(n) {
        // Get the search query value
        var searchQuery = document.getElementById('searchInput').value;
        
        // Redirect to search page with query string if search query is not empty
        if (searchQuery.trim() !== "") {
            window.location.href = 'search.php?query=' + encodeURIComponent(searchQuery);
        }
    });
});
</script>



<script>
document.addNewsListener('DOMContentLoaded', function() {
    document.getElementById('searchInput').addNewsListener('keypress', function(n) {
        if (n.key === 'Enter') {
            // Redirect to search page with query string
            var searchQuery = document.getElementById('searchInput').value;
            window.location.href = 'search.php?query=' + encodeURIComponent(searchQuery);
        }
    });
});
</script>

</html><br><br><br><br><br>

   
        
  
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


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <!-- JavaScript Libraries -->
  

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
    
   function liveSearch(news) {
    var searchQuery = document.getElementById("search-input").value;

    if (searchQuery.trim() === "") {
        
        clearSearchResults();
        return;
    }

    // Check if Enter key was pressed
    if (news && news.type === "keypress" && news.keyCode !== 13) {
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("search-results").innerHTML = xhr.responseText;     
            displaySearchResults();
        } 
    };
    xhr.open("GET", "news_live_search.php?query=" + searchQuery, true);
    xhr.send();
}

function clearSearchResults() {
    document.getElementById("search-results").innerHTML = "";
    document.querySelector(".header-carousel").style.display = "block";
    document.querySelector(".service").style.display = "block"; 
    document.getElementById("search-results").style.height = ""; 
    document.querySelector(".footer").style.display = "block";
    document.querySelector(".copyright").style.display = "block";
}

document.getElementById("search-input").addNewsListener("input", function(news) {
    var searchQuery = news.target.value.trim(); // Get the trimmed value of the search input

    // If the search query is empty, clear the search results
    if (searchQuery === "") {
        clearSearchResults();
    }
});

function displaySearchResults() {
    document.querySelector(".header-carousel").style.display = "none";
    document.querySelector(".service").style.display = "none";
    document.getElementById("search-results").style.height = "100vh";
    document.querySelector(".footer").style.display = "none";
    document.querySelector(".copyright").style.display = "none";
    window.scrollTo(0, 0);
}

document.getElementById("search-input").addNewsListener("keypress", liveSearch);
document.getElementById("search-input").addNewsListener("blur", liveSearch); 

    </script>
</body>

</html>
