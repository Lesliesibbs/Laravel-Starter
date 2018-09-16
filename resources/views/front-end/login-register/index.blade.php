@extends('front-end.layout.layout')

@section ('content')



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2 style="color:#fff">Log In & Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul >
						<li style="color:#fff"><a style="color:#fff" href="index.html">Home</a></li>
						<li style="color:#fff">Log In & Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Log In</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form class="form-horizontal login" role="form" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<p class="form-row form-row-wide">
						<label for="username">Email:
							<i class="im im-icon-Male"></i>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
							@if ($errors->has('email'))
                 <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
                 </span>
              @endif

						</label>
					</p>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<p class="form-row form-row-wide">
						<label for="password">Password:
							<i class="im im-icon-Lock-2"></i>
							<input id="password" type="password" class="form-control" name="password" required>
							@if ($errors->has('password'))
                	<span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
						</label>
					</p>
          </div>
					<p class="form-row">
						<input type="submit" class="button border fw margin-top-10" name="login" value="Login" />
					</p>

					<!-- 	<input type="submit" class="button border margin-top-10" name="login" value="Login" />
				 	<a href="{{ url('profile') }}" class="sign-in"><i class="fa fa-user"></i> Log In</a> -->
					<p class="form-row">
						<label for="rememberme" class="rememberme">
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
						</p>
					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>

				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form class="form-horizontal register" role="form" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}

				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<p class="form-row form-row-wide">
					<label for="username2">Username:
						<i class="im im-icon-Male"></i>
						<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
						@if ($errors->has('name'))
						    <span class="help-block">
						    <strong>{{ $errors->first('name') }}</strong>
								</span>
						@endif
					</label>
				</p>
			</div>

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<p class="form-row form-row-wide">
					<label for="email2">Email Address:
						<i class="im im-icon-Mail"></i>
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
						@if ($errors->has('email'))
						   <span class="help-block">
						   <strong>{{ $errors->first('email') }}</strong>
						   </span>
						@endif
					</label>
				</p>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<p class="form-row form-row-wide">
					<label for="password1">Password:
						<i class="im im-icon-Lock-2"></i>
						<input id="password" type="password" class="form-control" name="password" required>
						@if ($errors->has('password'))
						    <span class="help-block">
						    <strong>{{ $errors->first('password') }}</strong>
						    </span>
						@endif
					</label>
				</p>
			</div>

				<p class="form-row form-row-wide">
					<label for="password2">Repeat Password:
						<i class="im im-icon-Lock-2"></i>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
					</label>
				</p>
				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
				</p>

				</form>
			</div>

		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->


@endsection
