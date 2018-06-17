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
    return view('index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'dashboard'], function(){
	Route::get('/', 'HomeController@index')->name('home');
	Route::group(['prefix'=>'plantas'], function(){
		Route::get('/create', function () {
    		return view('plantas.plantascreate');
    	})->name('plantas.create');
    	Route::get('/show','PlantasController@show')->name('plantas.show');

		/*Route::post('/create','DatosBasicosController@create')->name('datos.create');
		Route::post('/update','DatosBasicosController@update')->name('datos.update');	*/
			});
});

Route::post('plantas/save','PlantasController@save')->name('plantas.save');
Route::post('plantas/update','PlantasController@update')->name('plantas.update');