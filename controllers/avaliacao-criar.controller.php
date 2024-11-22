<?php
global $database;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header('location: /');
  exit();
}

$user_id = auth()->id;
$book_id = $_POST['book_id'];
$avaliacao = $_POST['avaliacao'];
$user_name = $_POST['user_name'];
$nota = $_POST['nota'];

$validacao = Validacao::validar([
  'avaliacao' => ['required'],
  'nota' => ['required'],
], $_POST);

if ($validacao->naoPassou()) {
  header('location: /livro?id=' . $book_id);
  exit();
}

$database->query(
  "
  insert into avaliacoes (user_id, book_id, avaliacao, user_name, nota)
  values (:user_id , :book_id, :avaliacao, :user_name, :nota);",

  params: compact('user_id', 'book_id', 'avaliacao', 'user_name', 'nota')
);

flash()->push('mensagem', 'Avalição criada com Sucesso.');
header('location: /livro?id=' . $book_id);
exit();
