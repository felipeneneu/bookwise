<?php

class Book
{
  public $id;
  public $title;
  public $autor;
  public $descricao;


  public static function make($item)
  {
    $book = new self();
    $book->id = $item['id'];
    $book->descricao = $item['descricao'];
    $book->title = $item['title'];
    $book->autor = $item['autor'];

    return $book;
  }
}
