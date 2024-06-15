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
><link rel="shortcut icon" type="image/x-icon" href="/img/iimages.png">



<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .dashboard {
            padding: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card__icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .card__title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .card__count {
            font-size: 28px;
            font-weight: bold;
        }

        /* Custom styles for each card */
        .card--events {
            background-color: #007bff;
            color: #fff;
        }

        .card--news {
            background-color: #28a745;
            color: #fff;
        }

        .card--users {
            background-color: #ffc107;
            color: #333;
        }

        .card--resolutions {
            background-color: #dc3545;
            color: #fff;
        }
        .card__items--green {
            background: linear-gradient(to right, #ffcc00, #ff99cc);
            color: #fff; /* Text color */

   
}
.card__items--blue {
    background: linear-gradient(to right, #33cccc, #66ff99);
    color: #fff; /* Text color */
}
.card__items--gradientt {
    background: linear-gradient(to right, #33ccff, #ff99cc);
    color: #fff; /* Text color */
}
    </style>
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
        $result_events = $con->query("SELECT * FROM events WHERE is_archived = 0"); // Count only non-archived events
        $nbr_events = mysqli_num_rows($result_events);

        // Count the number of news
        $result_news = $con->query("SELECT * FROM news WHERE is_archived = 0"); // Count only non-archived news
        $nbr_news = mysqli_num_rows($result_news);

        // Count the number of users
        $result_users = $con->query("SELECT * FROM users");
        $nbr_users = mysqli_num_rows($result_users);

        // Count the number of resolutions
        $result_resolutions = $con->query("SELECT * FROM resolutions WHERE is_archived = 0"); // Count only non-archived resolutions
        $nbr_resolutions = mysqli_num_rows($result_resolutions);
        ?>
        <!-- start content page -->
        <div class="container-fluid px">
            <?php include "component/header.php"; ?>
            <div class="cards row gap-3 justify-content-center mt-5">
            <div class="card__items card__items--blue col-md-3 position-relative">
            <div class="card__students d-flex flex-column gap-2 mt-3">
                        <i class="far fa-calendar-alt h3"></i>
                        <span>Events</span>
                    </div>
                    <div class="card__nbr-course">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_events; ?></span>
                    </div>
                </div>

                <div class="card__items card__items--gradient col-md-3 position-relative">
                <div class="card__Course d-flex flex-column gap-2 mt-3">
                        <i class="far fa-newspaper h3"></i>
                        <span>News</span>
                    </div>
                    <div class="card__nbr-course">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_news; ?></span>
                    </div>
                </div>

                <div class="card__items card__items--gradientt col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Users</span>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $nbr_users; ?></span>
                </div>
                
                <div class="card__items card__items--green col-md-3 position-relative">
                <div class="card__resolutions d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-check-square h3"></i>
                        <span>Resolutions</span>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $nbr_resolutions; ?></span>
                </div>
            </div>
        </div>
        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>
</html>


