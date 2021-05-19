<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZamowieniaController;
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

use App\Http\Controllers\EditMenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kuchnia', [ZamowieniaController::class, 'index'])->name('kuchnia');
Route::get('/kuchnia.realizacja', [ZamowieniaController::class, 'realizacja'])->name('kuchnia.realizacja');
Route::get('/kuchnia.zakoncz', [ZamowieniaController::class, 'wydaj'])->name('kuchnia.zakoncz');

Route::get('/admin/menu', [EditMenuController::class, 'index']);
Route::post('/admin/menu', [EditMenuController::class, 'add']);
Route::get('/admin/menu/new', [EditMenuController::class, 'new']);
Route::get('/admin/menu/{id}', [EditMenuController::class, 'edit']);
Route::post('/admin/menu/edit', [EditMenuController::class, 'update']);
