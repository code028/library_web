<?php 
    if(isset($_POST["update_book"])){
        $book_id = $_POST['book_id'];
        $addQuantity = $_POST['quantity'];
        $addQuantity_text = $addQuantity;
        $current_quantity = 0;

        $query = $connection->prepare("SELECT broj_primeraka FROM knjige WHERE id = ?");
        $query->bind_param("s",$book_id);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $current_quantity = $row['broj_primeraka'];
            }
        }
        
        $addQuantity = $addQuantity + $current_quantity; 

        $query2 = $connection->prepare("UPDATE knjige SET broj_primeraka = ? WHERE id = ?");
        $query2->bind_param("ss",$addQuantity,$book_id);
        $query2->execute();

        $sentences = "<div>Број примерака књиге ид:". $book_id . " је повећан за " . $addQuantity_text . "</div>";
        $sentences2 = "Укупно : " . $addQuantity ;
        addMessage($messages['notification'],$sentences);
        addMessage($messages['notification'],$sentences2);
        header("refresh:3; url= http://localhost/bookstore/pages/profile.php ");
    }
?>
