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

use App\Http\Controllers\ImoveisController;
use App\Locador;
use App\Imovel;

/* ROTA PRINCIPAL
Route::get('/', function () {
    return view('homepage');
});

Route::get('/aula', function () {
    return view('aula');
});
*/

Route::get('/','ImovelController@indexhome');
Route::get('/republicas','ImovelController@indexrep');
Route::get('/pensionatos','ImovelController@indexpen');
Route::get('/quartos','ImovelController@indexqua');


//Route::resource('imoveis', 'ImovelController');

// ROTAS DOS IMÓVEIS
Route::get('/imoveis','ImovelController@index');
Route::get('/cadimovel', 'ImovelController@create')
->middleware('auth');
Route::post('/imoveis','ImovelController@store')->middleware('auth');
Route::get('/imoveis/{id}','ImovelController@detalhes');

    



//ROTAS DOS LOCADORES
Route::get('/locadores','LocadorController@index');
Route::get('/locadores/novo','LocadorController@create');
Route::post('/locadores','LocadorController@store');
Route::get('/locadores/remover/{id}','LocadorController@destroy');
Route::get('/locadores/editar/{id}','LocadorController@edit');
Route::post('/locadores/{id}','LocadorController@update');
Route::get('/locadoress/{id}','LocadorController@detalhes');

//ROTA FAVORITO
Route::resource('/favorito', 'FavoritoController', ['except' => ['create', 'edit', 'show', 'update']]);

//ROTA BOOTSTRAP
Route::get('home1', function () {
    return view('layouts.bootstrap');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


