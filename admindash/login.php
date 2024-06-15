<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root"; // default username for XAMPP MySQL
$password = ""; // default password for XAMPP MySQL
$dbname = "maigo_news";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = ""; // Initialize error message variable

// Check if form is submitted
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
  

    // SQL query to check if the user exists and the password matches
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists and password matches, redirect to the dashboard
        header("Location: http://localhost/maigowebsite/admindash/pages/dashboard.php");
        exit();
    } else {
        // User doesn't exist or password is incorrect, set error message
        $_SESSION['error_message'] = "Wrong username or password. Please try again.";
        header("Location: login.php"); // Redirect to the login page
        exit();
    }
}

// Check if there's an error message in the session
if(isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Clear the error message from session
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1" >Maigo Admin</h1>
        <div>
          <h2 class=" sign-in text-uppercase">Sign In</h2>
        <p>Enter your credentials to access your account</p>
        </div>

        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php  if(isset($_COOKIE['username'])){echo $_COOKIE['username']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>" autocomplete="on">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Sign in</button>
          <p class="mt-4">Forgot your password? <a href="resetpass.php">Reset Password</a></p>
          
        </form>
      </div>
   </main>
   <script src="./js/bootstrap.bundle.js"></script>
   <script src="./js/validation.js"></script>
</body>
</html>