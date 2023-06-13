<?php 
    if(isset($_POST["send_book"])){
        $book_id = $_POST['book_id'];
        $user_id = $_POST['user_id'];
        $status = "poslato";
        
        $getUser = $connection->prepare("SELECT username FROM users WHERE id = ? ");
        $getUser->bind_param("s",$user_id);
        $getUser->execute();
        $getResult = $getUser->get_result();
        if($getResult->num_rows > 0){
            while($row = $getResult->fetch_assoc()){
                $username = $row['username'];
            }
        } 

        $query = $connection->prepare("UPDATE narucene_knjige SET status = ? WHERE id = ?");
        $query->bind_param("ss",$status,$book_id);
        $query->execute();

        $sentences = "Књига под ид:". $book_id . " је упешно послата кориснику ". $username;
        addMessage($messages['notification'],$sentences);
        header("refresh:2; url= http://localhost/bookstore/pages/profile.php ");
    }
?>
