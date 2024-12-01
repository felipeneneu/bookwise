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
      <img src="<?= auth()->avatar ? (auth()->avatar) : 'https://avatar.iran.liara.run/public' ?>" />

    </div>


  </div>
  <div class="flex justify-end">
    <button class="btn btn-outline btn-primary w-[200px]">Editar</button>
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