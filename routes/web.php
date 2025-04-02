<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return 'Сообщение: test';
});

Route::get('/dir/test', function () {
    return 'Сообщение: dir/test';
});

// Route::get('/user/{name}', function ($name) {
//     return "string $name";
// });

// Route::get('/user/{surname}/{name}', function ($surname, $name) {
//     return "Имя: $name Фамилия: $surname";
// });

// Route::get('/city/{city?}', function ($city = 'minsk') {
//     return "Город: $city";
// });

// Route::get('/user/{id}', function ($id) {
//     return 'юзер ' . $id;
// })->where('id', '[0-9]+');


// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'юзер ' . $id . ' ' . $name;
// })->where('id', '[0-9]+')->where('name', '[a-z]{3,}');

// Route::get('/user/{order}', function ($order) {
//     return "Юзер: $order";
// })->where('order', 'name|surname|age');

// Route::get('/posts/{date}', function ($date) {
//     return "Пост: $date";
// })->where('date', '^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$');

// Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
//     return "$year-$month-$day";
// })->where('year', '\d{4}')->where('month', '(0[1-9]|1[0-2])')->where('day', '(0[1-9]|[12][0-9]|3[01])');


// Route::get('user/{id}', function($id){
//     return "User: $id";
// })->whereNumber('id');

// Route::get('city/{name}', function($name){
//     return "Город: $name";
// })->whereAlpha('name');

Route::get('/post/{id}', function ($id) {
    return '!!!'; // только если число
});

Route::get('/posts/{slug}', function ($slug) {
    return '!!!'; // буквы и цифры, а также дефис и подчеркивание
});