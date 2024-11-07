<?php

namespace Thariq\PhpMvc\Controller;

use Thariq\PhpMvc\App\View;

class HomeController {

  function index(): void
  {
    $model = [
      'title' => 'Belajar PHP MVC',
      'content' => 'Belajar PHP MVC',
    ];
    // echo "HomeController.index()";

    // require __DIR__ . '/../View/Home/index.php';

    View::render('Home/index', $model);
  }

  function hello(): void
  {
    echo "HomeController.hello()";
  }

  function world(): void
  {
    echo "HomeController.world()";
  }

  //sample model request
  // implementasi aslinya dalama class tentu saja
  function login(): void
  {
    $request = [
      'username' => $_POST['username'],
      'password' => $_POST['password'],
    ];

    $userInDb = [];

    $response = [
      'message' => 'Login sukses'
    ];

    //kirim ke view
  }
}