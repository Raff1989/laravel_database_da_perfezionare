<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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
Route::get('/', [PublicController::class, "home"])->name('Homepage');

Route::get('/ecosistemi', [PublicController::class, "ecosistemi"])->name('EcoSistemi');

Route::get('/ecosistema/detail/{id}', [PublicController::class, "Detail"])->name('Detail');

Route::get('/Carnivori', [PublicController::class, "Carnivori"])->name('Carnivori');

Route::get('/Erbivori', [PublicController::class, "Erbivori"])->name('Erbivori');

