<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/search', function(){
    return view('result');
});

Route::get('/covid',function(){
    return view('covid');
});

Route::get('/category/covid',function(){
    return view('covidcategory');
});

Route::get('/notfound',function(){
    return view('notfound');
});