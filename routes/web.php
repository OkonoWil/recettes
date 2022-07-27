<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class]);
});


//**************************ROUTE----Login***************************/
route::post('/login', [UserController::class, 'postLogin'])->name('postlogin');
route::get('/register', [UserController::class, 'getRegister'])->name('getregister');
route::post('/register', [UserController::class, 'postRegister'])->name('postregister');
route::get('/login', [UserController::class, 'getLogin'])->name('getlogin');
