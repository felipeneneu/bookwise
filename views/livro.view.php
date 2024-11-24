<!-- Livro View -->
<h1 class="text-2xl mt-6 font-bold text-primary"><?= $book->title ?></h1>
<?php require_once 'partials/_livro.php'; ?>
<div></div>

<!-- Avaliações -->
<h2 class="text-xl mt-6 font-bold text-primary">Avaliações</h2>
<div class="grid grid-cols-4 gap-4 pb-10">

  <div class="col-span-3 flex flex-col gap-5">
    <?php foreach ($avaliacoes as $avaliacao): ?>

      <div class="bg-neutral px-5 py-4 rounded border-stone-800 border-2 ">

        <div class=" gap-5  ">
          <div class="flex flex-row gap-3 items-center w-full">
            <div class="avatar">
              <div class="ring-primary ring-offset-base-100 w-5 h-5 rounded-full ring ring-offset-2">

                <img class="rounded" src="<?= $avaliacao->user_avatar ?>" alt="<?= $avaliacao->user_name ?>">

                <img class="rounded" src="https://avatar.iran.liara.run/public">


              </div>
            </div>
            <div class="flex gap-6 max-w-7xl  items-center justify-center">
              <div class="flex flex-row ">
                <p>Postado por: <?= $avaliacao->user_name ?></p>
              </div>
              <div>
                <p>
                  <?php
                  $nota = str_repeat("⭐", $avaliacao->nota);
                  ?>
                  Avaliação:<?= $nota ?>
                </p>
              </div>

            </div>


          </div>


        </div>
        <div class="px-8 py-3">
          <?= $avaliacao->avaliacao ?>
        </div>


      </div>
    <?php endforeach; ?>

    <?php if (auth()): ?>

  </div>

  <!-- Form -->
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