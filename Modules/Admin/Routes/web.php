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

Route::prefix('admin')->group(function() {
    Route::get('/', 'StudentController@index')->name('students');
    Route::get('/create', 'StudentController@create')->name('students.create');
    Route::post('/store', 'StudentController@store')->name('students.store');
    Route::get('/show/{id}', 'StudentController@show')->name('students.show');
    Route::post('/update/{id}', 'StudentController@update')->name('students.update');
    Route::delete('/destroy/{id}', 'StudentController@destroy')->name('students.destroy');
    Route::post('/duplicate/{id}', 'StudentController@duplicate')->name('students.duplicate');
    Route::get('/restoreAll', 'StudentController@restoreAll')->name('students.restoreAll');
    Route::get('/restore/{id}', 'StudentController@restore')->name('students.restore');
    Route::get('/view_deleted_record', 'StudentController@viewDeletedRecords')->name('students.view_deleted_record');
});
