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

Route::get('/category/covid',function(){
    return view('covidcategory');
});

Route::get('/notfound',function(){
    return view('notfound');
});

Route::get('/t1',function(){
    return view('info_terkini/terkini1');
});

Route::get('/t2',function(){
    return view('info_terkini/terkini2');
});

Route::get('/t3',function(){
    return view('info_terkini/terkini3');
});

Route::get('/t4',function(){
    return view('info_terkini/terkini4');
});

Route::get('/category/ekonomi',function(){
    return view('ekonomicategory');
});

Route::get('/category/ekonomi/1',function(){
    return view('ekonomi/ekonomi1');
});

Route::get('/category/ekonomi/2',function(){
    return view('ekonomi/ekonomi2');
});

Route::get('/category/ekonomi/3',function(){
    return view('ekonomi/ekonomi3');
});

Route::get('/category/ekonomi/4',function(){
    return view('ekonomi/ekonomi4');
});

Route::get('/category/ekonomi/4',function(){
    return view('ekonomi/ekonomi4');
});

Route::get('/category/ekonomi/5',function(){
    return view('ekonomi/ekonomi5');
});

Route::get('/category/ekonomi/6',function(){
    return view('ekonomi/ekonomi6');
});

Route::get('/category/ekonomi/7',function(){
    return view('ekonomi/ekonomi7');
});

Route::get('/category/ekonomi/8',function(){
    return view('ekonomi/ekonomi8');
});

Route::get('/category/covid/1',function(){
    return view('covid/covid1');
});
Route::get('/category/covid/2',function(){
    return view('covid/covid2');
});
Route::get('/category/covid/3',function(){
    return view('covid/covid3');
});
Route::get('/category/covid/4',function(){
    return view('covid/covid4');
});
Route::get('/category/covid/5',function(){
    return view('covid/covid5');
});
Route::get('/category/covid/6',function(){
    return view('covid/covid6');
});
Route::get('/category/covid/7',function(){
    return view('covid/covid7');
});
Route::get('/category/covid/8',function(){
    return view('covid/covid8');
});

Route::get('/category/covid',function(){
    return view('covidcategory');
});

Route::get('/category/transportasi',function(){
    return view('transportasicategory');
});

Route::get('/category/transportasi/1',function(){
    return view('transportasi/transportasi1');
});
Route::get('/category/transportasi/2',function(){
    return view('transportasi/transportasi2');
});
Route::get('/category/transportasi/3',function(){
    return view('transportasi/transportasi3');
});
Route::get('/category/transportasi/4',function(){
    return view('transportasi/transportasi4');
});
Route::get('/category/transportasi/5',function(){
    return view('transportasi/transportasi5');
});
Route::get('/category/transportasi/6',function(){
    return view('transportasi/transportasi6');
});
Route::get('/category/transportasi/7',function(){
    return view('transportasi/transportasi7');
});
Route::get('/category/transportasi/8',function(){
    return view('transportasi/transportasi8');
});

Route::get('/category/pendidikan', function(){
    return view('pendidikancategory');
});

Route::get('/category/pendidikan/1',function(){
    return view('pendidikan/pendidikan1');
});

Route::get('/category/pendidikan/2',function(){
    return view('pendidikan/pendidikan2');
});

Route::get('/category/pendidikan/3',function(){
    return view('pendidikan/pendidikan3');
});

Route::get('/category/pendidikan/4',function(){
    return view('pendidikan/pendidikan4');
});

Route::get('/category/pendidikan/5',function(){
    return view('pendidikan/pendidikan5');
});

Route::get('/category/pendidikan/6',function(){
    return view('pendidikan/pendidikan6');
});

Route::get('/category/pendidikan/7',function(){
    return view('pendidikan/pendidikan7');
});

Route::get('/category/pendidikan/8',function(){
    return view('pendidikan/pendidikan8');
});