<?php



global $database;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $validacoes = [];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $email_confirmed = $_POST['email_confirmed'];
  $senha = $_POST['senha'];


  if (strlen($name) == 0) {
    $validacoes[] = 'nome obrigatorio';
  }

  //Validacao de email 01
  if (strlen($email) == 0) {
    $validacoes[] = 'email obrigatorio';
  }

  // Validaçao de email
  if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validacoes[] = 'O email é invalido.';
  }

  if ($email != $email_confirmed) {
    $validacoes[] = 'O email de confirmaçao está diferente.';
  }

  // validaçao de senha
  if (strlen($senha) < 6 || strlen($senha) > 8) {
    $validacoes[] = 'A senha precisa ter entre 6 e 8 caracters';
  }

  if (!str_contains($senha, '*')) {
    $validacoes[] = 'A senha precisa ter um * no nela.';
  }


  if (sizeof($validacoes) > 0) {
    $_SESSION['validacoes'] = $validacoes;
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
header('location:/signup?mensagem=Registro com Sucesso!');
exit();
