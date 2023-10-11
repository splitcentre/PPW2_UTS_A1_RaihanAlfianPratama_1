<?php

use App\Http\Controllers\PlayerController;
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

Route::get('/index', [PlayerController::class,'index']);
Route::get('/index/create', [PlayerController::class,'create'])->name('player.create');
Route::post('/index',[PlayerController::class,'store'])->name('player.store');
Route::post('/index/delete/{id}',[PlayerController::class,'destroy'])->name('player.destroy');
Route::get('/index/update', [PlayerController::class,'update'])->name('player.update');
