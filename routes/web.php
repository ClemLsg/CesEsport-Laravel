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
Route::post('/event/solo/{n}', 'EventController@register_solo');

Route::get('/leaderboard', 'LeaderboardController@index')->name('leaderboard');

Route::get('/compte/{n}', 'CompteController@index')->name('compte');
Route::post('/compte/{n}', 'CompteController@update_avatar');
Route::post('/compte-update/{n}', 'CompteController@update');
Route::post('/edit-event/{e}/{n}', 'CompteController@editevent')->name('edit-event');

Route::get('/team-create/{p}/{n}', 'TeamCreateController@index')->name('team-create');
Route::get('/team-create/autocomplete',array('as'=>'autocomplete','uses'=>'TeamCreateController@autocomplete'));

Route::get('/team-inscription/{n}', 'CesEsportTeamController@index')->name('inscription-team');
Route::get('/team-inscription-team/{n}', 'CesEsportTeamController@register')->name('sub-cesi');
Route::get('/team-desinscription/{n}', 'CesEsportTeamController@unregister')->name('unsub-cesi');

Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404'])->name('404');