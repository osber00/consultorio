@extends('layouts.header')

@section('content')

		<section class="jumbotron text-center" style="background-color: #fff; color:#000;margin: 0">
	      <div class="col-md-6 offset-md-3">
	      	<img src="{{$categoria->imagen}}" alt="" width="200px" class="img-fluid">
	        <h2>{{$categoria->categoria}}</h2>
	        <p>{{$categoria->descripcion}}</p>
	      </div>
	  	</section> 


	  	<section class="jumbotron text-center" style="background-color: #c10230; color:#fff;margin: 0">
	      <div class="col-md-6 offset-md-3">
	      	
	        <h2>Preguntas Frecuentes</h2>
	        @foreach($faqs as $faq)
			        <div style="border: 1px solid #fff;border-radius: 15px;margin:10px ">
			        	<p style="margin: 0;padding: 5px 0px">{{$faq->pregunta}}</p>
			        </div>
			@endforeach        
		 </div>
	    </section> 




@endsection


