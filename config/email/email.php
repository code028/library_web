<?php

if(isset($_POST['addEmailToList'])){
    $email = $_POST['emailUser'];
    $date = date('Y-m-d');
    $email_len = strlen($email);


    $query = $connection->prepare("SELECT email FROM news where email = ?");
    $query->bind_param("s",$email);
    $query->execute();

    $result = $query->get_result();
    
    if($result->num_rows > 0){
        addMessage($messages['errors'],"Емаил " . $email . " је већ додат");
    }else {
        if($email_len < 14){
            addMessage($messages['errors'],"Емаил " . $email . " је неважећи");
        }else {
            $query = $connection->prepare("INSERT INTO news (email,pristupio) VALUES(?,?)");
            $query->bind_param("ss",$email,$date);
            $query->execute();
            addMessage($messages['notification'],"Емаил " . $email . " је успешно додат");
        }
    }
}

?>