<label for="edicion_nota" class="control-label">Nota</label>
<input type="hidden" name="nota_id" value="{{$notasolicitud->id}}">
<textarea class="form-control textarea_description_edicion" id="edicion_nota" name="edicion_nota">{{$notasolicitud->nota}}</textarea>

<script>
	$(document).ready(function() {
		$('.textarea_description_edicion').wysihtml5();
	})
</script>