<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;

use FatecPG\Http\Requests as NR;

class NoticiaController extends Controller
{
    protected function index() {
		$noticias = \FatecPG\Noticia::all();
		return view('noticia.index')->with('noticias',$noticias);
	}
	
	protected function create(){
		return view('noticia.create');
	}
	
	protected function store(NR\NoticiaRequest $request) {
		\FatecPG\Noticia::create($request->all());
		return redirect('noticia');
	}
	
	protected function edit(\FatecPG\Noticia $noticia) {
		return view('noticia.edit')->with('noticia', $noticia);
	}
	
	protected function update(NR\NoticiaRequest $request,\FatecPG\Noticia $noticia) {
		$noticia->update($request->all());
		return redirect('noticia');
	}

	//protected function show() {
	//}
		
	//protected function destroy() {
	//}
}