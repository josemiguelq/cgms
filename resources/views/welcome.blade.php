<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <meta name="WEBSITE-DESCRIPTION" content="Ciclo Grande - Bicicletas compartilhadas">
            <title>Ciclo Grande</title> 
            
            <link rel="shortcut icon" href="landing/images/favicon.ico">

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:500,600|Roboto:400,500" rel="stylesheet">

            <!-- pe-icon-7 Css-->
            <link rel="stylesheet" type="text/css" href="landing/css/pe-icon-7-stroke.css" />
            <!-- pe-icon-social Css-->
            <link rel="stylesheet" type="text/css" href="landing/css/pe-icon-social.css" />

            <!-- Waves effect Css-->
            <link rel="stylesheet" type="text/css" href="landing/css/waves.css" />

            <!-- Bootstrap Css-->
            <link rel="stylesheet" type="text/css" href="landing/css/bootstrap.min.css" />


            <!-- Magnific-popup -->
            <link rel="stylesheet" href="landing/css/magnific-popup.css">

            <!-- Custom Css -->
            <link rel="stylesheet" type="text/css" href="landing/css/style.css" />

      


    </head>
     <body data-spy="scroll" data-target="#data-scroll"  data-hijacking="on" data-animation="scaleDown">      
            
            <!-- Navbar -->
            <div class="navbar navbar-custom navbar-white navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="pe-7s-menu"></i>
                        </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="index.html">
                        Ciclo Grande
                    </a>
                    </div>
                    <!-- end navbar-header -->

                    <!-- menu -->
                    <div class="navbar-collapse collapse" id="data-scroll">
                        <ul class="nav navbar-nav navbar-center">
                            <li class="active">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#services">Vantagens</a>
                            </li>
                            
                            <li>
                                <a href="#contact">Contato</a>
                            </li>
                             @if (Route::has('login'))
                            
                                @auth
                                <li>
                                    <a href="{{ url('/home') }}">Home</a>
                                    </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li><a href="{{ route('register') }}">Register</a>
                                    </li>
                                @endauth
                            </li>
                        @endif
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <button type="button" class="btn btn-custom navbar-btn btn-rounded waves-effect waves-light">Login</button>
                            </li>
                        </ul>
                    </div>
                    <!--/Menu -->
                </div><!-- end container -->
            </div>
            <!--END NAVBAR-->


        <section class="bg-images home-half" id="home">
                <div class="bg-overlay"></div>
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row vertical-content">
                                <div class="col-md-7 text-white text-left margin-t-30">
                                    <h1 class="home-title">E aí, vamos de bike?</h1>
                                    <p class="padding-t-15 home-desc home-subtitle-width-100">Está chegando na Cidade Morena as bicicletas compartilhadas. Agora você vai poder pegar uma bicicleta e sair pedalando pela cidade e devolver no ponto mais próximo de você.</p>
                                    <p class="padding-t-15 home-desc home-subtitle-width-100">Imagina poder ir para o trabalho de bicicleta sem se preocupar onde vai guardar a bicicleta. Seja um dos primeiros, solicite seu convite já!</p>
                                    <a href="#" class="btn btn-custom margin-t-30 waves-effect waves-light">Quero meu convite!</a>
                                </div>
                                <div class="col-md-4 col-md-offset-1 margin-t-30">
                                    <div class="home-registration-form bg-white">
                                        <h4 class="form-heading text-center">Receba um convite</h4>
                                        <form class="registration-form" id="contact-form" method="POST" action="{{ route('new_invitation') }}">
                                            <input type="text" name="name" id="name" class="form-control registration-input-box" placeholder="Nome">
                                            <input type="email" name="email" id="email" class="form-control registration-input-box" placeholder="Email">
                                            <input type="" name="phone" class="form-control registration-input-box" rows="4" placeholder="Celular"></input>
                                            <button class="btn btn-custom home-btn-width waves-effect waves-light text-uppercase">Receber um convite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END HOME-->


            <!--START SERVICES-->
            <section class="section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="section-title text-center">Vantagens</h1>
                            <div class="section-title-border margin-t-20"></div>
                            <p class="section-subtitle text-muted text-center padding-t-30 font-secondary">Etiam sed.Interdum consequat proin vestibulum class at a euismod mus luctus quam.Lorem ipsum dolor sit amet, consectetur adipisicing eli.class at a euismod mus luctus quam.</p>
                        </div>
                    </div>
                    <div class="row margin-t-30">
                        <div class="col-md-4 margin-t-20">
                            <div class="services-box text-center">
                                <i class="pe-7s-diamond text-custom"></i>
                                <h4 class="padding-t-15">Saúde</h4>
                                <p class="padding-t-15 text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                            </div>
                        </div>
                        <div class="col-md-4 margin-t-20">
                            <div class="services-box text-center">
                                <i class="pe-7s-display2 text-custom"></i>
                                <h4 class="padding-t-15">Economia</h4>
                                <p class="padding-t-15 text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                            </div>
                        </div>
                        <div class="col-md-4 margin-t-20">
                            <div class="services-box text-center">
                                <i class="pe-7s-piggy text-custom"></i>
                                <h4 class="padding-t-15">Mobilidade</h4>
                                <p class="padding-t-15 text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </section>
            <!--START SERVICES-->


            <!--START WEBSITE-DESCRIPTION-->
            <section class="section bg-web-desc">
                <div class="bg-overlay overlay-opacity-low"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="text-white">Simplifique sua vida, vá de bike</h2>
                            <p class="padding-t-15 home-desc">Largue o carro e venha ser mais mais saudável.</p>
                            <a href="#" class="btn btn-custom margin-t-30 waves-effect waves-light">Receber convite </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--END WEBSITE-DESCRIPTION-->

            
<!--END ABOUT US-->
            <section class="section" id="features">
                <div class="container">
                    <div class="row vertical-content">
                        <div class="col-md-5">
                            <div class="features-box">
                                <h2 class="">Venha pedalar por Campo Grande</h2>
                                <p class="text-muted web-desc">Campo grande tem mais de 79 km de ciclovias.....</p>
                                <ul class="text-muted list-unstyled margin-t-30 features-item-list">
                                    <li class="">Melhora o condicionamento físico.</li>
                                   
                                </ul>
                                <a href="#" class="btn btn-custom margin-t-30 waves-effect waves-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="features-img features-right">
                                <img src="landing/images/macbook.jpg" alt="macbook image" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END ABOUT US-->




            <!--START PROCESS-->
            <section class="section bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="section-title text-center">Como funciona</h1>
                            <div class="section-title-border margin-t-20"></div>
                            <p class="section-subtitle text-muted text-center font-secondary padding-t-30">Sem complicações para você pegar a bike.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-center process-left-icon-1">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                        <div class="col-md-6 text-center process-left-icon-2">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                    </div>                      
                    <div class="row margin-t-50">
                        <div class="col-md-4 plan-line">
                            <div class="text-center process-box">
                                <i class="pe-7s-pen text-custom"></i>
                                <h4 class="padding-t-15">Encontre o ponto mais perto</h4>
                                <p class="text-muted">Faça login na plataforma e escolha uma bicicleta.</p>
                            </div>
                        </div>
                        <div class="col-md-4 plan-line">
                            <div class="text-center process-box">
                                <i class="pe-7s-id text-custom"></i>
                                <h4 class="padding-t-15">Saia pedalando por aí</h4>
                                <p class="text-muted">São mais de Xkm para você usar.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center process-box">
                                <i class="pe-7s-target text-custom"></i>
                                <h4 class="padding-t-15">Devolva no ponto mais próximo</h4>
                                <p class="text-muted">Depois de usar é só travar a bicicleta.</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-custom waves-light waves-effect margin-t-50">Solicite um convite</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--END PROCESS-->

           


            <!--START GET STARTED-->
            <section class="section bg-started">
                <div class="bg-overlay bg-overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h1 class="get-started-title text-white text-capitalize">Let's Get Started</h1>

                            <p class="section-subtitle font-secondary text-white text-center padding-t-30">Etiam sed.Interdum consequat proin vestibulum class at a euismod mus luctus quam.Lorem ipsum dolor sit amet, consectetur adipisicing eli.class at a euismod mus luctus quam.</p>
                            <a href="#" class="btn btn-bg-white waves-effect margin-t-20">Get Started</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--END GET STARTED-->


            <!--START SOCIAL-->
            <section class="cta bg-dark" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline social margin-t-20">
                                <li><a href="" class="social-icon"><i class="pe-so-facebook"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-twitter"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-linkedin"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-google-plus"></i></a></li>
                                <li><a href="" class="social-icon"><i class="pe-so-youtube-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-white margin-t-30">
                            <p class="margin-b-0 contact-title"><i class="pe-7s-call"></i> &nbsp;+55 67 9999 9999</p>
                        </div>
                        <div class="col-md-3 text-white margin-t-30 text-right">
                            <p class="contact-title"><i class="pe-7s-mail-open"></i>&nbsp; Support@ciclogrande.com</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--END SOCIAL-->

       

            <!--START FOOTER ALTER-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-alt-border"></div>
                        <div class="footer-alt">
                            <div class="pull-left float-none">
                                <p class="copy-rights text-muted">2017 © </p>
                            </div>
                            <div class="pull-right float-none">
                                <img src="images/payment.png" alt="payment-img" height="36" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--START FOOTER ALTER-->


            <!-- JAVASCRIPTS -->
            <script src="landing/js/jquery-2.1.4.min.js"></script>
            <script src="landing/js/bootstrap.min.js"></script>
            <!-- Sticky Header -->
            <script src="landing/js/jquery.sticky.js"></script>
            <!-- Waves Effect js -->
            <script src="landing/js/waves.min.js"></script>
            <!-- Jquery stellar for Parallax -->                                                      
            <script type="text/javascript" src="landing/js/parallax.min.js"></script>
            <!-- Magnific Popup -->
            <script type="text/javascript" src="landing/js/jquery.magnific-popup.min.js"></script>
            <!-- Jquery easing -->                                                      
            <script type="text/javascript" src="landing/js/jquery.easing.1.3.min.js"></script>    
            <script src="landing/js/app.js"></script>

      </body>
</html>
