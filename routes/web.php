<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ PostController::class,'index' ])->name('home');
Route::get('/about-us', [ PostController::class,'about' ])->name('about-us');
Route::get('/{post:slug}', [ PostController::class,'show' ])->name('view');

