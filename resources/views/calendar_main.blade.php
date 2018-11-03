<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

	<div class="bg_right_events"></div>
	<div class="bg_left_events"></div>

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
		
		<div class="events_container">
			
			<div class="event">
				<img src="/images/events/event-1.jpg" alt="">
				<div class="event_date">
					<h1>28</h1>
					<p>OCTOBER</p>
				</div>
				<div class="event_info">
					<p><b>ESTE ES UN EJEMPLO DE EVENTO</b></p>
					<p>SUBTITULO DEL EVENTO</p>
				</div>
				<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_1">
			</div>

			<div class="extra_info" id="info_1">
				<ul>
					<li>To present and confront the external costs calculator (mainly assumptions, values, etc. used).</li>
					<li>To assess the potential scientific/technical consensus towards an EU external cost calculator based on the MAE approach.</li>
				</ul>				
				<p>28 October 2018</p>
				<p>Lisbon, Hélder Ribeiro Dias Cristóvão.</p>
				<p>To register: mae.project@puertos.es</p>
				<button class="btn">ADD TO CALENDAR</button>
			</div>






			<div class="event">
				<img src="/images/events/event-1.jpg" alt="">
				<div class="event_date">
					<h1>28</h1>
					<p>OCTOBER</p>
				</div>
				<div class="event_info">
					<p><b>ESTE ES UN EJEMPLO DE EVENTO</b></p>
					<p>SUBTITULO DEL EVENTO</p>
				</div>
				<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_2">
			</div>

			<div class="extra_info" id="info_2">
				<ul>
					<li>To present and confront the external costs calculator (mainly assumptions, values, etc. used).</li>
					<li>To assess the potential scientific/technical consensus towards an EU external cost calculator based on the MAE approach.</li>
				</ul>				
				<p>28 October 2018</p>
				<p>Lisbon, Hélder Ribeiro Dias Cristóvão.</p>
				<p>To register: mae.project@puertos.es</p>
				<button class="btn">ADD TO CALENDAR</button>
			</div>








			<div class="event">
				<img src="/images/events/event-1.jpg" alt="">
				<div class="event_date">
					<h1>28</h1>
					<p>OCTOBER</p>
				</div>
				<div class="event_info">
					<p><b>ESTE ES UN EJEMPLO DE EVENTO</b></p>
					<p>SUBTITULO DEL EVENTO</p>
				</div>
				<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_3">
			</div>

			<div class="extra_info" id="info_3">
				<ul>
					<li>To present and confront the external costs calculator (mainly assumptions, values, etc. used).</li>
					<li>To assess the potential scientific/technical consensus towards an EU external cost calculator based on the MAE approach.</li>
				</ul>				
				<p>28 October 2018</p>
				<p>Lisbon, Hélder Ribeiro Dias Cristóvão.</p>
				<p>To register: mae.project@puertos.es</p>
				<button class="btn">ADD TO CALENDAR</button>
			</div>


			


		</div>

	</div>

	<style>
		.active {
			background-color: #12162B !important;
			color: white;
		}
		.invert {
			transform: rotate(180deg);
		}
	</style>

	@include('contact')

	@include('footer')

	<script>		

	 $('.arrow_down').each(function(index){
	 	$(this).on('click', function(){
	 		$(this).parent().parent().find('#info_' + (index + 1)).slideToggle('slow');
	 		$(this).parent().toggleClass('active');
	 		$(this).toggleClass('invert');
	 	});
	 });
	</script>

</body>

</html>