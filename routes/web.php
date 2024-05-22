<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home'); // Substitua 'home' pelo nome da sua view
});

Route::get('/users', [UserController::class, 'listAllUsers'])->name('routeListAllUsers');
