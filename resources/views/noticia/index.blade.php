@extends('layouts.master')
@section('title', 'Notícias')
@section('content')
	<div class="container noticias">
		<div class="content">
			<div class="noticias-info">
			<h2>Notícias</h2>
			<a class="btn btn-default" href="{{url('noticia/create')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
			{!! Html::ul($noticias->all()) !!}
			</div>
		</div>
	</div>  
@stop
