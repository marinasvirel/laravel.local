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

  public function cities($user)
  {
    $users = [
      'user1' => 'city1',
      'user2' => 'city2',
      'user3' => 'city3',
      'user4' => 'city4',
      'user5' => 'city5',
    ];
    if (array_key_exists($user, $users)) {
      return $users[$user];
    } else {
      return "несуществующее имя";
    }
  }
}
