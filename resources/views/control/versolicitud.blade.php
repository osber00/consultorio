@extends('layouts.control')

<link rel="stylesheet" href="{{asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css')}}" />
<!-- Dropzone css -->
<link href="{{asset('assets/plugins/dropzone-master/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />

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
        <div class="card-body p-t-0">
            <div class="card b-all shadow-none">
                <div class="card-body">
                    <h3 class="card-title m-b-0">{{$solicitud->titulo}} <small class="text text-danger"><i class="mdi mdi-dots-vertical"></i> {{$solicitud->fecha->format('l j \\ F h:i:s a')}}</small></h3>
                </div>
                <div>
                    <hr class="m-t-0">
                </div>
                <div class="card-body">
                    <div class="d-flex m-b-40">
                        <div>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user" width="40" class="img-circle" /></a>
                        </div>
                        <div class="p-l-10">
                            <h4 class="m-b-0">{{$solicitud->user->nombre}}</h4>
                            <small class="text-muted"><i class="mdi mdi-email"></i> {{$solicitud->user->email}} <i class="mdi mdi-dots-vertical"></i> <i class="mdi mdi-phone"></i> {{$solicitud->user->telefono}}</small>
                        </div>
                    </div>
                    <p>
                        <span class="label label-@lang('custom.'.$solicitud->estado->estado) m-r-10">@lang('custom.ic-'.$solicitud->estado->estado) {{$solicitud->estado->estado}}</span>
                        <i class="mdi mdi-dots-vertical"></i>
                        <span class="label label-@lang('custom.'.$solicitud->prioridad->prioridad)">
	                        @lang('custom.ic-'.$solicitud->prioridad->prioridad) {{$solicitud->prioridad->prioridad}}
	                    </span>
                        <i class="mdi mdi-dots-vertical"></i>
                        <small>Asignado: {{$solicitud->responsable->nombre}}, Supervisor: @if($solicitud->revisor){{$solicitud->revisor->nombre}}@endif</small>
                        <i class="mdi mdi-dots-vertical"></i>
                        <small>{{$solicitud->categoria->categoria}}</small>
                    </p>
                    <p><b>Descripción de la solicitud</b></p>
                    <p>{{$solicitud->descripcion}}</p>

                    <div class="row">
                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-chart-arc font-18 "></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    @foreach($categorias as $categoria)
                                        <a class="dropdown-item @if($categoria->id == $solicitud->categoria_id) active @endif" href="{{route('modificarcategoria',[$solicitud->id,$categoria->id])}}">
                                            {{$categoria->categoria}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn text-dark btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-calendar-clock font-18"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    @foreach($prioridades as $prioridad)
                                        <a class="dropdown-item @if($prioridad->id == $solicitud->prioridad_id) active @endif" href="{{route('modificarprioridad',[$solicitud->id,$prioridad->id])}}">{{$prioridad->prioridad}} ({{$prioridad->tiempo}})</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-account-multiple-plus font-18 "></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    @foreach($estudiantes as $estudiante)
                                        <a class="dropdown-item @if($estudiante->id == $solicitud->responsable_id) active @endif" href="{{route('asignaresponsable',[$solicitud->id,$estudiante->id])}}">
                                            {{$estudiante->nombre}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn text-dark btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-account-star font-18"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    @foreach($tutores as $tutor)
                                        <a class="dropdown-item @if($tutor->id == $solicitud->revisor_id) active @endif" href="{{route('asignarsupervisor',[$solicitud->id,$tutor->id])}}">
                                            {{$tutor->nombre}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <hr class="m-t-0">
                </div>
                <div class="col-xlg-10 col-lg-12 col-md-12">
                    <div class="card-body">
                        <h3 class="card-title">Notas del caso</h3>
                        <div class="">
                            @foreach($notas as $nota)
                                <div class="sl-item">
                                    {{--<div class="sl-left">
                                        <img src="{{asset('assets/images/users/2.jpg')}}" alt="user" class="img-circle">
                                    </div>--}}
                                    <div class="">
                                        <div>
                                            <a href="#" class="link">
                                                <small><strong>{{$nota->user->nombre}}</strong></small>
                                            </a>
                                            <span class="sl-date">{{$nota->fecha->format('l j \\ F h:i:s a')}}</span>
                                            <div class="m-t-20 row">
                                                <div class="col-md-9 col-xs-12">
                                                    <p>
                                                        {!! $nota->nota !!}
                                                        <br>
                                                        @if($nota->archivo != null)
                                                            <small>
                                                                <a href="{{route('notadocumento',$nota->id)}}" target="_blank"><i class="mdi mdi-paperclip"></i> Ver documento</a>
                                                            </small>
                                                        @endif
                                                        <br>
                                                        @can('editar',$nota)
                                                            <a href="" class="btn btn-dark btn-xs">Editar (*)</a>
                                                        @endcan
                                                    </p>
                                                </div>
                                                {{--@if($nota->archivo != null)
                                                <div class="col-md-3 col-xs-12">
                                                    <img src="{{asset('assets/images/big/img1.jpg')}}" alt="user" class="img-responsive radius">
                                                </div>
                                                @endif--}}
                                            </div>
                                            <div class="like-comm m-t-20">
                                                @if(!$nota->publico)
                                                    <small>
                                                        <a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-alert-outline text-danger"></i> Nota privada</a>
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        {{--<ul>
                            @foreach($notas as $nota)
                                <li>{{$nota->nota}} <code>{{$nota->user->nombre}}</code> </li>
                            @endforeach
                        </ul>--}}
                    </div>
                </div>
                <div class="col-xlg-10 col-lg-12 col-md-12">
                    <div class="card-body">
                        <h3 class="card-title">Agregar nota</h3>
                        <form action="{{route('agregarnota')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                            <div class="form-group">
                                <textarea class="textarea_description form-control" rows="10" name="nota" placeholder="Escribir nota"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="input-file-now">Agregar documento a la nota <small>(Imágenes png, jpg y documentos pdf)</small></label>
                                <input type="file" name="archivo" id="input-file-now" class="dropify" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="privada"  class="js-switch" data-color="#f62d51" data-size="small" />
                                Marcar como nota privada
                            </div>
                            <button type="submit" class="btn btn-danger m-t-20"><i class="fa fa-envelope-o"></i> Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
	@parent
	<script src="{{asset('assets/plugins/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{asset('assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{asset('assets/plugins/html5-editor/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('assets/plugins/html5-editor/bootstrap-wysihtml5.js')}}"></script>
    <script>
    $(document).ready(function() {
        //var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });

            // Basic
            $('.dropify').dropify({
                messages: {
                    default: 'Arrastre y suelte un PDF aquí o haga click',
                    replace: 'Arrastre y suelte un PDF aquí o haga click para reemplazar',
                    remove: 'Quitar',
                    error: 'El archivo es damasiado grande'
                }
            });
            $('.textarea_description').wysihtml5();
    });
    </script>
@endsection