@extends('layouts.master')
@section('title', 'Slider')
@section('content')
	<div class="slider">
		<div class="container">
			<div class="content">
				<h2>Slider</h2>
				<div class="formulario">
					{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
					{!! Form::open(['url' => 'slider', 'files' => true]) !!} 
				    	@include('partials.forms.slider')
				    	<div class="form-group">
				    		{!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
							<a class="btn btn-primary" href="{{ action('SliderController@index') }}">Cancelar</a>
				    	</div>						
				  	{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>		

@endsection
