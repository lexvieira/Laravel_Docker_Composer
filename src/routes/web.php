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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Laravel With Docker + Composer + Artisan Running 100%+';
});

//Home Controller
Route::get('/hello', 'HelloController@index');
Route::get('/home', 'HelloController@home');
//Shortcut way, it is not necessary send the name of the controller
//Use this if you want only return a simple view
//Without perform any other actions
Route::view('/about', 'about');

#Doesn't work with Route::view
#Route::view('/services','services');

//Covid 19 Project
//Empresa Routes
Route::get('/empresas', 'EmpresaController@index');
Route::get('/empresas/create', 'EmpresaController@create');
Route::post('/empresas', 'EmpresaController@store');
Route::get('/empresas/{empresa}', 'EmpresaController@show');
Route::get('/empresas/{empresa}/edit', 'EmpresaController@edit');
Route::patch('/empresas/{empresa}', 'EmpresaController@update');
Route::delete('/empresas/{empresa}', 'EmpresaController@destroy');

//Recursos Disponíveis Routes
Route::get('/empresas/{empresa}/recursos/create', 'Recurso_dispController@create');
Route::post('/empresas/{empresa}/recursos', 'Recurso_dispController@store');

//Insumos
//Route::get('/empresas/{empresa}/recursos/{recurso}/insumos/create', 'InsumoController@create')->name('insumo.create');
Route::post('/empresas/{empresa}/recursos/{recurso}/insumos', 'InsumoController@store')->name('insumo.store');
Route::get('/empresas/{empresa}/recursos/{recurso}/insumos/{insumo}', 'InsumoController@show')->name('insumo.show');


//Route::post('/insumos', 'InsumoController@store')->name('insumo.store');

Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

Route::get('subfolder.hello', 'EmpresaController@index');

Route::get('/covid19recursos', function(){
    $recursos = 'Recursos Recebidos para o Projeto Covid 19';
    return view('covid19recursos.recursos', ['recursos' => $recursos]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
