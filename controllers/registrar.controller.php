<?php



global $database;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validacao = Validacao::validar([
    'name' => ['required'],
    'email' => ['required', 'email', 'confirmed', 'unique:users'],
    'senha' => ['required', 'min:8', 'max:30', 'strong']
  ], $_POST);

  if ($validacao->naoPassou('registrar')) {
    header('location:/signup');
    exit();
  }

  $database->query(
    query: "insert into users (name, email, senha) values(:name, :email, :senha)",
    params: [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'senha' => password_hash($_POST['senha'], PASSWORD_BCRYPT),
    ]
  );
}
flash()->push('mensagem', 'Registro com Sucesso! Faça o Login');
header('location:/login');
exit();
