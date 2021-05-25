<?php

use App\Http\Controllers\KasaController;
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

// routy dla kasy
Route::get("/kasa", [KasaController::class, 'index'])->name("kasa");
Route::post("/kasa/zarchiwizuj", [KasaController::class, 'zarchiwizuj'])->name('kasa.zarchiwizuj');
Route::post("/kasa/zaplac", [KasaController::class, 'zaplac'])->name('kasa.zaplac');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/menu', [MenuController::class, 'index']);
Route::get('/admin/menu/new', [MenuController::class, 'new']);
Route::post('/admin/menu/new', [MenuController::class, 'add']);
Route::get('/admin/menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('/admin/menu/edit', [MenuController::class, 'update']);
Route::get('/admin/menu/delete/{id}', [MenuController::class, 'delete']);

Route::get('/admin/menu/categories/new', [MenuController::class, 'newCategory']);
Route::post('/admin/menu/categories/new', [MenuController::class, 'addCategory']);
Route::get('/admin/menu/categories/edit/{id}', [MenuController::class, 'editCategory']);
Route::post('/admin/menu/categories/edit', [MenuController::class, 'updateCategory']);
Route::get('/admin/menu/categories/delete/{id}', [MenuController::class, 'deleteCategory']);

Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/users/new', [UserController::class, 'new']);
Route::post('/admin/users/new', [UserController::class, 'add']);
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit']);
Route::post('/admin/users/edit', [UserController::class, 'update']);
Route::get('/admin/users/delete/{id}', [UserController::class, 'delete']);

Route::get('/admin/users/roles/new', [UserController::class, 'newRole']);
Route::post('/admin/users/roles/new', [UserController::class, 'addRole']);
Route::get('/admin/users/roles/edit/{id}', [UserController::class, 'editRole']);
Route::post('/admin/menu/roles/edit', [UserController::class, 'updateRole']);
Route::get('/admin/users/roles/delete/{id}', [UserController::class, 'deleteRole']);

Route::get('/log-in-form', function () {
    return view('logowanie/logowanie');
});

Route::get('/kelnermenu', function () {
    return view('kelner_views/kelner2');
})->name('kelnermenu');

Route::get('/kelner', function () {
    return view('kelner_views/kelner');
});

Route::get('/kelner_views/kelner_dania/{id}', [MenuController::class, 'wyswietl'])->name('dania');

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
    return view('widok_klient/index');
});

Route::get('/kelner-zamowienia', function () {
    return view('kelner_views/kelnerZamowienie');
});
