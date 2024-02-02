<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;

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

Route::get('/service',[ServiceController::class, 'index'])->name('service.index');
Route::get('/service/create',[ServiceController::class, 'create'])->name('service.create');
Route::post('/service',[ServiceController::class, 'store'])->name('service.store');
Route::get('/service/create', [CategoryController::class, 'create'])->name('service.create');;