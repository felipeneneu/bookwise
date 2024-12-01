<div class=" bg-neutral p-4 rounded border-stone-800 border-2">
  <div class="flex gap-3">
    <div class="w-1/3 ">
      <?php if ($book->img == true): ?>
        <img class="rounded" src="<?= $book->img ?>" alt="<?= $book->title ?>">
      <?php else: ?>
        <img class="rounded" src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._AC_UF1000,1000_QL80_.jpg" alt="<?= $book->title ?>">
      <?php endif ?>

    </div>

    <div class="px-2 space-y-2 w-full text-neutral-content">
      <a href="/livro?id=<?= $book->id ?>" class="font-semibold text-neutral-content hover:underline"><?= $book->title ?></a>
      <div class="text-xs italic"><?= $book->autor ?></div>
      <div class="text-xs italic"><?= str_repeat("⭐", (int)$book->nota_avaliacao) ?><?= $book->count_avaliacoes ?> Avaliações </div>

      <div class="text-sm mt-2 overflow-ellipsis">
        <?php if (strlen($book->descricao) > 150) {
          echo substr($book->descricao, 0, 150);
        } else {
          echo $book->descricao;
        }
        ?>
        ...
      </div>
    </div>
  </div>



</div>