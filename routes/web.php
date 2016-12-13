<?php

Auth::routes();

Route::get('/','Principal@paginaInicial');

Route::resource('noticia','NoticiaController');
Route::resource('slider', 'SliderController');
Route::resource('secretaria/faq', 'Secretaria\PerguntasFrequentesController');

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