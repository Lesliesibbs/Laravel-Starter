@extends('front-end.layout.layout')

@section ('content')


      <div class="clearfix"></div>
      <!-- Header Container / End -->


      <!-- Titlebar
      ================================================== -->
      <div id="titlebar">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">

      				<h2 style="color:white;">Payments</h2>

      				<!-- Breadcrumbs -->
      				<nav id="breadcrumbs">
      					<ul>
      						<li><a href="#" style="color:white;">Home</a></li>
      						<li style="color:white;">Payments</li>
      					</ul>
      				</nav>

      			</div>
      		</div>
      	</div>
      </div>

      <!-- Content
      ================================================== -->
      <div class="container">
      	<div class="row">


          <!-- Widget -->
      		<div class="col-md-4">
      			<div class="sidebar left">

      				<div class="my-account-nav-container">

      					<ul class="my-account-nav">
      						<li class="sub-nav-title">Manage Account</li>
      						<li><a href="/profile"><i class="sl sl-icon-user"></i> My Profile</a></li>
      						<li><a href="/competition" class="current"><i class="sl sl-icon-badge"></i> Competition</a></li>
      						<li><a href="/payments"><i class="sl sl-icon-wallet"></i> Payments</a></li>
      					</ul>

      					<ul class="my-account-nav">
      						<li><a href="/faq"><i class="sl sl-icon-key"></i> FAQ's</a></li>
      						<li><a href="/privacy"><i class="sl sl-icon-notebook"></i> Privacy Policy</a></li>
      						<li><a href="{{ route('logout') }}"
      										onclick="event.preventDefault();
      														 document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      										{{ csrf_field() }}
      								</form></li>
      					</ul>

      				</div>

      			</div>
      		</div>


      		<div class="col-md-8">
      			<div class="row">
      				<div class="panel panel-default">
      						<div class="panel-body text-center">
      								<h4 class="margin-top-0 margin-bottom-30">Competition</h4>

                      <div class="about-author">
                      				<div class="about-description">
                      					<h4>Coming Soon...</h4>

                      				</div>
                      			</div>
      						</div>
      				</div>

      				</div>

      			</div>
      		</div>

      	</div>
      </div>

      @endsection
