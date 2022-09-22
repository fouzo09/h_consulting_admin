<?php
use App\Role;
use App\User;
use App\Permission;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HeuristicController;
use App\Http\Controllers\UserFrontController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OffreEmploiController;
use App\Http\Controllers\TypeContratController;
use App\Http\Controllers\EnvoisCVPostulantController;


Route::get('/', 'HomeController@index')->name('/');
Route::get('offres-emplois', 'OffreEmploiController@getListeOffreEmploi')->name('liste-offres-emplois');
Route::get('details-offres-emplois/{emploi}', 'OffreEmploiController@getDetailsOffreEmploi')->name('details-offres-emplois');

Route::get('heuristic', 'HeuristicController@getHeuristic')->name('heuristic');
Route::get('formations', 'FormationController@getFormations')->name('formations');
Route::get('formation/{id}', 'FormationController@getFormation')->name('formation');

Route::get('actualites', 'ActualiteController@getActualites')->name('actualites');
Route::get('actualite/{id}', 'ActualiteController@getActualite')->name('actualite');

Route::get('nous-connaitre', 'HeuristicController@nousConaitre')->name('nous-connaitre');
Route::get('nos-services', 'HeuristicController@nosService')->name('nos-services');
Route::get('notre-equipe', 'HeuristicController@notreEquipe')->name('notre-equipe');
Route::get('carriere', 'HeuristicController@carriere')->name('carriere');

/**
 * Inscription de l'utilisateur routes
 */
Route::get('Connexion-Inscription-User','UserFrontController@create')->name('user-connexion-inscription');
Route::post('inscription-user','UserFrontController@store')->name('inscriptionUser');
Route::post('inscription-user-modal',[UserFrontController::class,'storeModal'])->name('inscriptionUserModal');

/**
 * postuler à une offre d'emploi routes
 */
 Route::post('Envois-CV-Postulant/{emploi_Id}',[EnvoisCVPostulantController::class,'EnvoisCV'])->name('Envois-CV-Postulant');

 /**
 * Compte de l'utilisateur connecté
 */
 Route::get('Compte-user-connecte-front',[UserFrontController::class,'monCompte'])->name('monCompte');

 Route::post('mon-profile',[UserFrontController::class,'monProfile'])->name('monProfile');
 /**
 * les routes liées à la partie administrations
 */

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function()
{

    Route::get('/', 'ServiceController@getIndex')->name('list.services')->middleware('auth');

    /**
     * Dashboard
     */
    Route::get('dashboard',[DashboardController::class,'__invoke'])->name('dashboard');

    /**
     * Type contrat
     */
    Route::get('liste-type-contrat',[TypeContratController::class,'index'])->name('listeTypeContrat');
    Route::get('create-type-contrat',[TypeContratController::class,'create'])->name('createTypeContrat');
    Route::post('create-type-contrat',[TypeContratController::class,'store'])->name('storeTypeContrat');
    Route::get('modifier-type-contrat/{id}',[TypeContratController::class,'edit'])->name('modifieTypeContrat');
    Route::post('modifier-type-contrat/{id}',[TypeContratController::class,'update'])->name('updateTypeContrat');
    Route::get('supprimer-type-contrat/{id}',[TypeContratController::class,'destroy'])->name('supprimerTypeContrat');

    /**
     * Secteurs
     */
    Route::get('liste-Secteur',[SecteurController::class,'index'])->name('listeSecteur');
    Route::get('create-Secteur',[SecteurController::class,'create'])->name('createSecteur');
    Route::post('create-secteur',[SecteurController::class,'store'])->name('storeSecteur');
    Route::get('modifier-secteur/{id}',[SecteurController::class,'edit'])->name('modifieSecteur');
    Route::post('modifier-secteur/{id}',[SecteurController::class,'update'])->name('updateSecteur');
    Route::get('supprimer-Secteur/{id}',[SecteurController::class,'destroy'])->name('supprimerSecteur');

    /**
     * Domaines
     */
    Route::get('liste-domaines',[DomaineController::class,'index'])->name('listeDomaine');
    Route::get('create-domaines',[DomaineController::class,'create'])->name('createDomaine');
    Route::post('create-domaines',[DomaineController::class,'store'])->name('storeDomaine');
    Route::get('modifier-domaines/{id}',[DomaineController::class,'edit'])->name('modifieDomaine');
    Route::post('modifier-domaines/{id}',[DomaineController::class,'update'])->name('updateDomaine');
    Route::get('supprimer-domaines/{id}',[DomaineController::class,'destroy'])->name('supprimerDomaine');

    /**
     * Service routes
     */
    Route::get('list-services', 'ServiceController@getIndex')->name('list.servi')->middleware('auth');
    Route::get('add-service', 'ServiceController@getAdd')->name('add.service')->middleware('auth');
    Route::post('add-service', 'ServiceController@postAdd')->name('add.service')->middleware('auth');

    Route::get('retrieve-service/{serviceID}', 'ServiceController@RetrieveService')->name('retrieve.service')->middleware('auth');
    Route::get('delete-service/{serviceID}', 'ServiceController@DeleteService')->name('delete.service')->middleware('auth');
    Route::get('edit-service/{serviceID}', 'ServiceController@EditServiceForm')->name('edit.service.form')->middleware('auth');
    Route::post('edit-service/{serviceID}', 'ServiceController@EditService')->name('edit.service')->middleware('auth');

    /**
     * Actualite routes
     */
    Route::get('list-actualites', 'ActualiteController@getIndex')->name('list.actualites')->middleware('auth');
    Route::get('add-actualite', 'ActualiteController@getAdd')->name('add.actualite')->middleware('auth');
    Route::post('add-actualite', 'ActualiteController@postAdd')->name('add.actualite')->middleware('auth');

    Route::get('retrieve-actualite/{actualiteID}', 'ActualiteController@RetrieveActualite')->name('retrieve.actualite')->middleware('auth');
    Route::get('delete-actualite/{actualiteID}', 'ActualiteController@DeleteActualite')->name('delete.actualite')->middleware('auth');
    Route::get('edit-actualite/{actualiteID}', 'ActualiteController@EditActualiteForm')->name('edit.actualite.form')->middleware('auth');
    Route::post('edit-actualite/{actualiteID}', 'ActualiteController@EditActualite')->name('edit.actualite')->middleware('auth');

    /**
     * Formations routes
     */
    Route::get('list-formations', 'FormationController@getIndex')->name('list.formations')->middleware('auth');
    Route::get('add-formation', 'FormationController@getAdd')->name('add.formation')->middleware('auth');
    Route::post('add-formation', 'FormationController@postAdd')->name('add.formation')->middleware('auth');

    Route::get('retrieve-formation/{formationID}', 'FormationController@RetrieveFormation')->name('retrieve.formation')->middleware('auth');
    Route::get('delete-formation/{formationID}', 'FormationController@DeleteFormation')->name('delete.formation')->middleware('auth');
    Route::get('edit-formation/{formationID}', 'FormationController@EditFormationForm')->name('edit.formation.form')->middleware('auth');
    Route::post('edit-formation/{formationID}', 'FormationController@EditFormation')->name('edit.formation')->middleware('auth');

    /**
     * Entreprise routes
     */

    Route::get('list-entreprises', 'EntrepriseController@getIndex')->name('list.entreprises')->middleware('auth');
    Route::get('add-entreprise', 'EntrepriseController@getAdd')->name('add.entreprise')->middleware('auth');
    Route::post('add-entreprise', 'EntrepriseController@postAdd')->name('add.entreprise')->middleware('auth');

    Route::get('retrieve-entreprise/{entrepriseID}', 'EntrepriseController@RetrieveEntreprise')->name('retrieve.entreprise')->middleware('auth');
    Route::get('delete-entreprise/{entrepriseID}', 'EntrepriseController@DeleteEntreprise')->name('delete.entreprise')->middleware('auth');
    Route::get('edit-entreprise/{entrepriseID}', 'EntrepriseController@EditEntrepriseForm')->name('edit.entreprise.form')->middleware('auth');
    Route::post('edit-entreprise/{entrepriseID}', 'EntrepriseController@EditEntreprise')->name('edit.entreprise')->middleware('auth');

    /**
     * Offres d'emplois routes
     */

    Route::get('list-offres-emplois', 'EmploiController@getIndex')->name('list.offres-emplois')->middleware('auth');
    Route::get('add-offre-emploi', 'EmploiController@getAdd')->name('add.offre-emploi')->middleware('auth');
    Route::post('add-offre-emploi', 'EmploiController@postAdd')->name('add.offre-emploi')->middleware('auth');

    Route::get('retrieve-emploi/{emploi_ID}', 'EmploiController@RetrieveEmploi')->name('retrieve.emploi')->middleware('auth');
    Route::get('delete-offre-emploi/{emploi_ID}', 'EmploiController@DeleteEmploi')->name('delete.emploi')->middleware('auth');
    Route::get('edit-offre-emploi/{emploi_ID}', 'EmploiController@EditEmploiForm')->name('edit.emploi.form')->middleware('auth');
    Route::post('edit-offre-emploi/{emploi_ID}', 'EmploiController@EditEmploi')->name('edit.emploi')->middleware('auth');

    /**
     * Configurations
     */
    Route::get('config', 'ConfigController@getIndex')->name('config')->middleware('auth');
    Route::post('config', 'ConfigController@postConfig')->name('config')->middleware('auth');

    /**
     * Utilisateurs routes
     */
    Route::get('list-users','UserController@index')->name('list.users')->middleware('auth');
    Route::get('add-user','UserController@create')->name('add.user')->middleware('auth');
    Route::post('add-user','UserController@store')->name('add.user')->middleware('auth');

    // Route::get('show-user/{id}','RoleController@show')->name('user.show')->middleware('auth');
    // Route::get('user-disable/{id}','UserController@disable')->name('disable')->middleware('auth');
    Route::get('edit-user-form/{id}','UserController@edit')->name('user.edit.form')->middleware('auth');
    Route::post('edit-user/{id}','UserController@update')->name('user.edit')->middleware('auth');
    Route::get('delete-user/{id}','UserController@destroy')->name('user.delete')->middleware('auth');
    Route::get('logout-user','UserController@logout')->name('logout.user')->middleware('auth');
    // Route::get('new-password','UserController@updatePasswordForm')->name('new.password.form')->middleware('auth');
    // Route::post('new-password','UserController@updatePassword')->name('new.password')->middleware('auth');

    /**
     * Roles routes
     */

    // Route::get('role','RoleController@create')->name('role-form')->middleware('auth');
    // Route::post('role','RoleController@store')->name('role-store')->middleware('auth');
    // Route::get('role-liste','RoleController@index')->name('role-index')->middleware('auth');
    // Route::get('show-role/{id}','RoleController@show')->name('role-show')->middleware('auth');
    // Route::get('edit-role-form/{id}','RoleController@edit')->name('role.edit.form')->middleware('auth');
    // Route::post('edit-role/{id}','RoleController@update')->name('role.edit')->middleware('auth');
    // Route::get('delete-role/{id}','RoleController@destroy')->name('role.delete')->middleware('auth');
});

 /*
 *  Authentification de l'utilisateur routes
 */

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login-Front', [LoginController::class,'login'])->name('Authentification-front');
Auth::routes();
