@extends('layouts.master')
@section('title', 'Slider')
@section('content')

<div class="slider">
	<div class="container">
		<div class="content">
			<div class="slider-info">
				<p class="data">Publicado em: {{ Carbon\Carbon::parse($imagem->created_at)->format('d/m/Y') }} <br>
					Criado por: {{ $imagem->criadoPor->name }}
				</p>
				<img src="{{ $imagem->imagem }}" class="img-responsive">
				<p>Link: <a href="{{ $imagem->link }}">{{ $imagem->link }}</a></p>
			</div>
		</div>
		<div class="content">
			<div class="slider-info">				
				@if(!Auth::guest())
					<a href="/slider/{{ $imagem->id }}/edit" class="btn btn-primary botoes">Editar</a>
					<a href="#" data-toggle="modal" data-target="#apagarModal" class="btn btn-primary botoes">Apagar</a>
				@endif
				<a href="{{ action('SliderController@index') }}" class="btn btn-primary botoes">Voltar</a>
			</div>			
		</div>

		<div id="apagarModal" class="modal fade" role="dialog">
	        <div class="modal-dialog modal-sm">

	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal">&times;</button>
	                    <h4 class="modal-title">Slider</h4>
	                </div>
	                <div class="modal-body">
	                	<p>Deseja apagar este item?</p>
	                    {!! Form::model($imagem,['url' => 'slider/' . $imagem->id, 'method' => 'delete']) !!}
							{!! Form::submit('Sim',['class'=>'btn btn-primary']) !!}
							<input type="button" class="btn btn-primary" data-dismiss="modal" value="Não">
				  		{!! Form::close() !!}
	                </div>            
	            </div>
	        </div>
	    </div>
	</div>{{-- container --}}
</div>

@endsection
