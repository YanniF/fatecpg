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
				<p class="data">{{ Carbon\Carbon::parse($noticia->dataInicio)->format('d/m/Y') }}</p>
				<p>{{ $noticia->corpoNoticia }}</p>
			</div>
		</div>
		<div class="content">
			<div class="noticias-info">
				<a href="{{ action('Principal@paginaInicial') }}" class="btn btn-default">Voltar</a>
			</div>			
		</div>
	</div>
</div>

@endsection