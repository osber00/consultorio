@extends('layouts.control')

@section('titulo')
<div class="row page-titles">
	<div class="col-md-5 col-8 align-self-center">
		<h3 class="text-themecolor m-b-0 m-t-0">Administración de estudiantes</h3>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
			<li class="breadcrumb-item active">Administración de estudiantes</li>
		</ol>
	</div>
</div>
@endsection

@section('contenido')
@include('partials.confirmaciones')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4>Lista de estudiantes activos 
					<i class="mdi mdi-dots-vertical"></i> 
					<small><a href="javascript:void(0)" data-toggle="modal" data-target="#nuevousuario" class="btn btn-danger btn-xs">Nuevo estudiante</a></small>
				</h4>
				<div class="table-responsive m-t-20">
					<table id="cursostutores" class="table stylish-table" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th></th>
								<th>Nombre</th>
								<th>Email <i class="mdi mdi-dots-vertical"></i> Casos </th>
								<th class="text-center">Acceso a plataforma</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($usuarios as $usuario)
							<tr>
								<td style="width:50px;"><span class="round">{{substr($usuario->nombre, 0, 1)}}</span></td>
								<td>
									<h6>{{str_limit($usuario->nombre,22)}}</h6>
									{{--<h6>{{str_limit($usuario->fullname,45)}}</h6>--}}
									<small class="text-primary"><i class="mdi mdi-phone"></i> {{$usuario->telefono}}</small>
								</td>
								<td class="font-med">
									<small>{{str_limit($usuario->email,25)}}</small> 
									<i class="mdi mdi-dots-vertical"></i>
									<span class="label label-info">{{$usuario->casos_atendidos}}</span>
								</td>
								<td class="text-center">
									<span class="label label-info font-small">
										--
									</span>
								</td>
								<td class="text-center">
									<a href="" class="btn btn-info btn-xs"><i class="mdi mdi-pencil"></i> Editar</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal nuevo usuario -->
<div class="modal fade" id="nuevousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Nuevo estudiante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('nuevousuario')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="rol_id" value="3">
                    <div class="form-froup">
                    	<label for="nombre"></label>
                    	<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre completo">
                    </div>
                    <div class="form-froup">
                    	<label for="identificacion"></label>
                    	<input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Identificación">
                    </div>
                    <div class="form-froup">
                    	<label for="email"></label>
                    	<input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="form-froup">
                    	<label for="telefono"></label>
                    	<input type="telefono" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@parent
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
	$(document).ready(function() {



		$('#cursostutores, #cursostutores2').DataTable({
		dom: 'Bfrtip',
            //order: [[ 2, "desc" ]],
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            language: {
            	"decimal": "",
            	"emptyTable": "No hay información",
            	"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            	"infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            	"infoFiltered": "(Filtrado de _MAX_ total entradas)",
            	"infoPostFix": "",
            	"thousands": ",",
            	"lengthMenu": "Mostrar _MENU_ Entradas",
            	"loadingRecords": "Cargando...",
            	"processing": "Procesando...",
            	"search": "Buscar:",
            	"zeroRecords": "Sin resultados encontrados",
            	"paginate": {
            		"first": "Primero",
            		"last": "Ultimo",
            		"next": "Siguiente",
            		"previous": "Anterior"
            	}
            }
    	});
	});
</script>
@endsection