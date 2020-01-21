@extends('layouts.header')

@section('content')

<div class="container">
	

<h1> {{$faq->pregunta}} </h1>
<div><h4>{{$faq->titulo_caso}} </h4><p>{{$faq->categoria->categoria}}</p></div>


<p>{!!$faq->descripcion_caso!!}</p>



					<nav>
					  <div class="nav nav-tabs" id="nav-tab" role="tablist">
					    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">¿Que Hacer?</a>
					    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">¿Donde Acudir?</a>
					    <a class="nav-item nav-link" id="nav-alter-tab" data-toggle="tab" href="#nav-alter" role="tab" aria-controls="nav-alter" aria-selected="false">ALternativa</a>
					    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tener en Cuenta</a>
					    
					  </div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
					  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">{!!$faq->que_hacer!!}</div>
					  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">{!!$faq->donde_acudir!!}</div>
					  <div class="tab-pane fade" id="nav-alter" role="tabpanel" aria-labelledby="nav-alter-tab">{!!$faq->alternativa!!}</div>
					  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">{!!$faq->tener_cuenta!!}</div>
					  
					</div>
	
</div>



@endsection