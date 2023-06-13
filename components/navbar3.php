
<div id="navbar" class="w-full flex justify-between items-center p-4 md:flex-row">
    <div class="flex justify-between items-center space-x-4 p-2 text-2xl sm:text-3xl cursor-pointer lg:ml-8">
        <a href="http://localhost/bookstore/">
            <span class="link link-underline link-underline-black text-white ring-offset-2 font-semibold">Библиотека</span>
        </a>
    </div>    
    <div class="flex justify-end items-center gap-3">
        <a class="sm:block hidden outline-0 w-fit h-fit p-2 font-semibold md:text-base rounded-md text-white text-xl hover:text-gray-500 ease-in-out duration-300 hover:outline-32 bg-transparent" href="#">Кредит <?php foreach($user['id'] as $index => $item){ echo $user['credit'][$index];} ?> $</a>
        <a class="outline-0 w-fit h-fit p-2 font-semibold md:text-base text-sm rounded-md text-white hover:text-gray-900 ease-in-out duration-300 hover:outline-32 bg-transparent " href="http://localhost/bookstore/pages/home.php"><i class="fa-solid fa-house fa-2xl"></i></a>
        <form method="POST">
            <button type="submit" name="logout" class="outline-0 bg-white w-fit h-8 p-2 font-semibold md:text-base text-sm rounded-md text-gray-900 ease-in-out duration-300 hover:outline-32 hover:bg-gray-900 hover:text-white ">Излогујте се</button>
        </form>
    </div>
</div>

<style>
    #navbar{
        background-color: rgba(0, 0, 0, 0.2)
    }

    .link-underline {
        border-bottom-width: 0;
        background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
        background-size: 0 3px;
        background-position: 0 100%;
        background-repeat: no-repeat;
        transition: background-size .5s ease-in-out;
    }

    .link-underline-black {
        background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff)
    }

    .link-underline:hover {
        background-size: 100% 3px;
        background-position: 0 100%;
    }
</style>