<?php 
// Include database connection
include_once("connection.php");
$con = connection();

// Check if 'Id' parameter is set in the URL
if (isset($_GET['Id'])) {
    // Sanitize the input to prevent SQL injection
    $id = filter_var($_GET['Id'], FILTER_SANITIZE_NUMBER_INT);

    // Prepare the SQL statement to mark the event as archived
    $stmt = $con->prepare("UPDATE events SET is_archived = 1 WHERE Id = ?");
    
    if ($stmt) {
        // Bind the Id parameter to the prepared statement
        $stmt->bind_param("i", $id);
        
        // Execute the prepared statement
        $stmt->execute();

        // Redirect to events_list.php after archiving the event
        header('location:events_list.php');
        exit(); // Stop further execution
    } else {
        echo "Failed to prepare the SQL statement.";
    }
} else {
    // Redirect to events_list.php if 'Id' parameter is not provided
    header('location:events_list.php');
    exit(); // Stop further execution
}
?>



// Display a confirmation pop-up before archiving
        echo "<script>
                if(confirm('Are you sure you want to archive this event?')){
                    window.location.href = '.php?Id=$id';
                } else {
                    window.location.href = 'events_list.php';
                }
              </script>";




// Fetch non-archived events
$result = $con->query("SELECT * FROM events WHERE is_archived = 0 ORDER BY date DESC");


// Fetch archived events
$result = $con->query("SELECT * FROM events WHERE is_archived = 1 ORDER BY date DESC");



ALTER TABLE events ADD COLUMN is_archived BOOLEAN DEFAULT FALSE;
