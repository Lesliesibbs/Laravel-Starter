<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="img/favicon.ico">

    <!-- Bootstrap Core CSS -->
      <link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">

      <!-- Custom CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link href="{{ asset('css/lib/calendar2/semantic.ui.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .result-set { margin-top: 1em }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <!-- Main wrapper  -->
    <div id="main-wrapper">

      <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->

                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">


                        <!-- Profile -->
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic margin-right" />{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="{{ route('admin-profile') }}"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                      @if (Auth::check())
                            @can('view_users')
                        <li class="nav-devider"></li>
                        <li class="nav-label">Admin</li>
                        <li> <a href="{{ route('admin') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        @can('view_users')
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li "{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ route('users.index') }}">Users </a></li>
                                <li class="{{ Request::is('roles*') ? 'active' : '' }}"><a href="{{ route('roles.index') }}">Roles </a></li>
                            </ul>
                        </li>
                        @endcan
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-trophy"></i><span class="hide-menu">Competition</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="competition.html">Create</a></li>
                              <li><a href="scoreboard.html">Scoreboard</a></li>
                          </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html">Compose</a></li>
                                <li><a href="email-read.html">Read</a></li>
                                <li><a href="email-inbox.html">Inbox</a></li>
                            </ul>
                        </li>

                        @endcan
                        @endif
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->

        <div class="page-wrapper">
            <div id="flash-msg">
                @include('flash::message')
            </div>
            @yield('content')
        </div>

  </div>

    <!-- Scripts -->
    <!-- All Jquery -->

      @stack('scripts')
  <script src="{{ asset('js/lib/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('js/lib/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
  <!--Menu sidebar -->
  <script src="{{ asset('js/sidebarmenu.js') }}"></script>
  <!--stickey kit -->
  <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
  <!--Custom JavaScript -->


  <!-- Amchart -->
   <script src="{{ asset('js/lib/morris-chart/raphael-min.js') }}"></script>
  <script src="{{ asset('js/lib/morris-chart/morris.js') }}"></script>
  <script src="{{ asset('js/lib/morris-chart/dashboard1-init.js') }}"></script>

<!-- Flot Chart -->
      <script src="{{ asset('js/lib/flot-chart/jquery.flot.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/jquery.flot.tooltip.min.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/jquery.flot.resize.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/jquery.flot.time.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/jquery.flot.pie.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/curvedLines.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/excanvas.min.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/jquery.flot.spline.js') }}"></script>
       <script src="{{ asset('js/lib/flot-chart/flot/jquery.flot.symbol.js') }}"></script>


<script src="{{ asset('js/lib/calendar-2/moment.latest.min.js') }}"></script>
  <!-- scripit init-->
  <script src="{{ asset('js/lib/calendar-2/semantic.ui.min.js') }}"></script>
  <!-- scripit init-->
  <script src="{{ asset('js/lib/calendar-2/prism.min.js') }}"></script>
  <!-- scripit init-->
  <script src="{{ asset('js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
  <!-- scripit init-->
  <script src="{{ asset('js/lib/calendar-2/pignose.init.js') }}"></script>

  <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>

  <!-- scripit init-->

  <script src="{{ asset('js/scripts.js') }}"></script>

    @stack('scripts')

    <script>
        $(function () {
            // flash auto hide
            $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
        })
    </script>
</body>
</html>
