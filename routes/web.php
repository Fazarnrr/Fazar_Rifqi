<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ListController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dasboard');

//route simpan dokumen
Route::get('/document',[DocumentController::class,'index'])->name('document');
Route::post('/simpan-data',[DocumentController::class,'store'])->name('simpan-data');

//route simpan priject time line


//task
Route::get('/task',[TaskController::class,'index'])->name('task');

//list
Route::get('/list',[ListController::class,'index'])->name('list');

Route::get('/home',[HomeController::class,'home'])->name('home');

