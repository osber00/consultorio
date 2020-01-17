{{Form::hidden('user_id',auth()->user()->id)}}


<div class="form-group">
	{{Form::label('name','Nombre de la Entrada') }}
	{{Form::text('name',null,['class'=>'form-control', 'id'=>'name'])}}
</div>

<div class="form-group">
	{{Form::label('slug','Url Amigable') }}
	{{Form::text('slug',null,['class'=>'form-control', 'id'=>'slug'])}}
</div>

<div class="form-group">
	{{Form::label('status','Imagen') }}
	{{Form::file('file')}}
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
	{{Form::label('excerpt','Resumen') }}
	{{Form::textarea('excerpt',null,['class'=>'form-control', 'rows'=>'2'])}}
</div>

<div class="form-group">
	{{Form::label('body','Descripcion') }}
	{{Form::textarea('body',null,['class'=>'form-control'])}}
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
	CKEDITOR.replace('body');
</script>

@endsection
