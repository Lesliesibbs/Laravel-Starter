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

				<h2 style="color:white;">My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#" style="color:white;">Home</a></li>
						<li style="color:white;">My Profile</li>
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
						<li><a href="my-profile.html" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a href="/competition"><i class="sl sl-icon-star"></i> Competition</a></li>
						<li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Payments</a></li>
						<li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> invoices</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="change-password.html"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="#"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">My Account</h4>

          <form action="{{ route('subscribe') }}" method="POST" id="payment-form">
              {{ csrf_field() }}

              <h3 class="text-center">
                  <span class="payment-errors label label-danger"></span>
              </h3>

              <div class="row">
                  <div class='form-row'>
                      <div class='col-xs-12 form-group card required'>
                          <label class='control-label'>Card Number</label>
                          <input autocomplete='off' value="4242 4242 4242 4242" class='form-control card-number' data-stripe="number" size='20' type='text' required>
                      </div>
                  </div>
                  <div class='form-row'>
                      <div class='col-xs-4 form-group cvc required'>
                          <label class='control-label'>CVC</label>
                          <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' data-stripe="cvc" size='4' type='text' required>
                      </div>
                      <div class='col-xs-4 form-group expiration required'>
                          <label class='control-label'>Expiration Month</label>
                          <input class='form-control card-expiry-month' placeholder='MM' value="{{ date('d') }}" data-stripe="exp_month" size='2' type='text' required>
                      </div>
                      <div class='col-xs-4 form-group expiration required'>
                          <label class='control-label'> Year</label>
                          <input class='form-control card-expiry-year' placeholder='YY' data-stripe="exp_year" size='2'  value="{{ date( 'y', strtotime('+ 4 year')) }}" type='text' required>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="col-md-4">
                          <div class='form-group cvc required'>
                              <label class='control-label'>Coupon Code</label>
                              <input autocomplete='off' class='form-control' placeholder='Coupon code' name="coupon" type='text'>
                          </div>
                      </div>
                  </div>
              </div>
              <input type="hidden" name="plan" value="{{ $plan['id'] }}">
              <input type="submit" class="submit btn btn-success btn-lg btn-block" value="Make $ {{ $plan['amount'] / 100 }} Payment">
          </form>

					<button class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>


			</div>
		</div>

	</div>
</div>



@endsection
