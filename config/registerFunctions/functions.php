<?php 
    // Register Functions

    function check_user_exist($username,$email,$password,$password_confirm,&$array,$connection,&$register_user){
        $query = $connection->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $query->bind_param("ss",$username,$email);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            addMessage($array["errors"],"Корисник већ постоји!");
            $register_user = FALSE;
        }else {
            check_password_match($password,$password_confirm,$array,$register_user);
        }
    }

    function check_password_match($password,$password_confirm,&$array,&$register_user){
        if($password == $password_confirm){
            $register_user = TRUE;
        }else {
            addMessage($array["errors"],"Шифра се не поклапају!");
            $register_user = FALSE;
        }
    }
    // ,$name,$lastname,$username,$email,$password,$birthday,$regDate,$lastLog
    function create_account($connection,&$array,$name,$lastname,$username,$email,$password,$birthday,$regDate,$lastLog,&$register_user){
        if($register_user == TRUE){
            $query = $connection->prepare("INSERT INTO users (name,lastname,username,email,password,birthday,regDate,lastLog) VALUES(?,?,?,?,?,?,?,?)");
            $query->bind_param("ssssssss",$name,$lastname,$username,$email,$password,$birthday,$regDate,$lastLog);
            $query->execute();
            addMessage($array['notification'], "Успешно сте направили налог!");
        }
    }

?>