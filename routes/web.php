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
    return view('welcome');
});

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

Route::get('role-liste','RoleController@index')->name('role-index');

Route::get('entre-liste','depots\DepotsController@entreIndex')->name('entre.index');
Route::get('sortie-liste}','depots\DepotsController@sortieIndex')->name('sortie.index');

Route::get('carnet-liste','CarnetsController@index')->name('carnet.index');
Route::get('vacicins-liste}','VaccinsController@index')->name('vaccins.index');
Route::get('centre-liste}','CentreController@index')->name('centre.index');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
