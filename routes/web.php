<?php

Auth::routes();

Route::get('/', function() {
	return view('home');
});

Route::resource('noticia','NoticiaController');

Route::get('cursos/ads', function() {
	return view('cursos/ads');
});
Route::get('cursos/comex', function() {
	return view('cursos/comex');
});
Route::get('cursos/ge', function() {
	return view('cursos/ge');
});
Route::get('cursos/pq', function() {
	return view('cursos/pq');
});