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
                <div class="col-xlg-2 col-lg-4 col-md-4">
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
                <div class="col-xlg-10 col-lg-8 col-md-8">
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
                                {{--<form action="" method="post" class="col-md-4">
                                	{{csrf_field()}}
                                	<input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
                                	<div>
                                		<select name="estudiante_id" class="form-control">
                                			<option value="0">Seleccione estudiante</option>
                                			@foreach($estudiantes as $estudiante)
                                			<option value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
                                			@endforeach
                                		</select>
                                	</div>
                                </form>--}}

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
			                                			<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
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
			                                			<option value="{{$prioridad->id}}">{{$prioridad->prioridad}} <small>({{$prioridad->tiempo}})</small></option>
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
			                                			<option value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
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
			                                			<option value="{{$tutor->id}}">{{$tutor->nombre}}</option>
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
                            {{--<div class="card-body">
                                <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h4>
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#"> <img class="img-thumbnail img-responsive" alt="attachment" src="{{asset('assets/images/big/img1.jpg')}}"> </a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#"> <img class="img-thumbnail img-responsive" alt="attachment" src="{{asset('assets/images/big/img2.jpg')}}"> </a>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#"> <img class="img-thumbnail img-responsive" alt="attachment" src="{{asset('assets/images/big/img3.jpg')}}"> </a>
                                    </div>
                                </div>
                                <div class="b-all m-t-20 p-20">
                                    <p class="p-b-20">click here to <a href="#">Reply</a> or <a href="#">Forward</a></p>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection