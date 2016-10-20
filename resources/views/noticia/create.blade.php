@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1>Noticias</h1>
	  {!! Html::ul($errors->all()) !!}
	  {!! Form::open(['url' => 'noticia']) !!}
	    @include('partials.forms.noticia')
		{!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
	  {!! Form::close() !!}
	</div>
  </div>
</div>
@stop