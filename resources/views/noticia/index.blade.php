@extends('layouts.master')
@section('content')
  <h1>Notícias</h1>
  <a href="{{url('noticia/create')}}">Nova Notícia</a>
  {!! Html::ul($noticias->all()) !!}
@stop
