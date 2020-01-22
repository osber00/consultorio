<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>Consultorio Jurídico 2.0| Cecar</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/plugins/dropify/dist/css/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css')}}" />
    <link href="{{asset('assets/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('admin/css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header card-no-border">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper - style you can find in pages.scss -->
<div id="main-wrapper">
    <!-- Topbar header - style you can find in pages.scss -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                         <!-- dark Logo text -->
                         <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- Search -->
                    <li class="nav-item hidden-sm-down search-box">
                        <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form action="" method="get" class="app-search" autocomplete="off">
                            <input type="text" name="busqueda" class="form-control" placeholder="Escriba & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- User profile and search -->
                <ul class="navbar-nav my-lg-0">

                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="profile-pic" /></a>
                        {{--<div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p><a href="" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>--}}
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- End Topbar header -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile" style="background: url({{asset('assets/images/background/user-info.jpg')}}) no-repeat;">
                <!-- User profile image -->
                <div class="profile-img"> <img src="{{asset('assets/images/users/profile.png')}}"  alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text"> 
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        @if (Auth::check())
                            <small>{{str_limit(Auth::user()->name,20)}}</small>
                        @endif
                    </a>

                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">MENÚ</li>
                    <li>
                        @if(auth()->user()->rol_id == 1)
                            <a class="waves-effect waves-dark" href="{{route('admin')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Inicio </span></a>
                        @elseif(auth()->user()->rol_id == 2)
                            <a class="waves-effect waves-dark" href="{{route('revisor')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Inicio </span></a>
                        @else
                            <a class="waves-effect waves-dark" href="{{route('estudiante')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Inicio </span></a>
                        @endif
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{route('adminestudiantes')}}" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Estudiantes</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Tutores</span></a>
                    </li>

                    <li>
                        <a class="waves-effect waves-dark" href="{{route('noticias.index')}}" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Noticias</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{route('faqs.index')}}" aria-expanded="false"><i class="mdi mdi-comment-question-outline"></i><span class="hide-menu">Faqs</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-power"></i><span class="hide-menu">Salir</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Bread crumb and right sidebar toggle -->
            @section('titulo')
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            @show

            @if(session('info'))
                <div class="container">    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                {{session('info')}}
                            </div>
                        </div>
                    </div>   
                </div>  
            @endif
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- Start Page Content -->
            <div id="contenido">
            @section('contenido')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            This is some text within a card block.
                        </div>
                    </div>
                </div>
            </div>
            @show
            </div>
            <!-- End PAge Content -->
        </div>


        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer">
            © {{date('Y')}} Cecar Virtual
        </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->
@section('js')
<!-- All Jquery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin/js/custom.min.js')}}"></script>
<!-- Style switcher -->
<script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>

<script>


</script>

<script>
    $(document).ready(function () {

        // Enable pusher logging - don't include this in production
        //Pusher.logToConsole = true;

        var pusher = new Pusher('5785a53942faf9101d98', {
            cluster: 'eu',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('visitante', function(data) {
            //alert(JSON.stringify(data));
            //console.log(data.info);
            $.toast({
                heading: 'Notificación',
                text: data.info,
                position: 'top-right',
                loaderBg: '#ffffff',
                icon: 'success',
                hideAfter: 16000,
                stack: 6
            })
        });

        channel.bind('aprobacion', function(data) {
            //alert(JSON.stringify(data));
            //console.log(data.voto + ' '+ data.post);
            $.toast({
                heading: 'Aprobación',
                text: 'El post de '+ data.post + ' fue '+data.voto+' para un usuario',
                position: 'top-right',
                loaderBg: '#ffffff',
                icon: 'info',
                hideAfter: 16000,
                stack: 6
            })
        });


    })
</script>
@yield('scripts')
@show
</body>

</html>
