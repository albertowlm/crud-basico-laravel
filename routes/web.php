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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



    Route::group(['prefix' => '/cliente'], function (){
        Route::get('list', 'ClientsController@listar');
        Route::get('form-cadastrar', 'ClientsController@formCadastrar');
        Route::post('cadastrar', 'ClientsController@cadastrar');
        Route::get('{id}/form-editar', 'ClientsController@formEditar');
        Route::post('{id}/editar', 'ClientsController@editar');
        Route::get('{id}/excluir', 'ClientsController@excluir');
    });



