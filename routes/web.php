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

Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return "Имя: $name Фамилия: $surname";
});

Route::get('/city/{city?}', function ($city = 'minsk') {
    return "Город: $city";
});

Route::get('/user/{id}', function ($id) {
    return 'юзер ' . $id;
})->where('id', '[0-9]+');
