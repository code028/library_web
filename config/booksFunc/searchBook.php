<?php 

if(isset($_POST['search'])){
    $search_param = $_POST['search_item'];

    $query = $connection->prepare("SELECT * FROM knjige WHERE naziv LIKE '%$search_param%' OR autor LIKE '%$search_param%' OR zanr LIKE '%$search_param%' OR cena LIKE '%$search_param%' OR rating LIKE '%$search_param%'");
    $query->execute();

    $result = $query->get_result();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($search_book["id"],$row["id"]);
            array_push($search_book["name"],$row["naziv"]);
            array_push($search_book["author"],$row["autor"]);
            array_push($search_book["zanr"],$row["zanr"]);
            array_push($search_book["year"],$row["godina_izdanja"]);
            array_push($search_book["quantity"],$row["broj_primeraka"]);
            array_push($search_book["price"],$row["cena"]);
            array_push($search_book["rating"],$row["rating"]);
        }
    }
}
   
?>