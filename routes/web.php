<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route pour créer un utilisateur
Route::get('/user/createview', function () {
    return view('create_user');
});
Route::post('/user/create', [UserController::class, 'createUser'])->name('user.create') ;
// auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
//dashboard  apres auth
Route::get('/dashboard', function () {
    return view('dashboard');  // Remplacez par la vue de votre tableau de bord
})->middleware('auth')->name('dashboard');
