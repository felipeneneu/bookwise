<h1 class="text-2xl mt-6 font-bold text-primary"><?= $book->title ?></h1>
<div class=" bg-neutral p-4 rounded border-stone-800 border-2">
  <div class="flex gap-3">
    <div class="w-1/3">
      <?php if ($book->img == true): ?>
        <img src="<?= $book->img ?>" alt="">
      <?php else: ?>
        <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._AC_UF1000,1000_QL80_.jpg" alt="">
      <?php endif ?>

    </div>

    <div class="px-2 space-y-2 w-full text-neutral-content">
      <a href="/livro?id=<?= $book->id ?>" class="font-semibold text-neutral-content hover:underline"><?= $book->title ?></a>
      <div class="text-xs italic"><?= $book->autor ?></div>
      <div class="text-xs italic">4,9 ⭐⭐⭐⭐⭐ 38.943 avaliações de clientes </div>
      <div class="text-sm mt-2"><?= $book->descricao ?>
      </div>
    </div>
  </div>



</div>
<div></div>