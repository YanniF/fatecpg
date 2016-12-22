@extends('layouts.master')
@section('title', 'Página não encontrada')
@section('content')

	<div class="container erros">
		<div class="content">
			<div class="titulo">
				<p>Página não encontrada</p>
				<a href="{{action('Principal@paginaInicial')}}">Voltar para a página inicial</a>
			</div>
		</div>
	</div>

@endsection
