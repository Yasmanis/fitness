<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Laravel</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{ asset('theme/vendor/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="{{ asset('theme/css/agency.css') }}" rel="stylesheet">
        <!--  Animate CSS-->
        <link href="{{ asset('theme/aos/aos.css') }}" rel="stylesheet">

    </head>

    <body id="page-top">
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">DeivFit</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#page-top">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#who-we-are">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#methodology">Metodología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Profile</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text" data-aos="flip-left" data-aos-delay="400" data-aos-duration="400" data-aos-easing="ease-in-out" data-aos-once="true">
                <div class="intro-lead-in">Bienvenido!</div>
                <div class="intro-heading text-uppercase">Un placer conocerte</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger rounded-edges" href="#services">Leer más</a>
            </div>
        </div>
    </header>

    <!-- Who we are -->
    <section id="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="200" data-aos-easing="ease-in-out" data-aos-once="true">
                    <h2 class="section-heading text-uppercase">¿Quiénes Somos?</h2>
                    <h3 class="section-subheading text-muted">DeivFit. Tu salud y confianza, en nuestras manos.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-7 my-auto" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{'theme/img/team/2.jpg'}}" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology -->
    <section id="methodology">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="200" data-aos-easing="ease-in-out" data-aos-once="true">
                    <h2 class="section-heading text-uppercase">Metodología</h2>
                    <h3 class="section-subheading text-muted">DeivFit. Una manera diferente de entrenar.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-7 my-auto" data-aos="fade-up-right" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead text-justify">La base de nuestra metodología es LA CIENCIA. Todo lo que hacemos esta avalado científicamente, no podía ser menos ya que venimos del "mundo de la investigación".
                        Los entrenamientos no son baterías de ejercicios con el objetivo de sudar y "quemar algunas calorías". Son procesos estructurados, programados individualmente acorde a unos objetivos. Por lo que nada debe ser aleatorio.
                        Creemos en el usuario activo, participativo y con ganas de aprender a entrenar. Nos gusta que pregunten, que tengan dudas y que participen en este proceso.
                        El continuo aprendizaje de los dos, es la base de una relación entre ambos.</p>
                </div>
                <div class="col-md-5" data-aos="fade-up-left" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img class="mx-auto rounded-circle max-size-95" src="{{'theme/img/running1.jpg'}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="200" data-aos-easing="ease-in-out" data-aos-once="true">
                    <h2 class="section-heading text-uppercase">Nuestros Servicios</h2>
                    <h3 class="section-subheading text-muted">Alcanza tus metas con nosotros. Nos adaptamos a tus necesidades.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-male fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Entrenamiento personal</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-home fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Entrenamiento personal a domicilio</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Entrenamiento Online</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Servicio de Dietista/Nutricionista</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" class="col-md-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-users fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Entrenamiento personalizado en grupos reducidos</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" class="col-md-4" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Otros Servicios</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="200" data-aos-easing="ease-in-out" data-aos-once="true">
                    <h2 class="section-heading text-uppercase">Contáctenos</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center" data-aos="flip-left" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="true">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <span class="copyright">Copyright &copy; DeivFit Website 2019. All Rights Reserved.</span>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>




    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('theme/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('theme/vendor/jquery-easing/jquery.easing.js') }}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('theme/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('theme/js/contact_me.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('theme/js/agency.min.js') }}"></script>

    <script src="{{ asset('theme/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>

    </body>
</html>
