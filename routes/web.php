<?php

use Illuminate\Support\Facades\Route;

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
Route::get('medicos/criar', 'App\Http\Controllers\MedicosController@create')->name('criar');

Route::post('medicos/criar', 'App\Http\Controllers\MedicosController@store')->name('registrar_medico');

Route::get('medicos/consultar/{id}', 'App\Http\Controllers\MedicosController@show');

Route::get('medicos/editar/{id}', 'App\Http\Controllers\MedicosController@edit');

Route::post('medicos/editar/{id}', 'App\Http\Controllers\MedicosController@update')->name('alterar_medico');

Route::get('medicos/excluir/{id}', 'App\Http\Controllers\MedicosController@delete');

Route::post('medicos/excluir/{id}', 'App\Http\Controllers\MedicosController@destroy')->name('excluir_medico');

Route::get('/', function () {
    return view('welcome');
});
