<?php

//model
$id = $_REQUEST['id'];
$db = new DB();
$book = $db->book($id);

view('livro', [
  'book' => $book
]);
