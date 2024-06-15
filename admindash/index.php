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
      <div class="form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1">Maigo Admin</h1>
        <div>
          <h2 class="sign-in text-uppercase">Sign In</h2>
          <p>Enter your credentials to access your account</p>
          <?php
            if(isset($_GET['error'])){
              if($_GET['error'] == "please enter your username or password"){
                echo '<div class="alert alert-danger" role="alert">
              Please enter your username or password
            </div>';
              }
              elseif($_GET['error'] == "username or password not found"){
                echo '<div class="alert alert-danger" role="alert">
                Username or password not found
            </div>';
              }
            }    
          ?>
        </div>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username']; } ?>">
          </div>
          <div class="mb-3 text-start">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password']; } ?>" autocomplete="on">
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
