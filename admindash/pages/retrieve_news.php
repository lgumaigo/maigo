<?php
// Include database connection
include_once("connection.php");
$con = connection();

// Check if 'Id' parameter is set in the URL
if (isset($_GET['Id'])) {
    // Sanitize the input to prevent SQL injection
    $id = filter_var($_GET['Id'], FILTER_SANITIZE_NUMBER_INT);

    // Display a confirmation pop-up before retrieving
    echo "<script>
            if(confirm('Do you want to retrieve this news?')){
                window.location.href = 'retrieve_news_action.php?Id=$id';
            } else {
                window.location.href = 'archived_list1.php';
            }
          </script>";
} else {
    // Redirect to events_list.php if 'Id' parameter is not provided
    header('location:news_list.php');
    exit(); // Stop further execution
}
?>
