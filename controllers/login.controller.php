

<?php
global $database;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $user = $database->query(
    query: " 
    select *
    from users
    where email = :email
    and senha = :senha
  ",
    class: User::class,
    params: ['email' => $email, 'senha' => $senha]
  )->fetch();

  if ($user) {
    $_SESSION['auth'] = $user;
    $_SESSION['mensagem'] = 'Seja bem vindo' . $user->name . '!';
    header('location: /');
    exit();
  }
}
$mensagem = $_REQUEST['mensagem'] ?? '';
view('login');
