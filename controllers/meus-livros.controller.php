<?php
global $database;
if (!auth()) {
  abort(403);
}

$books = $database->query("select * from books where user_id = :id", Book::class, ['id' => auth()->id]);
view('meus-livros', compact('books'));
