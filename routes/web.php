<?php

use App\Http\Controllers\websiteController;
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

Route::get('/',[websiteController::class,'index'])->name('home');
Route::get('/dashboard',[websiteController::class,'dashboard'])->name('dashboard');
Route::get('/login',[websiteController::class,'login'])->name('login');
Route::get('/register',[websiteController::class,'register'])->name('register');
Route::get('/logout',[websiteController::class,'logout'])->name('logout');
Route::get('/forgetpass',[websiteController::class,'forgetPass'])->name('forgetpass');
Route::post('/registersubmit',[websiteController::class,'registerSubmit'])->name('register_submit');
Route::get('/register/verify/{token}/{email}',[websiteController::class,'verify_register']);
