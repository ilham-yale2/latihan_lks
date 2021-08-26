<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* 
    Dipergunakan untuk memfilter routes tertentu, sehingga API tidak bisa diakses
    apabila tidak login terlebih dahulu untuk mendaptkan token 
*/
Route::post('/login','UserController@login');


Route::group(['middleware'=>['auth:api']],function(){ 

    Route::post('/product','ItemController@store'); 
    Route::get('/product','ItemController@index');
    Route::get('/product/{id}','ItemController@show');
    Route::patch('/product/{id}','ItemController@update');
    Route::delete('/product/{id}','ItemController@delete');
    // Route::resource('/product','ItemController');
});


