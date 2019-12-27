<label for="" class="control-label">¿Confirma quitar esta nota?</label>
<input type="hidden" name="nota_id" value="{{$notasolicitud->id}}">
<textarea class="form-control" id="" disabled name="">{{$notasolicitud->nota}}</textarea>
@if($notasolicitud->archivo != null)
    <small class="text text-danger"><i class="mdi mdi-paperclip"></i> Esta nota tiene un archivo asociado</small>
@endif