<?php
// global $database;

// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//   header('location: /');
//   exit();
// }

// $user_id = auth()->id;
// $book_id = $_POST['book_id'];
// $avaliacao = $_POST['avaliacao'];
// $user_name = $_POST['user_name'];
// $nota = $_POST['nota'];

// $validacao = Validacao::validar([
//   'avaliacao' => ['required'],
//   'nota' => ['required'],
// ], $_POST);

// if ($validacao->naoPassou()) {
//   header('location: /livro?id=' . $book_id);
//   exit();
// }

// $database->query(
//   "
//   insert into avaliacoes (user_id, book_id, avaliacao, user_name, nota, user_avatar)
//   values (:user_id , :book_id, :avaliacao, :user_name, :nota, :user_avatar);",

//   params: compact('user_id', 'book_id', 'avaliacao', 'user_name', 'nota', 'user_avatar')
// );

// flash()->push('mensagem', 'Avalição criada com Sucesso.');
// header('location: /livro?id=' . $book_id);
// exit();


global $database;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header('location: /');
  exit();
}

// Obtenha o ID do usuário logado
$user_id = auth()->id;

// Pegue os valores enviados via formulário
$book_id = $_POST['book_id'];
$avaliacao = $_POST['avaliacao'];
$nota = $_POST['nota'];

$validacao = Validacao::validar([
  'avaliacao' => ['required'],
  'nota' => ['required'],
], $_POST);

if ($validacao->naoPassou()) {
  header('location: /livro?id=' . $book_id);
  exit();
}

// Insira apenas os dados necessários na tabela avaliacoes
$database->query(
  "
    INSERT INTO avaliacoes (user_id, book_id, avaliacao, nota)
    VALUES (:user_id, :book_id, :avaliacao, :nota);
    ",
  params: compact('user_id', 'book_id', 'avaliacao', 'nota')
);

// Adicione uma mensagem de sucesso e redirecione o usuário
flash()->push('mensagem', 'Avaliação criada com sucesso.');
header('location: /livro?id=' . $book_id);
exit();
