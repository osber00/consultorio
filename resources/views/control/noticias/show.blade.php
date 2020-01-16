@extends('layouts.control')

@section('titulo')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Inicio</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Consultorio Jurídico 2.0</li>
                <li class="breadcrumb-item active">Noticias</li>
                <li class="breadcrumb-item active">Detalle</li>
            </ol>
        </div>
    </div>

@endsection

@section('contenido')

<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
         <h2>Vista previa de la  Noticia {{$noticia->id}}</h2>
          
        </div>
      
        <div class="col-md-4 align-self-center">
          <div class="card mb-4 shadow-sm">
            <img src="{{$noticia->file}}" class="img-fluid" alt="" width="100%" height="225">
            <div class="card-body">
              <h4>{{$noticia->name}}</h4>
              <p class="card-text">{{$noticia->excerpt}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver más</button>
                 
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
</div> 

@endsection