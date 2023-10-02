<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::apiResource('/', GuestController::class);


//Route::get('/', [GuestController::class,'index'])->name('index');
//Route::get('/dashboard', [GuestController::class,'dashboard'])->name('dashboard');



//Route::get('/login', [GuestController::class,'login'])->name('login');
//Route::get('/registration', [GuestController::class,'registration'])->name('registration');


//............. guest pages ............
//
//Route::post('auth', [AuthController::class,'auth'])->name('auth');
//Route::post('register', [AuthController::class,'register'])->name('register');


Route::get('/', [GuestController::class,'index'])->name('index');
