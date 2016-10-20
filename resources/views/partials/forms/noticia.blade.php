	    <div class="form-group">
		  {!! Form::label('tituloNoticia','Título') !!}
		  {!! Form::text('tituloNoticia',null,['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
		  {!! Form::label('corpoNoticia','Corpo') !!}
		  {!! Form::text('corpoNoticia',null,['class'=>'form-control']) !!}
	    </div>		
	    <div class="form-group">
		  {!! Form::label('dataInicio','Início') !!}
		  {!! Form::date('dataInicio',null,['class'=>'form-control']) !!}
	    </div>		
	    <div class="form-group">
		  {!! Form::label('dataExpiracao','Expiração') !!}
		  {!! Form::date('dataExpiracao',null,['class'=>'form-control']) !!}
	    </div>