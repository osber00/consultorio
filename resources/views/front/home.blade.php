@extends('layouts.index')

@section('content')

<div class="album py-5" style="background-color: gray">
    <div class="container">
      <div class="text-center">
      	 <h1 style="color:#fff">Ultimas noticias</h1>
          <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta metus, at posuere ex facilisis vitae.<br> Nulla id enim et erat tempor ultrices.</p>
		  </div>
    <div class="row">
		@foreach($noticias as $noticia)

		
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="{{$noticia->file}}" class="img-fluid" alt="" width="100%" height="225">
            <div class="card-body">
            	<h6>{{$noticia->name}}</h6>
              <p class="card-text text-justify">{{str_limit($noticia->excerpt),50}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Ver más</button> -->

                  <a href="{{route('noticia',$noticia->slug)}}" class="btn btn-sm btn-outline-secondary">Ver más</a>
                 
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        
@endsection
