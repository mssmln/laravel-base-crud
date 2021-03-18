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

Route::get('/','HomeController@index')->name('homepage'); //make:controller senza --resource perciò devi creare tu i metodi nel file , il primo sarà index

Route::get('/form-page','HomeController@form')->name('route-form');


Route::resource('cities','CityController'); // il primo parametro corrisponde a localhost/nome_uri