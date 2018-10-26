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

#Route::post('/enviardatos', 'MedidorsController@show');


Route::post('/enviardatos',function (){
  $identity= $_POST ['identity'];
  $temperatura = $_POST ['temperatura'];
  $humedad = $_POST ['humedad'];
  $estado_luz = $_POST ['estado_luz'];
  $estado_tiempo = $_POST ['estado_tiempo'];

  #$conexion->query("INSERT INTO `medidor` (`id`, `chipId`, `fecha`, `temperatura`, `humedad`,`estadoluces`,`estadotiempo`) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$temperatura','$humedad','$estadoluces','$estadotiempo');");
  DB::insert("INSERT INTO `medidor` (`id`, `identity`, `fecha`, `temperatura`, `humedad`,`estado_luces`,`estado_tiempo`) VALUES (NULL, 'identity', CURRENT_TIMESTAMP, '$temperatura','$humedad','$estado_luces','$estado_tiempo')")


  echo "Datos ingresados correctamente !!!!";

})






Route::group(['middleware' => 'auth'], function () {

  Route::get('/prototypes', 'PrototypesController@show');
  Route::get('/form_prototype', 'PrototypesController@form');
  Route::post('/add_prototype', 'PrototypesController@create');

  Route::get('/especies', 'EspeciesController@show');
  Route::post('/add_especie', 'EspeciesController@create');

  Route::get('/marcas', 'MarcasController@show');
  Route::post('/add_marca', 'MarcasController@create');

  Route::get('/ambientes', 'AmbientesController@show');
  Route::get('/form_ambiente', 'AmbientesController@form');
  Route::post('/add_ambiente', 'AmbientesController@create');

  Route::post('/add_sensor', 'SensorsController@create');
});
