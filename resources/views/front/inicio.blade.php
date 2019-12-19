@extends('layouts.front')

@section('contenido')
	@if(Auth::check())
		<section id="contact" class="section">
		    <div class="container">
		        <!-- SECTION TITLE -->
		        <div class="section-title">
		            {{--<h4 class="text-uppercase text-center"><img src="{{asset('front/images/icons/envelope.png')}}" alt="demo">Contact</h4>--}}
		        </div>
		        <div class="row">
		            <div id="contact-card" class="col-md-12 col-sm-12 col-xs-12">
		                <!-- CONTACT FORM -->
		                <div class="card">
		                    <div class="card-content">
		        				<h4>Hacer solicitud</h4>
		                        <form action="{{route('solicitud')}}" method="post" id="" name="c-form">
		                            {{csrf_field()}}
		                            <!--Titulo-->
		                            <div class="input-field">
		                                <input id="titulo" type="text" autocomplete="off" class="validate" name="titulo">
		                                <label for="titulo">Título</label>
		                            </div>
		                            <!--Descripcion-->
		                            <div class="input-field">
		                                <textarea id="descripcion" class="materialize-textarea" name="descripcion" required></textarea>
		                                <label for="descripcion">Message</label>
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
		        </div>
		    </div>
		</section>

		<section id="pricing-table" class="section">
		    <div class="container">
		        <!--SECTION TITLE-->
		        <div class="section-title">
		            <h4 class="text-uppercase text-center">Mis solicitudes</h4>
		        </div>
		        <!--PRICING TABLES-->
		        <div id="pricing-card" class="row">
		            <!--PRICING ONE-->
		            @foreach($solicitudes as $solicitud)
		            <div id="p-one" class="col-md-4 col-sm-4 col-xs-12">
		                <div class="pricing">
		                    <div class="card">
		                        <!--PRICING TOP-->
		                        <div class="pricing-top">
		                            <p><sup>Caso</sup><em>{{$solicitud->id}}</em></p>
		                            <span>{{$solicitud->titulo}}</span>
		                        </div>
		                        <!--PRICING DETAILS-->
		                        <div class="pricing-bottom text-center text-capitalize">
		                            <ul>
		                                <li>Estado: {{$solicitud->estado->estado}}</li>
		                                <li>Categoría: {{$solicitud->categoria->categoria}}</li>
		                                <li>Responsable: {{str_limit($solicitud->responsable->nombre,20)}}</li>
		                                <li>Prioridad: {{$solicitud->prioridad->prioridad}}</li>
		                                <li>Tiempo para procesar: {{$solicitud->prioridad->tiempo}} días hábiles</li>
		                            </ul>
		                        </div>
		                        <!--BUTTON-->
		                        <div class="card-action text-center">
		                            <a class="waves-effect btn" href="{{route('documentos',$solicitud->id)}}">ver detalles</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            @endforeach
		        </div>
		    </div>
		</section>
	@else
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
		                    	<h4>Regístrese</h4>
		                        <form id="contact-form" name="c-form">
		                            <!-- Nombre -->
		                            <div class="input-field">
		                                <input id="nombre" type="text" class="validate" autocomplete="off" name="nombre" required>
		                                <label for="nombre">Nombre completo</label>
		                            </div>
		                            <!--Identificación-->
		                            <div class="input-field">
		                                <input id="identificacion" type="text" class="validate" autocomplete="off" name="identificacion">
		                                <label for="identificacion">Identificación</label>
		                            </div>
		                            <!--Correo-->
		                            <div class="input-field">
		                                <input id="email" type="email" class="validate" autocomplete="off" name="email" required>
		                                <label for="email">Correo</label>
		                            </div>
		                            <!--Teléfono-->
		                            <div class="input-field">
		                                <input id="telefono" type="email" class="validate" autocomplete="off" name="telefono" required>
		                                <label for="telefono">Teléfono</label>
		                            </div>
		                            <!--Contraseña-->
		                            <div class="input-field">
		                                <input id="password" type="email" class="validate" autocomplete="off" name="password" required>
		                                <label for="password">Contraseña</label>
		                            </div>
		                            <!-- SEND BUTTON -->
		                            <div class="contact-send">
		                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
		                                        class="btn waves-effect"> Confirmar
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
		        </div>
		    </div>
		</section>
	@endif
@endsection