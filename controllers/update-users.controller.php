

<?php
global $database;
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header("location: /user?id=.$id");
  exit();
}

if (!auth()) {
  abort(403);
}

$id = auth()->id;







$dir = "images/";
$file = $dir . basename($_FILES['avatar']['name']);
$newName = md5(rand());
$extensao = pathinfo($file, PATHINFO_EXTENSION);
$avatar = "$dir$newName.$extensao";

move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);


$database->query(
  "update users 
   set avatar = :avatar 
   where id = :id",
  params: compact('id', 'avatar')
);


flash()->push('mensagem', 'O avatar foi adicionado com sucesso');
header("location: /user?id=$id");
exit();
