<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;
use FatecPG\Http\Requests;
use FatecPG\Http\Requests as NR;
use FatecPG\Slider;

class SliderController extends Controller
{
    public function __construct(Request $request) {        
        $this->middleware('auth');
    }

    public function index() {
    	$imagens = Slider::all();
    	return view('slider.index')->with('imagens', $imagens);
    }

    public function create() {
		return view('slider.create');
    }

    public function store(NR\SliderRequest $request) {
    	$req = $request->all();
        $req['created_by'] = Auth::user()->id;

        //subir imagem

        Noticia::create($req);
        return redirect('slider');
    }

    public function edit() {
    	
    }

    public function update() {
    	
    }

    public function show() {
    	
    }

    public function destroy() {
    	
    }
}
