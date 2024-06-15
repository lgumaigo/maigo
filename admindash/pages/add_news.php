<?php 
// Include database connection
include_once("connection.php");
$con = connection();

// Define the absolute path to the directory where you want to store the images
$image_upload_dir = __DIR__ . "/admindash/uploads/";

if(isset($_POST['submit'])){
    // Retrieve the image file details
    $image_sub = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
  
    // Move the uploaded image to the desired directory
    $target_path = $image_upload_dir . basename($image_sub);
    if(move_uploaded_file($image_tmp, $target_path)) {
        echo "The file ". basename($image_sub). " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }

    $title_sub = $_POST['title'];
    $date_sub = $_POST['date'];
    $author_sub = $_POST['author'];
    $text_sub = $_POST['text'];
   
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO `news`(`image`, `title`, `date`, `author`, `text`) VALUES (?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $con->prepare($sql);

    // Bind parameters with values and execute the statement
    $stmt->bind_param("sssss", $image_sub, $title_sub, $date_sub, $author_sub, $text_sub);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "Data submitted successfully!";
        // Data successfully inserted
        $stmt->close();
        $con->close();
        header("Location: news_list.php");
        exit;
    } else {
        // Failed to insert data
        echo "Error: " . $con->error;
    }
}

// No need for the following redirect
// header('location: news_list.php');
?>
