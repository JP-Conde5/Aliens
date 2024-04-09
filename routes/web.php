<?php

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
    return view('index');
})->name('pagInicial');

Route::get('/aliens', [App\Http\Controller\controllerAlien::class, 'index'])->name('pagShow');
Route::get('/novo', [App\Http\Controller\controllerAlien::class, 'create'])->name('pagNew');
Route::post('/aliens', [App\Http\Controller\controllerAlien::class, 'save'])->name('newAlien');
Route::get('/apagar/{id}', [App\Http\Controller\controllerAlien::class, 'delete'])->name('deleteAlien');
Route::get('/editar/{id}', [App\Http\Controller\controllerAlien::class, 'edit'])->name('pagEdit');
Route::post('/update/{id}', [App\Http\Controller\controllerAlien::class, 'update'])->name('updateAlien');
Route::get('/pesquisa', [App\Http\Controller\controllerAlien::class, 'search'])->name('pagSearch');
Route::post('/aliens', [App\Http\Controller\controllerAlien::class, 'find'])->name('findAlien');
