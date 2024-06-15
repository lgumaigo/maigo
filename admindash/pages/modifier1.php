<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Events</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
session_start();
// Include database connection
include_once("connection.php");
$con = connection();

// Check if 'Id' parameter is set in the URL
if (isset($_GET['Id'])) {
    // Retrieve the 'Id' from the URL
    $id = $_GET['Id'];

    // Prepare the SQL query with a placeholder for the 'Id'
    $statement = $con->prepare("SELECT * FROM events WHERE id = ?");
    
    // Bind the 'Id' parameter to the prepared statement
    $statement->bind_param("i", $id);
    
    // Execute the prepared statement
    $statement->execute();
    
    // Get the result set from the executed statement
    $result = $statement->get_result();
    
    // Fetch the first row from the result set as an associative array
    $event = $result->fetch_assoc();
    
    // Check if a row was found
    if ($event) {
        // Store the retrieved data in session or use it as needed
        $_SESSION['event'] = $event;
    } else {
        echo "No event found with id: $id";
    }
} else {
    echo "No 'Id' parameter provided in the URL";
}
?>

<div class="container w-50">


<form method="POST" action="update_event.php" enctype="multipart/form-data">
<div class="">
    <label for="img" class="col-form-label">Existing Image:</label>
    <!-- Display existing photo -->
    <?php if(isset($event['image'])): ?>
        <img src="/maigowebsite/uploads/<?php echo $event['image']; ?>" alt="Existing Image" style="max-width: 200px; max-height: 200px;">
    <?php else: ?>
        <p>No existing image</p>
    <?php endif; ?>
</div>

<div class="">
    <label for="img" class="col-form-label">New Image:</label>
    <!-- File input for updating the image -->
    <input type="file" class="form-control" id="image" accept=".jpg,.png,.jpeg" name="image">
</div>

    <div class="">
        <label for="title" class="col-form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($_SESSION['event']['title']) ? $_SESSION['event']['title'] : ''; ?>">
    </div>
    <div class="">
        <label for="text" class="col-form-label">Text:</label>
        <input type="text" class="form-control" id="text" name="text" value="<?php echo isset($_SESSION['event']['text']) ? $_SESSION['event']['text'] : ''; ?>">
    </div>
    <div class="">
        <label for="author" class="col-form-label">Author:</label>
        <input type="text" class="form-control" id="author" name="author" value="<?php echo isset($_SESSION['event']['author']) ? $_SESSION['event']['author'] : ''; ?>">
    </div>
    <div class="">
        <label for="date" class="col-form-label">Date:</label>
        <input type="date" class="form-control" id="date" name="date" value="<?php echo isset($_SESSION['event']['date']) ? $_SESSION['event']['date'] : ''; ?>">
    </div>
    <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Update Event</button>
    </div>
</form>

</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>
