<?php

namespace FatecPG\Http\Controllers\Secretaria;

use Illuminate\Http\Request;

use FatecPG\Http\Requests;
use FatecPG\Http\Controllers\Controller;
use FatecPG\Models\Secretaria\InformativoSecretaria as IS;
use FatecPG\Models\Secretaria\PerguntaFrequente as PF;

class SecretariaController extends Controller
{
    public function index() {
    	$info = IS::select('*')->where('informacao_sobre', '=', 'Horário')->get();
    	$perguntas = PF::all();
    	
    	return view('secretaria.index')->with(array('info'=> $info, 'perguntas' => $perguntas));
    }
}
