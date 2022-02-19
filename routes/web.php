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

/*Route::get('games', 'GamesController@index')->name('games.index');
Route::get('games/create', 'GamesController@create')->name('games.create');
Route::post('games', 'GamesController@store')->name('games.store');
Route::get('games/{id}/edit', 'GamesController@edit')->name('games.edit');
Route::put('games/{id}', 'GamesController@update')->name('games.update');
Route::delete('games/{id}', 'GamesController@destroy')->name('games.destroy');*/

Route::resource('games', 'GamesController');