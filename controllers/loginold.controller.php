

<?php
global $database;
$mensagem = $_REQUEST['mensagem'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacao = Validacao::validar([
    'email' => ['required', 'email'],
    'senha' => ['required',]
  ], $_POST);

  if ($validacao->naoPassou('login')) {
    header('location:/login');
    exit();
  }

  $user = $database->query(
    query: " 
    select *
    from users
    where email = :email
  ",
    class: User::class,
    params: ['email' => $email]
  )->fetch();

  if ($user) {

    // $senhaDoPost = $_POST['senha'];
    // $senhaDoBanco = $user->senha;

    if (!password_verify($_POST['senha'], $user->senha)) {
      flash()->push('validacoes_login', ['Usuario ou Senha estão incorretas!']);
      header('location: /login');
      exit();
    }
    $_SESSION['auth'] = $user;
    flash()->push('mensagem', 'Seja bem vindo ' . $user->name . '!');
    // $_SESSION['mensagem'] = 'Seja bem vindo' . $user->name . '!';
    header('location: /');
    exit();
  }
}

view('loginold', compact('mensagem'));
