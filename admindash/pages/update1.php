<?php
session_start();
include 'connection.php';

$id = $_SESSION['id'];

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $image = $_POST['image'];
    $date = $_POST['date'];
    $text = $_POST['text'];
    $author = $_POST['author'];

    $requete = $con->prepare("UPDATE events 
                              SET 
                              title = ?,
                              image = ?,
                              date = ?,
                              text = ?,
                              author = ?
                              WHERE id = ?");
    
    $requete->bind_param("sssssi", $title, $image, $date, $text, $author, $id);
    $res = $requete->execute();

    if ($res) {
        header("location: students_list.php");
    } else {
        echo "Failed to update record.";
    }
}
?>
