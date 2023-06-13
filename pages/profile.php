<?php 
    include "../config/[index].php";
    include "../config/redirection/for_index.php";
    getCurrentUser($_SESSION['user'],$user,$connection);
    if(!isset($_SESSION['admin'])){    
        getOrderedBooks($ordered_book,$connection);
        getUserOrderedBooks($ordered_book,$book,$connection);
    }
    if(!empty(isset($_SESSION['admin']))){
        getAllOrdersBooks($all_ordered_books,$connection);
        getAllOrdersForAdmin($all_ordered_books,$book,$connection);
        getAllUsers($all_users,$connection);
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Библиотека - Профил</title>
    <!-- Tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <link rel="stylesheet" href="..//public/styles.css" />

    <link rel="stylesheet" href="../style.css" />
    <script src="https://kit.fontawesome.com/c67e9f6704.js" crossorigin="anonymous"></script>
</head>
<style>
    .center_modal{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 600px;
        z-index: 600;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body class="bg-gray-900 min-h-fit min-w-full">
    <!-- Navbar -->
    <?php include_once('../components/navbar3.php') ?>
    <!-- Notification -->
    <div class="container mx-auto flex justify-center items-center p-4">
        <?php include('../components/nofitication.php') ?>
    </div>
    <!-- Hero -->
    <div class="mt-5 container mx-auto flex justify-center items-center p-10 bg-gray-800 bg-opacity-10 rounded-lg">
        <div class="w-full md:w-3/4 relative flex md:justify-between md:flex-row flex-col items-center p-5 bg-gray-800 rounded-lg">
            <div class="md:w-1/2 md:mt-0 mt-5 w-full flex justify-center items-center flex-col font-extrabold text-2xl">
                <?php include("../assets/userLogo.svg")?>
                Рачун: <?php read($user['credit']) ?>$
            </div>
            <div class="md:w-1/2 w-full flex justify-center items-center mt-5">
                <div class="flex flex-col">
                    <div class="w-full p-3 font-semibold text-md text-white flex flex-col gap-4">
                        <div class="flex items-center overflow-x-auto">
                            <input class="bg-gray-700 rounded-md font-extrabold p-3 focus:outline-none cursor-default " value="<?php readForProfile("Име:",$user['name']); ?>"  readonly="readonly" />
                        </div>
                    </div>
                    <div class="w-full p-3 font-semibold text-md text-white flex flex-col gap-4">
                        <div class="flex items-center overflow-x-auto">
                            <input class="bg-gray-700 rounded-md font-extrabold p-3 focus:outline-none cursor-default " value="<?php readForProfile("Презиме:",$user['lastname']); ?>" readonly="readonly" />
                        </div>
                    </div>
                    <div class="w-full p-3 font-semibold text-md text-white flex flex-col gap-4">
                        <div class="flex items-center overflow-x-auto">
                            <input class="bg-gray-700 rounded-md font-extrabold p-3 focus:outline-none cursor-default " value="<?php readForProfile("Налог:",$user['username']); ?>" readonly="readonly" />
                        </div>
                    </div>
                    <div class="w-full p-3 font-semibold text-md text-white flex flex-col gap-4">
                        <div class="flex items-center overflow-x-auto">
                            <input class="bg-gray-700 rounded-md font-extrabold p-3 focus:outline-none cursor-default " value="<?php readForProfile("Емаил:",$user['email']); ?>" readonly="readonly" />
                        </div>
                    </div>
                    <div class="w-full p-3 font-semibold text-md text-white flex flex-col gap-4">
                        <div class="flex items-center overflow-x-auto">
                            <input class="bg-gray-700 rounded-md font-extrabold p-3 focus:outline-none cursor-default " value="<?php readForProfile("Приступио:",$user['regDate']); ?>" readonly="readonly" />
                        </div>
                    </div>
                </div>
            </div>
            <div class=" absolute top-0 right-0">
                <button id="settingsButton" type="submit"
                    class="text-white h-fit w-fit hover:bg-gray-700 bg-opacity-20 font-bold py-8 rounded-xl px-4 bg-transparent flex items-center focus:outline-none gap-4">
                    <i class="fa-solid fa-address-card fa-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Books 1-->
    <?php 
        if(!isset($_SESSION['admin'])): ?>
            <div class="mt-2 container mx-auto flex flex-col justify-center items-center p-10 bg-gray-800 bg-opacity-10 rounded-lg">
                <div class="flex flex-wrap w-full justify-center gap-12">
                    <?php include("../components/orderedBookDesign.php") ?>         
                </div>
            </div>
    <?php endif ?>
    <!-- Books 2 -->
    <?php 
        if(isset($_SESSION['admin'])): ?>
            <div class="mt-2 container mx-auto flex flex-col justify-center items-center p-10 bg-gray-800 bg-opacity-10 rounded-lg">
                <div class="flex flex-wrap w-full justify-center gap-12">
                    <?php include("../components/orderedBookAdmin.php"); ?>
                </div>
                <!-- SEARCH COMPONENT  -->
                <div class="w-full flex flex-wrap gap-10 items-center justify-center mt-5">
                    <?php include("../components/search.php") ?>
                    <?php include("../components/searchedBooksAdmin.php") ?>
                </div>
            </div>
            <div class="mt-2 container mx-auto flex flex-col justify-center items-center p-10 bg-gray-900 border-t-2 rounded-lg">
                <?php include("../components/addBook.php") ?>
            </div>
    <?php endif ?>
    
    <!-- Footer -->
    <?php include_once('../components/footer.php') ?>

</body>
</html>
