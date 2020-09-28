<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {return view('home'); });

Route::get('/stanze', 'StanzaController@index') -> name('stanze');

Route::get('/stanze/{id}', 'StanzaController@show') -> name('stanza-show');

Route::get('/create/stanze', 'StanzaController@create') -> name('create-stanza');
Route::post('/create/stanze', 'StanzaController@store') -> name('store-stanza');
