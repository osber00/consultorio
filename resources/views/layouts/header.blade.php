<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consultorio Jurídico Virtual 2.0|Cecar</title>
     <link rel="icon" href="{{asset('front/images/site/fav-icon.png')}}">
     <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

	<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <header>
  
	      <div class="navbar navbar-dark shadow-sm" style="background-color: #c10230">
	        <div class="container d-flex justify-content-between">
	          <a href="{{route('inicio')}}" class="navbar-brand d-flex align-items-center">
	            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
	            <p style="margin: 0">Consultorio</p><strong>Jurídico</strong>
	          </a>
	           <ul class="nav justify-content-end ">
	                            <!-- Authentication Links -->
	                            @if (Auth::guest())
	                            <ul class="nav justify-content-end">
	                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" style="color:#fff; border:2px solid #fff;margin: 5px;padding: 0px 20px;border-radius: 12px"> Iniciar Sesión</a></li>
	                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link " style="color:#fff;border:2px solid #fff;margin: 5px;padding: 0px 20px;border-radius: 12px">Registrarme</a></li>
	                            </ul>   
	                            @else
	                                <li class="dropdown">
	                                    <a href="#" class="dropdown-toggle" style="color:#fff;text-decoration: none;" data-toggle="dropdown" role="button" aria-expanded="false">
	                                        {{ Auth::user()->nombre}} <span class="caret"></span>
	                                    </a>

	                                    <ul class="dropdown-menu" role="menu">
	                                        <li>
	                                            <a href="{{ route('logout') }}" class="dropdown-item"
	                                                onclick="event.preventDefault();
	                                                         document.getElementById('logout-form').submit();">
	                                                <img src="{{asset('img/off.png')}}" width="20px" alt="">&nbsp Cerrar Sesión
	                                            </a>

	                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                                {{ csrf_field() }}
	                                            </form>
	                                        </li>
	                                    </ul>
	                                </li>
	                            @endif
	                        </ul>
	        </div>
	      </div>
	</header>

	@yield('content')
	<footer class="navbar navbar-dark shadow-sm" style="background-color: #c10230;color:#fff">  
		  <div class="container">
		    <p><center>Consultorio Jurídico Virtual 2.0 Cecar &copy{{date('Y')}}</center></p>
		  </div>
	</footer>

			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
     		<script src="https://getbootstrap.com/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

	</body>