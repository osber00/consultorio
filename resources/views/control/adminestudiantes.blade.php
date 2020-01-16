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
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4>Título de tabla</h4>
				<div class="table-responsive m-t-20">
					<table id="cursostutores" class="table stylish-table" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th></th>
								<th>Nombre</th>
								<th>Email <i class="mdi mdi-dots-vertical"></i> Teléfono </th>
								<th>Acceso curso</th>
								<th>Notificar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($usuarios as $usuario)
							<tr>
								<td style="width:50px;"><span class="round">{{substr($usuario->nombre, 0, 1)}}</span></td>
								<td>
									<h6>{{str_limit($usuario->nombre,22)}}</h6>
									{{--<h6>{{str_limit($usuario->fullname,45)}}</h6>--}}
									<small class="text-primary"> --</small>
								</td>
								<td class="font-med">
									{{str_limit($usuario->email,25)}} 
									<i class="mdi mdi-dots-vertical"></i>
									<i class="mdi mdi-phone"></i> {{$usuario->telefono}}
								</td>
								<td>
									<span class="label label-info font-small">--</span>


								</td>
								<td>
									--
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
@endsection

@section('js')
@parent
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
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
</script>
@endsection