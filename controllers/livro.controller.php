<?php

//model
global $database;

// if (!isset($database)) {
//   throw new Exception("A variável \$database não foi inicializada.");
// }

$book = $database->query(
  "select * from books where id = :id",
  Book::class,
  ['id' => $_GET['id']]
)->fetch();

view('livro', [
  'book' => $book
]);
