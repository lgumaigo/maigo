<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Resolution</title>
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
        $statement = $con->prepare("SELECT * FROM resolutions WHERE id = ?");

        // Bind the 'Id' parameter to the prepared statement
        $statement->bind_param("i", $id);

        // Execute the prepared statement
        $statement->execute();

        // Get the result set from the executed statement
        $result = $statement->get_result();

        // Fetch the first row from the result set as an associative array
        $resolution = $result->fetch_assoc();

        // Check if a row was found
        if ($resolution) {
            // Store the retrieved data in session or use it as needed
            $_SESSION['resolution'] = $resolution;
        } else {
            echo "No resolution found with id: $id";
        }
    } else {
        echo "No 'Id' parameter provided in the URL";
    }
    ?>

    <div class="container w-50">
        <form method="POST" action="update_resolution.php">
            <div class="">
                <label for="title" class="col-form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($_SESSION['resolution']['title']) ? $_SESSION['resolution']['title'] : ''; ?>">
            </div>
            <div class="">
                <label for="description" class="col-form-label">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo isset($_SESSION['resolution']['description']) ? $_SESSION['resolution']['description'] : ''; ?>">
            </div>
            <div class="">
    <form method="POST" action="upload_resolution.php" enctype="multipart/form-data">
        <label for="resolution_file" class="col-form-label">New Resolution File:</label>
        <!-- File input for uploading the resolution file -->
        <input type="file" class="form-control" id="resolution_file" accept=".pdf,.doc,.docx" name="resolution_file">
        <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Update Resolutions</button>
    </div>    </form>
</div>
           
    </div>

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>
