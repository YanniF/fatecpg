<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;

use FatecPG\Http\Requests as NR;
use FatecPG\Noticia;

class NoticiaController extends Controller
{
	public function __construct(Request $request) {        
        $this->middleware('auth', ['except' => ['index', 'show']]);//o except usa um método. Não é preciso estar logado para visualizar as informações fornecidas pelo index e show
    }

    protected function index() {
		$noticias = Noticia::all();
		return view('noticia.index')->with('noticias', $noticias);
	}
	
	protected function create(){		
		return view('noticia.create');
	}
	
	protected function store(NR\NoticiaRequest $request) {
		
		$req = $request->all();		
		$req['created_by'] =  \Auth::user()->id;//inserir o usuário que cadastrou a notícia

		Noticia::create($req);
		return redirect('noticia');
	}
	
	protected function edit(Noticia $noticia) {
		return view('noticia.edit')->with('noticia', $noticia);
	}
	
	protected function update(NR\NoticiaRequest $request, Noticia $noticia) {
		$noticia->update($request->all());
		return redirect('noticia');
	}

	protected function show(Noticia $noticia) {
		return view('noticia.show')->with('noticia', $noticia);
	}
		
	protected function destroy(Noticia $noticia) {
		$n = Noticia::find($noticia['id']);
		$n->delete();
		return redirect('noticia');
	}
}