@extends('layouts.master')
@section('title', 'Perguntas Frequentes')
@section('content')
	
	<div class="container faq">
		<div class="content">
			<div class="faq-info">
				<div class="titulo-btn">
					<h2>Perguntas Frequentes</h2>
					<div class="btn-add">
						@if(!Auth::guest())
							<a class="btn btn-primary" href="{{url('secretaria/faq/create')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
						@endif
					</div>					
				</div>
			</div>
		</div>
		<div class="content">
			<div class="faq-info table-responsive">
				<table class="table table-hover">
					<thead>	
						<tr>
							<th>Pergunta</th>
							<th>Categoria</th>
							<th>Publicado em</th>
							<th>Criado por</th>
						</tr>
					</thead>
					<tbody>
						@foreach($perguntas as $p)
							<tr onclick="window.location.href = 'faq/{{$p->id}}'">
								<td>{{$p->pergunta}}</td>
								<td>{{ucfirst($p->categoria)}}</td>
								<td>{{ Carbon\Carbon::parse($p->created_at)->format('d/m/Y') }}</td>
								<td>{{ $p->criadoPor->name }}</td>
							</tr>						
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection