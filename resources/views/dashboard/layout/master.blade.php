<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DeivFit') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('theme/vendor/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('theme/dashboard/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom styles for custom Bootstrap 4 controls-->
    <link href="{{ asset('theme/dashboard/custom_controls/css/styles.css') }}" rel="stylesheet">

    <!-- Custom styles for Training Plan-->
    <link href="{{ asset('theme/training_plan_css/album.css') }}" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/home">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ficha de Usuario">
                <a class="nav-link" href="/user-card">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Ficha de Usuario</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Anamnésis">
                <a class="nav-link" href="/user-diagnosis">
                    <i class="fa fa-fw fa-stethoscope"></i>
                    <span class="nav-link-text">Anamnésis</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tests">
                <a class="nav-link" href="/user-tests">
                    <i class="fa fa-fw fa-thermometer-empty"></i>
                    <span class="nav-link-text">Tests</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tanita">
                    <a class="nav-link" href="/user-tanita">
                        <i class="fa fa-fw fa-balance-scale"></i>
                        <span class="nav-link-text">Tanita</span>
                    </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Plan de Entrenamiento">
                <a class="nav-link" href="/training-plan">
                    <i class="fa fa-fw fa-calculator"></i>
                    <span class="nav-link-text">Crear Plan de Entrenamiento</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ver Plan de Entrenamiento">
                <a class="nav-link" href="/training-plan-template">
                    <i class="fa fa-fw fa-user-times"></i>
                    <span class="nav-link-text">Ver Plan de Entrenamiento</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="#">Navbar</a>
                    </li>
                    <li>
                        <a href="#">Cards</a>
                    </li>
                </ul>
            </li>    
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>

        {{--            <li class="nav-item">--}}
        {{--                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">--}}
        {{--                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>--}}
        {{--            </li>--}}

        <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout
                        </a>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<div class="content-wrapper">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2017</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                    <i class="fa fa-fw fa-sign-out"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('theme/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('theme/vendor/jquery-easing/jquery.easing.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('theme/dashboard/js/sb-admin.min.js') }}"></script>

<!-- Custom scripts for custom Bootstrap 4 controls-->
{{--    <script src="{{ asset('theme/dashboard/custom_controls/js/styles.js') }}"></script>--}}
</body>

</html>
