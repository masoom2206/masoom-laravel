<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-url', function () {
    echo url('admin', [456, 'mmm']).'<br/>';
    echo route('admin-page', [456, 'mmm']);
});
//Admin Login redirect

/*Route::get('/admin', function(){
  return redirect('admin-panel/dashboard');
});*/
Route::get('/admin/{number}/{second?}', 'AdminController@index')->where(['number' => "[0-9]+", 'second' => "[a-z]+"])->name('admin-page');
//Route::post('/admin', 'AdminController@postMethod');

Route::get('/masoom', function () {
    return 'Most welcome masoom in LARAVAL setup';
});
