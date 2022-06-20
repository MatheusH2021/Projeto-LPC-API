<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::namespace('App\Http\Controllers')->group(function(){
    
    Route::middleware('isLoged')->group(function(){
        
        Route::get('/', 'MeuImovelController@index')->name('login');
        Route::post('/apiLogin', 'MeuImovelController@apiLogin')->name('apiLogin');

    });
    
    /*- Verifica se o usuário está logado -*/
    Route::middleware('validateUser')->group(function(){
        
        /*- Rotas de view -*/
        Route::get('/home', 'MeuImovelController@home')->name('home');
        Route::get('/logout', 'MeuImovelController@logout')->name('logout');
        Route::get('/editar/{id}', 'MeuImovelController@editar')->name('editar');
        Route::get('/cadastrar', 'MeuImovelController@cadastrar')->name('cadastrar');

        /*-Rotas de consumo da Api -*/
        Route::get('/deletar/{id}', 'MeuImovelController@apiDelete')->name('deletar');
        Route::post('/apiEditar/{id}', 'MeuImovelController@apiEditar')->name('apiEditar');
        Route::post('/apiCadastro', 'MeuImovelController@apiCadastro')->name('apiCadastro');
        
    });

});