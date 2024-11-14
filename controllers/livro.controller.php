<?php

//model
require 'dados.php';

$id = $_REQUEST['id'];

$filtrado = array_filter($books, function ($b) use ($id) {
  return $b['id'] == $id;
});

$book = array_pop($filtrado);

view('livro', [
  'book' => $book
]);
