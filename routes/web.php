<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::match( ['get', 'post'], '/login',
    [AuthController::class, 'loginUser']
)->name ('login');


Route::get( '/logout', 
    [UserController::class, 'logoutUser']
)->name('logout');


Route::match( ['get', 'post'], '/register',
    [UserController::class, 'registerUser']
)->name ('register');


Route::middleware('auth')-> group(function() {
    Route::get( '/users', 
        [UserController::class, 'listAllUsers']
    )->name('listAllUsers');

    Route::get( '/users/{uid}', 
        [UserController::class, 'listUser']
    )->name ('listUser');

    Route::put( '/users/{uid}/update', 
        [UserController::class, 'updateUser']
    )->name ('updateUser');

    Route::delete( '/users/{uid}/delete', 
        [UserController::class, 'deleteUser']
    )->name ('deleteUser');
});