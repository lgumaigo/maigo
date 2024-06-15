<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archived List</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
           
            <!-- start events list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Archived Events List</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                 
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th class="opacity-0">vide</th>
                            <th style="width: 16%;">Title</th>
                            <th style="width: 37%;">Description</th>
                            <th style="width: 11%;">Author</th>
                            <th style="width: 10%;">Date</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
// Include database connection
include_once("connection.php");
$con = connection();

// Fetch archived events
$result = $con->query("SELECT * FROM events WHERE is_archived = 1 ORDER BY date DESC");

foreach($result as $value):
?>
<tr class="bg-white align-middle">
    <td><img src="/maigowebsite/uploads/<?php echo $value['image'] ?>" alt="image" height="60" width="85"></td>

    <td><?php echo $value['title'] ?></td>
    <td><?php echo $value['text'] ?></td>
    <td><?php echo $value['author'] ?></td>
    <td><?php echo $value['date'] ?></td>
    <td class="d-md-flex gap-3 mt-3">
        <a href="retrieve_event.php?Id=<?php echo $value['id']?>"><i class="far fa-share-square fa-lg"></i></a>
        <a href="delete_event.php?Id=<?php echo $value['id']?>"><i class="far fa-trash fa-lg"></i></a>
    </td>
</tr> 
<?php endforeach; ?>


                    </tbody>
                </table>
            </div>
            <!-- end news list table -->
        </div>
        <!-- end content page -->
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>
