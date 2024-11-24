<?php
global $database;

// if (!isset($database)) {
//   throw new Exception("A variável \$database não foi inicializada.");
// }



// dd(auth());
$books = Book::all($_REQUEST['pesquisar'] ?? '');


view('index', compact('books'));
