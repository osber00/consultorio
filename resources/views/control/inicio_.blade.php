@extends('layouts.control')

@section('titulo')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Inicio</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
            <li class="breadcrumb-item active">Consultorio Jurídico 2.0</li>
        </ol>
    </div>
</div>
@endsection

@section('contenido')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table</h4>
                <h6 class="card-subtitle">Data table example</h6>
                <div class="table-responsive m-t-40">
                    <table id="solicitudes" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Solicitud</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Categoria</th>
                                <th class="text-center">Prioridad</th>
                                <th>Responsable</th>
                                <th>Fecha</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($solicitudes as $solicitud)
                            <tr>
                                <td>{{$solicitud->titulo}}</td>
                                <td class="text-center">
                                	<span class="label label-@lang('custom.'.$solicitud->estado->estado)">
                                		@lang('custom.ic-'.$solicitud->estado->estado) {{$solicitud->estado->estado}}
                                	</span>
                                </td>
                                <td class="text-center">
                                    <small>{{$solicitud->categoria->categoria}}</small>
                                </td>
                                <td class="text-center">
                                	<span class="label label-@lang('custom.'.$solicitud->prioridad->prioridad)">
                                		@lang('custom.ic-'.$solicitud->prioridad->prioridad) {{$solicitud->prioridad->prioridad}}
                                	</span>
                                </td>
                                <td>
                                	<small>{{$solicitud->responsable->nombre}}</small>
                                </td>
                                <td>
                                	<small>
                                		{{$solicitud->fecha->format('l j \\ F Y h:i:s a')}}
                                	</small>
                                </td>
                                <td class="text-center"><a href="{{route('versolicitud',$solicitud->id)}}" class="btn btn-xs btn-info"><i class="mdi mdi-settings"></i> Ver</a></td>
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
		$(document).ready(function(){
			var tabla = $('#solicitudes').DataTable({
				"order": [[ 5, "desc" ]],
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
		})
	</script>
@endsection