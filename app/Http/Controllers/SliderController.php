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

    protected function edit(Slider $slider) {
        return view('slider.edit')->with('imagem', $slider);
    }

    public function update(NR\SliderRequest $request, Slider $slider) {
    	$req = $request->all();

        if($req['imagem'] != null) {
            dd($req['imagem']);
            $ext = strtolower(substr($_FILES['imagem']['name'], -4));
            $novoNome = 'slider-' . date("Y.m.d-H.i.s") . $ext;
            $dir = 'img/upload/';
            
            move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $novoNome);
            $req['imagem'] = '/' . $dir . $novoNome;
        }

        $req['updated_by'] = Auth::user()->id;
        
        Slider::update($req);
        return redirect('slider');
    }

    protected function show(Slider $slider) {
        return view('slider.show')->with('imagem', $slider);
    }

    protected function destroy(Slider $imagem) {
        $i = Slider::find($imagem['id']);

        if($i->imagem != null) {
            $i->imagem = substr($i->imagem, 1);//para resolver o problema com as barras
            unlink($i->imagem);//apagar a imagem
        }
        $i->delete();
        return redirect('slider');
    }
}