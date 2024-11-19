<?php
global $database;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $database->query(
    query: "insert into users (name, email, senha) values(:name, :email, :senha)",
    params: [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'senha' => $_POST['senha'],
    ]
  );
}
header('location:/login?mensagem=Registro com Sucesso!');
exit();
