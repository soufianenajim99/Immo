<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\bien;
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
    $biens = bien::latest();
    if(request('search')){
        $biens
           ->where('titre','LIKE','%'.request('search').'%')
           ->orWhere('description','LIKE','%'.request('search').'%');

      }
    return view('welcome',[
        'biens'=>$biens->get()
    ]);
});



//Auth

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'prop'])->name('registerpr');
Route::get('/registercl',[RegisterController::class,'cli'])->name('registercl');
Route::post('/registercl',[RegisterController::class,'client'])->name('registercli');
Route::get('/login',[RegisterController::class,'login'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');




Route::get('/choose',[RegisterController::class,'choose'])->name('choose');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [SessionController::class,'logout'])->name('logout');
});


//proprieatire

Route::middleware(['auth', 'role:prop'])->group(function () {
    Route::get('dashboard_pro',[PropController::class,'index'])->name('dashprop');
    Route::resource('/bien',BienController::class);
});


//client

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/reserve_page/{id}',[ClientController::class,'reserve'])->name('reserve');
    Route::get('/myreserve',[ClientController::class,'myreserve'])->name('myreserve');
    Route::get('/annreserve/{id}',[ClientController::class,'annreserve'])->name('annreserve');
});






Route::get('/bien_page/{id}',[ClientController::class,'bienPage'])->name('bienpage');