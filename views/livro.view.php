<h1 class="text-2xl mt-6 font-bold text-primary"><?= $book->title ?></h1>
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
      <div class="text-xs italic">4,9 ⭐⭐⭐⭐⭐ 38.943 avaliações de clientes </div>
      <div class="text-sm mt-2"><?= $book->descricao ?>
      </div>
    </div>
  </div>



</div>
<div></div>

<h2 class="text-xl mt-6 font-bold text-primary">Avalicões</h2>
<div class="grid grid-cols-4 gap-4 pb-10">

  <div class="col-span-3 gap-4 grid">
    <?php foreach ($avaliacoes as $avaliacao): ?>

      <div class="bg-neutral px-5 py-4 rounded border-stone-800 border-2 ">

        <div class="grid grid-cols-2 gap-5 ">
          <div class="flex flex-row gap-3 items-center">
            <div class="avatar">
              <div class="ring-primary ring-offset-base-100 w-5 h-5 rounded-full ring ring-offset-2">
                <img src="https://conteudo.imguol.com.br/c/entretenimento/3a/2022/05/18/tom-cruise-interpreta-pete-maverick-um-dos-principais-aviadores-da-marinha-1652905110877_v2_900x506.jpg" />
              </div>
            </div>
            <div>Postado por: <?= $avaliacao->user_name ?></div>

          </div>


        </div>
        <div class="px-8">
          <?= $avaliacao->avaliacao ?>
        </div>


      </div>
    <?php endforeach; ?>

    <?php if (auth()): ?>

  </div>

  <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl max-h-max pb-3">



    <form class="card-body" method="post" action="/avaliacao-criar">

      <div class="form-control">

        <?php if ($validacoes = flash()->get('validacoes')): ?>

          <div class="bg-red-900 px-4 py-2 rounded-md text-red-400 font-semibold border-red-800 border-2">

            <ul>
              <li>Deu ruim!!</li>
              <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
              <?php endforeach; ?>
            </ul>

          </div>
        <?php endif; ?>
        <label class="label">
          <input type="hidden" name="book_id" value="<?= $book->id ?>" />
          <input type="hidden" name="user_name" value="<?= auth()->name ?>" />
          <span class="label-text">Avalição</span>
        </label>
        <textarea class="textarea textarea-primary" placeholder="Faça sua Avalição" name="avaliacao"></textarea>
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Nota</span>
        </label>
        <select class="select select-primary w-full max-w-xs" name="nota">
          <option disabled selected>De uma Nota!</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="form-control mt-6">
        <button class="btn btn-primary" type="submit">Avaliar</button>
      </div>
      <div></div>
    </form>
  <?php endif; ?>
  </div>
</div>