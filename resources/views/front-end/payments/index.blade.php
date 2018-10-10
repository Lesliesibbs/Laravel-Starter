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
						<li><a href="/competition"><i class="sl sl-icon-badge"></i> Competition</a></li>
						<li><a href="/payments" class="current"><i class="sl sl-icon-wallet"></i> Payments</a></li>
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

								@if( $is_subscribed )

										<h1 class="pulse"> Subscriped</h1>

											<img width="180" src="{{ asset('img/success.png') }}" alt="Train Active">

										<h3 class="text-success">
												 Who whoo!your ready to play for a holiday.  <br>
												<small>
														you have the <span class="text-primary">30 day Monthly</span> plan.
												</small>
										</h3>

										@if( $subscription->onGracePeriod() )

												<div class="alert alert-warning">
														<h3 class="modal-title">Subscription expiring at {{ $subscription->ends_at->toFormattedDateString() }}</h3>
												</div>

												<form method="post" action="{{ route('subscriptionResume') }}">
														{{ csrf_field() }}
														<button type="submit" class="button margin-top-20 margin-bottom-20">Resume Subscription</button>
												</form>
												<br>

										@else
												<a href="{{ route('confirmCancellation') }}" class="button margin-top-20 margin-bottom-20">Cancel Subscription</a>
										@endif

								@else

										<img width="180" src="{{ asset('img/no-success.png') }}" alt="Train Disabled">
										<h3 class="text-danger">Your not subscribed  <br>
												<small>To enjoy the full benefits to Holiday4Change you will need to subscribe.</small>
										</h3>

								@endif

								@if( !empty($plans) )

										@if($is_subscribed)
												<p class="lead">You can always cancel your plan.</p>
										@else
												<p class="lead"> </p>
										@endif

										@foreach($plans as $plan)
													<div class="row">
														<div class="panel {{ ( $is_subscribed && $subscription->stripe_plan ==  $plan->id ) ? 'panel-success' :  'panel-primary' }}">
																<div class="panel-body text-center">
																		<h3 class="modal-title">
																				{{ $plan->name }}
																		</h3>

																		<h4>£3 Sign up</h4>
																		<h4>£1.59 per month</h4>
																</div>
																<div class="panel-footer">
																		@if( $is_subscribed &&  ( $subscription->stripe_plan ==  $plan->id ) )
																				<a  class="button margin-top-20 margin-bottom-20">
																						Current Plan
																				</a>
																		@else
																				<a href="{{ route('plan', $plan->id) }}" class="button margin-top-20 margin-bottom-20">
																						Subscribe
																				</a>


																		@endif
																</div>
														</div>
										@endforeach

								@else
										<div class="alert alert-warning">
												<strong>No Plan found on Stripe Account!</strong> <br>
												<p>It could be Network error or you don't have plans defined in Stripe Panel.</p>
										</div>
								@endif
						</div>
					</div>
				</div>

				</div>

			</div>
</div>

	</div>
</div>



@endsection
