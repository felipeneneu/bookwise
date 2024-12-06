<div>
  <?php if ($user->wallpaper == true): ?>
    <img src="<?= $user->wallpaper ?>" alt="" class="w-full h-36 object-cover rounded-lg">
  <?php else: ?>
    <img src="https://miro.medium.com/v2/resize:fit:5120/1*4ytjeTu2o0boDa5SNkGoZQ.jpeg" alt="" class="w-full h-36 object-cover">
  <?php endif; ?>
</div>

<div class="grid grid-cols-2 justify-between px-10">
  <div class="avatar flex flex-col gap-3 -mt-24">
    <div class="ring-white ring-offset-base-100 w-24 rounded-full ring ring-offset-2">
      <?php if ($user->avatar == true): ?>
        <img src="<?= $user->avatar ?>" alt="">
      <?php else: ?>
        <img src="https://avatar.iran.liara.run/public" />
      <?php endif; ?>

    </div>


  </div>
  <div class="flex justify-end">

    <!-- You can open the modal using ID.showModal() method -->
    <button class="btn btn-outline btn-primary w-[200px]" onclick="my_modal_3.showModal()">Editar</button>
    <dialog id="my_modal_3" class="modal">
      <div class="modal-box">
        <form method="dialog">
          <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Press ESC key or click on ✕ button to close</p>

        <form class="" method="post" action="/update-users" enctype="multipart/form-data">

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

          </div>
          <div class="form-control">

            <input type="hidden" name="id" value="<?= $user_id ?>" />
            <div class="form-control mt-6">
              <label class="label">
                <span class="label-text">Avatar</span>
              </label>
              <input
                type="file"
                class="file-input file-input-bordered file-input-primary w-full "
                name="avatar" />
            </div>


            <div class="form-control mt-6">
              <button class="btn btn-primary" type="submit">Add Avatar</button>
            </div>

        </form>
      </div>
    </dialog>
  </div>

</div>
<?php include "components/timelineuser.php"; ?>

<div class="flex flex-col gap-4">
  <h2 class="text-2xl mt-6 font-bold text-primary">Frases</h2>
  <?php foreach ($frases as $frase): ?>

    <div class="textarea textarea-primary flex gap-4 ">
      <div class="text-5xl font-bold text-primary ">" </div>
      <p class="italic"><?= $frase->frase ?></p>



    </div>
  <?php endforeach;  ?>
</div>

<form class="card-body" method="post" action="/frases-criar">

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
      <span class="label-text">Digite sua frase</span>
    </label>
    <textarea class="textarea textarea-primary" placeholder="Digite sua frase" name="frase"></textarea>
    <input type="hidden" name="user_id" value="<?= auth()->id ?>" />
  </div>
  <div class="form-control">
    <div class="form-control mt-6">
      <button class="btn btn-primary" type="submit">Postar Frase</button>
    </div>
    <div></div>
</form>

<div class="flex flex-col gap-4 w-full">

</div>