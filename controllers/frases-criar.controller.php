<?php

global $database;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header('location: /');
  exit();
}

// Obtenha o ID do usuário logado
$user_id = auth()->id;

// Pegue os valores enviados via formulário
$frase = $_POST['frase'];


$validacao = Validacao::validar([
  'frase' => ['required']
], $_POST);

if ($validacao->naoPassou()) {
  header('location: /user?id=' . $user_id);
  exit();
}

// Insira apenas os dados necessários na tabela avaliacoes
$database->query(
  "
    INSERT INTO frases (user_id, frase)
    VALUES (:user_id, :frase);
    ",
  params: compact('user_id', 'frase')
);

// Adicione uma mensagem de sucesso e redirecione o usuário
flash()->push('mensagem', 'Frase Criada com sucesso.');
header('location: /user?id=' . $user_id);
exit();
