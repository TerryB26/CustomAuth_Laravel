<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Main_AuthController;
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

Route::get('/Register',[Main_AuthController::class,'Register_view']) ->name('Register');
Route::post('/Register',[Main_AuthController::class,'Register_user']) ->name('Register');

Route::get('/Login',[Main_AuthController::class,'Login_view']) ->name('Login');
Route::post('/Login',[Main_AuthController::class,'Login_user']) ->name('Login');

Route::get('/Dashboard',[Main_AuthController::class,'Dashboard_View']) ->name('Dashboard');

Route::get('/Logout',[Main_AuthController::class,'Logout_user']) ->name('Logout');
