<?php
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['submit'])){

    // Retrieve the image file details
    $image_sub = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
  
    // Specify the directory where the image will be saved
    $upload_directory = "maigowebsite/uploads/";

    // Move the uploaded image to the desired directory
    move_uploaded_file($image_tmp, $upload_directory . $image_sub);

    $title_sub = $_POST['title'];
    $date_sub = $_POST['date'];
    $author_sub = $_POST['author'];
    $text_sub = $_POST['text'];
   
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO `events`(`image`, `title`, `date`, `author`, `text`) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare the statement
    $stmt = $con->prepare($sql);

    // Bind parameters with values and execute the statement
    $stmt->bind_param("sssss", $image_sub, $title_sub, $date_sub, $author_sub, $text_sub);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "Data submitted successfully!";
        header("Location: events_admin.php");
        // Data successfully insertedp
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Events Submission Form</title>

    <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maigo_news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $text = $_POST['text'];

    // Process file upload if needed

    // Insert data into database
    $sql = "INSERT INTO events (title, date, author, text) VALUES ('$title', '$date', '$author', '$text')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New event added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}
?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #8360c3, #2ebf91);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* Added position relative for absolute positioning of buttons */
        }

        .container {
            background: transparent;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            height:110vh ;
            position: relative;
            color: white; /* Text color */
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: white; 
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: white;
            color: #333; /* Dark text color */
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 30%;
            font-size: 16px;
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        input[type="submit"]:hover {
            background-image: linear-gradient(to right, #8360c3, #2ebf91);
    color: white; /* Change text color on hover */
    
        }

        
    </style>
</head>
<body>

<div class="container">
    <h2>Events Submission Form</h2>
    <form id="eventsForm" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
        </div>

        <div class="form-group">
            <label for="text">Text:</label>
            <textarea id="text" name="text" rows="4" required></textarea>
        </div>
<a href= "http://localhost/maigowebsite/admindash/pages/dashboard.php" style="color:white;">Admin Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href= "index.php"style="color:white;">Proceed to Website</a>
    <center>    <input type="submit" name="submit" value="Submit Events"> </center><br>
    </form>
</div>

<script>
    document.getElementById("eventsForm").addEventListener("submit", function() {
        alert("Events submitted successfully!");
    });
</script>
</body>
</html>