<div class="w-full flex flex-col md:flex-row justify-center  items-center p-2 md:p-16 border-t-8 border-gray-700">
   <div class="md:w-1/2 w-full flex justify-center items-center">
      <?php require_once("./assets/signIn.svg") ?>
   </div>
   <div class="md:w-1/2 w-full mt-2 md:mt-0 flex justify-center">
      <form method="POST">
         <div class="flex justify-center items-center flex-col gap-2">
            <label class="font-bold">Унесите ваше податке </label>
            <input id="input_field" name="input_field" type="text" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Емаил" >
            <input id="password" name="password" type="password" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Шифра" > 
            <button id="logUser" name="login_user" type="submit" class="flex-none rounded-md bg-white px-3.5 py-2.5 text-gray-900 ease-in-out duration-300 text-sm font-bold shadow-sm hover:bg-gray-800 hover:text-white ">Пријавите се</button> 
         </div>  
      </form>    
   </div>
</div>


<style>
   .signUpGirl{
      width: 500px;
      height: 500px;
   }

</style>