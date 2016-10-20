<?php

Auth::routes();

Route::get('/', function() {
	return view('home');
});

Route::resource('noticia','NoticiaController');