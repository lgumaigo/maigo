<?php
session_start();

// Check if 'id' session variable is set
if (isset($_SESSION['news']['id'])) {
    // Retrieve the 'id' from the session
    $id = $_SESSION['news']['id'];

    // Include database connection
    include_once("connection.php");
    $con = connection();

    // Check if the 'submit' button is clicked
    if (isset($_POST['submit'])) {
        // Retrieve data from the form fields
        $title = $_POST['title'];
        $text = $_POST['text'];
        $author = $_POST['author'];
        $date = $_POST['date'];
        
        // Check if a new image is uploaded
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $target_directory = "/maigowebsite/uploads/";
            $target_file = $_SERVER['DOCUMENT_ROOT'] . $target_directory . basename($image);

            // Move uploaded file to the correct location
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // File upload successful
                $image_path = $target_directory . $image; // Store the relative path to the image
            } else {
                echo "Error uploading the file.";
                exit();
            }
        } else {
            // Retrieve the existing image from the database
            $query = $con->prepare("SELECT image FROM news WHERE id = ?");
            $query->bind_param("i", $id);
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            $image_path = $row['image'];
        }
        
        // Prepare the SQL query using a parameterized query
        $requete = $con->prepare("UPDATE news 
                                    SET 
                                    title = ?,
                                    text = ?,
                                    author = ?,
                                    date = ?,
                                    image = ?
                                    WHERE id = ?");
        
        // Bind parameters to the prepared statement
        $requete->bind_param("sssssi", $title, $text, $author, $date, $image_path, $id);
        
        // Execute the prepared statement
        $res = $requete->execute();
        
        // Check if the query executed successfully
        if ($res) {
            // Redirect to the news_list.php page
            header("location: news_list.php");
            exit(); // Stop further execution
        } else {
            echo "Error: " . $requete->error; // Display error message
        }
    }
} else {
    echo "Error: 'id' session variable not set"; // Display error message
}
?>
