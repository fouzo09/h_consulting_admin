<?php
use App\Role;
use App\Permission;
use App\User;

 
// Route::get('/new-register',function(){
//     return view('newRegister');
// });

// Route::get('test',function(){
//     return view('auth.passwords.reset');
// });

Route::get('/', 'HomeController@index')->name('/');
Route::get('liste-offres-emplois', 'OffreEmploiController@getListeOffreEmploi')->name('liste-offres-emplois');
Route::get('details-offres-emplois/{emploi}', 'OffreEmploiController@getDetailsOffreEmploi')->name('details-offres-emplois');


Route::get('nous-connaitre', 'HeuristicController@nousConaitre')->name('nous-connaitre');
Route::get('nos-services', 'HeuristicController@nosService')->name('nos-services');
Route::get('notre-equipe', 'HeuristicController@notreEquipe')->name('notre-equipe');
Route::get('carriere', 'HeuristicController@carriere')->name('carriere');

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function()
{

    Route::get('/', 'ServiceController@getIndex')->middleware('auth');

    /**
     * Service routes
     */

    Route::get('list-services', 'ServiceController@getIndex')->name('list.services')->middleware('auth');
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
    // Route::post('edit-user/{id}','UserController@update')->name('user.edit')->middleware('auth');
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










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
