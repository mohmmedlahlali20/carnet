<?php

use App\Http\Controllers\RecettesController;
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

Route::get('/', [RecettesController::class, 'Afficher_all'])->name('recettes.all');
Route::get('/recettes/{id}', [RecettesController::class, 'Afficher_detail'])
->where('id', '\d+')
->name('AfficherDetail');

Route::get('/search', [RecettesController::class , 'search']);

Route::resources([
    'recettes' => RecettesController::class
]);

// Route::resource('recettes', RecettesController::class);