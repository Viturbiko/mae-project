
<div class="container_calendar">

	<div class="bg_right_calendar"></div>
	<div class="bg_left_calendar"></div>

	<div class="content_calendar">

		<img src="/images/icon-events.png" alt="Calendar_icon">

		<h1>Events & Information</h1>

		<hr align="left" width="5%">

		<div class="calendar">
			<div class="calendar_days">

				<div class="event_day" onmouseover="changeImage('lisbon.jpg', 'THE &quot;MED ATLANTIC ECOBONUS&quot; <br> PROJECT FINAL EVENT')">
					<p>November 2018</p>
					<h1>29</h1>
					<hr align="center" width="50%">
					<p style="font-weight: bold; font-size: 18px;">Lisbon Final Event</p>
				</div>

				@foreach($events as $event)

					<div class="event_day" onmouseover="changeImage('{{$event->image}}', '{{$event->image_text}}')">
						<p>{{Carbon\Carbon::parse($event->event_date)->format('F')}} {{Carbon\Carbon::parse($event->event_date)->year}}</p>
						@if($event->info == 'TBC')
						<h1>TBC</h1>
						@else
						<h1>{{ Carbon\Carbon::parse($event->event_date)->day }}</h1>
						@endif
						<hr align="center" width="50%">
						<p>{{$event->description}}</p>
					</div>

				@endforeach
					
			</div>

			<div class="calendar_events" id="calendar_events"> 
				<p id="city_name">THE "MED ATLANTIC ECOBONUS" <br> PROJECT FINAL EVENT</p>
			</div>

		</div>

		<button class="btn"><a href="{{ route('calendar') }}">View all events</a></button>
		
	</div>

</div>

<script>
	
	let calendarImage = document.querySelector('#calendar_events');
	let cityName = document.querySelector('#city_name');

	function changeImage(image, city) 
	{
		calendarImage.style.backgroundImage = "url('/images/" + image + "')";
		cityName.innerHTML = city;
	}


</script>