<?php




$books = (new DB)->books($_REQUEST['pesquisar']);

view('index', [
  'books' => $books
]);
