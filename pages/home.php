<?php 
    include "../config/[index].php";
    include "../config/redirection/for_index.php";
    getCurrentUser($_SESSION['user'],$user,$connection);
    getAllBooks($book,$connection);
    
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Почетна страна</title>
    <!-- Tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <link rel="stylesheet" href="..//public/styles.css" />

    <link rel="stylesheet" href="../style.css" />
    <script src="https://kit.fontawesome.com/c67e9f6704.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-900 min-h-fit min-w-full">
    <!-- Navbar -->
    <?php include_once('../components/navbar2.php') ?>
    <!-- Notification -->
    <div class="container mx-auto flex justify-center items-center p-4">
        <?php include('../components/nofitication.php') ?>
    </div>
    <!-- Hero -->
    <div class="hero mt-2 container mx-auto flex justify-between items-center xl:items-end p-4 rounded-md flex-col xl:flex-row">
        <div class="flex">
            <img id="astronaut" class="astronaut" src="../assets/astronaut.png" alt="astronaut">
        </div>
        <div class="flex justify-center -mt-10 xl:mb-20 flex-grow">
            <h1 class="sm:text-normal md:text-2xl lg:text-5xl font-extrabold">Прочитај, откриј, инспириши се</h1>
        </div>
    </div>
    <!-- Books -->
    <div class="mt-2 container mx-auto flex flex-col justify-center items-center p-10 bg-gray-800 bg-opacity-10 rounded-lg">
        <!-- SEARCH -->
        <div class="w-full flex flex-wrap gap-10 items-center justify-center my-5 py-4 <?php if(isset($_POST["search"])){ echo "border-b-4";} ?>">
            <?php include("../components/search.php") ?>
            <?php include("../components/searchedBooks.php") ?>
        </div>
        <div class="flex flex-wrap justify-center gap-16">
            <?php include("../components/bookDesign.php") ?>         
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('../components/footer.php') ?>
</body>
</html>