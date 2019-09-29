<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'PortafolioController@index')->name('portafolio');//usamos invoke cuando queremos tener solo un metodo en el controlador
Route::view('/contacto', 'contacto')->name('contacto');