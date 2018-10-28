<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<body>

	@include('navbar')

	<div class="calendar_header">
		
		<div class="calendar_header_container">

			<div class="calendar_header_title">
				<p class="title_yellow">Events</p>
				<p class="title_white">& news</p>
			</div>

			<div class="calendar_header_text">
				<h4>Med Atlantic Ecobonus</h4>
				<p class="text-body">Towards the goal of sustainable freight transport services in the transeuropean transport network.</p>
			</div>

		</div>

	</div>

	<div class="calendar_container">

		<div class="mae">

		<p>MED ATLANTIC ECOBONUS</p>

		</div>
		
		<h1>CALENDARIO</h1>

	</div>

	@include('contact')

	@include('footer')

</body>

</html>