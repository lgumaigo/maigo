<?php
session_start();

// Check if 'id' session variable is set
if (isset($_SESSION['event']['id'])) {
    // Retrieve the 'id' from the session
    $id = $_SESSION['event']['id'];

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
        if ($_FILES['image']['name']) {
            $image = $_FILES['image']['name'];
            // Move uploaded file to the correct location
            move_uploaded_file($_FILES['image']['tmp_name'], "/maigowebsite/uploads/" . $image);
        } else {
            // Retrieve the existing image from the database
            $query = $con->prepare("SELECT image FROM events WHERE id = ?");
            $query->bind_param("i", $id);
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            $image = $row['image'];
        }
        
        // Prepare the SQL query using a parameterized query
        $requete = $con->prepare("UPDATE events 
                                    SET 
                                    title = ?,
                                    text = ?,
                                    author = ?,
                                    date = ?,
                                    image = ?
                                    WHERE id = ?");
        
        // Bind parameters to the prepared statement
        $requete->bind_param("sssssi", $title, $text, $author, $date, $image, $id);
        
        // Execute the prepared statement
        $res = $requete->execute();
        
        // Check if the query executed successfully
        if ($res) {
            // Redirect to the events_list.php page
            header("location: events_list.php");
            exit(); // Stop further execution
        } else {
            echo "Error: " . $requete->error; // Display error message
        }
    }
} else {
    echo "Error: 'id' session variable not set"; // Display error message
}
?>
