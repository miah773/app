<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\ClasseController;

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
    return view('welcome');
});


Route::get('/index', [AdminController::class, 'index'])->name('admin.index');

Route::get('/enseignantstore', [EnseignantController::class, 'store'])->name('enseignant.store');
Route::post('/enseignantstore', [EnseignantController::class, 'store'])->name('enseignant.store');
Route::post('/enseignantcreate', [EnseignantController::class, 'create'])->name('enseignant.create');
Route::get('/enseignantcreate', [EnseignantController::class, 'create'])->name('enseignant.create');
Route::get('/listeenseignant', [EnseignantController::class, 'getEnseignant'])->name('listeenseignant');

Route::get('/modifierenseignant/{id}', [EnseignantController::class, 'updateEnseignant'])->name('modifierEnseignant');
Route::get('/supprimerenseignant/{id}', [EnseignantController::class, 'deleteEnseignant'])->name('supprimerEnseignant');
Route::get('/enseignant/{id}', [EnseignantController::class, 'show'])->name('afficherEnseignant');
Route::put('/enseignant/{id}', [EnseignantController::class, 'updateEnseignant'])->name('Enseignant.update');
Route::delete('/enseignant/{id?}', [EnseignantController::class, 'deleteEnseignant'])->name('Enseignant.destroy');


Route::get('/specialitestore', [SpecialiteController::class, 'store'])->name('specialite.store');
Route::post('/specialitestore', [SpecialiteController::class, 'store'])->name('specialite.store');
Route::post('/specialitecreate', [SpecialiteController::class, 'create'])->name('specialite.create');
Route::get('/specialitecreate', [SpecialiteController::class, 'create'])->name('specialite.create');

Route::get('/listespecialite', [SpecialiteController::class, 'getSpecialite'])->name('listespecialite');
Route::get('/modifierSpecialite/{id}', [SpecialiteController::class, 'updateSpecialite'])->name('modifierSpecialite');
Route::get('/supprimerSpecialite/{id}', [SpecialiteController::class, 'deleteSpecialite'])->name('supprimerSpecialite');
Route::get('/specialite/{id}', [SpecialiteController::class, 'show'])->name('afficherSpecialite');
Route::put('/specialite/{id}', [SpecialiteController::class, 'updateSpecialite'])->name('specialite.update');
Route::delete('/specialite/{id?}', [SpecialiteController::class, 'deleteSpecialite'])->name('specialite.destroy');





Route::get('/classestore', [ClasseController::class, 'store'])->name('classe.store');
Route::post('/classestore', [ClasseController::class, 'store'])->name('classe.store');
Route::post('/classecreate', [ClasseController::class, 'create'])->name('classe.create');
Route::get('/classecreate', [ClasseController::class, 'create'])->name('classe.create');
Route::get('/listeclasse', [ClasseController::class, 'getClasse'])->name('classe.liste');

