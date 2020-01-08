@extends('layouts.front')

@section('contenido')
		<section id="contact" class="section">
		    <div class="container">
		        <!-- SECTION TITLE -->
		        <div class="section-title">
		            {{--<h4 class="text-uppercase text-center"><img src="{{asset('front/images/icons/envelope.png')}}" alt="demo">Contact</h4>--}}
		        </div>
		        <div class="row">
		            <div id="contact-card" class="col-md-8 col-sm-12 col-xs-12">
		                <!-- CONTACT FORM -->
		                <div class="card">
		                    <div class="card-content">
		        				<h4>Anexar documentos solicitud</h4>
		        				<p>Solicitud: <strong>{{$solicitud->titulo}}</strong></p>
		        				<p>Descripción: {{$solicitud->descripcion}}</p>
		        				<br>
		        				{{--<img src="{{asset($solicitud->id.'/reclamo-recibo-de-la-luz.jpg')}}">--}}
		        				@forelse($notasolicitud as $nota)
									<p>
										{{$nota->nota}}
										{{--<code>{{$nota->url_path}}</code>--}}
									</p>
									{{--<img src="{{route('notadocumento',$nota->id)}}" alt="">--}}
									<a href="{{route('notadocumento',$nota->id)}}" target="_blank">Ver documento</a>
									<br>
		        				@empty
		        					<p>No hay documentos anexos</p>
		        				@endforelse
		                        <form action="{{route('adjuntardocumentos')}}" method="post" id="" name="c-form" enctype="multipart/form-data">
		                            {{csrf_field()}}
		                            <!--Descripcion-->
		                            <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">
		                            <div class="input-field">
		                                <textarea id="nota" class="materialize-textarea" name="nota" required>
											{{old('nota')}}
										</textarea>
		                                <label for="nota">Nota</label>
										<small class="text text-danger">{{$errors->first('nota')}}</small>
		                            </div>

		                            <!--Titulo-->
		                            <div class="input-field">
		                                <input id="archivo" type="file" autocomplete="off" class="validate" name="archivo">
		                            </div>
		                            <!-- SEND BUTTON -->
		                            <div class="contact-send">
		                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
		                                        class="btn waves-effect">Enviar
		                                </button>
		                            </div>
		                        </form>
		                    </div>
		                    <!--FORM LOADER-->
		                    <div id="form-loader" class="progress is-hidden">
		                        <div class="indeterminate"></div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-md-4 col-sm-12 col-xs-12">
		                <!-- CONTACT MAP -->
		                <div id="map-card" class="card">
		                    <!-- MAP -->
		                    {{--<div id="myMap"></div>--}}
		                </div>
		            </div>

		        </div>
		    </div>
		</section>
@endsection