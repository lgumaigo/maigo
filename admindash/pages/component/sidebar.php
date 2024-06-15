<?php session_start(); ?>

<style>

.bg-sidebar {
    padding-top: 10px; /* Add padding to the top */
    padding-bottom: 10px; /* Add padding to the bottom */
}

/* Prevent blue highlight on click */
.nav-link:focus {
    outline: none;
}

/* Prevent shaking on click */
.nav-link:active {
    outline: none;
}

/* Hover effect */
.nav-link:hover {
    background-color:  #14A3C7;
}

/* Active link */
.nav-link.active {
    background-color: #14A3C7;
}

        </style>

<div class="bg-sidebar vh-100 w-10 position-fixed">
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
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'resolutions_list.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="resolutions_list.php"><i class="fal fa-check-square me-2"></i>
                    <span>Resolutions</span></a></li>
                
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'archived_list.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="archived_list.php"><i class="far fa-folder me-2"></i>
                    <span>E-Archive</span></a></li>
            <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'archived_list1.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="archived_list1.php"><i class="far fa-folder me-2"></i>
                    <span>N-Archive</span></a></li>
                    <li class="h7 <?php echo (basename($_SERVER['PHP_SELF']) == 'archived_list3.php') ? 'active' : ''; ?>"><a
                    class="nav-link text-dark" href="archived_list3.php"><i class="far fa-folder me-2"></i>
                    <span>R-Archive</span></a></li>
        </ul>
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Logout</span><i
                        class="fal fa-sign-out-alt ms-2"></i></a></li>
        </ul>
    </div>
</div>

<style>
        /* Prevent blue highlight on click */
.nav-link:focus {
    outline: none;
}

/* Prevent shaking on click */
.nav-link:active {
    outline: none;
}
/* Hover effect */

.nav-link:hover {
    background-color:  #12B49E;
}

/* Active link */
.nav-link.active {
    background-color: #12B49E;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Add active class to corresponding link if it's the current page
    $(document).ready(function() {
        var currentPage = "<?php echo basename($_SERVER['PHP_SELF']); ?>";
        $(".nav-link[href='" + currentPage + "']").addClass("active");

        // Handle click event for navigation links
        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active"); // Remove active class from all links
            $(this).addClass("active"); // Add active class to clicked link
        });

        // Smooth scroll when using trackpad or mouse wheel
        $('#sidebar').on('wheel', function(e) {
            e.preventDefault();
            var delta = e.originalEvent.deltaY;
            this.scrollTop += (delta < 0 ? -30 : 30);
        });
    });
</script>
