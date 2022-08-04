<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');








////***************************ROUTE-only-Admin******************************/
Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class]);
    Route::get('/home', [HomeController::class, 'home'])->name('home');
});




////***************************ROUTE-only-user_auth******************************/
Route::middleware('auth')->group(function () {
    route::get('/logout', [UserController::class, 'logout'])->name('auth.logout');
    Route::post('/recettes', [RecetteController::class, 'store'])->name('recettes.store');
    Route::get('/recettes/create', [RecetteController::class, 'create'])->name('recettes.create');
});




//**************************ROUTE----Login***************************/
route::post('/login', [UserController::class, 'postLogin'])->name('postlogin');
route::get('/register', [UserController::class, 'getRegister'])->name('getregister');
route::post('/register', [UserController::class, 'postRegister'])->name('postregister');
route::get('/login', [UserController::class, 'getLogin'])->name('getlogin');



Route::get('/recettes', [RecetteController::class, 'index'])->name('recettes.index');
Route::get('/recettes/{id}', [RecetteController::class, 'index'])->name('recettes.show');
Route::get('/recettes/{id}/edit', [RecetteController::class, 'index'])->name('recettes.edit');
Route::put('/recettes/{id}', [RecetteController::class, 'index'])->name('recettes.update');
Route::delete('/recettes/{id}', [RecetteController::class, 'index'])->name('recettes.delete');

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.delete');
