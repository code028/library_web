<?php 
    include "config/[index].php";
    include "config/redirection/for_page.php";  
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Библиотека</title>
    <!-- Tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <link rel="stylesheet" href="./public/styles.css" />

    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/1fc6dfdefe.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-900 min-h-fit min-w-full">
    <!-- Navbar -->
    <?php include_once('./components/navbar.php') ?>

    <!-- Notification -->
    <div class="container mx-auto flex justify-center items-center p-4">
        <?php include('./components/nofitication.php') ?>
    </div>

    <!-- Hero -->
    <div class="hero mt-2 container mx-auto flex justify-between items-center xl:items-end p-4 rounded-md flex-col xl:flex-row">
        <div class="flex">
            <img id="astronaut" class="astronaut" src="./assets/astronaut.png" alt="astronaut">
        </div>
        <div class="flex justify-center -mt-10 xl:mb-20 flex-grow">
            <h1 class="sm:text-normal md:text-2xl lg:text-5xl font-extrabold">Прочитај, откриј, инспириши се</h1>
        </div>
    </div>

    <!-- SignIn -->
    <div id="naSignIn" class="container mx-auto flex justify-center items-center">
        <?php include("./components/signIn.php") ?>
    </div>

    <!-- SignUp -->
    <div id="naSignUp" class="container mx-auto flex justify-center items-center">
        <?php include("./components/signUp.php") ?>
    </div>

    <!-- Newsletter -->
    <div class="container mx-auto flex justify-center items-center p-4">
        <?php include_once("./components/newsletter.php") ?>
    </div>


    <!-- Footer -->
    <?php include_once('./components/footer.php') ?>

</body>
</html>