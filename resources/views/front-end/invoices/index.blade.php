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
						<li><a href="/payments"><i class="sl sl-icon-star"></i> Payments</a></li>
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
					<h4 class="margin-top-0 margin-bottom-30">My Payments</h4>

          @foreach ($invoices as $invoice)
              <tr>
                 <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                 <td>{{ $invoice->total() }}</td>
                 <td><a href="{{ route('downloadInvoice', $invoice->id) }}">Download</a></td>
              </tr>
          @endforeach

					<button class="button margin-top-20 margin-bottom-20">Save Changes</button>
				</div>

			</div>
		</div>

	</div>
</div>



@endsection
