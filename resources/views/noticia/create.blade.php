@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

	<div class="container noticias">
		<div class="content">
	    	<h2>Notícias</h2>
		    <div class="formulario">
				{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
			  	{!! Form::open(['url' => 'noticia']) !!}
			    	@include('partials.forms.noticia')
			    	<div class="form-group">
			    		{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
						<a class="btn btn-primary" href="{{ action('NoticiaController@index') }}">Cancelar</a>
			    	</div>				
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>
	
@endsection

{{-- adicionar somente para as textareas que vão permitir formatação
     e retirar required da textarea --}}
@section('tinymce')
	@include('partials.tinymce')
@endsection