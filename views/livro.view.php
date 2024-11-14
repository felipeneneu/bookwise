<h1 class="text-2xl mt-6 font-bold"><?= $book['title'] ?></h1>
<div class=" bg-stone-900 p-2 rounded border-stone-800 border-2">
  <div class="flex gap-3">
    <div class="w-1/3">
      <img src="../public/assets/img/81ibfYk4qmL._AC_UF1000,1000_QL80_.jpg" alt="">
    </div>

    <div class="px-2 space-y-2 w-full">
      <a href="/livro?id=<?= $book['id'] ?>" class="font-semibold text-white hover:underline"><?= $book['title'] ?></a>
      <div class="text-xs italic"><?= $book['autor'] ?></div>
      <div class="text-xs italic">4,9 ⭐⭐⭐⭐⭐ 38.943 avaliações de clientes </div>
      <div class="text-sm mt-2"><?= $book['descricao'] ?>
      </div>
    </div>
  </div>


</div>