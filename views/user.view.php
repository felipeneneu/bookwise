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
        <h3 class="text-lg font-bold">
          Editar perfil</h3>
        <!-- <p class="py-4">Press ESC key or click on ✕ button to close</p> -->

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





            <!--  -->


            <div class="form-control mt-6 flex flex-row gap-4">

              <label class="label w-11">
                <div>

                </div>
                <div class="avatar placeholder">
                  <div class="bg-neutral text-neutral-content w-12 rounded-full ">

                    <img src="<?= $user->avatar ?>" alt="" class="absolute rounded-full opacity-30">
                    <span class="text-3xl">
                      <svg viewBox="0 0 24 24" aria-hidden="true" class=" relative size-8 z-10 text-gray-300 hover:text-primary" fill="currentColor" data-slot="icon">
                        <g>
                          <path d=" M9.697 3H11v2h-.697l-3 2H5c-.276 0-.5.224-.5.5v11c0 .276.224.5.5.5h14c.276 0 .5-.224.5-.5V10h2v8.5c0 1.381-1.119 2.5-2.5 2.5H5c-1.381 0-2.5-1.119-2.5-2.5v-11C2.5 6.119 3.619 5 5 5h1.697l3-2zM12 10.5c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm-4 2c0-2.209 1.791-4 4-4s4 1.791 4 4-1.791 4-4 4-4-1.791-4-4zM17 2c0 1.657-1.343 3-3 3v1c1.657 0 3 1.343 3 3h1c0-1.657 1.343-3 3-3V5c-1.657 0-3-1.343-3-3h-1z"></path>
                        </g>
                      </svg>

                    </span>
                    <input
                      type="file"
                      class="hidden"
                      name="avatar" />
                  </div>

                </div>


              </label>
              <div class="flex flex-col justify-center">Alterar sua foto</div>

            </div>

            <div class="form-control mt-6">
              <label class="input input-bordered flex items-center gap-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input type="text" placeholder="Mude seu nome" class="" name="name" />
              </label>
            </div>

          </div>

          <input type="hidden" name="id" value="<?= $user_id ?>" />
          <div class="form-control mt-6">



          </div>

          <label class="label">
            <span class="label-text">Mude seu wallpaper</span>
          </label>
          <input type="file" class="file-input file-input-bordered file-input-md w-full max-w-xs" name="wallpaper" />
          <div class="form-control mt-6">
            <button class="btn btn-primary" type="submit">Atualizar</button>
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
<?php if (auth()): ?>
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
<?php endif; ?>
<div class="flex flex-col gap-4 w-full">

</div>