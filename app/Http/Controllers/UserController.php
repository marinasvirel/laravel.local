<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
  public function show()
  {
    return 'hello show';
  }

  public function all()
  {
    return 'hello all';
  }

  public function showName($name)
  {
    return $name;
  }

  public function showNameSurname($name, $surname)
  {
    return "$name $surname";
  }
}
