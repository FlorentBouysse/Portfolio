<?php

use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\MainController as BackMainController;
use App\Http\Controllers\MainController;
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
// Front
Route::get('/', [MainController::class, 'index'])->name('home');

// Back
// Auth
Route::get('office/login', [AuthController::class, 'login'])->name('auth.login');
Route::delete('office/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('office/login', [AuthController::class, 'doLogin']);

Route::get('office/', [BackMainController::class, 'index'])->name('office_home');