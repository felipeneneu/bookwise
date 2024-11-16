<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/assets/css/dist/build.css">
  <title>Book Wise</title>
</head>

<body class="bg-stone-950 text-slate-400">

  <header class="bg-slate-950 border-b-slate-800 border-b-2">
    <nav class="text-gray-200 flex items-center justify-between px-8 py-5 mx-auto max-w-screen-lg">
      <div class="text-2xl text-gray-200 font-sans font-black tracking-widest"><a href="/">🕮 Book Wise</a>
      </div>
      <ul class="flex space-x-4 font-bold">
        <li> <a href="/" class="text-slate-400 hover:opacity-65">Explorar</a></li>
        <li><a href="/meus-livros" class="hover:opacity-65">Meus Livros</a></li>
      </ul>

      <ul class="flex gap-3">
        <li><a href="/login">Entrar</a></li>
        <li>|</li>
        <li><a href="/signup">Registrar</a></li>
      </ul>

    </nav>


  </header>


  <main class="mx-auto max-w-screen-lg space-y-10">
    <?php require "./views/{$view}.view.php"; ?>
  </main>
</body>

</html>