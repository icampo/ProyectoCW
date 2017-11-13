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

Route::get('/', function () {
    return view('pages.home');
})->name('inicio');

Route::get('/herramientas', function (){
    return view('pages.herramienta');
})->name('herramientas');

Auth::routes();

Route::post("/contact","HomeController@send");

Route::get('/home', 'HomeController@index')->name('home');
