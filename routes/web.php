<?php

/*  
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
|
*/
Route::get('/','ManojController@index');

Route::get('/downloadPDF/{id}','ManojController@downloadPDF');

Route::post('form','DarpanController@store')->name('form.store');
Route::get('/printForm','DarpanController@printForm')->name('test.printForm');

Route::post('/test','ManojController@store')->name('test.store');
Route::get('/printTest/{id}','ManojController@printTest')->name('test.printTest');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




