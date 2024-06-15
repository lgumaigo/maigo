<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
include 'connection.php';

// Establish connection to the database
$con = connection();

// Count the number of events
$result_events = $con->query("SELECT * FROM events");
$nbr_events = mysqli_num_rows($result_events);

// Count the number of news
$result_news = $con->query("SELECT * FROM news");
$nbr_news = mysqli_num_rows($result_news);

// Count the number of users
$result_users = $con->query("SELECT * FROM users");
$nbr_users = mysqli_num_rows($result_users);
?>

<!-- start content page -->
<div class="container-fluid px">
    <?php include "component/header.php"; ?>
    <div class="cards row gap-3 justify-content-center mt-5">
        <div class=" card__items card__items--blue col-md-3 position-relative">
            <div class="card__students d-flex flex-column gap-2 mt-3">
                <i class="far fa-calendar-alt h3"></i>
                <span>Events</span>
            </div>
            <div class="card__nbr-students">
                <span class="h5 fw-bold nbr"><?php echo $nbr_events; ?></span>
            </div>
        </div>

        <div class=" card__items card__items--rose col-md-3 position-relative">
            <div class="card__Course d-flex flex-column gap-2 mt-3">
                <i class="far fa-newspaper h3"></i>
                <span>News</span>
            </div>
            <div class="card__nbr-course">
                <span class="h5 fw-bold nbr"><?php echo $nbr_news; ?></span>
            </div>
        </div>

        <div class="card__items card__items--gradient col-md-3 position-relative">
            <div class="card__users d-flex flex-column gap-2 mt-3">
                <i class="fal fa-user h3"></i>
                <span>Users</span>
            </div>
            <span class="h5 fw-bold nbr"><?php echo $nbr_users; ?></span>
        </div>
    </div>
</div>
<?php session_start(); ?>

<div class="bg-sidebar vh-100 w-50 position-fixed">
    <div class="log d-flex justify-content-between">
        <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold">Admin Dashboard</h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>
    <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
        <img class="rounded-circle" src="../img/images.jpeg" alt="img-admin" height="120" width="120">
        <span class="h7 admin-color">Admin</span>
    </div>
    <div class="bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4">
        <ul class="d-flex flex-column list-unstyled">
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="dashboard.php"><i class="fal fa-home-lg-alt me-2"></i> <span>Home</span></a>
            </li>

            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'events_list.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="events_list.php"><i class="far fa-calendar-alt me-2"></i>
                    <span>Events</span></a></li>
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'news_list.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="news_list.php"><i class="far fa-newspaper me-2"></i>
                    <span>News</span></a></li>
            <!--   <li class="h7"><a class=" nav-link text-dark" href="students_list.php"><i
                    class="far fa-solid fa-eye me-2"></i> <span>Resolution</span></a></li> -->
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'archived_list.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="archived_list.php"><i class="far fa-folder me-2"></i>
                    <span>Events Archive</span></a></li>
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'archived_list1.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="archived_list1.php"><i class="far fa-folder me-2"></i>
                    <span>News Archive</span></a></li>
        </ul>
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Logout</span><i
                        class="fal fa-sign-out-alt ms-2"></i></a></li>
        </ul>
    </div>
</div>

        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>