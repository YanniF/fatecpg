	<div class="form-group">
			{!! Form::label('imagem','Imagem', ['class'=>'control-label']) !!}
			{!! Form::file('imagem',null,['class'=>'form-control', 'required']) !!}
			<span>Tamanho ideal: 950X400</span>
	    </div>
	    <div class="form-group">
		  	{!! Form::label('link','Link', ['class'=>'control-label']) !!}
		  	{!! Form::text('link',null,['class'=>'form-control', 'required']) !!}
	    </div>
    </div>