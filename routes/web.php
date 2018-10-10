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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prototypes', 'PrototypesController@show');
Route::get('/form_prototype', 'PrototypesController@form');
Route::post('/add_prototype', 'PrototypesController@create');

Route::get('/especies', 'EspeciesController@show');
Route::post('/add_especie', 'EspeciesController@create');

Route::get('/marcas', 'MarcasController@show');
Route::post('/add_marca', 'MarcasController@create');

Route::get('/ambientes', 'AmbientesController@show');
