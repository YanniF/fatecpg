<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;
use FatecPG\Http\Requests;
use Carbon\Carbon;
use FatecPG\Models\Noticia;
use FatecPG\Models\Slider;

class Principal extends Controller
{
    protected function paginaInicial() {
		$noticias = $this->exibirNoticias();
        $slider = $this->exibirImagensSlider();

        return view('home')->with(array('noticias' => $noticias, 'slider' => $slider));
    }

    protected function exibirNoticias() {
    	$noticias = Noticia::where('dataInicio', '<=', Carbon::now())->where('dataExpiracao', '>=', Carbon::now())->get();
    	
    	return $noticias;
    }

    protected function exibirImagensSlider() {
    	$slider = Slider::all();

        return $slider;
    }
}