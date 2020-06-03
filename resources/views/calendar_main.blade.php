<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

</head>

<body>

	<div class="bg_right_events"></div>
	<div class="bg_left_events"></div>

	@include('navbar')

	<div class="calendar_header">
		
		<div class="calendar_header_container">

			<div class="calendar_header_title">
				<p class="title_yellow">Latest</p>
				<p class="title_white">Events</p>
			</div>

			{{-- <div class="calendar_header_text">
				<h4>Med Atlantic Ecobonus</h4>
				<p class="text-body">Towards the goal of sustainable freight transport services in the transeuropean transport network.</p>
			</div> --}}

		</div>

	</div>

	<div class="calendar_container">

		<div class="mae">

			<p>&nbsp;</p>

		</div>		

		{{-- <p class="calendar_intro">A number of events, workshops and meetings have been carried out in 2018 as part of the consensus and dissemination activities of the MAE Action. Further events related to MAE Action will be announced in this section.</p> --}}

			<div class="events_container">

				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-7.jpg" alt="">
					<div class="event_date">
						<h1>26</h1>
						<p>NOVEMBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>Seminar on Financing the maritime sector and MoS</b></p>
						<p>2019</p>
						<p>Rome</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_8"> --}}
				</div>
			<!--	
				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-8.jpg" alt="">
					<div class="event_date">
						<h1>17</h1>
						<p>DECEMBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>Open Webinar</b></p>
						<p>2018</p>
					</div>
					<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_1">
				</div>

				<div class="extra_info" id="info_1">
					<iframe style="display: block; margin: 0 auto" width="560" height="315" src="https://www.youtube.com/embed/-qcJgUUV1XU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					{{-- <button class="btn">Date to be confirmed</button> --}}

					{{-- Rellenar y descomentar cuando se sepa la fecha del evento --}}
					{{-- <div class="extra_info" id="info_2">	
						<p>29 October 2018</p>
						<p>Madrid</p>
						<p>Antonio Gongora.</p>
						<p>agongora@puertos.es</p>
						<div title="Add to Calendar" class="addeventatc button_calendar">
						    Add to Calendar
						    <span class="start">10/29/2018</span>
						    <span class="all_day_event">true</span>
						    <span class="timezone">Europe/Madrid</span>
						    <span class="title">Informing and getting feedback on the MAE approach from local stakeholders</span>
						    <span class="description">29 October 2018 - Madrid - Antonio Gongora - agongora@puertos.es</span>
						    <span class="location">Lisbon, Portugal</span>
						</div>
					</div> --}}

				</div>

				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-7.jpg" alt="">
					<div class="event_date">
						<h1>04</h1>
						<p>DECEMBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>EU PARLIAMENT EVENT</b></p>
						<p>2018</p>
						<p>Brussels</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_8"> --}}
				</div>

				<div class="extra_info" id="info_8">
					<ul>
						<li>To present different regional perspectives to the EP Transport Committee regarding the incentivization of greener and modal shift towards sustainable freight transport services (the MAE study apporach amongst them).</li>
					</ul>				
					<p>To be confirmed December 2018</p>
					<button class="btn">Date to be confirmed</button>

					{{-- Rellenar y descomentar cuando se sepa la fecha del evento --}}
					{{-- <div class="extra_info" id="info_2">	
						<p>29 October 2018</p>
						<p>Madrid</p>
						<p>Antonio Gongora.</p>
						<p>agongora@puertos.es</p>
						<div title="Add to Calendar" class="addeventatc button_calendar">
						    Add to Calendar
						    <span class="start">10/29/2018</span>
						    <span class="all_day_event">true</span>
						    <span class="timezone">Europe/Madrid</span>
						    <span class="title">Informing and getting feedback on the MAE approach from local stakeholders</span>
						    <span class="description">29 October 2018 - Madrid - Antonio Gongora - agongora@puertos.es</span>
						    <span class="location">Lisbon, Portugal</span>
						</div>
					</div> --}}
				</div>

				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-6.jpg" alt="">
					<div class="event_date">
						<h1>29</h1>
						<p>NOVEMBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>MAE FINAL EVENT</b></p>
						<p>2018</p>
						<p>Lisbon</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_7"> --}}
				</div>

				<div class="extra_info" id="info_7">
					<ul>
						<li>Framed by the actual regulatory evolution at EU and international level, the Med Atlantic Ecobonus Action is delivering a comprehensive analysis on the potential use of eco-incentives measures to stimulate sustainable freight transport services, both in the current TEN-T framework as well as in the future Connecting Europe Facility (CEF) mechanism for the 2021-2027 period, through a common approach that would be valid to all EU regions and all modes of transport.</li>
					</ul>				
					<p>29 November 2018</p>
					<p>To register: mae.project@puertos.es</p>
					<button class="button_agenda"><a href="{{ route('downloadagenda') }}">View Agenda</a></button>
					<br>
					<br>
					<div title="Add to Calendar" class="addeventatc button_calendar">
					    Add to Calendar
					    <span class="start">11/29/2018</span>
					    <span class="all_day_event">true</span>
					    <span class="timezone">Europe/Lisbon</span>
					    <span class="title">MAE FINAL EVENT</span>
					    <span class="description">Framed by the actual regulatory evolution at EU and international level, the Med Atlantic Ecobonus Action is delivering a comprehensive analysis on the potential use of eco-incentives measures to stimulate sustainable freight transport services, both in the current TEN-T framework as well as in the future Connecting Europe Facility (CEF) mechanism for the 2021-2027 period, through a common approach that would be valid to all EU regions and all modes of transport. To register please contact: mae.project@puertos.es</span>
					    <span class="location">Lisbon, Portugal</span>
					</div>
				</div>


				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-5.jpg" alt="">
					<div class="event_date">
						<h1>09</h1>
						<p>NOVEMBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>Consensus Workshop. Industry stakeholders</b></p>
						<p>2018</p>
						<p>Brussels</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_6"> --}}
				</div>

				<div class="extra_info" id="info_6">
					<ul>
						<li>To present and confront the external costs calculator (mainly assumptions, values, etc. used).</li>
						<li>To assess the potential scientific/technical consensus towards an EU external cost calculator based on the MAE approach.</li>
					</ul>				
					<p>09 November 2018</p>
					<p>To register please contact: mae.project@puertos.es</p>
					<div title="Add to Calendar" class="addeventatc button_calendar">
					    Add to Calendar
					    <span class="start">11/09/2018</span>
					    <span class="all_day_event">true</span>
					    <span class="timezone">Europe/Brussels</span>
					    <span class="title">Consensus Workshop. Industry stakeholders</span>
					    <span class="description">To register please contact: mae.project@puertos.es</span>
					    <span class="location">Brussels, Belgium</span>
					</div>
				</div>

				
				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-5.jpg" alt="">
					<div class="event_date">
						<h1>08</h1>
						<p>NOVEMBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>Consensus Workshop. Industry stakeholders</b></p>
						<p>2018</p>
						<p>Brussels</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_5"> --}}
				</div>

				<div class="extra_info" id="info_5">
					<ul>
						<li>To present and confront the principles of the new approach (maritime concept).</li>
						<li>To present and confront the tools, the assumptions and the results of the ex-ante analysis, as example for the med atlantic MoS.</li>
						<li>To asses the consensus reached for further implementation based on the MAE approach.</li>
						<li>To find a common ground to further exploit the concept to other modes in another event (EP / Webinar / others).</li>
					</ul>				
					<p>08 November 2018</p>
					<p>To register please contact: mae.project@puertos.es</p>
					<div title="Add to Calendar" class="addeventatc button_calendar">
					    Add to Calendar
					    <span class="start">11/08/2018</span>
					    <span class="all_day_event">true</span>
					    <span class="timezone">Europe/Brussels</span>
					    <span class="title">Consensus Workshop. Industry stakeholders</span>
					    <span class="description">To register please contact: mae.project@puertos.es</span>
					    <span class="location">Brussels, Belgium</span>
					</div>
				</div>


				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-2.jpg" alt="">
					<div class="event_date">
						<h1>28</h1>
						<p>OCTOBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>National Workshop</b></p>
						<p>2018</p>
						<p>Madrid</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_2"> --}}
				</div>

				<div class="extra_info" id="info_2">	
					<p>29 October 2018</p>
					<p>Madrid</p>
					<p>Antonio Gongora.</p>
					<p>agongora@puertos.es</p>
					<div title="Add to Calendar" class="addeventatc button_calendar">
					    Add to Calendar
					    <span class="start">10/29/2018</span>
					    <span class="all_day_event">true</span>
					    <span class="timezone">Europe/Madrid</span>
					    <span class="title">Informing and getting feedback on the MAE approach from local stakeholders</span>
					    <span class="description">29 October 2018 - Madrid - Antonio Gongora - agongora@puertos.es</span>
					    <span class="location">Madrid, Spain</span>
					</div>
				</div>


				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-1.jpg" alt="">
					<div class="event_date">
						<h1>28</h1>
						<p>OCTOBER</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>National Workshop</b></p>
						<p>2018</p>
						<p>Lisbon</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_1"> --}}
				</div>

				<div class="extra_info" id="info_1">	
					<p>28 October 2018</p>
					<p>Lisbon</p>
					<p>Hélder Ribeiro Dias Cristóvão.</p>
					<p>hcristovao@imt-ip.pt</p>
					<div title="Add to Calendar" class="addeventatc button_calendar">
					    Add to Calendar
					    <span class="start">10/28/2018</span>
					    <span class="all_day_event">true</span>
					    <span class="timezone">Europe/Lisbon</span>
					    <span class="title">Informing and getting feedback on the MAE approach from local stakeholders</span>
					    <span class="description">28 October 2018 - Lisbon - Hélder Ribeiro Dias Cristóvão - hcristovao@imt-ip.pt</span>
					    <span class="location">Lisbon, Portugal</span>
					</div>
				</div>	




				<div class="event">
					<img class="hide_smartphone" src="/images/events/event-1.jpg" alt="">
					<div class="event_date">
						<h1>7</h1>
						<p>MARCH</p>
					</div>
					<div class="event_info">
						<p class="event_title"><b>Atlantic Corridor WG meeting on ports and multimodal terminals</b></p>
						<p>2018</p>
						<p>Régua (Douro)</p>
					</div>
					{{-- <img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_1"> --}}
				</div>

				<div class="extra_info" id="info_1">	
					<p>7 March 2019</p>
					<p>Régua (Douro)</p>
					<div title="Add to Calendar" class="addeventatc button_calendar">
					    Add to Calendar
					    <span class="start">10/28/2018</span>
					    <span class="all_day_event">true</span>
					    <span class="timezone">Europe/Lisbon</span>
					    <span class="title">Informing and getting feedback on the MAE approach from local stakeholders</span>
					    <span class="description">28 October 2018 - Lisbon - Hélder Ribeiro Dias Cristóvão - hcristovao@imt-ip.pt</span>
					    <span class="location">Lisbon, Portugal</span>
					</div>
				</div>			

			</div> -->

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