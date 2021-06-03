<?php

use App\Http\Controllers\KasaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZamowieniaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\autoTablesController;
use Illuminate\Database\Eloquent;
use Carbon\Carbon;
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

Route::get('/kuchnia', [ZamowieniaController::class, 'index'])->name('kuchnia');
Route::get('/kuchnia.realizacja', [ZamowieniaController::class, 'realizacja'])->name('kuchnia.realizacja');
Route::get('/kuchnia.zakoncz', [ZamowieniaController::class, 'wydaj'])->name('kuchnia.zakoncz');
Route::get('/kuchnia/dostepne', function ()
{return view('kuchnia/dosepne_dania');}
)->name('dostepne_dania');
Route::get('/kuchnia/dostepnosc/{id}', [MenuController::class,  function ($id){
    $dania=\App\Models\kategorie::find($id);

    return view('kuchnia/dania_dostepnosc',['dania'=>$dania]);
}])->name('dania_dostepnosc');
Route::get('/kuchnia/usun_dostepnosc/{id}', [MenuController::class, 'usun_dostepnosc'])->name('usun.dostepnosc');
Route::get('/kuchnia/dodaj_dostepnosc/{id}', [MenuController::class, 'dodaj_dostepnosc'])->name('dodaj.dostepnosc');
Route::get('/kuchnia/zestawienie', [ZamowieniaController::class, 'zamowienia_dzis'])->name('zestawienie');
Route::get('/kuchnia_zestawienie_kelner', [ZamowieniaController::class, 'zamowienia_dzis_kelner'])->name('kuchnia_zestawienie_kelner');

// routy dla kasy
Route::get("/kasa", [KasaController::class, 'index'])->name("kasa");
Route::post("/kasa/zarchiwizuj", [KasaController::class, 'zarchiwizuj'])->name('kasa.zarchiwizuj');
Route::post("/kasa/zaplac", [KasaController::class, 'zaplac'])->name('kasa.zaplac');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/out', [loginController::class, 'logout'])->name('logout');

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

Route::get('/admin/autoTables', [autoTablesController::class, 'init']);
Route::get('/admin/autoTables/roles/show', [autoTablesController::class, 'editRoles']);
Route::get('/admin/autoTables/roles/show/edit/{id}', [autoTablesController::class, 'editRole']);
Route::post('/admin/autoTables/roles/show/update', [autoTablesController::class, 'updateRoles']);

Route::get('/admin/autoTables/statuses/show', [autoTablesController::class, 'editStatuses']);
Route::get('/admin/autoTables/statuses/show/edit/{id}', [autoTablesController::class, 'editStatus']);
Route::post('/admin/autoTables/statuses/show/update', [autoTablesController::class, 'updateStatus']);

Route::get('/admin/autoTables/generateTables', [autoTablesController::class, 'generateTables']);
Route::post('/admin/autoTables/generateTables', [autoTablesController::class, 'processGenerateTables']);

Route::prefix('/admin/autoTables/tables/')->group(function () { 
    Route::get('show', [autoTablesController::class, 'tablesShow']); 
    Route::get('show/edit/{id}', [autoTablesController::class, 'editTable']);
    Route::get('show/delete/{id}', [autoTablesController::class, 'deleteTable']);
    Route::post('show/update', [autoTablesController::class, 'updateTable']);
    Route::get('show/add', [autoTablesController::class, 'addTable']);
    Route::post('show/add', [autoTablesController::class, 'addNewTable']);
});

Route::get('log-in-form', [loginController::class, 'login']);
Route::post('log-in-form', [loginController::class, 'tryLogin']);


Route::get('/kelnermenu', function () {
    return view('kelner_views/kelner2');
})->name('kelnermenu');

Route::get('/kelner', function () {
    return view('kelner_views/kelner');
});
Route::get('/kelner_zmien/{id}', [ZamowieniaController::class, 'zmianaStatusu'])->name('kelner_zmien');

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

Route::get('/', function () {
    return view('index');
});

Route::get('/kelner-zamowienia', function () {
    return view('kelner_views/kelnerZamowienie');
})->name('kelner-zamowienia');



//Route::get('/kelner-zamowienia', [ZamowieniaController::class, 'index2']);
