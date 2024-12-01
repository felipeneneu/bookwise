<h1 class="text-2xl mt-6 font-bold text-primary text-center">#Meus Livros</h1>
<div class="divider divider-primary"></div>

<div class="grid grid-cols-4 gap-4 pb-10">

  <div class="col-span-3 gap-4 flex flex-col ">

    <?php foreach ($books as $book): ?>
      <div class="">
        <div class="flex gap-3 bg-neutral p-4 rounded border-stone-800 border-2 ">
          <div class="w-1/5 ">
            <?php if ($book->img == true): ?>
              <img class="rounded" src="<?= $book->img ?>" alt="<?= $book->title ?>">
            <?php else: ?>
              <img class="rounded" src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._AC_UF1000,1000_QL80_.jpg" alt="<?= $book->title ?>">
            <?php endif ?>

          </div>

          <div class="px-2 space-y-2 w-full text-neutral-content">
            <a href="/livro?id=<?= $book->id ?>" class="font-semibold text-neutral-content hover:underline"><?= $book->title ?></a>
            <div class="text-xs italic"><?= $book->autor ?></div>

            <div class="text-sm mt-2"><?= $book->descricao ?>
            </div>
          </div>
        </div>



      </div>
    <?php endforeach; ?>

  </div>

  <!-- Form -->
  <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl max-h-max pb-3">



    <form class="card-body" method="post" action="/livro-criar" enctype="multipart/form-data">

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
          <span class="label-text">Titulo</span>
        </label>
        <input
          type="text"
          name="title"
          placeholder="Digite o titulo do livro"
          class="input input-bordered input-primary w-full max-w-xs" />
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Autor</span>

        </label>
        <input
          type="text"
          name="autor"
          placeholder="Digite o nome do autor"
          class="input input-bordered input-primary w-full max-w-xs" />
        <div class="form-control">
          <label class="label">
            <span class="label-text">Descricao</span>

          </label>
          <textarea class="textarea textarea-primary" placeholder="Bio" name="descricao"></textarea>

        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Ano de Lançamento</span>

          </label>
          <select class="select select-primary w-full max-w-xs" name="ano_de_lancamento">
            <?php foreach (range(1500, date('Y')) as $ano): ?>
              <option value="<?= $ano ?>"><?= $ano ?></option>
            <?php endforeach; ?>

          </select>

        </div>
        <div class="form-control mt-6">
          <label class="label">
            <span class="label-text">Capa do Livro</span>
          </label>
          <input
            type="file"
            class="file-input file-input-bordered file-input-primary w-full max-w-xs"
            name="img" />
        </div>


        <div class="form-control mt-6">
          <button class="btn btn-primary" type="submit">Criar Livro</button>
        </div>
        <div></div>
    </form>

  </div>