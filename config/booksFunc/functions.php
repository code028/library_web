<?php 

if(isset($_POST['get_book'])){
    $book_id = $_POST['book_id'];
    $user_id = $_SESSION['user'];
    $currentDate = date("Y/m/d");
    $endDate = date('Y-m-d', strtotime($currentDate. ' + 14 days'));
    $book_price = $_POST['book_price'];
    $credit = 0;

    $get_credit = $connection->prepare("SELECT kredit FROM users WHERE id = ?");
    $get_credit->bind_param("s",$user_id);
    $get_credit->execute();

    $credit_result = $get_credit->get_result();
    if($credit_result->num_rows > 0){
        while($row = $credit_result->fetch_assoc()){
            $credit = $row['kredit'];
        }
    }

    if($credit > $book_price){
        $credit = $credit - $book_price;
    
        $query = $connection->prepare("SELECT broj_primeraka FROM knjige WHERE id = ?");
        $query->bind_param("s",$book_id);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($row['broj_primeraka'] >=1 ){
                    $quantity = $row['broj_primeraka'];
                    $newQuantity = $quantity - 1;

                    $update = $connection->prepare("UPDATE knjige SET broj_primeraka = ? WHERE id = ?");
                    $update->bind_param("ss",$newQuantity,$book_id);
                    $update->execute();
                    
                    $query = $connection->prepare("INSERT INTO narucene_knjige(korisnik_id,knjiga_id,day_start,day_end) VALUES(?,?,?,?)");
                    $query->bind_param("ssss",$user_id,$book_id,$currentDate,$endDate);
                    $query->execute();

                    $query2 = $connection->prepare("UPDATE users SET kredit = ? WHERE id = ?");
                    $query2->bind_param("ss",$credit,$user_id);
                    $query2->execute();

                    addMessage($messages['notification'],"Књига ће бити испоручена у најкраћем могућем року!");
                    header('refresh:1.5 , http://localhost/bookstore/pages/home.php');

                }else {
                    addMessage($messages['errors'],"Тренутно дата књига није на располагању :(");
                };
            };
        };
    }else {
        addMessage($messages['errors'],"Немате довољно средстава на рачуну :(");
    }
};

function getOrderedBooks(&$array,$connection){
    $query = $connection->prepare("SELECT * FROM narucene_knjige WHERE korisnik_id = ?");
    $query->bind_param("s",$_SESSION['user']);
    $query->execute();

    $result = $query->get_result();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($array["id"],$row["id"]);
            array_push($array["korisnik_id"],$row["korisnik_id"]);
            array_push($array["knjiga_id"],$row["knjiga_id"]);
            array_push($array["day_start"],$row["day_start"]);
            array_push($array["day_end"],$row["day_end"]);
            array_push($array["status"],$row["status"]);
        }
    }

}

function getUserOrderedBooks(&$array,&$array2,$connection){
    foreach($array['knjiga_id'] as $index => $item){
        $query = $connection->prepare("SELECT * FROM knjige WHERE id = ?");
        $query->bind_param("s",$array['knjiga_id'][$index]);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($array2['id'],$row['id']);
                array_push($array2['name'],$row['naziv']);
                array_push($array2['author'],$row['autor']);
                array_push($array2['zanr'],$row['zanr']);
                array_push($array2['year'],$row['godina_izdanja']);
                array_push($array2['quantity'],$row['broj_primeraka']);
                array_push($array2['price'],$row['cena']);
                array_push($array2['rating'],$row['rating']);
            }
        }
    }
}

function getAllOrdersBooks(&$array,$connection){
    $const = "salje se";
    $query = $connection->prepare("SELECT * FROM narucene_knjige WHERE status = ?");
    $query->bind_param('s',$const);
    $query->execute();
    $result = $query->get_result();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($array["id"],$row["id"]);
            array_push($array["korisnik_id"],$row["korisnik_id"]);
            array_push($array["knjiga_id"],$row["knjiga_id"]);
            array_push($array["day_start"],$row["day_start"]);
            array_push($array["day_end"],$row["day_end"]);
            array_push($array["status"],$row["status"]);
        }
    }
}

function getAllOrdersForAdmin(&$array,&$array2,$connection){
    foreach($array['knjiga_id'] as $index => $item){
        $query = $connection->prepare("SELECT * FROM knjige WHERE id = ?");
        $query->bind_param("s",$array['knjiga_id'][$index]);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($array2['id'],$row['id']);
                array_push($array2['name'],$row['naziv']);
                array_push($array2['author'],$row['autor']);
                array_push($array2['zanr'],$row['zanr']);
                array_push($array2['year'],$row['godina_izdanja']);
                array_push($array2['quantity'],$row['broj_primeraka']);
                array_push($array2['price'],$row['cena']);
                array_push($array2['rating'],$row['rating']);
            }
        }
    }

}

?>