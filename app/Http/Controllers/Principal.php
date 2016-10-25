<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;
use FatecPG\Http\Requests;
use Carbon\Carbon;
use FatecPG\Noticia;

class Principal extends Controller
{
    protected function paginaInicial () {
		$noticias = Noticia::where('dataInicio', '<=', Carbon::now())->where('dataExpiracao', '>=', Carbon::now())->get();
    	
    	return view('home')->with('noticias', $noticias);
    }
}