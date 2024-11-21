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
        <li><a href="/meus-livros" class="hover:opacity-65">Meus Livros</a></li>
      </ul>

      <ul class="flex gap-3">

        <?php if (isset($_SESSION['auth'])): ?>
          <li><a href="/logout">Olá, <?= $_SESSION['auth']->name ?></a></li>
          <div class="avatar">
            <div class="ring-primary ring-offset-base-100 w-7 rounded-full ring ring-offset-2">
              <img src="https://conteudo.imguol.com.br/c/entretenimento/3a/2022/05/18/tom-cruise-interpreta-pete-maverick-um-dos-principais-aviadores-da-marinha-1652905110877_v2_900x506.jpg" />
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
        <div class="bg-green-900 px-4 py-2 rounded-md text-green-400 font-semibold border-green-800">
          <?= $mensagem ?>
        </div>
      <?php endif; ?>
    </div>
    <?php require "./views/{$view}.view.php"; ?>
  </main>
</body>

</html>