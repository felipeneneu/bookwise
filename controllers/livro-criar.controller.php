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

$dir = "images/";
$file = $dir . basename($_FILES['img']['name']);
$newName = md5(rand());
$extensao = pathinfo($file, PATHINFO_EXTENSION);
$img = "$dir$newName.$extensao";

move_uploaded_file($_FILES['img']['tmp_name'], $img);


$database->query(
  "insert into books (user_id, title, autor, descricao, ano_de_lancamento, img)
values(:user_id, :title, :autor, :descricao, :ano_de_lancamento, :img)",
  params: compact('user_id', 'title', 'autor', 'descricao', 'ano_de_lancamento', 'img')
);


flash()->push('mensagem', 'O livro foi criado com Sucesso.');
header('location: /meus-livros');
exit();
