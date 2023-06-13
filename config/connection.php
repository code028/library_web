<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "biblioteka";

    $connection = new mysqli($servername,$username,$password,$database);
  
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }else {
        return;
    }
?>
