<?php 
    // Variables : 

    $messages = array(
        "errors" => array(),
        "notification" => array(),
        "warnings" => array()
    );

    $user = array(
        "id" => array(),
        "name" => array(),
        "lastname" => array(),
        "username" => array(),
        "email" => array(),
        "birthday" => array(),
        "regDate" => array(),
        "lastLog" => array(),
        "credit" => array(),
    );

    $all_users = array(
        "id" => array(),
        "name" => array(),
        "lastname" => array(),
        "username" => array(),
        "email" => array(),
        "birthday" => array(),
        "regDate" => array(),
        "lastLog" => array(),
        "credit" => array(),
    );

    $book = array(
        "id" => array(),
        "name" => array(),
        "author" => array(),
        "zanr" => array(),
        "year" => array(),
        "quantity" => array(),
        "price" => array(),
        "rating" => array(),
    );

    $ordered_book = array(
        "id" => array(),
        "korisnik_id" => array(),
        "knjiga_id" => array(),
        "day_start" => array(),
        "day_end" => array(),
        "status" => array(),
    );

    $all_ordered_books = array(
        "id" => array(),
        "korisnik_id" => array(),
        "knjiga_id" => array(),
        "day_start" => array(),
        "day_end" => array(),
        "status" => array(),
    );

    $search_book = array(
        "id" => array(),
        "name" => array(),
        "author" => array(),
        "zanr" => array(),
        "year" => array(),
        "quantity" => array(),
        "price" => array(),
        "rating" => array(),
    );
    
    // Conditions for log / reg user
    
    $register_user = (bool)FALSE;
    $login_user = (bool)FALSE;
    
    // Global variables
    
    $username = "";
?>
