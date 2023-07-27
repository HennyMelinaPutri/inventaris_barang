<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
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

Route::resource('item', ItemController::class);

Route::resource('supplier', SupplierController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/login/out', [LoginController::class, 'logout']);
Route::post('/login/admin', [LoginController::class, 'login']);