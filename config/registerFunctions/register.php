<?php 
    include_once "functions.php";
    
    if(isset($_POST['register_user'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $password_confirm = md5($_POST['password_confirm']);
        $birthday = $_POST['birthday'];
        $regDate = date('Y-m-d');
        $lastLog = date('Y-m-d');

        check_user_exist($username,$email,$password,$password_confirm,$messages,$connection,$register_user);
        create_account($connection,$messages,$name,$lastname,$username,$email,$password,$birthday,$regDate,$lastLog,$register_user);
    }

?>