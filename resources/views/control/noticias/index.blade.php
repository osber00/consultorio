@extends('layouts.control')

@section('titulo')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Inicio</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Consultorio Jurídico 2.0</li>
                <li class="breadcrumb-item active">Noticias</li>
            </ol>
        </div>
    </div>

@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-default">
                <div class=" card-header">
                    Lista de Noticias (se muestran las tres primeras publicadas)
                    <a href="{{route('noticias.create')}}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>
                </div>

            
            <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th width="10px">id</th>
                      <th>Nombre</th>
                      <th>Estado</th>
                      <th colspan="3">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($noticias as $noticia)
                    <tr>
                      <th scope="row">{{$noticia->id}}</th>
                      <td> {{$noticia->name}} </td>
                      <td>

                        @if(($noticia->status)==='DRAFT')
                              <span class="label label-danger">Borrador</span>          
                        @else
                              <span class="label label-success">Publicado</span>
                              
                        @endif


                        </td>
                      <td width="10px">
                                <a href="{{route('noticias.show',$noticia->id)}}" class="btn btn-outline-secondary btn-sm">
                                    Ver
                                </a>
                       </td>

                       <td width="10px">
                                <a href="{{route('noticias.edit',$noticia->id)}}" class="btn btn-outline-secondary btn-sm">
                                    Editar 
                                </a>
                        </td>

                         <td width="10px">
                          {!! Form::open(['route'=>['noticias.destroy',$noticia->id],'method'=>'DELETE'])!!}

                          <button class="btn btn-outline-danger btn-sm">Eliminar</button>

                          {!! form::close() !!} 
                               
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                    
                    {{$noticias->render()}}
                
            </div>
        </div>
            
        </div>
    </div>
</div> 

</div>
@endsection