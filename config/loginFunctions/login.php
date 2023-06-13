<?php 

    if(isset($_POST['login_user'])){
        $fields = $_POST['input_field'];
        $password = md5($_POST['password']);
        $lastLog = date('Y-m-d');

        $query = $connection->prepare("SELECT * FROM users WHERE (username = ? OR email = ?) AND password = ? ");
        $query->bind_param("sss",$fields,$fields,$password);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                getCurrentUser($row['id'],$user,$connection);
            }
            
            $update = $connection->prepare("UPDATE users SET lastLog = ? WHERE username = ?");
            $update->bind_param("ss",$lastLog,$user['username'][0]);
            $update->execute();

            checkModeRole($user,$connection);
            
            $_SESSION['user'] = $user['id'][0];
            $_SESSION['info'] = TRUE;
            addMessage($messages['notification'],"Успешно сте се пријавили!");
        }else {
            addMessage($messages['errors'],'Подаци су невалидни!');
        }
        
    }

?>