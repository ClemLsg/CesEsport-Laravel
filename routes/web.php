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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/users/{n}', 'UserPageController@index')->name('user');

Route::get('/event', 'EventController@index')->name('event');
Route::get('/event-users/{e}', 'EventController@list')->name('event-list');
Route::post('/event/solo/{n}', 'EventController@register_solo');

Route::get('/leaderboard', 'LeaderboardController@index')->name('leaderboard');

Route::get('/compte/{n}', 'CompteController@index')->name('compte');
Route::post('/compte/{n}', 'CompteController@update_avatar');
Route::post('/compte-update/{n}', 'CompteController@update');
Route::get('/edit-event/{e}', 'CompteController@editevent')->name('edit-event');
Route::get('/edit-event-inscription/{e}/{p}', 'CompteController@subevent')->name('sub-event');
Route::get('/edit-event-desinscription/{e}/{p}', 'CompteController@unsubevent')->name('unsub-event');

Route::get('/team-create/{p}/{n}', 'TeamCreateController@index')->name('team-create');
Route::get('/team-create/autocomplete',array('as'=>'autocomplete','uses'=>'TeamCreateController@autocomplete'));

Route::get('/team-inscription/{n}', 'CesEsportTeamController@index')->name('inscription-team');
Route::get('/team-inscription-team/{n}', 'CesEsportTeamController@register')->name('sub-cesi');
Route::get('/team-desinscription/{n}', 'CesEsportTeamController@unregister')->name('unsub-cesi');

Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404'])->name('404');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin/addpts', 'AdminController@addpts')->name('addptns');
Route::post('/admin/rmpts', 'AdminController@rmpts')->name('rmptns');
Route::post('/admin/addgame', 'AdminController@addgame')->name('addgame');
Route::post('/admin/addevent', 'AdminController@addevent')->name('addevent');

Route::get('/cgu', 'CguController@index')->name('cgu');
Route::post('/cgu', 'CguController@validate')->name('cguvalidate');