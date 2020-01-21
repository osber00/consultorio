@extends('layouts.header')

@section('content')

<div class="container">
	<div class="row">
		<h2>{{$noticia->name}}</h2>
	</div>
	
		
		<img src="{{$noticia->file}}" alt="{{$noticia->name}}" class=" img-fluid img-thumbnail" style="margin: 15px;width:200px">
		<p style="text-align: justify;padding-left: 5px">
			{!!$noticia->body!!}
		</p>
</div>

@endsection