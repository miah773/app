<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\loginController;
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
Route::get('/dash', [IndexController::class, 'dash'])->name('admin.dash');

Route::get('/admin',[loginController::class,'login']);
Route::post('/login',[loginController::class,'authLogin']);




//enseignant

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

//spécialité

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



//cclasse

Route::get('/classestore', [ClasseController::class, 'store'])->name('classe.store');
Route::post('/classestore', [ClasseController::class, 'store'])->name('classe.store');
Route::post('/classecreate', [ClasseController::class, 'create'])->name('classe.create');
Route::get('/classecreate', [ClasseController::class, 'create'])->name('classe.create');
Route::get('/listeclasse', [ClasseController::class, 'getClasse'])->name('classe.liste');

//formation

Route::get('/formationstore', [FormationController::class, 'store'])->name('formation.store');
Route::post('/formationstore', [FormationController::class, 'store'])->name('formation.store');
Route::post('/formationcreate', [FormationController::class, 'create'])->name('formation.create');
Route::get('/formationcreate', [FormationController::class, 'create'])->name('formation.create');
Route::get('/listeFormation', [FormationController::class, 'getFormation'])->name('listeFormation');


Route::get('/modifierFormation/{id}', [FormationController::class, 'updateFormation'])->name('modifierFormation');
Route::get('/supprimerFormation/{id}', [FormationController::class, 'deleteFormation'])->name('supprimerFormation');
Route::get('/formation/{id}', [FormationController::class, 'show'])->name('afficherFormation');
Route::put('/formation/{id}', [FormationController::class, 'updateFormation'])->name('formation.update');
Route::delete('/formation/{id?}', [FormationController::class, 'deleteFormation'])->name('formation.destroy');

//departement
Route::get('/departementstore', [DepartementController::class, 'store'])->name('departement.store');
Route::post('/departementstore', [DepartementController::class, 'store'])->name('departement.store');
Route::post('/departementcreate', [DepartementController::class, 'create'])->name('departement.create');
Route::get('/departementcreate', [DepartementController::class, 'create'])->name('departement.create');
Route::get('/listedepartement', [DepartementController::class, 'getDepartement'])->name('listedepartement');


Route::get('/modifierDepartement/{id}', [DepartementController::class, 'updateDepartemenet'])->name('modifierDepartement');
Route::get('/supprimerDepartement/{id}', [DepartementController::class, 'deleteDepartement'])->name('supprimerDepartement');
Route::get('/departement/{id}', [DepartementController::class, 'show'])->name('afficherDepartement');
Route::put('/departement/{id}', [DepartementController::class, 'updateDepartement'])->name('departement.update');
Route::delete('/departement/{id?}', [DepartementController::class, 'deleteDepartement'])->name('departement.destroy');

//contact

Route::get('/contactstore', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contactstore', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contactcreate', [ContactController::class, 'create'])->name('contact.create');
Route::get('/contactcreate', [ContactController::class, 'create'])->name('contact.create');
Route::get('/listecontact', [ContactController::class, 'getContact'])->name('listecontact');


Route::get('/modifiercontact/{id}', [ContactController::class, 'updateContact'])->name('modifierContact');
Route::get('/supprimerContact/{id}', [ContactController::class, 'deleteContact'])->name('supprimerContact');
Route::get('/contact/{id}', [ContactController::class, 'show'])->name('afficherContact');
Route::put('/contact/{id}', [ContactController::class, 'updateContact'])->name('Contact.update');
Route::delete('/contact/{id?}', [ContactController::class, 'deleteContact'])->name('contact.destroy');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;


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
Route::post('/enseignantstore', [EnseignantController::class, 'create'])->name('enseignant.store');
Route::post('/enseignantcreate', [EnseignantController::class, 'create'])->name('enseignant.create');



Route::get('/specialitestore', [SpecialiteController::class, 'store'])->name('specialite.store');
Route::post('/specialitestore', [SpecialiteController::class, 'store'])->name('specialite.store');
Route::post('/specialitecreate', [SpecialiteController::class, 'create'])->name('specialite.create');
Route::get('/specialitecreate', [SpecialiteController::class, 'create'])->name('specialite.create');

Route::get('/listespecialite', [SpecialiteController::class, 'getSpecialite'])->name('specialite.liste');
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


Route::get('/etudiantstore', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::post('/etudiantstore', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::post('/etudiantcreate', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::get('/etudiantcreate', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::get('/listeetudiant', [EtudiantController::class, 'getEtudiant'])->name('etudiant.liste');
Route::get('/modifierEtudiant/{id}', [EtudiantController::class, 'updateEtudiant'])->name('modifierEtudiant');
Route::get('/supprimerEtudiant/{id}', [EtudiantController::class, 'deleteEtudiant'])->name('supprimerEtudiant');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('afficherEtudiant');
Route::put('/etudiant/{id}', [EtudiantController::class, 'updateEtudiant'])->name('etudiant.update');
Route::delete('/etudiant/{id?}', [EtudiantController::class, 'deleteEtudiant'])->name('etudiant.destroy');
