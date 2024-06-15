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
        // User exists and password matches, redirect based on action
            header("Location: admindash/pages/dashboard.php");
            exit();
       
        
    } else {
        // User doesn't exist or password is incorrect, set error message
        $_SESSION['error_message'] = "Wrong username or password. Please try again.";
        header("Location: admin.php"); // Redirect to clear the POST data
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient( #FF3CAC, #784BA0, #2B86C5);
    }

    .wrapper {
      width: 420px;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, .2);
      backdrop-filter: blur(9px);
      color: #fff;
      border-radius: 12px;
      padding: 30px 40px;
    }

    .wrapper h1 {
      font-size: 36px;
      text-align: center;
    }

    .wrapper .input-box {
      position: relative;
      width: 100%;
      height: 50px;
      margin: 30px 0;
    }

    .input-box input {
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 40px;
      font-size: 16px;
      color: #fff;
      padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder {
      color: #fff;
    }

    .input-box i {
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translate(-50%);
      font-size: 20px;
    }

    .wrapper .dropdown-wrapper {
      width: 100%;
      margin-bottom: 70px;
    }

    .wrapper .dropdown-wrapper .dropdown {
      background: transparent;
      position: relative;
    }

    .wrapper .dropdown-wrapper .dropdown select {
      width: calc(100% - 42px);
      height: 50px;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 40px;
      font-size: 16px;
      color: #fff;
      padding: 10px 45px 10px 20px;
    }

    .wrapper .dropdown-wrapper .dropdown select option {
      background-color: rgba(255, 255, 255, 0.1); /* Transparent background */
      color: #fff;
    }

    .wrapper .dropdown-wrapper .dropdown i {
      background: transparent;
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translate(-50%);
      font-size: 20px;
    }

    .wrapper .btn {
      width: 100%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
    }

    .register-link {
      font-size: 14.5px;
      text-align: center;
      margin: 20px 0 15px;
    }

    .register-link p a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="" method="post">
      <h1>Administrator</h1>
      <?php if(!empty($error_message)): ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
      <?php endif; ?>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      
      <div class="register-link">
        <p> <a href="index.php">Proceed to Website</a></p>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</html>
