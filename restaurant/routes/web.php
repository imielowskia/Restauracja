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

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('glownyWidok_pracownicy/employeemain');
});

//routy dla pracowników i kelnera
Route::get('/pracownik', function () {
    return view('');
});

Route::get('/kuchnia', [ZamowieniaController::class, 'index'])->name('kuchnia');
Route::get('/kuchnia.realizacja', [ZamowieniaController::class, 'realizacja'])->name('kuchnia.realizacja');
Route::get('/kuchnia.zakoncz', [ZamowieniaController::class, 'wydaj'])->name('kuchnia.zakoncz');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/menu', [MenuController::class, 'index']);
Route::get('/admin/menu/new', [MenuController::class, 'new']);
Route::post('/admin/menu/new', [MenuController::class, 'add']);
Route::get('/admin/menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('/admin/menu/edit', [MenuController::class, 'update']);
Route::get('/admin/menu/delete/{id}', [MenuController::class, 'delete']);

Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/users/new', [UserController::class, 'new']);
Route::post('/admin/users/new', [UserController::class, 'add']);
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit']);
Route::post('/admin/users/edit', [UserController::class, 'update']);
Route::get('/admin/users/delete/{id}', [UserController::class, 'delete']);

Route::get('/log-in-form', function () {
    return view('logowanie/logowanie');
});

Route::get('/kelnermenu', function () {
    return view('kelner_views/kelner2');
});

Route::get('/kelner', function () {
    return view('kelner_views/kelner');
});

Route::get('/dania', function () {
    return view('kelner_views/kelner_dania');
});


Route::get('/napoje', function () {
    return view('kelner_views/kelner_napoje');
});

Route::get('/alkohole', function () {
    return view('kelner_views/kelner_alkohole');
});

Route::get('/problems', function () {
    return view('problemy');
});

Route::get('/index', function () {
    return view('Strona klient/index');
});

Route::get('/menu', function () {
    return view('Strona klient/menu');
});

Route::get('/kontakt', function () {
    return view('Strona klient/kontakt');
});

Route::get('/galeria', function () {
    return view('Strona klient/galeria');
});
