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
						<li><a href="/profile" ><i class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a href="/competition"><i class="sl sl-icon-badge"></i> Competition</a></li>
						<li><a href="/payments"><i class="sl sl-icon-wallet"></i> Payments</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="/faq"><i class="sl sl-icon-key"></i> FAQ's</a></li>
						<li><a href="/privacy" class="current"><i class="sl sl-icon-notebook"></i> Privacy Policy</a></li>
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
			<h3 class="desc-headline">Prize Competition.</h3>
			<div class="show-more">
								<p>
Gambling Commission – “Price competitions and free draws are free from control under the Gambling Act 2005. They can be run for commercial or private gain and can be used as a fun way of offering prizes and promoting a product” 								</p>

<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>

							</div>

							<h3 class="desc-headline">What is a price competition?</h3>
							<div class="show-more">
												<p>A genuine prize competition is one where the outcome is determined by the application of skill, judgement and knowledge. Under the Act a genuine prize competition is one run in such a way that the organisers believe that the requirement for skill, knowledge or judgement will either:</p>
												<p>
													Deter a significant proportion of those who wish to enter from doing so, or
												</p>
												<p>
													Prevent a significant proportion of those who do enter from winning a prize.
												</p>

											</div>

											<h3 class="desc-headline">Prize competition details </h3>
											<div class="show-more">
																<p>1.	The prize competition shall open every first Tuesday of every month at 7pm and shall close on the 10th day at 7pm, which will always fall on a Friday.</p>
																<p>
																	2.	On our website on that Tuesday at 7pm a puzzle or a photo will be placed requiring our members to either solve the puzzle or use their skills and research for where the photo is from. (country and city)
																</p>
																<p>
																	3.	The first 100 people to answer correctly shall be automatically entered in to the prize draw and given a unique number between 1-100.
																</p>
																<p>
																	4.	Members of the public shall select the winner at random from the numbers between 1-100.
																</p>
																<ul >
					<li>A team from Holiday4change shall go out into the public with a live camera crew, approaching randomly, 5 individuals to select 2 numbers each between 1-100.</li>
					<li>From the 10 numbers selected at random, another new member of the public, shall be chosen to select 3 finalists.</li>
					<li>Lastly, one lucky random individual, shall have the honour of selecting our winner for the prize.</li>
				</ul>
																<p>
																	5.	The winner of the prize will be announced live on Instagram, Snapchat, YouTube and Facebook.
																	The winner(s) of the Holiday4change monthly competition shall each receive a standard Love2Shop Holiday gift card of £1,000.

																</p>


															</div>

															<h3 class="desc-headline">CAP code on Prize Promotions </h3>
															<div class="show-more">
																				<p>How to participate; if there is a free entry route, this must be clearly explained;
In order for people to take part in Holiday4Change prize competition, they are required to be a member. Membership is only applicable on Holiday4Change website. Once a person is on our website, (Holiday4change.co.uk) they will be given the option to register and become a member. Once that individual is a member, every first Tuesday of every month a puzzle or picture will be displayed on our website requiring them to solve it as a way of members to participate. The first 100 to get it right are automatically entered.


The start date; the closing date in certain circumstances (e.g. if targeted at children);
The start date will be every Tuesday of every month (Nov, 4th Dec 2018) Closing date will be the 10th day which will always be on Friday (Nov, 14th Dec 2018)

any proof of purchase requirements – or, where a promotion encourages but does not require purchase, a clear statement that no purchase is necessary and explanation of the free entry alternative;
Holiday4change doesn’t offer a free alternative.
the minimum number and nature of any prizes, and whether a cash alternative can be substituted;
£1,000 Love2shop Holiday gift Card, minimum one gift card a month. No Cash alternative will be given out at any point.

any geographical, personal or technological restrictions (e.g. location, age, or the need to have access to the internet);
Holiday4Change members must be a minimum of 18 years old. In order to enter into the price competition. Furthermore, only UK, Channel Island and Isle of man members can participate. In addition, once a member you will be required to have access to the internet in order to solve the puzzle or answer the question. Failure to do so will result in you not taking part that month, however you will still be charged your membership fee. (£1.59 a month)
any limit on the availability of promotional packs (if this is not obvious);
NO limits
the promoter's full name and business address;
Holiday4Change Ltd.  Unit 1 Tudor Court, Banks Yards, Nottingham, United Kingdom NG6 8FE
any restriction on the number of entries;
1 entry per person a month
how and when winner(s) will be notified, and when they will receive their prizes if this is more than 6 weeks after the closing date;
Confirmation of the prize will be made in writing to the winner (s) via the email address provided by the member and confirmation shall also be made via TEXT message within 5 working days of the results.
how and when the results will be announced;
The winner of the prize will be announced live on Instagram, Snapchat, YouTube and Facebook.
winners' names must be published or available on request, but promoters must not publish excessively detailed personal information;
Holiday4change will only use the first name of the individual who has won, after we have been in touch with the winner then we will seek request to use other information, such as full name, photo etc.
the criteria for judging entries e.g. the most apt and original tie breaker;
referrer to the prize competition details.
if the choice is open to subjective interpretation, then an independent judge (or a panel including one independent member) must be appointed, whose name must be available on request;

who will own the copyright in the competition entries (if relevant);
Holiday4Change will own the copyright of the competition entries.

how entries will be returned (if applicable);
Holiday4Change will not return any entries.
any intention to use winners in any post promotion publicity.
Holiday4change will seek any request from the winner in order to use them for any promotion publicity.
</p>


																			</div>

																			<h3 class="desc-headline">Holiday4Change Prize Competition: TERMS AND CONDITIONS </h3>
																			<div class="show-more">
																								<p>•	Prize competition is open only to the active members of Holiday4change.
•	A one-off fee of £3 is applicable to register an individual as a member, hereafter, a payment of £1.59 per month shall be payable by the member for continuance of membership, via direct debit.
•	The first monthly payment of £1.59 shall be due 28 days from the date of registration.
•	Participation for a member shall be placed on hold if it becomes apparent at any time, that the member is in arrears with their membership payments. If after 60 days the account is still in default, the membership shall be discontinued.
•	Holiday4change reserves the right to award more than one member the Love2Shop Holiday gift card, at which point, the amount on the gift card for the additional winners, shall be discretionary to Holiday4Change.
•	Any additional winners in receipt of the gift shall be chosen on the standard prize competition rules.
•	Holiday4Change’s liability shall be limited to the point after which the prize winner receives their gift voucher.
•	Prize competition details form part of these terms and conditions
•	Entry is open to residents of the UK, Channel Island and Isle of man except employees (and their immediate family members) of Holiday4Change Limited, its printers and agents, the suppliers of the prizes and any other companies associated with the prize competitions.
•	The entrant(s) must be aged 18 or over on the date of registration to Holiday4Change membership.
•	Disclosure of proof of identity and age may be required and must be provided when requested, failure to do this will result in membership termination.
•	Use of a false name or address will result in disqualification, and any prizes won shall be revoked.
•	All entries must be made directly by the person entering the prize competition.
•	Entries made online using methods generated by a script, macro or the use of automated devices will be void.
•	No responsibility can be accepted for entries lost, delayed or corrupted, or due to computer error in transit.
•	The prizes are as stated in the prize competition details, they are not transferable to another individual and no cash or other alternatives will be offered.
•	The winner(s) is (are) responsible for expenses and arrangements not specifically included in the prizes, including any necessary travel documents, passports and visas. Prizes are subject to availability and the prize suppliers' terms and conditions.
•	Holiday4Change reserves the right to amend or alter the terms of the prize competitions and reject entries from entrants not entering into the spirit of the competition.
•	In the event of a prize being unavailable, Holiday4Change reserves the right to offer an alternative prize of equal or greater value.
•	The winner(s) agree(s) to the use of their name, photograph and disclosure of county of residence and will co-operate with any other reasonable requests by Holiday4Change Limited relating to any post-winning publicity.
•	Unless stated otherwise, the winner(s) will be drawn at random from the first 100 correct entries received by the closing date as stated within the promotional material.
•	Reasonable efforts will be made to contact the winner(s). If the winner(s) cannot be contacted or are unable to comply with these terms and conditions, Holiday4Change reserves the right to offer the prize to the next eligible entrant drawn at random, or in the event that the promotion is being judged, Holiday4Change reserves the right to offer the prize to the runner(s)-up selected by the same judges or to withhold the price completely.
•	Reasonable time for the purposes of these terms and conditions shall be 10 business days commencing the first business day after the announcement of the winner.
•	Confirmation of the prize will be made in writing to the winner (s) via the email address provided by the member and confirmation shall also be made via TEXT message within 5 working days of the results.
•	Failure to respond and/or provide an address for delivery, or failure to meet the eligibility requirements may result in forfeiture of the prize, the discretion at this point will lie with Holiday4change.
•	Where applicable, the decision of the judges is final based on the criteria set out in the promotion and no correspondence will be entered into over this decision. Prize Competitions may be modified or withdrawn at any time within the terms and conditions. Upon amendment of the prize competition rules, new terms and conditions will be sent out to every member with highlights over the new changes.
•	In the event of a discrepancy between the standard terms and conditions and the details in the promotional material (or any other terms and conditions provided/referred to at the time of entry or prize competition), the details of the promotional material as reasonably interpreted by Holiday4change shall prevail.
</p>


																							</div>

						</div>
				</div>

				</div>

			</div>
		</div>

	</div>
</div>



@endsection
