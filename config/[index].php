<?php 

include_once "connection.php";
include_once "variables.php";
include_once "functions.php";

// Functions for books
include_once "booksFunc/functions.php";
include_once "booksFunc/removeBook.php";
include_once "booksFunc/searchBook.php";
include_once "booksFunc/sendBook.php";
include_once "booksFunc/updateBook.php";
include_once "booksFunc/addNewBook.php";

// Functions for login
include_once "loginFunctions/login.php";
include_once "loginFunctions/logout.php";

// Functions for register
include_once "registerFunctions/register.php";

// Email List functions
include_once "email/email.php"

// read($messages['errors']); ovo

?>