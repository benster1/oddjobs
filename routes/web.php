<?php

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

Route::get('/', function () {
    return view('welcome');
    echo 'ok GIT test 2';
});

Auth::routes();
//Menu
Route::get('/games', 'HomeController@games')->name('games');
Route::get('/store', 'HomeController@stores')->name('stores');
Route::get('/groups', 'HomeController@groups')->name('groups');
Route::get('/forum', 'HomeController@forum')->name('forum');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'Controller@profil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Administrators
Route::get('/allAdmin', 'AdministratorController@index');
Route::get('/addAdmin', 'AdministratorController@create');
Route::post('/dbAddAdmin', 'AdministratorController@dbAddAdmin');



//Recruiters
Route::get('/allRec', 'RecruiterController@index');
Route::get('/newOpp', 'RecruiterController@newOpp');
Route::post('/dbAddOpp', 'RecruiterController@dbAddOpp');



//Applicants
Route::get('/allAppl', 'ApplicantController@index');
Route::get('/myApplic', 'ApplicantController@myAppl');
Route::get('/myApplications', 'ApplicantController@myApplications');
Route::post('/uploadresume', 'ApplicantController@uploadresume');

//Offers
Route::get('/myOpp', 'OppeningController@index');
Route::get('/myAppl', 'OppeningController@myAppl');
Route::get('/allOpp', 'OppeningController@allOpp');
Route::get('/apply', 'OppeningController@apply');
Route::get('/detailOpp/{id}', 'OppeningController@apply');
Route::post('/dbStoreOppl', 'OppeningController@store');
Route::get('/AppToOpp/{id}', 'OppeningController@AppToOpp');

//Messages
Route::get('/msg', 'MessageController@index');
Route::post('/newMessage', 'MessageController@newMessage');
Route::get('/newMessage', 'MessageController@index');
Route::get('/newWriteMessage', 'MessageController@newWriteMessage');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
