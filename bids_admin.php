<?php
// Include database connection
include_once("connection/connection.php");
$con = connection();

// Check if the form is submitted
if(isset($_POST['submit'])){

    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
  
    // Retrieve the file details
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    // Move the uploaded file to the desired directory
    move_uploaded_file($file_tmp, "uploads/$file_name");

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO resolutions (title, description, file_path) VALUES (?, ?, ?)";
    
    // Prepare the statement
    $stmt = $con->prepare($sql);

    // Bind parameters with values and execute the statement
    $stmt->bind_param("sss", $title, $description, $file_name);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "Resolution submitted successfully!";
        // Redirect to resolutions admin page
        header("Location: bids.php");
        exit;
    } else {
        // Failed to insert data
        echo "Error: " . $con->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Resolutions Submission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #C7F3C4; /* Pink background color */
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #555;
            background-color: #f9f9f9;
            text-align: center;
        }

        .alert.success {
            color: #4CAF50;
            background-color: #f0f9eb;
            border-color: #d0e9c6;
        }
        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            color: #4CAF50;
            text-decoration: none;
            margin: 0 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Resolutions Submission Form</h2>
    <?php if(isset($success_message)) { ?>
        <div class="alert success"><?php echo $success_message; ?></div>
    <?php } ?>
    <form id="resolutionsForm" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="file">File:</label>
            <input type="file" id="file" name="file" required>
        </div>

        <input type="submit" name="submit" value="Submit Resolution">
    </form>

    <div class="links">
        <a href="index.php">Proceed to Website</a>
        <a href="http://localhost/maigowebsite/admindash/pages/dashboard.php">Admin Dashboard</a>
    </div>
</div>

<script>
    document.getElementById("resolutionsForm").addEventListener("submit", function() {
        alert("Resolution submitted successfully!");
    });
</script>
</body>
</html>
