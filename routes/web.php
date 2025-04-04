<?php

use App\Http\Controllers\UserController;
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

Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);

// Route::get('/user/{name}', [UserController::class, 'showName']);
Route::get('/user/{name}/{surname}', [UserController::class, 'showNameSurname']);

Route::get('/user/{city}', [UserController::class, 'cities']);