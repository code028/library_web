<?php 

if(isset($_SESSION['info'])){
    header("refresh:1.2; url=./pages/home.php");
}else {
    if(isset($_SESSION['user'])){
        header("Location: ./pages/home.php");
    }
}


?>