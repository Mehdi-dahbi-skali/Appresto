<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restocontroller;

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



Route::get('/',[Restocontroller::class,'index'])->name('index');
Route::get('/about',[Restocontroller::class,'about'])->name('about');
Route::get('/menu',[Restocontroller::class,'menu'])->name('menu');
Route::get('/reservation',[Restocontroller::class,'reservation'])->name('reservation');

Route::post('/reservation',[Restocontroller::class,'store'])->name('reservationpp');

Route::get('/specialdishes',[Restocontroller::class,'specialdishes'])->name('specialdishes');
Route::get('/team',[Restocontroller::class,'team'])->name('team');
