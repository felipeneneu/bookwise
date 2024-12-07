<!DOCTYPE html>
<html lang="pt-br" data-theme="coffee" class="bg-base-300">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/assets/css/dist/build.css">
  <title>Book Wise</title>
</head>

<body class="text-slate-400 ">

  <header class="bg-neutral border-b-primary border-b-2">
    <nav class="text-primary flex items-center justify-between px-8 py-5 mx-auto max-w-screen-lg">
      <div class="text-2xl text-secondary-content
 font-sans font-black tracking-widest"><a href="/">🕮 Book Wise</a>
      </div>
      <ul class="flex space-x-4 font-bold">
        <li> <a href="/" class="text-secondary-content
 hover:opacity-65">Explorar</a></li>
        <?php if (auth()): ?>
          <li><a href="/meus-livros" class="hover:opacity-65">Meus Livros</a></li>
        <?php endif; ?>
      </ul>

      <ul class="flex items-center gap-3">

        <?php if (auth()): ?>
          <?php
          $id = auth()->id;

          $user = User::get(auth()->id);
          ?>
          <div>
            <li>Olá, <?= $user->name ?></li>
          </div>
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">

              <div class="w-10 rounded-full">

                <img src="<?= $user->avatar ?>" alt="<?= $user->name ?>" />
              </div>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li>
                <a href="/user?id=<?= auth()->id ?>" class="justify-between">
                  Perfil
                  <span class="badge badge-secondary">Novo</span>
                </a>
              </li>

              <li><a href="/logout">Sair</a></li>
            </ul>
          </div>
          </div>




        <?php else: ?>
          <li><a href="/login">Entrar</a></li>
          <li>|</li>
          <li><a href="/signup">Registrar</a></li>
        <?php endif; ?>
      </ul>

    </nav>


  </header>


  <main class="mx-auto max-w-screen-lg space-y-10">
    <div class="justify-center flex mt-9 items-center">
      <?php if ($mensagem = flash()->get('mensagem')): ?>
        <div role="alert" class="alert alert-success">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 shrink-0 stroke-current"
            fill="none"
            viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span><?= $mensagem ?></span>
        </div>

    </div>
  <?php endif; ?>
  </div>
  <?php require "./views/{$view}.view.php"; ?>
  </main>


</body>

</html>