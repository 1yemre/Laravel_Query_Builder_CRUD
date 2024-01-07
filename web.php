<?php

use App\Http\Controllers\page1Controller;
use Illuminate\Support\Facades\Route;




Route::get('course','App\Http\Controllers\CourseController@index')->name('courseGet');

Route::get('courseInsert','App\Http\Controllers\CourseController@courseInsert')->name('courseInsert');

Route::post('courseInsertPost','App\Http\Controllers\CourseController@courseInsertPost')->name('courseInsertPost');

Route::get('courseUpdate/{id}','App\Http\Controllers\CourseController@courseUpdate')->name('courseUpdate');

Route::post('courseUpdatePost/{id}','App\Http\Controllers\CourseController@courseUpdatePost')->name('courseUpdatePost');

Route::get('courseDelete/{id}','App\Http\Controllers\CourseController@courseDelete')->name('courseDelete');







?>
