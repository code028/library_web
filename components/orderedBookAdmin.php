<?php foreach($book['id'] as $index => $item): ?>
  <?php 
    $user_id = $all_ordered_books['korisnik_id'][$index];
    $getUser = $connection->prepare("SELECT username FROM users WHERE id = ? ");
    $getUser->bind_param("s",$user_id);
    $getUser->execute();
    $getResult = $getUser->get_result();
    if($getResult->num_rows > 0){
        while($row = $getResult->fetch_assoc()){
            $username = $row['username'];
        }
    } 
  ?>
  <!-- Just to take each user for card info -->
  <input type="text" class="hidden" name="user_id" value="<?php echo $all_ordered_books['korisnik_id'][$index] ?>" />          
  <!-- Template for Sus work -->
  <div class="w-full max-w-sm text-white rounded-lg shadow   bg-gray-900 dark:border-gray-700">
    <p>
        <?php include("../assets/bookLogo.svg")?>
    </p>
    <div class="px-5 pb-5">
        <p>
            <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white"><?php echo $book['name'][$index]; ?></h5>
        </p>
        <p>
            <h5 class="text-xl font-semibold tracking-tight text-white dark:text-white"><?php echo $book['author'][$index]; ?></h5>
        </p>
        <div class="flex items-center mt-2.5 mb-5">
          <?php 
            $length = $book['rating'][$index];
            for($i = 1; $i <= round($length,2); $i++):?>
              <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title><?php echo "Rating: ". $length;?></title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <?php endfor;?>
          <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $book['rating'][$index];  ?></span>
        </div>
        <div class="flex items-center justify-between ">
          <span class="text-3xl font-bold text-white dark:text-white mr-8"><?php echo $book['price'][$index] ?>$</span>
          <form method="POST">
            <input type="text" class="hidden" name="book_id" value="<?php echo $all_ordered_books['id'][$index] ?>" />
            <input type="text" class="hidden" name="user_id" value="<?php echo $all_ordered_books['korisnik_id'][$index] ?>" />
            <button type="submit" name="send_book" class="text-gray-900 cursor-pointer font-extrabold bg-white hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Пошаљи књигу</button>
          </form>
        </div>
        <div class=" flex justify-between">
          <!-- ISpisujem ime -->
          <div class="text-sm pt-4 font-extrabold">
            <div class="text-md font-semibold py-2">
              <?php  
                echo "Ид наруџбине: " . $all_ordered_books['id'][$index];
              ?>
            </div>
            <div class="text-md font-semibold py-2">
              <?php
                echo "Корисник: ". $username;
              ?>
            </div>
            <div class="text-md font-semibold py-2">
              <?php
                echo "Ред. бр. корисника:  " . $all_ordered_books['korisnik_id'][$index];
              ?>
            </div>
          </div>  
        <div>
        </div>
        </div>
    </div>
</div>

<?php endforeach; ?>
