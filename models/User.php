<?php

class User
{
  public $id;
  public $name;
  public $email;
  public $senha;
  public $avatar;
  public $total_books;
  public $total_comments;
  public $wallpaper;

  public function query($where, $params)
  {
    $database = new Database(config('database'));
    return $database->query(
      "select 
        u.id,
        u.name,
        u.email,
        u.senha,
        u.avatar,
        u.wallpaper
  
  from users u
    where $where;",
      User::class,
      $params
    );
  }


  public static function get($id)
  {
    return (new User)->query('u.id = :id', ['id' => $id])->fetch();
  }


 
 
}
