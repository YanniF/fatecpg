		<div class="form-group">
			{!! Form::label('pergunta', 'Pergunta *', ['class'=>'control-label']) !!}
			{!! Form::text('pergunta', null, ['class'=>'form-control', 'required']) !!}
	    </div>
	</div>
</div>
<div class="content">	
	<div class="formulario2">
	    <div class="form-group">
		  	{!! Form::label('resposta', 'Resposta *', ['class'=>'control-label']) !!}
		  	{!! Form::textarea('resposta', null, ['class'=>'form-control', 'required']) !!}
	    </div>
	</div>
	<div class="formulario3">
		<div class="form-group">
			<?php 
				$categoria = "";

				if(isset($pergunta->categoria))
					$categoria = $pergunta->categoria;
				else
					$categoria = 'Geral';
			?>
		  	{!! Form::label('categoria','Categoria *', ['class'=>'control-label']) !!}
		  	{!! Form::select('categoria', ['geral' => 'Geral', 'formado' => 'Formado'], $categoria, ['class'=>'form-control', 'required']) !!}
	    </div>
    