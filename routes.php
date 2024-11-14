<?php


function carregarController()
{
  $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);
  if (!$controller) $controller = 'index';

  // if (isset($_SERVER['PATH_INFO'])) {
  //   $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
  // };



  if (! file_exists("controllers/{$controller}.controller.php")) {

    abort(404);
  };

  require "controllers/{$controller}.controller.php";
}

carregarController();
