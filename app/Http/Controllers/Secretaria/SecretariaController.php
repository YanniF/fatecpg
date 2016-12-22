<?php

namespace FatecPG\Http\Controllers\Secretaria;

use Illuminate\Http\Request;

use FatecPG\Http\Requests;
use FatecPG\Http\Controllers\Controller;

class SecretariaController extends Controller
{
    public function index() {

    	return view('secretaria.index');
    }
}
