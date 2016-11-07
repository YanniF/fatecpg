@extends('layouts.master')
@section('title', 'Notícias')
@section('content')
<div class="noticias">
	<div class="container">
		<div class="content">
	    	<h2>Notícias</h2>
		    <div class="formulario">
				{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
			  	{!! Form::open(['url' => 'noticia']) !!}
			    	@include('partials.forms.noticia')
				{!! Form::submit('Salvar',['class'=>'btn btn-default']) !!}
				<a class="btn btn-default" href="{{ action('NoticiaController@index') }}">Cancelar</a>
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
	
@stop