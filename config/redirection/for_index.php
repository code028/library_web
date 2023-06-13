<?php 

    if($_SESSION['user'] == ""){
        header("Location: ../index.php");
    }
    unset($_SESSION['info']);

?>