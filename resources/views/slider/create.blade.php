@extends('layouts.master')
@section('title', 'Slider')
@section('content')
	<div class="slider">
		<div class="container">
			<div class="content">
				<h2>Slider</h2>
				<div class="formulario">
					{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
				  	{!! Form::open(['url' => 'slider']) !!}
				    	@include('partials.forms.slider')
					{!! Form::submit('Salvar',['class'=>'btn btn-default']) !!}
					<a class="btn btn-default" href="{{ action('SliderController@index') }}">Cancelar</a>
				  	{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>		

@endsection
