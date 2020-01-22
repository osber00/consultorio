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


<h1> Filtrar por categoria </h1>
    <div class="row">
        <div class="col-6">
          {!! Form::open(['route'=>'faqs.index','method'=>'GET'])!!}
           <div class="input-group mb-3">                  
                  {{Form::select('category_id',$categorias, null, ['class'=>'form-control'])}}
            </div>
        </div>    
        <div class="input-group-append">
                  {{Form::submit('Filtrar',['class'=>'btn btn-outline-info']) }}
        </div>
    </div > 
          {!! Form::close() !!}

          
          <div class="col-md-12">
            <div class="row">
            <div class="card  card-default">
                <div class=" card-header">
                    Lista de Preguntas frecuentes
                    <a href="{{route('faqs.create')}}" class="btn btn-sm btn-primary float-right">
                        Crear Nueva Faq
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
                    @foreach($faqs as $faq)
                    <tr>
                      <th scope="row">{{$faq->id}}</th>
                      <td> {{$faq->pregunta}} </td>
                      <td>

                        @if(($faq->status)==='DRAFT')
                              <span class="label label-danger">Borrador</span>          
                        @else
                              <span class="label label-success">Publicado</span>
                              
                        @endif


                        </td>
                      <td width="10px">
                                <a href="{{route('faqs.show',$faq->id)}}" class="btn btn-outline-secondary btn-sm">
                                    Ver
                                </a>
                       </td>

                       <td width="10px">
                                <a href="{{route('faqs.edit',$faq->id)}}" class="btn btn-outline-secondary btn-sm">
                                    Editar 
                                </a>
                        </td>

                         <td width="10px">
                          {!! Form::open(['route'=>['faqs.destroy',$faq->id],'method'=>'DELETE'])!!}

                          <button class="btn btn-outline-danger btn-sm">Eliminar</button>

                          {!! form::close() !!} 
                               
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                    
                    {{$faqs->render()}}
                
            </div>
        </div>
            
        </div>
    </div>
</div> 


@endsection