
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
   
    <title>Consultorio Jurídico Virtual 2.0|Cecar</title>
     <link rel="icon" href="{{asset('front/images/site/fav-icon.png')}}">
     <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

   

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
<link rel="stylesheet" href="{{asset('css/style.css')}}">


    <style>

      body{
        z-index:100;
        overflow: scroll;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

     
      .carousel-inner img {
        width: 100%;
        height: 450px;
      }
      

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
    </style>
    <!-- Custom styles for this template -->
    
  </head>
  <body>
    <header>
  
      <div class="navbar navbar-dark shadow-sm" style="background-color: #c10230">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{asset('img/logo.png')}}" width="40px" alt="">
            <p style="margin: 0">Consultorio </p><strong> Jurídico</strong>
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

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/slider1.png')}}" class="d-block w-100 img-fluid" width="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/slider1.png')}}" class="d-block w-100 img-fluid"width="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/slider1.png')}}" class="d-block w-100 img-fluid"width="100%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<main role="main">

  <section class="jumbotron text-center" style="background-color: #c10230; color:white;margin: 0">
      <div class="container">
        <h2>¿En qué te puedo ayudar?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta metus, at posuere ex facilisis vitae. <br>Nulla id enim et erat tempor ultrices. Morbi ex lacus, interdum non finibus venenatis</p>
            
      {!! Form::open(['route'=>'buscar','method'=>'GET'])!!}
        <div class="input-group mb-3">
         

          {{Form::text('faq',null,['class'=>'form-control col-md-6 offset-md-3', 'placeholder'=>'Ejemplo: Derecho de petición'])}}
          <div class="input-group-append">
            {{Form::submit('Buscar',['class'=>'btn btn-outline-light']) }}
          </div>
        </div>
      {!! Form::close() !!}
       
      </div>
  </section>  

  <section class="jumbotron text-center bg-light" style="margin: 0">
    <p style="color:#c10230;font-size: 25px">Categorias</p>
    
    <div class="container">
      <hr class="col-md-6 offset-md-3">
      <div id="owl-example" class="owl-carousel">
        
      
        <div><a href="{{route('categoria','2')}}"><img src="{{asset('img/ctg2.png')}}" width="200px" alt=""></a></div>
        <div><a href="{{route('categoria','3')}}"><img src="{{asset('img/ctg3.png')}}" width="200px" alt=""></a></div>
        <div><a href="{{route('categoria','4')}}"><img src="{{asset('img/ctg4.png')}}" width="200px" alt=""></a></div>
        <div><a href="{{route('categoria','5')}}"><img src="{{asset('img/ctg5.png')}}" width="200px" alt=""></a></div>
        <div><a href="{{route('categoria','6')}}"><img src="{{asset('img/ctg6.png')}}" width="200px" alt=""></a></div>
        <div><a href="{{route('categoria','7')}}"><img src="{{asset('img/ctg7.png')}}" width="200px" alt=""></a></div>
        <div><a href="{{route('categoria','8')}}"><img src="{{asset('img/ctg8.png')}}" width="200px" alt=""></a></div>
      </div>
    </div>
  </section>


  @yield('content')


<p class="float-right">
      <a href="#">Back to top</a>
    </p>
</main>



<footer class="navbar navbar-dark shadow-sm" style="background-color: #c10230;color:#fff">
  
  <div class="container">
    
    <p><center>Consultorio Jurídico Virtual 2.0 Cecar &copy{{date('Y')}}</center></p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  
</script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    </body>

    <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
<script  src="{{asset('js/script.js')}}"></script>
    
    </html>
