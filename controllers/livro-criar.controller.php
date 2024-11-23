<?php

global $database;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header('location: /meus-livros');
  exit();
}

if (!auth()) {
  abort(403);
}

$user_id = auth()->id;
$title = $_POST['title'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$ano_de_lancamento = $_POST['ano_de_lancamento'];

$validacao = Validacao::validar([
  'title' => ['required', 'min:3'],
  'autor' => ['required'],
  'descricao' => ['required'],
  'ano_de_lancamento' => ['required'],

], $_POST);

if ($validacao->naoPassou()) {
  header('location: /meus-livros');
  exit();
}

$database->query(
  "insert into books (user_id, title, autor, descricao, ano_de_lancamento)
values(:user_id, :title, :autor, :descricao, :ano_de_lancamento)",
  params: compact('user_id', 'title', 'autor', 'descricao', 'ano_de_lancamento')
);
flash()->push('mensagem', 'O livro foi criado com Sucesso.');
header('location: /meus-livros');
exit();
