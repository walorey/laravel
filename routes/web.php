<?php

Route::get('/', function(){

	$nombre = "facundo";

	return view('home', compact('nombre'));
})->name('home');