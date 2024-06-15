<?php
// Include database connection
include_once("connection.php");
$con = connection();

// Check if 'Id' parameter is set in the URL
if (isset($_GET['Id'])) {
    // Sanitize the input to prevent SQL injection
    $id = filter_var($_GET['Id'], FILTER_SANITIZE_NUMBER_INT);

    // Prepare the SQL statement to delete the event with the given Id
    $stmt = $con->prepare("DELETE FROM events WHERE Id = ?");
    
    if ($stmt) {
        // Bind the Id parameter to the prepared statement
        $stmt->bind_param("i", $id);
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to events_list.php after deleting the event
            header('location:archived_list.php');
            exit(); // Stop further execution
        } else {
            echo "Error executing the SQL statement: " . $stmt->error;
        }
    } else {
        echo "Failed to prepare the SQL statement.";
    }
} else {
    // Redirect to events_list.php if 'Id' parameter is not provided
    header('location:events_list.php');
    exit(); // Stop further execution
}
?>
