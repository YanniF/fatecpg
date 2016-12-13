<?php

namespace FatecPG\Http\Controllers\Secretaria;

use Illuminate\Http\Request;

use FatecPG\Http\Requests;
use FatecPG\Http\Controllers\Controller;
use FatecPG\Models\Secretaria\PerguntaFrequente as PF;
use Illuminate\Support\Facades\Auth;

class PerguntasFrequentesController extends Controller
{
    public function __construct(Request $request) { 
        $this->middleware('auth');
    }

    public function index()
    {
        $perguntas = PF::all();
        return view('secretaria.faq.index')->with('perguntas', $perguntas);
    }

    public function create()
    {
        return view('secretaria.faq.create');
    }

    public function store(Request\PerguntasFrequentes $request)
    {
        $req = $request->all();
        $req['created_by'] = Auth::user()->id;

        PF::create($req);
        return view('secretaria.faq');
    }

    public function show(PerguntaFrequente $pergunta)
    {
        return view('secretaria.faq.show')->with('pergunta', $pergunta);
    }

    public function edit(PerguntaFrequente $pergunta)
    {
        return view('secretaria.faq.edit')->with('pergunta', $pergunta);
    }

    public function update(Request\PerguntasFrequentes $request, PerguntaFrequente $pergunta)
    {
        $req = $request->all();
        $req['updated_by'] = Auth::user()->id;
        
        $pergunta->update($req);
        return redirect('secretaria.faq');
    }

    public function destroy(PerguntaFrequente $pergunta)
    {
        $p = PF::find($pergunta['id']);
        $p->delete();
        return redirect('secretaria.faq');
    }
}
