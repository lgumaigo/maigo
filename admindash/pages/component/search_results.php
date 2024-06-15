<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css">
    <link rel="stylesheet" href="path/to/your/style.css">
</head>

<body>

    <!-- Include your header/navigation here -->

    <div class="container">
        <h2>Search Results</h2>

        <?php
        // Check if the search query is set in the URL
        if (isset($_GET['q'])) {
            // Get the search query from the URL
            $searchQuery = $_GET['q'];
            // You can perform the search operation here, such as querying your database
            // For example:
            // include_once("connection.php");
            // $con = connection();
            // $query = "SELECT * FROM your_table WHERE title LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
            // $result = $con->query($query);

            // Assuming you have search results in $result variable, you can loop through and display them
            // Example:
            // if ($result->num_rows > 0) {
            //     while ($row = $result->fetch_assoc()) {
            //         echo "<p>{$row['title']}</p>";
            //         echo "<p>{$row['description']}</p>";
            //     }
            // } else {
            //     echo "No results found.";
            // }
        } else {
            echo "No search query provided.";
        }
        ?>

    </div>

    <script src="path/to/your/bootstrap.bundle.js"></script>
</body>

</html>
