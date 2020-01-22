@extends('layouts.header')

@section('content')

<section class="jumbotron text-center bg-light" style="color:#c10230">
      <div class="container">
        <h2>¿En qué te puedo ayudar?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta metus, at posuere ex facilisis vitae. <br>Nulla id enim et erat tempor ultrices. Morbi ex lacus, interdum non finibus venenatis</p>
            
      {!! Form::open(['route'=>'buscar','method'=>'GET'])!!}
        <div class="input-group mb-3">
         

          {{Form::text('faq',null,['class'=>'form-control col-md-6 offset-md-3', 'placeholder'=>'Ejemplo: Derecho de petición'])}}
          <div class="input-group-append">
            {{Form::submit('Buscar',['class'=>'btn btn-outline-danger']) }}
          </div>
        </div>
      {!! Form::close() !!}
       
      </div>
  </section>

 @if($items===0) 
 <div class="container">
		 <div class="alert alert-danger" role="alert">
		  <h4 class="alert-heading">Campo de búsqueda vacio</h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat ac massa at fringilla. Etiam volutpat consequat neque, in consectetur nunc tincidunt at. Ut facilisis augue blandit ligula egestas, et aliquet nulla rhoncus. Duis viverra tincidunt luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p><br>
		  <hr>
		  <p class="mb-0">En caso que su búsqueda no arroje ningun resultado, favor agregue un nuevo caso haciendo <a href="{{route('inicio')}}">clic aqui</a></p>
		</div>
</div>
 @else
@forelse($items as $item)
		<div class="container">
		  <div class="card" >
			  <div class="card-header" style="background-color: #c10230;color: #fff">
			    {{$item->pregunta}}
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">{{$item->titulo_caso}}</h5>
			    <p class="card-text">{!!$item->descripcion_caso!!}</p>

			    
			    <a href="{{route('faq',$item->slug)}}" class="btn btn-outline-danger"> Ver mas</a>
			  </div>
			  
			</div>
		</div>	<br>
	@empty
	<div class="container">
		 <div class="alert alert-danger" role="alert">
		  <h4 class="alert-heading">No se encontraron resultados</h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat ac massa at fringilla. Etiam volutpat consequat neque, in consectetur nunc tincidunt at. Ut facilisis augue blandit ligula egestas, et aliquet nulla rhoncus. Duis viverra tincidunt luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p><br>
		  <hr>
		  <p class="mb-0">En caso que su búsqueda no arroje ningun resultado, favor agregue un nuevo caso haciendo <a href="{{route('inicio')}}">clic aqui</a></p>
		</div>
</div>	
		
@endforelse

@endif
@endsection