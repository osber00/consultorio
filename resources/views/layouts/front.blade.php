<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <title>Consultorio Jurídico | CECAR</title>
    <link rel="icon" href="{{asset('front/images/site/fav-icon.png')}}">

    <!--APPLE TOUCH ICON-->
    <link rel="apple-touch-icon" href="{{asset('front/images/site/apple-touch-icon.png')}}">


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>


    <!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="{{asset('front/stylesheets/vendors/font-awesome.min.css')}}" rel="stylesheet">


    <!-- ANIMATION -->
    <link href="{{asset('front/stylesheets/vendors/animate.min.css')}}" rel="stylesheet">

    <!-- MAGNIFICENT POPUP -->
    <link href="{{asset('front/stylesheets/vendors/magnific-popup.css')}}" rel="stylesheet">

    <!-- SWIPER -->
    <link href="{{asset('front/stylesheets/vendors/swiper.min.css')}}" rel="stylesheet">


    <!-- MATERIALIZE -->
    <link href="{{asset('front/stylesheets/vendors/materialize.css')}}" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="{{asset('front/stylesheets/vendors/bootstrap.min.css')}}" rel="stylesheet">

    <!-- CUSTOM STYLE -->
    <link href="{{asset('front/stylesheets/style_teal.css')}}" id="switch_style" rel="stylesheet">
	

</head>
<body>


<!--==========================================
                  PRE-LOADER
===========================================-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>JOHN DOE</h2>
                <h6>Software Engineer & UI/UX Expert</h6>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                    HEADER
===========================================-->
@section('menu')
<header id="home">
    <nav id="theMenu" class="menu">

        <!--MENU-->
        <div id="menu-options" class="menu-wrap">

            <!--PERSONAL LOGO-->
            <div class="logo-flat">
                <img alt="personal-logo" class="img-responsive" src="{{asset('front/images/profile/john.png')}}">
            </div>
            <br>

            <!--OPTIONS-->
            <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
            <a href="#about"><i class="title-icon fa fa-dashboard"></i>About</a>
            <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Education</a>
            <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
            <a href="#experience"><i class="title-icon fa fa-suitcase"></i>Experience</a>
            <a href="#portfolios"><i class="title-icon fa fa-archive"></i>Portfolios</a>
            <a href="#interest"><i class="title-icon fa fa-heart"></i>Interest</a>
            <a href="#testimonials"><i class="title-icon fa fa-users"></i>Testimonials</a>
            <a href="#pricing-table"><i class="title-icon fa fa-money"></i>Pricing</a>
            <a href="#blog"><i class="title-icon fa fa-pencil-square"></i>Blog</a>
            <a href="#contact"><i class="title-icon fa fa-envelope"></i>Contact</a>
        </div>

        <!-- MENU BUTTON -->
        <div id="menuToggle">
            <div class="toggle-normal">
                <i class="material-icons top-bar">remove</i>
                <i class="material-icons middle-bar">remove</i>
                <i class="material-icons bottom-bar">remove</i>
            </div>
        </div>
    </nav>

    <!--HEADER BACKGROUND-->
    <div class="header-background section"></div>

</header>
@show


<!--==========================================
                   V-CARD
===========================================-->
<div id="v-card-holder" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <!-- V-CARD -->
                <div id="v-card" class="card">

                    <!-- PROFILE PICTURE -->
                    <div id="profile" class="right">
                        <img alt="profile-image" class="img-responsive" src="{{asset('front/images/profile/profile.png')}}">
                        <div class="slant"></div>

                        <!--EMPTY PLUS BUTTON-->
                        <!--<div class="btn-floating btn-large add-btn"><i class="material-icons">add</i></div>-->

                        <!--VIDEO PLAY BUTTON-->
                        <div id="button-holder" class="btn-holder">
                            <div id="play-btn" class="btn-floating btn-large btn-play">
                                <i id="icon-play" class="material-icons">play_arrow</i>
                            </div>
                        </div>
                    </div>
                    <!--VIDEO CLOSE BUTTON-->
                    <div id="close-btn" class="btn-floating icon-close">
                        <i class="fa fa-close"></i>
                    </div>

                    <div class="card-content">

                        <!-- NAME & STATUS -->
                        <div class="info-headings">
                            <h4 class="text-uppercase left">John DOE</h4>
                            <h6 class="text-capitalize left">Software Engineer & UI/UX Expert</h6>
                        </div>

                        <!-- CONTACT INFO -->
                        <div class="infos">
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">email</i></span>
                                    <span class="content">email@mailprovider.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">language</i></span>
                                    <span class="content">yourpersonalwebsite.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="fa fa-skype" aria-hidden="true"></i></span>
                                    <span class="content">yourusername@skype.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">phone</i></span>
                                    <span class="content">+152 25634 254 846</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">place</i></span>
                                    <span class="content">LampStreet 34/3, London, UK</span>
                                </li>

                            </ul>
                        </div>

                        <!--LINKS-->
                        <div class="links">
                            <!-- FACEBOOK-->
                            <a href="#" id="first_one"
                               class="social btn-floating indigo"><i
                                    class="fa fa-facebook"></i></a>
                            <!-- TWITTER-->
                            <a href="#" class="social  btn-floating blue"><i
                                    class="fa fa-twitter"></i></a>
                            <!-- GOOGLE+-->
                            <a href="#" class="social  btn-floating red"><i
                                    class="fa fa-google-plus"></i></a>
                            <!-- LINKEDIN-->
                            <a href="#" class="social  btn-floating blue darken-3"><i
                                    class="fa fa-linkedin"></i></a>
                            <!-- RSS-->
                            <a href="#" class="social  btn-floating orange darken-3"><i
                                    class="fa fa-rss"></i></a>
                        </div>
                    </div>
                    <!--HTML 5 VIDEO-->
                    <video id="html-video" class="video" poster="{{asset('front/images/poster/poster.jpg')}}" controls>
                        <!--SERVER HOSTED VIDEO-->
                        <source src="{{asset('front/videos/home_video.webm')}}" type="video/webm">
                    </video>

                </div>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                  CONTACT
===========================================-->
@section('contenido')

@show

<!--==========================================
                     SCROLL TO TOP
===========================================-->
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

<!--==========================================
                      FOOTER
===========================================-->

<footer>
    <div class="container">
        <!--FOOTER DETAILS-->
        <p class="text-center">
            © {{date('Y')}}. All right reserved by
            <a href="http://ebercon.com.co/" target="_blank">
                <strong>Ebercon</strong>
            </a>
        </p>
    </div>
</footer>

<!--==========================================
                  SCRIPTS
===========================================-->
<script src="{{asset('front/javascript/vendors/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/bootstrap.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/materialize.min.js')}}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR API KEY"></script>--}}
{{--<script src="{{asset('front/javascript/vendors/markerwithlabel.min.js')}}"></script>--}}
<script src="{{asset('front/javascript/vendors/retina.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/scrollreveal.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/swiper.jquery.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/javascript/custom.js')}}"></script>


</body>
</html>