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
Route::get('/',function(){
    return view("welcome");
});
// Route::get('export','ExportController@export');
Route::get('downloadExcel/{type?}', 'ExportController@downloadExcel');
Route::get('excel/data','ExportController@getData');
Route::post('/submit','TestController@store')->name('store');

Route::get('image/upload','ImageUploadController@fileCreate');
Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');
