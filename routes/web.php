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

Route::get('/profil',[\App\Http\Controllers\SerieController::class, 'profil'])->name('profil');

Route::get('/connexion',[\App\Http\Controllers\UserController::class, 'versConnexion'])->name('versConnexion');

Route::Post('/connexion',[\App\Http\Controllers\UserController::class, 'connexion'])->name('connexion');

Route::get('/inscription',[\App\Http\Controllers\UserController::class, 'versInscription'])->name('versInscription');

Route::Post('/inscription',[\App\Http\Controllers\UserController::class, 'inscription'])->name('inscription');
