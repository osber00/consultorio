@extends('layouts.control')

@section('titulo')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Inicio</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Consultorio Jurídico 2.0</li>
                <li class="breadcrumb-item active">Faqa</li>
                <li class="breadcrumb-item active">Editar</li>

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
          Editando  Faq
          
        </div>
      
        <div class="card-body">
          
          {!! Form::model($faq, ['route' => ['faqs.update', $faq->id], 'method' => 'PUT','files'=>true]) !!}

				 @include('control.faqs.partials.form')
						
			{!!Form::close()!!}
          
        </div>
        
    </div>
      
    </div>
  </div>
</div>

@endsection