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

Route::get('/mostrar_produtos', 'App\Http\Controllers\consumirapiController@index');
Route::get('/mostrar_produtos/{id}', 'App\Http\Controllers\consumirapiController@show');
Route::get('/mostrarumproduto/{id}', 'App\Http\Controllers\consumirapiController@mostrarUmProduto');
Route::get('/novo', 'App\Http\Controllers\consumirapiController@create');
Route::get('/editar/{id}', 'App\Http\Controllers\consumirapiController@edit');
Route::get('/deletar/{id}', 'App\Http\Controllers\consumirapiController@delete');
Route::get('/login', 'App\Http\Controllers\consumirapiController@fazerLogin');
Route::get('/cadastro', 'App\Http\Controllers\consumirapiController@fazerCadastro');
Route::get('/logout', 'App\Http\Controllers\consumirapiController@fazerLogout');
Route::get('/dashboard', 'App\Http\Controllers\consumirapiController@verDashboard');
