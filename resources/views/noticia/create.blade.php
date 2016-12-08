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
			    	<div class="botoes">
			    		{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
						<a class="btn btn-primary" href="{{ action('NoticiaController@index') }}">Cancelar</a>
			    	</div>				
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
	
@stop