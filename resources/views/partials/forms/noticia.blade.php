	    <div class="form-group">
			{!! Form::label('tituloNoticia','Título *', ['class'=>'control-label']) !!}
			{!! Form::text('tituloNoticia',null,['class'=>'form-control', 'required']) !!}
	    </div>
	    <div class="form-group">
		  	{!! Form::label('corpoNoticia','Corpo *', ['class'=>'control-label']) !!}
		  	{!! Form::textarea('corpoNoticia',null,['class'=>'form-control']) !!}
	    </div>
    </div>
    <div class="content formulario2">
    	<?php 
			$data = "";

			if(isset($noticia->dataInicio))
				$data = $noticia->dataInicio;
			else
				$data = \Carbon\Carbon::now();
		?>
	    <div class="form-group">
		  	{!! Form::label('dataInicio','Início *', ['class'=>'control-label']) !!}
		  	{!! Form::date('dataInicio', $data, ['class'=>'form-control', 'required']) !!}
	    </div>		
	    <div class="form-group">
			{!! Form::label('dataExpiracao','Vencimento *', ['class'=>'control-label']) !!}
			{!! Form::date('dataExpiracao',null,['class'=>'form-control', 'required']) !!}
	    </div>