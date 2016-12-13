@extends('layouts.master')
@section('title', 'Slider')
@section('content')

	<div class="container slider">
		<div class="content">
			<div class="slider-info">
				<div class="titulo-btn">
					<h2>Slider</h2>
					<div class="btn-add">
						@if(!Auth::guest())
							<a class="btn btn-primary" href="{{url('slider/create')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
						@endif
					</div>					
				</div>
			</div>
		</div>
		<div class="content">
			<div class="slider-info table-responsive">
				<table class="table table-hover">
					<thead>	
						<tr>
							<th>Imagem</th>
							<th>Publicado em</th>
							<th>Criado por</th>
						</tr>
					</thead>
					<tbody>
						@foreach($imagens as $i)
							<tr onclick="window.location.href = 'slider/{{$i->id}}'">
								<td><img src="{{ $i->imagem }}" class="img-responsive"></td>
								<td>{{ Carbon\Carbon::parse($i->created_at)->format('d/m/Y') }}</td>
								<td>{{ $i->criadoPor->name }}</td>
							</tr>						
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop
