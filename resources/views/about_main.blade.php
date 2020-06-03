<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<body>

	@include('navbar')

	<div class="about_header">
		
		<div class="about_header_container">

			<div class="about_header_title">
				<p class="title_yellow">About</p>
				<p class="title_white">the action</p>
			</div>

			{{-- <div class="about_header_text">
				<h4>Med Atlantic Ecobonus</h4>
				<p class="text-body">Towards the goal of sustainable freight transport services in the transeuropean transport network.</p>
			</div> --}}

		</div>

	</div>

	<div class="about_container">

		<div class="mae">

			<p>&nbsp;</p>

		</div>

		<div class="text_block"> {{-- --reverse --}}
			
			{{-- <div class="about_image--reverse">
				<img src="/images/about/about-3.jpg" alt="Barco">
			</div> --}}

			<div class="about_text"> {{-- --reverse --}}

				<p><b>Med Atlantic Ecobonus (MAE)</b> Action is a policy study co-financed by the European Union performing a comprehensive analysis on the potential use of eco-incentives schemes to stimulate and develop sustainable freight transport services in the TEN-t, using actual external cost savings as a reference to estimate the intensity of the grants:</p>

				<p>As a result, MAE Action brings the following outcomes:</p>

				<ol>
					<li><b>Common principles and methodology for a common EU approach</b> on eco-incentive schemes, opened to all EU regions and modes of transport.</li>
					<br>
					<li><b>A complete ex-ante analysis for a case-study on Motorways of the Sea</b> as example to prove the impacts of the proposed approach.</li>
				</ol>

			</div>

		</div>

		<div class="text_block">

			<div class="about_text">

				<p>MAE approach to eco-incentives schemes seeks to accelerate the transport market decision on those actions which could contribute most to reducing the external costs of freight transport, particularly those related with carbon emissions, air pollutants and socio-economic impacts.</p>

				<p>To that end, the value of the grants (i.e. eco-incentives) is referred to the actual external costs savings attained through specific actions, for which the Handbook of External Costs in Transport of the European Commission is used as a common reference.</p>

				<p>The study ends at proposal level and is intended to the debate as moving to real implementing Actions needs broad consensus at all levels. If the approach is accepted, MAE approach could be implemented within the next Multiannual Financial Framework 2021-2027.</p>

			</div>

			{{-- <div class="about_image">

				<img src="/images/about/about-2.jpg" alt="Barco">

			</div> --}}
		</div>

	</div>

	@include('contact_about')

	@include('footer')

</body>

</html>