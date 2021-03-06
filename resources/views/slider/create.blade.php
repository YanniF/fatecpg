@extends('layouts.master')
@section('title', 'Slider')
@section('content')

	<div class="container slider">
		<div class="content">				
			<div class="formulario">
				<h2>Slider</h2>
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

@endsection
