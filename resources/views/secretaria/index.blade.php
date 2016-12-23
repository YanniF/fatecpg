@extends('layouts.master')
@section('title', 'Secretaria')
@section('content')
	
	<div class="container secretaria">
	
		<div class="content">
			<aside class="sidebar">
	        	<ul class="sidebar-nav">              
	                <li><a href="#">Regulamentos</a></li>
	                <li><a href="#">Formandos</a></li>
	                <li><a href="#">Exame de proficiência</a></li>
	                <li><a href="#">Requerimentos</a></li>
	                <li><a href="#">Equipe</a></li>
	            </ul>      
	        </aside>
			
			<div class="conteudo-toggle">
			 <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
	            <div class="informativo">
	                <h2>Horário de Atendimento</h2>
	                <p>{!! $info[0]->informacao !!}</p>
	            </div>
	            <div class="informativo">
		            @if(Auth::guest())
		                <h2>Perguntas Frequentes</h2>
	                @else
	                	<h2><a href="{{url('secretaria/faq')}}">Perguntas Frequentes</a></h2>
	            	@endif

                	<div class="panel-group" id="accordion">
	                @foreach($perguntas as $p)

	                	<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$p->id}}">
								{{$p->pergunta}}</a>
								</h4>
							</div>
							<div id="collapse{{$p->id}}" class="panel-collapse collapse">
								<div class="panel-body">{{$p->resposta}}</div>
							</div>
						</div>
						
	                @endforeach

					</div>	               
	            </div>
	        </div>

		</div> 	
        
    </div>

@endsection
