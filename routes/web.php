<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;

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

Route::get('/', [pageController::class,'home'])->name('home');
Route::get('/customer/create',[customerController::class,'create'])->name('customer.create');
Route::post('/customer/create', [customerController::class,'createSubmit']);
Route::get('/customer/login', [loginController::class,'login'])->name('customer.login');
Route::post('/customer/login', [loginController::class,'loginAuth']);
Route::get('/customer/dashboard', [customerController::class,'dashboard'])->name('customer.dashboard');
Route::get('/admin/dashboard',[adminController::class,'dashboard'])->name("admin.dashboard");
Route::get('/customer/details/{id}',[customerController::class,'details'])->name('customer.details');
