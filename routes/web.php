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

// №1
Route::get('/user/all', function () {
    return 'all';
});
Route::get('/user/{id}', function ($id) {
    return 'id';
});

// №2
Route::get('/user/all', function () {
    return 'all';
});
Route::get('/user/{id?}', function ($id = null) {
    return 'id';
});
Route::get('/user/', function () {
    return 'user';
});

// №3
Route::get('/user/all', function () {
    return 'all';
});
Route::get('/user/all/desc', function () {
    return 'all desc';
});
Route::get('/user/{name}/{id?}', function ($name, $id) {
    return 'name id';
});

// №4
Route::get('/user/{id}', function ($id) {
    return 'id';
})->where('slug', '[a-z0-9_-]+');
Route::get('/user/{id}', function ($id) {
    return 'id';
})->where('id', '[0-9]+');
