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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/x', 'ImportController@getImport')->name('import');
Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');
Route::post('/import_process', 'ImportController@processImport')->name('import_process');

Route::get('/session','TestController@index')->name('test');
Route::get('/session/store','TestController@store')->name('test.store');
Route::get('/session/destroy','TestController@destroy')->name('test.destroy');

Route::get('/session/show','TestController@show')->name('test.show');
Route::post('/session/save','TestController@save')->name('test.save');

Route::get('/paginate', 'TestController@coba');

/*=================== Bismillahirrahmanirrahim ===================
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');*/

/*=================== Bismillahirrahmanirrahim ===================*/
Route::get('/csv-import', 'CsvController@upload')->name('upload');
Route::post('/csv-import/proses', 'CsvController@proses_upload')->name('proses_upload');
Route::get('/', 'CsvController@read_csv')->name('read_csv');
Route::get('/detail', 'CsvController@read_csv_detail')->name('read_csv_detail');