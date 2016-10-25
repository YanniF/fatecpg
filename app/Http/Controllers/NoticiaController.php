<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;

use FatecPG\Http\Requests as NR;
use FatecPG\Noticia;

class NoticiaController extends Controller
{
	public function __construct(Request $request) {
        
        $this->middleware('auth');
    }

    protected function index() {
		$noticias = Noticia::all();
		return view('noticia.index')->with('noticias',$noticias);
	}
	
	protected function create(){
		return view('noticia.create');
	}
	
	protected function store(NR\NoticiaRequest $request) {
		Noticia::create($request->all());
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