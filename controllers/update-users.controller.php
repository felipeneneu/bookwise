

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

$user = User::get(auth()->id);


if ($_POST['name']) {
  $name = $_POST['name'];

  $database->query(
    "update users 
         set name = :name 
         where id = :id",
    params: compact('id', 'name')
  );
  flash()->push('mensagem', 'O nome de Usuario foi atualizado');
  header("location: /user?id=$id");
} else {
  header("location: /user?id=$id");
}

// dd($user);
if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
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
  flash()->push('mensagem', 'Avatar foi atualizado com sucesso');
} else {
  // $avatar = $user->avatar;
  header("location: /user?id=$id");
  exit();
}






dd($_FILES);









flash()->push('mensagem', 'O avatar foi adicionado com sucesso');
header("location: /user?id=$id");
exit();
