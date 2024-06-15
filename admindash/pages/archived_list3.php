<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archived Resolutions List</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php include "component/sidebar.php"; ?>
        <!-- end sidebar -->
        <!-- start content page -->
        <div class="container-fluid px-4">
            <!-- start resolutions list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Archived Resolutions List</div>
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
                            <th style="width: 11%;">Date</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Include database connection
                            include_once("connection.php");
                            $con = connection();
                            // Fetch archived resolutions
                            $result = $con->query("SELECT * FROM resolutions WHERE is_archived = 1 ORDER BY id ASC");
                            foreach($result as $value):
                        ?>
                        <tr class="bg-white align-middle">
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><?php echo $value['id'] ?></td>
                            <td class="d-md-flex gap-3 mt-3">
                                <!-- Add option to retrieve or delete archived resolution -->
                                <a href="retrieve_resolutions.php?Id=<?php echo $value['id']?>"><i class="far fa-share-square fa-lg"></i></a>
                                <a href="delete_resolutions.php?Id=<?php echo $value['id']?>"><i class="far fa-trash fa-lg"></i></a>
                            </td>
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end resolutions list table -->
        </div>
        <!-- end content page -->
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>
