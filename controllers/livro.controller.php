<?php

//model
global $database;

// if (!isset($database)) {
//   throw new Exception("A variável \$database não foi inicializada.");
// }

$book = Book::get($_GET['id']);



$avaliacoes = $database->query(
  " 
  select
  a.id AS id,
        a.user_id AS user_id,
        a.book_id AS book_id,
        a.avaliacao AS avaliacao,
        a.nota AS nota,
        u.name AS user_name,
        u.avatar AS user_avatar
  FROM 
        avaliacoes a
    JOIN 
        users u ON a.user_id = u.id 
        where book_id = :id 
",
  Avaliacao::class,
  ['id' => $_GET['id']]
)->fetchAll();

view('livro', [
  'book' => $book,
  'avaliacoes' => $avaliacoes
]);


//model
// global $database;

// if (!isset($database)) {
//   throw new Exception("A variável \$database não foi inicializada.");
// }

// $book = Book::get($_GET['id']);



// $avaliacoes = $database->query(
//   " 
//   select *
//   from avaliacoes where book_id = :id 
// ",
//   Avaliacao::class,
//   ['id' => $_GET['id']]
// )->fetchAll();

// view('livro', [
//   'book' => $book,
//   'avaliacoes' => $avaliacoes
// ]);
