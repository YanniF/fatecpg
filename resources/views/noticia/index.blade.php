@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

<div class="noticias">
	<div class="container">
		<div class="content">
			<div class="noticias-info">
			<h2>Notícias</h2>
			
			@if(!Auth::guest())
				<a class="btn btn-default" href="{{url('noticia/create')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
			@endif
			{{-- {!! Html::ul($noticias->all()) !!} --}}
			<table class="table">
				<thead>	
					<tr>
						<th>Título</th>
						<th>Criado em</th>
						<th>Criado por</th>
					</tr>
				</thead>
				<tbody>
					@foreach($noticias as $n)
						<tr>
							<td><a href="noticia/{{$n->id}}">{{ $n->tituloNoticia }}</a></td>
							<td>{{ $n->dataInicio }}</td>
							<td>{{ $n->created_by }}</td>
						</tr>						
					@endforeach
				</tbody>
			</table>
			
			</div>
		</div>
	</div>
</div>

@stop
