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
Route::view('/connexion', 'connexion')->name('connexion');

// En test
Route::post('/liste/create',[\App\Http\Controllers\UserController::class, 'statistique'])->name('profil');
Route::post('/liste/search',[\App\Http\Controllers\SerieController::class, 'search'])->name('serie.search');

//Route::post("/login", );
