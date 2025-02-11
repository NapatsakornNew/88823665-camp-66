<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, '']);

Route::get('/login',
    [LoginController::class, 'index']);

Route::post('/login',
[loginController::class, 'login']);

Route::get('/register',
    [RegisterController::class, 'index']);

Route::post('/register',
    [RegisterController::class, 'create']);

Route::get('/users',
    [UserController::class, 'index']);

Route::get('/user/{id}',
    [UserController::class, 'edit']);

Route::put('user',
    [UserController::class, 'edit_action']);

Route::delete('user',
    [UserController::class, 'delete']);

Route::get('/', function () {
    return view('home');
});

Route::get('/home',
    [HomeController::class, 'index']);

Route::get('/mycontroller/{id?}',
    [MyController::class, 'myfunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class, 'myfunction']);

Route::get('/hello{/id?}',
    function ($val =""){
    return "<h1>Hello World! $val</h1>";
});
