<?php


//model
require 'dados.php';

view('index', [
  'books' => $books
]);
