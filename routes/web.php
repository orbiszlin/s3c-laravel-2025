<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routa /users směřuje do UserControlleru a metody index
Route::get('users', [UserController::class, 'index']); // po zapnutí serveru /users
// routa /users/{id} směřuje do UserControlleru a metody show a předává parametr {id} do proměnné argumentu metody $id
Route::get('users/{id}', [UserController::class, 'show']); // po zapnutí serveru /users/1 nebo jiné číslo
