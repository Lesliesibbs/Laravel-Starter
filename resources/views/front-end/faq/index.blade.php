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
						<li><a href="/payments"><i class="sl sl-icon-wallet"></i> Payments</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="/faq" class="current"><i class="sl sl-icon-key"></i> FAQ's</a></li>
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
			<h4 class="headline margin-top-0 margin-bottom-20">FAQ's</h4>

			<!-- Toggles Container -->
			<div class="style-2">

				<!-- Toggle 1 -->
				<div class="toggle-wrap">
					<span class="trigger "><a href="#">How do I know that winner are randomly selected?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>A member of Holiday4change will go out into public and ask 5 individuals to select 2 random  numbers between 1-100 for example. Out of the 10 selected, a 6th member of the public will be asked to select one winner. This will be recorded and put on our website.</p>
					</div>
				</div>

				<!-- Toggle 2 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#"> How to play? <i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	You simply have to be logged onto our competition page at 7pm every first Tuesday of the month. Once you are logged in, you simply have to complete a short ‘Spot the destination’ game for a chance to win.  The competition ends on a Friday at 7pm after 10 days including Saturdays and Sundays. After the competition has ended a winner will be randomly selected and we will contact them accordingly.</p>
					</div>
				</div>

				<!-- Toggle 3 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#"><i class="sl sl-icon-pin"></i>Why do you require my contact information?<i class="sl sl-icon-plus"></i> </a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	This enables us, Holiday4change to contact you when selected as a winner. </p>
					</div>
				</div>

				<!-- Toggle 4 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">How much is it to enter?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	To enter the competition, you are required to have paid the £1.59 monthly fee with the exception of the first month you sign up as well as upfront payments. For example, if you pay for 6 months upfront, then you may enter the competition up to the 6th month. </p>
					</div>
				</div>

				<!-- Toggle 5 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">Can I get the money alternative to the £1000 gift card?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	No, the £1000 gift card has no monetary value. </p>
					</div>
				</div>

				<!-- Toggle 6 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">The holiday I want is less than or more than £1000, can you reimburse me the rest?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	If the holiday you want to go on cost more than a £1000, you will have to pay the remainder out of your own pocket. If the holiday costs less than £1000, Holiday4change will not be able to pay you back the difference in any form. </p>
					</div>
				</div>

				<!-- Toggle 7 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#"> Is the gift card only for me or can I pay for multiple individuals?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	You can use the £1000 Love2shop holidays gift card to pay for multiple individuals as long as it falls within the limit of the card.</p>
					</div>
				</div>

				<!-- Toggle 8 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">Can I use the gift card on holiday companies not listed on the Love2shop holiday website? <i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	No, you can only use the gift card on companies listed on the Love2shop holiday website.</p>
					</div>
				</div>

				<!-- Toggle 9 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">What companies can I use the £1000 gift card on?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>coming soon...</p>
					</div>
				</div>

				<!-- Toggle 10 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">Is the payment secure?<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>-	Payments made to Holiday4change are 100% secure. We use a third party, Stripe to collect payments. Visit www.stripe.com for more info. </p>
					</div>
				</div>

				<!-- Toggle 11 -->
				<div class="toggle-wrap">
					<span class="trigger"><a href="#">How do you contact Holiday4change<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container" style="display: none;">
						<p>In order to contract Holiday4chance. Feel free to contact us using the contact page. Phone number will be coming soon.</p>
					</div>
				</div>



			</div>
			<!-- Toggles Container / End -->

						</div>
				</div>

				</div>

			</div>
		</div>

	</div>
</div>



@endsection
