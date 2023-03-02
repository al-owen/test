<?php

use App\Http\Controllers\moviesController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\userController;
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
//rutas de categorias
Route::get('/addCategory', [categoriesController::class, 'add']);
//rutas de peliculas
Route::get('/show', [moviesController::class, 'show']);
Route::get('/modify/{id}', [moviesController::class, 'modify']);
Route::get('/update', [moviesController::class, 'update']);
Route::get('/delete/{id}', [moviesController::class, 'delete']);
Route::get('/add', [moviesController::class, 'addForm']);
Route::post('/addMovie', [moviesController::class, 'addMovie']);

Route::get('/loginForm', function () {
    return view('loginForm');
});
Route::post('/login', [userController::class, 'validarLogin']);
Route::get('/logout', [userController::class, 'logout']);

Route::get('/sections', function () {
    return view('navbar');
});

//Route::get('/loginIn', [userController::class, 'index']);
