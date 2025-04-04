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
        'num' => [1, 2, 3, 4, 5, 6],
        'strs' => ['str1', 'str2', 'str3'],
        'data' => [1, 2],
        'arrNum' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
        'employees' => [
          [
            'name' => 'user1',
            'surname' => 'surname1',
            'salary' => 1000,
          ],
          [
            'name' => 'user2',
            'surname' => 'surname2',
            'salary' => 2000,
          ],
          [
            'name' => 'user3',
            'surname' => 'surname3',
            'salary' => 3000,
          ],
          [
            'name' => 'user4',
            'surname' => 'surname4',
            'salary' => 4000,
          ],
          [
            'name' => 'user5',
            'surname' => 'surname5',
            'salary' => 5000,
          ],
        ],
        'names' => ['name1', 'name2', 'name3'],
        'links' => [
          [
            'text' => 'text1',
            'href' => 'href1',
          ],
          [
            'text' => 'text2',
            'href' => 'href2',
          ],
          [
            'text' => 'text3',
            'href' => 'href3',
          ],
        ],
        'users' => [
          [
            'name' => 'user1',
            'surname' => 'surname1',
            'banned' => true,
          ],
          [
            'name' => 'user2',
            'surname' => 'surname2',
            'banned' => false,
          ],
          [
            'name' => 'user3',
            'surname' => 'surname3',
            'banned' => true,
          ],
          [
            'name' => 'user4',
            'surname' => 'surname4',
            'banned' => false,
          ],
          [
            'name' => 'user5',
            'surname' => 'surname5',
            'banned' => false,
          ],
        ],
        'days' => range(1, date('t')),
        'n' => date('N'),
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
