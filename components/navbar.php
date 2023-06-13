
<div id="navbar" class="w-full flex justify-between items-center p-4 md:flex-row">
    <div class="flex justify-between items-center space-x-4 p-2 text-3xl cursor-pointer lg:ml-8">
        <a href="http://localhost/bookstore/">
            <span class="link link-underline link-underline-black text-white ring-offset-2 font-semibold">Библиотека</span>
        </a>
    </div>    
    <div class="sm:block hidden justify-between items-center space-x-4 lg:mr-8 text-2xl  ">
        <a href="#naSignIn">
            <button type="button" class="outline-0 bg-white w-fit h-fit p-2 font-semibold rounded-md text-base text-gray-900 ease-in-out duration-300 hover:outline-32 hover:bg-gray-900 hover:text-white ">Пријавите се</button>
        </a>
        <a href="#naSignUp">
            <button type="button" class="outline-0 bg-white w-fit h-fit p-2 font-semibold rounded-md text-base text-gray-900 ease-in-out duration-300 hover:outline-32 hover:bg-gray-900 hover:text-white ">Направите налог</button>
        </a>
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