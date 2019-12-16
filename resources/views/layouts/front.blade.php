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
                   EXPERIENCE
===========================================-->
<section id="experience" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="{{asset('front/images/icons/layers.png')}}" alt="demo">Experience</h4>
        </div>

        <div id="timeline-experience">

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>D</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Designer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>RulerSoft</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my designing carrier here, spent tow years learning and working
                            in various designing aspects..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-4">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>F</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Frontend Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Micro IT</small>
                            </h6>
                            <h6>
                                <small>Jan 2012 - Mar 2014</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my frontend carrier here, spent tow years learning and working
                            in various frontend aspects. I worked on about 40+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Expert</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Libra IT Solutions</small>
                            </h6>
                            <h6>
                                <small>Jan 2014 - Mar 2015</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my expertise carrier here, spent tow years learning and working
                            in various UX/UI aspects. I worked on about 70+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>S</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Senior Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>WebStyle Technologies</small>
                            </h6>
                            <h6>
                                <small>Jan 2016 - Continue..</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I recently joined here, currently working on various development
                            aspects. I already worked on about..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================================
                  MODALS
===========================================-->
<section>
    <!--MODAL ONE-->
    <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">GRADUATION AT ASHTON UNI</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="{{asset('front/images/timeline/demo-gra.jpg')}}">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                        during the game, I noticed that I didn't run as hard as I could, nor did I try
                        to evade my defender and get open. The fact of the matter is that I really did
                        not want to be thrown the ball. I didn't want to be the one at fault if I dropped
                        the ball and the play didn't succeed. I did not want the responsibility of helping
                        the team because I was too afraid of making a mistake. That aspect of my character
                        led the first years of my high school life. All the while, I went to practice.
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL TWO-->
    <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-2">EDUCATION AT Y</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL THREE-->
    <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-3">EDUCATION AT Z</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="{{asset('front/images/timeline/demo-gra.jpg')}}">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL FOUR-->
    <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-4">EXPERIENCE AT Z</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL FIVE-->
    <div class="modal fade" id="myModal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-5">EXPERIENCE AT M</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================================
                  PORTFOLIOS
===========================================-->
<section id="portfolios" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="{{asset('front/images/icons/safe.png')}}" alt="demo">Portfolios</h4>
        </div>
        <div id="portfolios-card" class="row">

            <!--OPTIONS-->
            <ul class="nav nav-tabs">
                <!--ALL CATEGORIES-->
                <li class="active waves-effect list-shuffle"><a id="all-sample" class="active" href="#all"
                                                                data-toggle="tab">ALL</a>
                    <!--CATEGORIES-->
                <li class="waves-effect list-shuffle"><a class="cate" href="#a" data-toggle="tab">LOGO</a></li>
                <li class="waves-effect list-shuffle"><a class="cate" href="#b" data-toggle="tab">DRIBBLE</a></li>
                <li class="waves-effect list-shuffle"><a class="cate" href="#c" data-toggle="tab">WEBSITES</a></li>
            </ul>

            <!--CATEGORIES CONTENT-->
            <div class="tab-content">

                <!--All CATEGORIES-->
                <div id="all"></div>

                <!--CATEGORY 1-->
                <div id="a">

                    <!--CATEGORY CONTENT ONE BIG-->
                    <div class="col-md-4 col-sm-12 col-xs-12 grid big inLeft">
                        <figure class="port-effect-scale">
                            <img src="{{asset('front/images/portfolios/big-1.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Scale</p>
                                <a href="{{asset('front/images/portfolios/big-1.jpg')}}" class="popup-image" data-effect="mfp-3d-unfold">View
                                    more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-scale">
                            <img src="{{asset('front/images/portfolios/portfolio-1.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2><i class="fa fa-play-circle" aria-hidden="true"></i>Lightbox <span> Video</span>
                                </h2>
                                <p>I designed this for a client for his cafe.</p>
                                <a class="popup-vimeo" href="https://vimeo.com/45830194">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/portfolio-2.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Up</p>
                                <a href="{{asset('front/images/portfolios/portfolio-2.jpg')}}" class="popup-image"
                                   data-effect="mfp-move-horizontal">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <!--CATEGORY 2-->
                <div id="b">

                    <!--CATEGORY CONTENT ONE BIG-->
                    <div class="col-md-4 col-sm-12 col-xs-12 grid big inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/big-2.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Effect also available for Lightbox Image Check The Doc</p>
                                <a href="images/portfolios/big-2.jpg" class="popup-image"
                                   data-effect="mfp-move-from-top">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-scale">
                            <img src="{{asset('front/images/portfolios/portfolio-3.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Used latest material design to make this sample</p>
                                <a href="images/portfolios/portfolio-3.jpg" class="popup-image"
                                   data-effect="mfp-3d-unfold">View more</a>
                            </figcaption>
                        </figure>
                    </div>


                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/portfolio-4.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>I designed this for a client for his cafe.</p>
                                <a href="images/portfolios/portfolio-4.jpg" class="popup-image"
                                   data-effect="mfp-with-fade">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <!--CATEGORY 3-->
                <div id="c">
                    <!--CATEGORY CONTENT ONE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/big-1.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/big-2.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/portfolio-1.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT FOUR SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/portfolio-2.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT FIVE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/portfolio-3.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT SIX SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="{{asset('front/images/portfolios/portfolio-4.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!--PORTFOLIOS ADD GALLERY BUTTON-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button id="add-more" class="center-block btn-large waves-effect"><i id="port-add-icon"
                                                                                         class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR API KEY"></script>
<script src="{{asset('front/javascript/vendors/markerwithlabel.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/retina.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/scrollreveal.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/swiper.jquery.min.js')}}"></script>
<script src="{{asset('front/javascript/vendors/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/javascript/custom.js')}}"></script>


</body>
</html>