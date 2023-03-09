<?php

use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// go to accueil page by default
Route::get('/', function () {
    return view('accueil');
});

// route to the list of students

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant/{id}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::get('/nouvelEtudiant', [EtudiantController::class, 'create'])->name('nouvelEtudiant');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::delete('/etudiant/{id}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');