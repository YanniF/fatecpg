@extends('layouts.master')
@section('title', 'Perguntas Frequentes')
@section('content')

	<div class="container faq">
		<div class="content">	    	
	    	<div class="formulario">
	    		<h2>Perguntas Frequentes</h2>
	    		{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
	    		{!! Form::model($pergunta, ['url' => 'secretaria/faq/' . $pergunta->id, 'method' => 'put']) !!}
			    	@include('partials.forms.secretaria.faq')
			    	<div class="form-group">			    		
			    		{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
						<a class="btn btn-primary" href="{{ action('Secretaria\PerguntasFrequentesController@index') }}">Cancelar</a>
			    	</div>					
			  	{!! Form::close() !!}
	    	</div>
		</div>
	</div>

@endsection
