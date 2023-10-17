<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('kadai', [App\Http\Controllers\KadaiController::class, 'index'])->name('index');
Route::get('kadai/add', [App\Http\Controllers\KadaiController::class, 'add'])->name('add.kadai');
Route::post('kadai/add', [App\Http\Controllers\KadaiController::class, 'create']);
Route::get('edit/{id}', [App\Http\Controllers\KadaiController::class, 'edit'])->name('edit');
Route::put('edit/{id}', [App\Http\Controllers\KadaiController::class, 'henshu']);
Route::post('del/{id}', [App\Http\Controllers\KadaiController::class, 'delete'])->name('delete');
Route::get('show/{id}', [App\Http\Controllers\KadaiController::class, 'show'])->name('show');
Route::get('show/edit/{id}', [App\Http\Controllers\KadaiController::class, 'edit']);
Route::put('show/edit/{id}', [App\Http\Controllers\KadaiController::class, 'henshu']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
