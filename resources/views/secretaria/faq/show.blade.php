@extends('layouts.master')
@section('title', 'Perguntas Frequentes')
@section('content')

<div class="container faq">
	<div class="content">
		<div class="faq-info">
			<h2>Perguntas Frequentes</h2>
		</div>
	</div>
	<div class="content">
		<div class="faq-info">
			<p class="data">Publicado em: {{Carbon\Carbon::parse($pergunta->dataInicio)->format('d/m/Y')}} <br>
				Criado por: {{$pergunta->criadoPor->name}}
			</p>
			<p><strong>Pergunta: </strong>{{$pergunta->pergunta}}</p>
			<p><strong>Resposta: </strong>{{$pergunta->resposta}}</p>
		</div>
	</div>
	<div class="content">
		<div class="faq-info">
			<div class="botoes">
				@if(!Auth::guest())
					<a href="{{$pergunta->id}}/edit" class="btn btn-primary">Editar</a>
					<a href="#" data-toggle="modal" data-target="#apagarModal" class="btn btn-primary">Apagar</a>
				@endif
				<a href="{{ action('Secretaria\PerguntasFrequentesController@index') }}" class="btn btn-primary">Voltar</a>
			</div>
		</div>
	</div>
</div>

<div id="apagarModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Perguntas Frequentes</h4>
            </div>
            <div class="modal-body">
            	<p>Deseja apagar este item?</p>
                {!! Form::model($pergunta, ['url' => 'secretaria/faq/' . $pergunta->id, 'method' => 'delete']) !!}
					{!! Form::submit('Sim',['class'=>'btn btn-primary']) !!}
					<input type="button" class="btn btn-primary" data-dismiss="modal" value="Não">
		  		{!! Form::close() !!}
            </div>            
        </div>
    </div>
</div>

@endsection