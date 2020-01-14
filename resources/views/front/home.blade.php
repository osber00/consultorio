@extends('layouts.index')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
	 <h1 class="text-center">Ultimas noticias</h1>
      <div class="row">
		
		@foreach($noticias as $noticia)

		
        <div class="col-md-4">
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

        @endforeach
        
@endsection
