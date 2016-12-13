@extends('layouts.master')
@section('title', 'Perguntas Frequentes')
@section('content')

	<div class="container faq">
		<div class="content">				
			<div class="formulario">
				<h2>Perguntas Frequentes</h2>
				{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
				{!! Form::open(['url' => 'secretaria/faq']) !!} 
			    	@include('partials.forms.secretaria.faq')
			    	<div class="form-group">
			    		{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
						<a class="btn btn-primary" href="">Cancelar</a>
			    	</div>
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection
