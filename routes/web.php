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


Route::get('/', function () {
    return view('home');
});
*/
Auth::routes();

Route::get('/', 'ViewController@index');
Route::post('/newOrder', 'OrderController@newOrder');
Route::post('/productArrived', 'MessageController@productArrived');
Route::get('/antigo', function(){
    return view('home1');
    });
