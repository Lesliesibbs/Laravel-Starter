<!-- Header Container
================================================== -->
<header id="header-container">




  <!-- Header -->
  <div id="header">
    <div class="container">

      <!-- Left Side Content -->
      <div class="left-side">

        <!-- Logo -->
        <div id="logo">
          <a href="index.html"><img src="img/logo.png" alt=""></a>
        </div>


        <!-- Mobile Navigation -->
        <div class="mmenu-trigger">
          <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>


        <!-- Main Navigation -->
        <nav id="navigation" class="style-1">
          <ul id="responsive">

            <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a>
            </li>



                <li><a href="https://www.highstreetvouchers.com/gifts/love2shop-holiday-gift-cards">Love2Shop</a>

                    </li>

                    <li class="{{ Request::is('about') ? 'current' : '' }}"><a href="{{ url('about') }}">About Us</a>

                        </li>

            <li class="{{ Request::is('contact') ? 'current' : '' }}"><a href="{{ url('contact') }}">Contact Us</a>

            </li>

          </ul>
        </nav>
        <div class="clearfix"></div>
        <!-- Main Navigation / End -->

      </div>
      <!-- Left Side Content / End -->

      <!-- Right Side Content / End -->
      <div class="right-side">
        <!-- Right Side Content / End -->
        @guest
          <!-- Header Widget -->
          <div class="header-widget">
            <a href="{{ url('login-register') }}" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>

          </div>

          @else

          <!-- User Menu -->
                    <div class="user-menu">
                        <div class="user-name"><span></span>Hi, {{ Auth::user()->name }}</div>
                        <ul>
                            <li><a href="/profile"><i class="sl sl-icon-user"></i> My Profile</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
                        </ul>
                    </div>
                </div>

          @endguest
          <!-- Header Widget / End -->

        <!-- Right Side Content / End -->

        <!-- Header Widget -->
        <!-- User Menu -->
        <!--
      <div class="container">
      <div class="row">
        <div class="user-menu-container">
          <div class="user-menu">
            <div class="user-name"><span><img src="images/agent-03.jpg" alt=""></span>Hi, John!</div>
            <ul>
              <li><a href="my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
              <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
              <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
              <li><a href="index.html"><i class="sl sl-icon-power"></i> Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

      </div>
      <!-- Right Side Content / End -->

    </div>
  </div>
  <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
