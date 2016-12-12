@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

<div class="noticias">
	<div class="container noticias">
		<div class="content">
	    	<h2>Notícias</h2>
		    <div class="content formulario">
				{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
			  	{!! Form::model($noticia,['url' => 'noticia/' . $noticia->id, 'method' => 'put']) !!}
			    	@include('partials.forms.noticia')
			    	<div class="form-group">
			    		{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}					
						<a class="btn btn-primary" href="{{ action('NoticiaController@index') }}">Cancelar</a>
			    	</div>						
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop