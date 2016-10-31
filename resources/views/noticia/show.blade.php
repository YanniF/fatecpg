@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

<div class="noticias">
	<div class="container">
		<div class="content">
			<div class="noticias-info">
				<h2>{{ $noticia->tituloNoticia }}</h2>   
			</div>			 
		</div>
		<div class="content">
			<div class="noticias-info">
				<p class="data">Publicado em: {{ Carbon\Carbon::parse($noticia->dataInicio)->format('d/m/Y') }} <br>
					Criado por: {{ $noticia->created_by }}
				</p>
				<p>{{ $noticia->corpoNoticia }}</p>
			</div>
		</div>
		<div class="content">
			<div class="noticias-info">
				<p class="data">Data de vencimento: {{ Carbon\Carbon::parse($noticia->dataExpiracao)->format('d/m/Y') }}</p>
				@if(!Auth::guest())					

					{!! Form::model($noticia,['url' => 'noticia/' . $noticia->id, 'method' => 'delete']) !!}
				    	<a href="/noticia/{{ $noticia->id }}/edit" class="btn btn-default botoes">Editar</a>
						{!! Form::submit('Apagar',['class'=>'btn btn-default botoes']) !!}
						<a href="{{ action('NoticiaController@index') }}" class="btn btn-default botoes">Voltar</a>
				  	{!! Form::close() !!}					
				@else
					<a href="{{ action('NoticiaController@index') }}" class="btn btn-default botoes">Voltar</a>
				@endif
			</div>			
		</div>
	</div>
</div>

@endsection
