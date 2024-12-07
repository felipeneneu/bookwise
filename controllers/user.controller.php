<?php

global $database;

if (!auth() || !auth()->id) {
  abort(403);
}

if (auth()->id != $_GET['id']) {
  abort(403);
  exit();
}

$user = User::get($_GET['id']);
$frases = Frases::myFrases($_GET['id']);

// $frase = $_POST['frase'];


// $user = User::get(auth()->id);

// dd($user);
view('user', compact('user', 'frases'));
// header('location: /user?id=' . $id);
// exit();
