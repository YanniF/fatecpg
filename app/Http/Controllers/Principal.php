<?php

namespace FatecPG\Http\Controllers;

use Illuminate\Http\Request;
use FatecPG\Http\Requests;
use Carbon\Carbon;

class Principal extends Controller
{
    protected function paginaInicial () {
		$noticias = \FatecPG\Noticia::where('dataInicio','<=',Carbon::now())->where('dataExpiracao','>=',Carbon::now())->get();
    	return view('paginaInicial')->with('noticias', $noticias);
    }

}