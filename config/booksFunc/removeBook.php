<?php 

if(isset($_POST['remove_book'])){
    $book_id = $_POST['book_id'];
    $user_id = $_SESSION['user'];
    
    $book_id_from_knjige = $_POST['book_id_from_knjige'];
    $book_price = 0;
    
    $current_quantity = 0;
    $credit = 0;

    $query = $connection->prepare('SELECT cena FROM knjige INNER JOIN narucene_knjige ON knjige.id = ?');
    $query->bind_param("s",$book_id_from_knjige);
    $query->execute();

    $result = $query->get_result();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $book_price = $row['cena'];
        }
    }

    $query2 = $connection->prepare("SELECT kredit FROM users WHERE id = ?");
    $query2->bind_param("s",$user_id);
    $query2->execute();

    $result2 = $query2->get_result();
    
    if($result2->num_rows > 0){
        while($row = $result2->fetch_assoc()){
            $credit = $row['kredit'];
        }
    }

    $credit = $credit + $book_price;

    $query3 = $connection->prepare('UPDATE users SET kredit = ? WHERE id = ?');
    $query3->bind_param("ss",$credit,$user_id);
    $query3->execute();

    $query4 = $connection->prepare('DELETE FROM narucene_knjige WHERE id = ?');
    $query4->bind_param("s",$book_id);
    $query4->execute();

    $query5 = $connection->prepare("SELECT broj_primeraka FROM knjige WHERE id = ?");
    $query5->bind_param("s",$book_id_from_knjige);
    $query5->execute();

    $result5 = $query5->get_result();

    if($result5->num_rows > 0){
        while($row = $result5->fetch_assoc()){
            $current_quantity = $row['broj_primeraka'];
        }
    }

    $current2_quantity = $current_quantity + 1;

    $query6 = $connection->prepare('UPDATE knjige SET broj_primeraka = ? WHERE id = ?');
    $query6->bind_param("ss",$current2_quantity,$book_id_from_knjige);
    $query6->execute();

    header('Location: http://localhost/bookstore/pages/profile.php');
    exit;
}

?>