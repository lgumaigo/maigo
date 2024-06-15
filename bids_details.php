<?php
// Include database connection
include_once("connection/connection.php");
$con = connection();

// Fetch file paths from the resolutions table
$query = "SELECT file_path FROM resolutions WHERE is_archived = 0 ORDER BY title ASC";
$result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PDF Files</title>
</head>
<body>
    <h1>List of PDF Files</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Output each file path as a list item with a link to view the PDF
                echo "<li><a href='" . $row['file_path'] . "' target='_blank'>" . basename($row['file_path']) . "</a></li>";
            }
        } else {
            echo "No PDF files found.";
        }
        ?>
    </ul>
</body>
</html>
