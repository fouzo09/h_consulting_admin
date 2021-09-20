<?php
use App\Role;
use App\Permission;
use App\User;

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

// Route::get('/new-register',function(){
//     return view('newRegister');
// });

Route::get('test',function(){
    return view('auth.passwords.reset');
});

Route::get('/', function () {
    return view('layouts.tpl');
});

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function()
{

    /**
     * Service routes
     */

    Route::get('list-services', 'ServiceController@getIndex')->name('list.services');
    Route::get('add-service', 'ServiceController@getAdd')->name('add.service');
    Route::post('add-service', 'ServiceController@postAdd')->name('add.service');

    /**
     * Actualite routes
     */

    Route::get('list-actualites', 'ActualiteController@getIndex')->name('list.actualites');
    Route::get('add-actualite', 'ActualiteController@getAdd')->name('add.actualite');
    Route::post('add-actualite', 'ActualiteController@postAdd')->name('add.actualite');

    /**
     * Formations routes
     */

    Route::get('list-formations', 'FormationController@getIndex')->name('list.formations');
    Route::get('add-formation', 'FormationController@getAdd')->name('add.formation');
    Route::post('add-formation', 'FormationController@postAdd')->name('add.formation');

    /**
     * Entreprise routes
     */

    Route::get('list-entreprises', 'EntrepriseController@getIndex')->name('list.entreprises');
    Route::get('add-entreprise', 'EntrepriseController@getAdd')->name('add.entreprise');
    Route::post('add-entreprise', 'EntrepriseController@postAdd')->name('add.entreprise');

    /**
     * Offres d'emplois routes
     */

    Route::get('list-offres-emplois', 'EmploiController@getIndex')->name('list.offres-emplois');
    Route::get('add-offre-emploi', 'EmploiController@getAdd')->name('add.offre-emploi');
    Route::post('add-offre-emploi', 'EmploiController@postAdd')->name('add.offre-emploi');

    Route::get('show-user/{id}','RoleController@show')->name('user.show');
    Route::get('user-disable/{id}','UserController@disable')->name('disable');
    
    Route::post('add-user','UserController@store')->name('user.add');
    Route::get('edit-user-form/{id}','userController@edit')->name('user.edit.form');
    Route::post('edit-user/{id}','userController@update')->name('user.edit');
    Route::get('delete-user/{id}','userController@destroy')->name('user.delete');
    Route::get('logout-user','UserController@logout')->name('logout.user');
    Route::get('new-password','UserController@updatePasswordForm')->name('new.password.form');
    Route::post('new-password','UserController@updatePassword')->name('new.password');
    
    Route::get('list-users','UserController@index')->name('users-list');
    
    Route::get('role','RoleController@create')->name('role-form');
    Route::post('role','RoleController@store')->name('role-store');
    
    Route::get('role-liste','RoleController@index')->name('role-index');
    Route::get('show-role/{id}','RoleController@show')->name('role-show');
    
    Route::get('edit-role-form/{id}','RoleController@edit')->name('role.edit.form');
    Route::post('edit-role/{id}','RoleController@update')->name('role.edit');
    Route::get('delete-role/{id}','RoleController@destroy')->name('role.delete');

});










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
