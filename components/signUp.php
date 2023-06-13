<div id="nasignUp" class="w-full flex flex-col md:flex-row justify-center  items-center p-2 md:p-16 border-t-8 border-gray-700">
   <div class="md:w-1/2 w-full mt-2 md:mt-0 flex justify-center">
      <form method="POST">
         <div class="flex justify-center items-center flex-col gap-2">
            <label class="font-bold">Унесите ваше податке </label>
            <input id="name" name="name" type="text" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Име" >
            <input id="lastname" name="lastname" type="text" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Презиме" >
            <input id="username" name="username" type="text" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Корисничко име" >
            <input id="email" name="email" type="email" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Емаил" >
            <input id="password" name="password" type="password" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Шифра" > 
            <input id="password2" name="password_confirm" type="password" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Поновите шифру" > 
            <input id="birthday" name="birthday" type="date" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Поновите шифру" > 
            <button id="regUser" name="register_user" type="submit" class="flex-none rounded-md bg-white px-3.5 py-2.5 text-gray-900 ease-in-out duration-300 text-sm font-bold shadow-sm hover:bg-gray-800 hover:text-white ">Направи налог</button> 
         </div>  
      </form>    
   </div>
   <div class="md:w-1/2 w-full flex justify-center items-center">
      <?php include("./assets/signUp.svg") ?>
   </div>
</div>


<style>
   #birthday{
      width: 200px;
   }
</style>