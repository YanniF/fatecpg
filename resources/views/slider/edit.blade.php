@extends('layouts.master')
@section('title', 'Slider')
@section('content')

<div class="slider">
	<div class="container">
		<div class="content">
	    	<h2>Notícias</h2>
	    	<div class="formulario">
	    		{!! Html::ul($errors->all(), ['class'=>'alert alert-danger']) !!}
			  	{!! Form::model($imagem,['url' => 'slider/' . $imagem->id, 'method' => 'put', 'files' => true]) !!}
			  		<p>
			  			<img src="{{ $imagem->imagem }}" class="img-responsive">
			  			<h5>Selecione outra imagem ou deixe em branco para não alterar.</h5>
			  		</p>
			    	@include('partials.forms.slider')
			    	<div class="form-group">			    		
			    		{!! Form::submit('Salvar',['class'=>'btn btn-default']) !!}
					<a class="btn btn-default" href="{{ action('SliderController@index') }}">Cancelar</a>
			    	</div>					
			  	{!! Form::close() !!}
	    	</div>
		</div>
	</div>
</div>

@endsection