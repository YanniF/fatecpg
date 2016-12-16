@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

	<div class="container noticias">
		<div class="content">
			<div class="noticias-info">
				<h2>{{$noticia->tituloNoticia}}</h2>   
			</div>			 
		</div>
		<div class="content">
			<div class="noticias-info">
				<p class="data">Publicado em: {{Carbon\Carbon::parse($noticia->dataInicio)->format('d/m/Y')}} <br>
					Criado por: {{$noticia->criadoPor->name}}
				</p>
				<p>{{$noticia->corpoNoticia}}</p>
			</div>
		</div>
		<div class="content">
			<div class="noticias-info">
				<p class="data">Data de vencimento: {{ Carbon\Carbon::parse($noticia->dataExpiracao)->format('d/m/Y') }}</p>
				<div class="botoes">
					@if(!Auth::guest())
						<a href="/noticia/{{ $noticia->id }}/edit" class="btn btn-primary">Editar</a>
						<a href="#" data-toggle="modal" data-target="#apagarModal" class="btn btn-primary">Apagar</a>
					@endif
					<a href="{{ action('NoticiaController@index') }}" class="btn btn-primary">Voltar</a>
				</div>				
			</div>			
		</div>		
	</div>{{-- container --}}

	<div id="apagarModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notícia</h4>
                </div>
                <div class="modal-body">
                	<p>Deseja apagar este item?</p>
                    {!! Form::model($noticia,['url' => 'noticia/' . $noticia->id, 'method' => 'delete']) !!}
						{!! Form::submit('Sim',['class'=>'btn btn-primary']) !!}
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Não">
			  		{!! Form::close() !!}
                </div>            
            </div>
        </div>
    </div>

@endsection
