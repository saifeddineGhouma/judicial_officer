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
    return view('layouts.prencipal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/images/{dossier}', 'FilesController@index')->name('images.index');
/****clients */
Route::get('/clients', 'ClientsController@index')->name('clients.index');
Route::get('/clients/create', 'ClientsController@create')->name('clients.create');
Route::post('/clients/store', 'ClientsController@store')->name('clients.store');
Route::get('/clients/list','ClientsController@list')->name('clients.list');
Route::get('/clients/show/{id}','ClientsController@show')->name('clients.show');

/*****dossiers */

Route::get('dossiers/{id}/create','DossierController@create')->name('dossier.create') ;
Route::post('dossiers/store','DossierController@store')->name('dossier.store') ;


