<?php

use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('work', function () {
    return view('work');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
//Lab 4
Route::get('showall','App\Http\Controllers\MydbController@showalldata');

Route::get('new', function () {
    return view('new');
});

Route::post('insert','App\Http\Controllers\MydbController@insert');
Route::get('edit/{id}','App\Http\Controllers\MydbController@edit');
Route::post('edits/{id}','App\Http\Controllers\MydbController@edits');
Route::post('delete/{id}','App\Http\Controllers\MydbController@delete');