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
        <div class="card">
            <div class="row">
                <div class="col-xlg-2 col-lg-3 col-md-3">
                    <div class="card-body inbox-panel"><a href="" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Compose</a>
                        <ul class="list-group list-group-full">
                            <li class="list-group-item active"> 
                                <a href="javascript:void(0)"><i class="mdi mdi-gmail"></i> Inbox </a><span class="badge badge-success ml-auto">6</span>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)"> <i class="mdi mdi-star"></i> Starred </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)"> <i class="mdi mdi-send"></i> Draft </a><span class="badge badge-danger ml-auto">3</span>
                            </li>
                            <li class="list-group-item ">
                                <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box"></i> Sent Mail </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)"> <i class="mdi mdi-delete"></i> Trash </a>
                            </li>
                        </ul>
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
									<form action="{{route('modificarcategoria')}}" method="post" class="input-form">
                                        {{csrf_field()}}
                                        <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                                        <label class="control-label m-t-20"><i class="mdi mdi-buffer"></i> Asignar categoria</label>
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="input-group">
                                                    <select name="categoria_id" class="form-control">
			                                			@foreach($categorias as $categoria)
			                                			<option value="{{$categoria->id}}" @if($categoria->id == $solicitud->categoria_id) selected @endif>{{$categoria->categoria}}</option>
			                                			@endforeach
			                                		</select>
                                                    <span class="input-group-btn">
							                          <button class="btn btn-info" type="submit"><i class="mdi mdi-check-circle"></i> Confirmar</button>
							                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form action="{{route('modificarprioridad')}}" method="post" class="input-form">
                                        {{csrf_field()}}
                                        <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                                        <label class="control-label m-t-20"><i class="mdi mdi-buffer"></i> Asignar prioridad</label>
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="input-group">
                                                    <select name="prioridad_id" class="form-control">
			                                			@foreach($prioridades as $prioridad)
			                                			<option value="{{$prioridad->id}}"  @if($prioridad->id == $solicitud->prioridad_id) selected @endif>{{$prioridad->prioridad}} <small>({{$prioridad->tiempo}})</small></option>
			                                			@endforeach
			                                		</select>
                                                    <span class="input-group-btn">
							                          <button class="btn btn-info" type="submit"><i class="mdi mdi-check-circle"></i> Confirmar</button>
							                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

									<form action="{{route('asignaresponsable')}}" method="post" class="input-form">
                                        {{csrf_field()}}
                                        <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                                        <label class="control-label m-t-20"><i class="mdi mdi-account-multiple-plus"></i> Asignar estudiante</label>
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="input-group">
                                                    <select name="responsable_id" class="form-control">
			                                			{{--<option value="0">Seleccione estudiante</option>--}}
			                                			@foreach($estudiantes as $estudiante)
			                                			<option value="{{$estudiante->id}}" @if($estudiante->id == $solicitud->responsable_id) selected @endif >{{$estudiante->nombre}}</option>
			                                			@endforeach
			                                		</select>
                                                    <span class="input-group-btn">
							                          <button class="btn btn-info" type="submit"><i class="mdi mdi-account-multiple-plus"></i> Asignar</button>
							                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form action="{{route('asignarsupervisor')}}" method="post" class="input-form">
                                        {{csrf_field()}}
                                        <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                                        <label class="control-label m-t-20"><i class="mdi mdi-account-star"></i> Asignar supervisor</label>
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="input-group">
                                                    <select name="revisor_id" class="form-control">
			                                			{{--<option value="0">Seleccione supervisor</option>--}}
			                                			@foreach($tutores as $tutor)
			                                			<option value="{{$tutor->id}}" @if($tutor->id == $solicitud->revisor_id) selected @endif >{{$tutor->nombre}}</option>
			                                			@endforeach
			                                		</select>
                                                    <span class="input-group-btn">
							                          <button class="btn btn-info" type="submit"><i class="mdi mdi-account-star"></i> Asignar</button>
							                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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