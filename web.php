<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/registration',[UserController::class, 'create'])->name('registration');
Route::post('/store',[UserController::class, 'store'])->name('store');
Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');
Route::get('/edit/{id}',[UserController::class, 'edit'])->name('edit');
Route::post('/update/{id}',[UserController::class, 'update'])->name('update');
Route::get('/delete/{id}',[UserController::class, 'delete'])->name('delete');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/savelogin',[UserController::class, 'savelogin'])->name('savelogin');
Route::get('/loggedin',[UserController::class, 'loggedin'])->name('loggedin');
