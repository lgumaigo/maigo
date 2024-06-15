<?php
// Include database connection
include_once("connection/connection.php");
$con = connection();

// Check if a resolution ID is provided
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $resolution_id = mysqli_real_escape_string($con, $_GET['id']);
    
    // Fetch the resolution details from the database
    $query = "SELECT * FROM resolutions WHERE id = $resolution_id";
    $result = $con->query($query);
    
    // Check if the resolution exists
    if($result->num_rows > 0) {
        // Fetch resolution details
        $resolution = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolution Details</title>
    <!-- Include Bootstrap CSS and any other necessary stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Include your custom stylesheets if needed -->
</head>
<body>
    <div class="container">
        <h1>Resolution Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $resolution['title']; ?></h5>
                <p class="card-text"><?php echo $resolution['description']; ?></p>
                <a href="<?php echo $resolution['file_path']; ?>" class="btn btn-primary">View Resolution PDF</a>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and any other necessary JavaScript libraries -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Include your custom scripts if needed -->
</body>
</html>
<?php
    } else {
        echo "Resolution not found.";
    }
} else {
    echo "Resolution ID not provided.";
}
?>
