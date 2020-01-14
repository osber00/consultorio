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
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="col-xlg-2 col-lg-3 col-md-3">
                    <div class="card-body inbox-panel">
                        @can('isadmin')
                        <ul class="list-group list-group-full">
                            <li class="list-group-item active"> 
                                <a href="{{route('solicitudes')}}"><i class="mdi mdi-clipboard-text"></i> Todas </a><span class="badge badge-success ml-auto">6</span>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('solicitudestado',1)}}"> <i class="mdi mdi-bell-ring"></i> Nuevas </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('solicitudestado',2)}}"> <i class="mdi mdi-account-switch"></i> Asignadas </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('solicitudestado',3)}}"> <i class="mdi mdi-account-settings-variant"></i> En proceso </a><span class="badge badge-danger ml-auto">3</span>
                            </li>
                            <li class="list-group-item ">
                                <a href="{{route('solicitudestado',4)}}"> <i class="mdi mdi-account-star"></i> En revisión </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('solicitudestado',6)}}"> <i class="mdi mdi-pause"></i> Esp. datos </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('solicitudestado',5)}}"> <i class="mdi mdi-account-check"></i> Cerradas </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('solicitudestado',7)}}"> <i class="mdi mdi-close"></i> No admitidas </a>
                            </li>
                        </ul>
                        @endcan
                        <h3 class="card-title m-t-40">Labels</h3>
                        <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                    </div>
                </div>

                <div class="col-xlg-10 col-lg-9 col-md-9">
                    <div class="card-body">

                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-secondary font-18 text-dark"><i class="mdi mdi-inbox-arrow-down"></i></button>
                            <button type="button" class="btn btn-secondary font-18 text-dark"><i class="mdi mdi-alert-octagon"></i></button>
                            <button type="button" class="btn btn-secondary font-18 text-dark"><i class="mdi mdi-delete"></i></button>
                        </div>

                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn text-dark btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                            </div>
                        </div>

                        <button type="button " class="btn btn-secondary m-r-10 m-b-10 text-dark"><i class="mdi mdi-reload font-18"></i></button>

                        <div class="btn-group m-b-10" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn m-b-10 text-dark btn-secondary p-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Mark as all read</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                        </div>

                    </div>
                    <div class="card-body p-t-0">
                        <div class="card b-all shadow-none">
                            <div class="inbox-center table-responsive">
                                <table class="table table-hover no-wrap" style="margin-bottom: 0;">
                                    <tbody>
                                    	@forelse($solicitudes as $solicitud)
                                        <tr class="unread">
                                            <td style="width:40px" class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                            <td class="hidden-xs-down">{{str_limit($solicitud->titulo,20)}}</td>
                                            <td class="max-texts">
                                            	<a href="{{route('versolicitud',$solicitud->id)}}">
                                            		<span class="label label-@lang('custom.'.$solicitud->estado->estado) m-r-10">@lang('custom.ic-'.$solicitud->estado->estado) {{$solicitud->estado->estado}}</span> 
	                                            	<small>Asignación:
                                                        @if($solicitud->responsable)
                                                            {{$solicitud->responsable->nombre}},
                                                        @else
                                                            <small class="text text-danger">Sin asignación</small>
                                                        @endif
                                                    </small>
	                                            	{{--<span class="label label-@lang('custom.'.$solicitud->prioridad->prioridad)">
	                                					@lang('custom.ic-'.$solicitud->prioridad->prioridad) {{$solicitud->prioridad->prioridad}}
	                                				</span>--}}
	                                				<small>{{$solicitud->categoria->categoria}}</small>
                                            	</a>
                                            </td>
                                            <td class="hidden-xs-down"><small><i class="mdi mdi-calendar"></i> {{$solicitud->fecha->format('l j \\ F')}}</small></td>
                                            <td class="text-right"> <small><i class="mdi mdi-calendar-check"></i> {{$solicitud->fecha_semaforo->format('l j \\ F')}}</small> </td>
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            
                                            <td class="max-texts">
                                                <a href="javascript:void(0)">
                                                    <small>
                                                        <i class="mdi mdi-emoticon-sad"></i> No hay solicitudes en esta sección
                                                    </small>
                                                    <small></small>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection