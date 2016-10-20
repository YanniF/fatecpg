@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1>Notícias</h1>
	  {!! Html::ul($errors->all()) !!}
	  {!! Form::model($noticia,['url' => 'noticia/'.$noticia->id, 'method' => 'put']) !!}
	    @include('partials.forms.noticia')
		{!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
	  {!! Form::close() !!}
	</div>
  </div>
</div>
@stop