<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routa /users směřuje do UserControlleru a metody index
Route::get('users', [UserController::class, 'index']); // po zapnutí serveru /users
// routa /users/{id} směřuje do UserControlleru a metody show a předává parametr {id} do proměnné argumentu metody $id

Route::get('users/create', [UserController::class, 'create']);
// POZOR! users/create musí být nad users/{user} - kod se čte z vrchu dolů, jinak při zadání získám 404 not found

// kód niže využívá route model binding - https://laravel.com/docs/12.x/routing#route-model-binding
Route::get('users/{user}', [UserController::class, 'show']); // po zapnutí serveru /users/1 nebo jiné číslo - data musí být naseedované
