<?php

class Frases
{
  public $id;
  public $user_id;
  public $frase;


  public function query($where, $params)
  {
    $database = new Database(config('database'));
    return $database->query(
      "select 
        f.id,
        f.user_id,
        f.frase
  
  from frases f
    where $where;",
      Frases::class,
      $params
    );
  }


  public static function myFrases($id)
  {

    return (new Frases)->query('f.user_id = :id', ['id' => $id])->fetchAll();
  }
}
