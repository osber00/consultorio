{{Form::hidden('user_id',auth()->user()->id)}}



<div class="form-group">
	{{Form::label('pregunta','Nombre de la Faq') }}
	{{Form::text('pregunta',null,['class'=>'form-control','id'=>'name'])}}
</div>

<div class="form-group">
	{{Form::label('slug','Url Amigable') }}
	{{Form::text('slug',null,['class'=>'form-control', 'id'=>'slug'])}}
</div>

<div class="form-group">
	{{Form::label('category_id','Seleccione la categoria') }}	
	{{Form::select('category_id',$categorias, null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('titulo_caso','Título del caso') }}
	{{Form::text('titulo_caso',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('descripcion_caso','Descripcion del caso') }}
	{{Form::textarea('descripcion_caso',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('que_hacer','Que hacer') }}
	{{Form::textarea('que_hacer',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('donde_acudir','Donde Acudir') }}
	{{Form::textarea('donde_acudir',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('alternativa','Alternativa') }}
	{{Form::textarea('alternativa',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('tener_cuenta','Tener en cuenta') }}
	{{Form::textarea('tener_cuenta',null,['class'=>'form-control'])}}
</div>







<div class="form-group">
	{{Form::label('status','Estado') }}
	<div class="form-check">
		<label class="custom-radio custom-control">
			
			<span class="custom-control-indicator"></span>
			<span class="custom-control-description">Publicado</span>
			<span class="custom-control-description">{{Form::radio('status','PUBLISHED')}}</span>
		</label>
		<label class="custom-radio custom-control">
			{{Form::radio('status','DRAFT',['class' => 'custom-control-input'])}}
			<span class="custom-control-indicator"></span>
			<span class="custom-control-description">Borrador</span>
		</label>
	</div>
</div>




<div class="form-group">
	{{Form::submit('Guardar',['class'=>'btn btn-primary btn-sm', 'id'=>'name']) }}
</div>

@section ('scripts')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js')}}"></script>
<script>
	
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback:function(text){
				$("#slug").val(text);
			}
		});
	});
	CKEDITOR.replace('descripcion_caso');
	CKEDITOR.replace('que_hacer');
	CKEDITOR.replace('donde_acudir');
	CKEDITOR.replace('alternativa');
	CKEDITOR.replace('tener_cuenta');
</script>

@endsection
