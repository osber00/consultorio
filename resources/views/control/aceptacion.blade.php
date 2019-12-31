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
        <div class="col-12 m-t-30">
            <!-- Card -->
            <div class="card text-center">
                <div class="card-header">
                    Usted fue designado responsable de la siguiente solicitud:
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$solicitud->titulo}}</h4>
                    <p class="card-text">{{$solicitud->descripcion}}</p>
                    <a href="{{route('aceptarsolicitud',$solicitud->id)}}" class="btn btn-info">Más información de la solicitud</a>
                </div>
                <div class="card-footer text-muted">
                    {{$solicitud->fecha->format('l j \\ F h:i:s a')}}
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
@endsection