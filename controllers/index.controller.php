<?php
global $database;

// if (!isset($database)) {
//   throw new Exception("A variável \$database não foi inicializada.");
// }

$pesquisar = $_REQUEST['pesquisar'] ?? '';


$books = $database->query(
  "select * from books where title like :filtro",
  Book::class,
  ['filtro' => "%$pesquisar%"]
)
->fetchAll();

view('index', compact('books'));
