<?php



global $database;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validacao = Validacao::validar([
    'name' => ['required'],
    'email' => ['required', 'email', 'confirmed'],
    'senha' => ['required', 'min:8', 'max:30', 'strong']
  ], $_POST);

  if ($validacao->naoPassou()) {
    header('location:/signup');
    exit();
  }

  $database->query(
    query: "insert into users (name, email, senha) values(:name, :email, :senha)",
    params: [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'senha' => $_POST['senha'],
    ]
  );
}
flash()->push('mensagem', 'Registro com Sucesso! Faça o Login');
header('location:/login');
exit();
