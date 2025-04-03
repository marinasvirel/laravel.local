<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
  public function show()
  {
    return view('users-show.show', [
      'title' => 'show content',
      'text' => 'show content',
    ]);
  }

  public function all()
  {
    return view('users-show.users', [
      'title' => 'все юзеры',
      'text' => 'все юзеры',
    ]);
  }

  public function showName($name)
  {
    return $name;
  }

  public function showNameSurname($name, $surname)
  {
    return view(
      'users-show.user',
      [
        'title' => 'Имя и фамилия',
        'surname' => $surname,
        'name' => $name,
        'age' => 18,
        'salary' => 'salary',
        'class' => 'main-text',
        'color' => 'red',
        'text' => 'ссылка',
        'href' => 'https://laravel.local/user',
        'value1' => 'value1',
        'value2' => 'value2',
        'value3' => 'value3',
        'city' => 'Лима',
        'year' => 2025,
        'month' => 04,
        'day' => 04,
        'str' => '<b>text</b>',
        'arr' => [
          'name' => $name,
          'age' => 'age',
          'salary' => 'salary',
        ],
        'location' => [
          'country' => 'Украина',
          'city' => 'Киев',
        ],
        'num' => [1, 3, 3],
      ],
    );
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
