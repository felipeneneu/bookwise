<?php
global $database;

$user_id = auth()->id;
$somaDosLivros = $database->query(

  "select
    COUNT (*) as total_books
from
    books l
where
    l.user_id = :id",
  User::class,
  ['id' => $_GET['id']]
)->fetch();

$somaDeComentarios = $database->query(

  "select
    COUNT (*) as total_comments
    from
    avaliacoes a
    where
    a.user_id = :id",
  User::class,
  ['id' => $_GET['id']]
)->fetch();

// dd($somaDeComentarios);

?>

<div class="stats shadow mx-auto w-full">
  <div class="stat">
    <div class="stat-figure text-primary">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="inline-block h-8 w-8 stroke-current">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
      </svg>
    </div>
    <div class="stat-title">Total Livros</div>
    <?php foreach ($somaDosLivros as $soma): ?>
      <div class="stat-value text-primary"><?= $soma ?></div>
    <?php endforeach; ?>
    <div class="stat-desc">21% more than last month</div>
  </div>

  <div class="stat">
    <div class="stat-figure text-secondary">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="inline-block h-8 w-8 stroke-current">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M13 10V3L4 14h7v7l9-11h-7z"></path>
      </svg>
    </div>
    <div class="stat-title">Total de Comentarios</div>
    <?php foreach ($somaDeComentarios as $sumComment): ?>
      <div class="stat-value text-secondary"><?= $sumComment ?></div>
    <?php endforeach; ?>
    <div class="stat-desc">21% more than last month</div>
  </div>

  <div class="stat">
    <div class="stat-figure text-secondary">
      <div class="avatar online">
        <div class="w-16 rounded-full">

          <img src="<?= $user->avatar ?>" />
        </div>
      </div>
    </div>
    <div class="stat-value"><?= $user->name ?></div>
    <div class="stat-title"><?= $user->email ?></div>
    <div class="stat-desc text-secondary">31 tasks remaining</div>
  </div>
</div>