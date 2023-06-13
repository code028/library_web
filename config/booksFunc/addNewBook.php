<?php 

if(isset($_POST['addNewBook'])){
    $name = $_POST['name'];
    $autor = $_POST['autor'];
    $zanr = $_POST['zanr']; 
    $year = $_POST['year'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];

    $qeury = $connection->prepare("INSERT INTO knjige (naziv,autor,zanr,godina_izdanja,broj_primeraka,cena,rating) VALUES(?,?,?,?,?,?,?)");
    $qeury->bind_param("sssssss",$name,$autor,$zanr,$year,$quantity,$price,$rating);
    $qeury->execute();
    addMessage($messages['notification'],"Успешно сте додали књигу!");
    
    header('Location: http://localhost/bookstore/pages/profile.php');
    exit;
}

?>