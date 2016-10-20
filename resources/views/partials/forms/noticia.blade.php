	    <div class="form-group">
		  {!! Form::label('lblTituloNoticia','Título') !!}
		  {!! Form::text('tituloNoticia',null,['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
		  {!! Form::label('lblCorpoNoticia','Corpo') !!}
		  {!! Form::text('corpoNoticia',null,['class'=>'form-control']) !!}
	    </div>		
	    <div class="form-group">
		  {!! Form::label('lblDataInicio','Início') !!}
		  {!! Form::date('dataInicio',null,['class'=>'form-control']) !!}
	    </div>		
	    <div class="form-group">
		  {!! Form::label('lblDataExpiraca','Expiração') !!}
		  {!! Form::date('dataExpiracao',null,['class'=>'form-control']) !!}
	    </div>		