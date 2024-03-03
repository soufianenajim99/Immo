<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\PropController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});



//Auth

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'prop'])->name('registerpr');
Route::get('/registercl',[RegisterController::class,'cli'])->name('registercl');
Route::post('/registercl',[RegisterController::class,'client'])->name('registercli');
Route::get('/login',[RegisterController::class,'login'])->name('login');
Route::get('/choose',[RegisterController::class,'choose'])->name('choose');



//proprieatire

Route::get('dashboard_pro',[PropController::class,'index'])->name('dashprop');

Route::resource('/bien',BienController::class);