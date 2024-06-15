<?php
// Include database connection
include_once("connection.php");
$con = connection();

// Check if 'Id' parameter is set in the URL
if (isset($_GET['Id'])) {
    // Sanitize the input to prevent SQL injection
    $id = filter_var($_GET['Id'], FILTER_SANITIZE_NUMBER_INT);

    // Display a confirmation pop-up before archiving
    echo "<script>
            if(confirm('Do you want to archive this event?')){
                window.location.href = 'archive_news_action.php?Id=$id';
            } else {
                window.location.href = 'news_list.php';
            }
          </script>";
} else {
    // Redirect to news_list.php if 'Id' parameter is not provided
    header('location:news_list.php');
    exit(); // Stop further execution
}
?>
