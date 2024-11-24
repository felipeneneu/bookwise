<?php

class Book
{
  public $id;
  public $title;
  public $autor;
  public $descricao;
  public $user_id;
  public $ano_de_lancamento;
  public $img;
  public $nota_avaliacao;
  public $count_avaliacoes;

  public function query($where, $params)
  {
    $database = new Database(config('database'));
    return $database->query(
      "select
        l.id, l.title , l.autor, l.descricao, l.ano_de_lancamento, l.img,
        count(a.id) as count_avaliacoes,
        CASE 
         WHEN ROUND(SUM(a.nota) / COUNT(a.nota), 1) > 5 THEN 5
         ELSE ROUND(SUM(a.nota) / COUNT(a.nota), 1)
        END AS nota_avaliacao
  from
      books l
        left join avaliacoes a on a.book_id = l.id
  where
      $where
  group by
    l.id,
    l.title,
    l.autor,
    l.descricao,
    l.ano_de_lancamento,
    l.img",
      Book::class,
      $params
    );
  }

  public static function get($id)
  {
    return (new Book)->query('l.id = :id', ['id' => $id])->fetch();
  }

  public static function mybooks($user_id)
  {
    return (new Book)->query('l.user_id = :user_id', compact('user_id'))->fetchAll();
  }

  public static function all($filtro)
  {
    return (new Book)->query('title like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
  }
}
