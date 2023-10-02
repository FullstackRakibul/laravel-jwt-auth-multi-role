<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::middleware(['auth:api', 'role:admin'])->group(function () {

//    Route::apiResource('auth', AuthController::class);
    Route::get('/dashboard', [GuestController::class,'dashboard'])->name('dashboard');



    // Routes accessible only to users with the 'admin' role
});

Route::middleware(['auth:api', 'role:employee'])->group(function () {
    // Routes accessible only to users with the 'employee' role
    Route::get('/employee', [GuestController::class,'employee'])->name('employee');

});


//............. guest pages ............
Route::get('/login', [GuestController::class,'login'])->name('login');
Route::get('/registration', [GuestController::class,'registration'])->name('registration');


Route::post('auth', [AuthController::class,'auth'])->name('auth');
Route::post('register', [AuthController::class,'register'])->name('register');
//Route::get('/', [GuestController::class,'index'])->name('index');


