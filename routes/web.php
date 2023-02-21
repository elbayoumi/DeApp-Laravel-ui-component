<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'login'])->name('login');
Route::get('/home',[PostController::class , 'home'])->name(name : 'home');
Route::get('/group',[PostController::class , 'group'])->name(name : 'posts.group');

//
