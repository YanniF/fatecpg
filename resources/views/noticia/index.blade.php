@extends('layouts.master')
@section('title', 'Notícias')
@section('content')

	<div class="container noticias">
		<div class="content">
			<div class="noticias-info">
				<div class="titulo-btn">
					<h2>Notícias</h2>
					<div class="btn-add">
						@if(!Auth::guest())
							<a class="btn btn-primary" href="{{url('noticia/create')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
						@endif
					</div>					
				</div>
			</div>
		</div>
		<div class="content">
			<div class="noticias-info table-responsive">
				<table class="table table-hover">
					<thead>	
						<tr>
							<th>Título</th>
							<th>Publicado em</th>
							<th>Criado por</th>
						</tr>
					</thead>
					<tbody>
						@foreach($noticias as $n)
							<tr onclick="window.location.href = 'noticia/{{$n->id}}'">
								<td>{{ $n->tituloNoticia }}</td>
								<td>{{ Carbon\Carbon::parse($n->dataInicio)->format('d/m/Y') }}</td>
								<td>{{ $n->criadoPor->name }}</td>
							</tr>						
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop
