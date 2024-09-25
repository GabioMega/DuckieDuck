<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\QueueController;
use App\Http\Controllers\QueueController as ControllersQueueController;
use Illuminate\Support\Facades\Auth;

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
    return view('home.home');
});

Route::get('/register',[RegisterController::class, 'page'])->name('register.page');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login',[LoginController::class,'Verif'])->name('register.Verif');
Route::get('/login',[LoginController::class,'Lpage'])->name('register.Lpage');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/queue', [ControllersQueueController::class, 'index'])->name('queue');
