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

Route::get('/liste',[\App\Http\Controllers\SerieController::class, 'index'])->name('listeSerie');

Route::get('/',[\App\Http\Controllers\SerieController::class, 'cinqSeries'])->name('accueil');

Route::get('/profil/{id}',[\App\Http\Controllers\UserController::class, 'profil'])->name('profil');

Route::get('/liste/{id}',[\App\Http\Controllers\SerieController::class, 'detailSerie'])->name('id');

Route::get('/personnaliser/{id}',[\App\Http\Controllers\UserController::class, 'personnaliser'])->name('perso');

Route::post('/personnaliser/{id}',[\App\Http\Controllers\UserController::class, 'changerProfil'])->name('changerProfil');

Route::get('deco', function(){

    Auth::logout();
    return view('welcome');

})->name('deco');


Route::fallback(function() {
    return view('404');
});

Route::post('/liste',[\App\Http\Controllers\SerieController::class, 'store'])->name('liste.store');
