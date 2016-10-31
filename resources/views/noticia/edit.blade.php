@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

<div class="noticias">
	<div class="container noticias">
		<div class="content">
	    	<h2>Notícias</h2>
		    <div class="content formulario">
				{!! Html::ul($errors->all()) !!}
			  	{!! Form::model($noticia,['url' => 'noticia/' . $noticia->id, 'method' => 'put']) !!}
			    	@include('partials.forms.noticia')
					{!! Form::submit('Salvar',['class'=>'btn btn-default']) !!}
					<a class="btn btn-default" href="{{ action('NoticiaController@index') }}">Cancelar</a>
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop