<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;
use FatecPG\Http\Requests as NR;
use FatecPG\Slider;
use Illuminate\Support\Facades\Auth;

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
        
        if($req['imagem'] != null) {//verificando se uma imagem foi inserida

            $ext = strtolower(substr($_FILES['imagem']['name'], -4)); //pegando extensão do arquivo
            $novoNome = 'slider-' . date("Y.m.d-H.i.s") . $ext; //definindo um novo nome para o arquivo
            $dir = 'img/upload/';
            
            move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $novoNome); //Faz o upload do arquivo        
            $req['imagem'] = '/' . $dir . $novoNome;//Insere o caminho do arquivo para o banco
        }

        $req['created_by'] = Auth::user()->id;

        Slider::create($req);
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
