<?php
//MySQL database connection
  function connection() {
 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "maigo_news";

    $con = new mysqli($host, $username, $password, $database);

    if($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
  }

?>