<h1 class="text-2xl mt-6 font-bold">#Explorar</h1>
<form class="w-full flex space-x-2">
  <input
    type="text"
    name="pesquisar"
    class="border-slate-800 border-2 rounded-md bg-slate-950 text-sm focus:outline-none px-2 py-2 w-full"
    placeholder="Pesquise seu livro" />
  <button type="submit" class="bg-slate-950 w-[200px] rounded-md text-white font-semibold hover:bg-slate-800 border-slate-800 border-2 text-center">Pesquisar</button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

  <!-- Livro -->
  <?php foreach ($books as $book): ?>
    <div class=" bg-slate-950 p-2 rounded border-slate-800 border-2">
      <div class="flex gap-3">
        <div class="w-1/3"><img src="../public/assets/img/81ibfYk4qmL._AC_UF1000,1000_QL80_.jpg" alt=""></div>

        <div class="px-2 space-y-2">
          <a href="/livro?id=<?= $book->id ?>" class="font-semibold text-white hover:underline"><?= $book->title ?></a>
          <div class="text-xs italic"><?= $book->autor ?></div>
          <div class="text-xs italic">4,9 ⭐⭐⭐⭐⭐ 38.943 <br>avaliações de clientes </div>
        </div>
      </div>

      <div class="text-sm mt-2 p-2"><?= $book->descricao ?>
      </div>
    </div>
  <?php endforeach; ?>


  <!-- Repeted -->


</section>