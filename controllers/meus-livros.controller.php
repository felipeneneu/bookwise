<?php
global $database;
if (!auth()) {
  abort(403);
}

$books = Book::mybooks(auth()->id);
view('meus-livros', compact('books'));
