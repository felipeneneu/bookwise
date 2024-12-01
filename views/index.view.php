<h1 class="text-2xl mt-6 font-bold text-neutral-content">#Explorar</h1>
<form class="w-full flex space-x-2">
  <label class="input input-bordered flex items-center gap-2 w-full">
    <input type="text" class="grow" placeholder="Pesquise seu livro" name="pesquisar" />
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 16 16"
      fill="currentColor"
      class="h-4 w-4 opacity-70">
      <path
        fill-rule="evenodd"
        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
        clip-rule="evenodd" />
    </svg>
  </label>
  <!-- <input
    type="text"
    name="pesquisar"
    class="border-base-100 border-2 rounded-md text-info bg-neutral text-sm focus:outline-none px-2 py-2 w-full"
    placeholder="Pesquise seu livro" />
  <button type="submit" class="btn btn-primary w-[200px] rounded-md text-white font-semibold text-center">Pesquisar</button> -->
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pb-10">

  <!-- Livro -->
  <?php foreach ($books as $book) {
    require 'partials/_index_book.php';
  } ?>


  <!-- Repeted -->


</section>