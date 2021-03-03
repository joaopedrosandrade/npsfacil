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
    return view('auth.login');
});

Auth::routes();


Route::prefix('/admin')->group(function() {
    Route::get('/', ['as'=>'home','uses'=>'HomeController@index'] );

    Route::group(['prefix'=>'cliente'], function(){
     
        Route::get('/',['as'=>'cliente.index', 'uses' => 'ClienteController@index']);   
        Route::get('cadastrar',['as'=>'cliente.cadastro', 'uses' => 'ClienteController@create']);   
        Route::post('cadastrar/store',['as'=>'cliente.store', 'uses' => 'ClienteController@store']); 
     
       
        //Route::get('qr-code', 'OficioController@geraQR')->name('code');

        
      
    });  









});


//Route::get('/home', 'HomeController@index')->name('home');
