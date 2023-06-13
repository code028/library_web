<?php 
  if(isset($_POST['logout'])){
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
?>