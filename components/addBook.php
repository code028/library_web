<div class="lg:w-2/4 md:3/4 sm:w-full flex justify-center  items-center">
    <form method="POST" class="flex flex-col w-full gap-x-4 gap-y-4 justify-center items-center">
        <p class="font-extrabold font-xl border-b-4 ">Унесите нову књигу</p>
        <input name="name" type="text" autocomplete="off" required class="min-w-0 w-full flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Назив">
        <div class="flex flex-row w-full gap-4">
            <input name="autor" type="text" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Аутор">
            <input name="zanr" type="text" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Жанр">
        </div>
        <div class="flex flex-row w-full gap-4">
            <input name="year" type="number" min="0" max="2023" step="1"  autocomplete="off" required class="min-w-0 w-1/2 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Година издања">
            <input name="quantity" type="number" min="1" autocomplete="off" required class="min-w-0 flex-auto rounded-md border-0 w-1/2 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Количина">
        </div>
        <div class="flex flex-row w-full gap-4">
            <input name="price" type="number" min="0" autocomplete="off" required class="min-w-0 flex-auto w-1/2 rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Цена књиге">
            <input name="rating" step="0.01" min="1" max="5" type="number" autocomplete="off" required class="min-w-0 w-1/2 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Рејтинг књиге">
            </div>
        <button type="submit" name="addNewBook" class="flex-none flex-grow w-full rounded-md bg-white px-3.5 py-2.5 text-gray-900 text-sm font-semibold shadow-sm hover:bg-gray-900 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Потврди</button>
    </form>
</div>