<?php
session_start();

// Check if 'id' session variable is set
if (isset($_SESSION['resolution']['id'])) {
    // Retrieve the 'id' from the session
    $id = $_SESSION['resolution']['id'];

    // Include database connection
    include_once("connection.php");
    $con = connection();

    // Check if the 'submit' button is clicked
    if (isset($_POST['submit'])) {
        // Retrieve data from the form fields
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        // Prepare the SQL query using a parameterized query
        $requete = $con->prepare("UPDATE resolutions 
                                    SET 
                                    title = ?,
                                    description = ?
                                    WHERE id = ?");
        
        // Bind parameters to the prepared statement
        $requete->bind_param("ssi", $title, $description, $id);
        
        // Execute the prepared statement
        $res = $requete->execute();
        
        // Check if the query executed successfully
        if ($res) {
            // Redirect to the resolutions_list.php page
            header("location: resolutions_list.php");
            exit(); // Stop further execution
        } else {
            echo "Error: Failed to update resolution."; // Display error message
        }
    }
} else {
    echo "Error: 'id' session variable not set"; // Display error message
}
?>
