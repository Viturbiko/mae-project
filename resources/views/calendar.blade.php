<div class="container_calendar">

	<div class="bg_right_calendar"></div>
	<div class="bg_left_calendar"></div>

	<div class="content_calendar">

		<h1>Events & Information</h1>

		<hr align="left" width="5%">

		<div class="calendar">
			<div class="calendar_days">		
				{{-- Aqui se debería hacer el bucle con laravel y en cada evento pasar los datos de fecha, titulo etc. Además, una funcion de javascript que sea cambiarFoto(nombredeimagen) y pasar el nombre de imagen de la base de datos. Luego en javascript se deberia decir que se cambie la clase del $('id_imagen_container').css('background-image', 'url(../images/backgrounds/nombredeimagen)');--}}
				@foreach($events as $event)
					<div class="event_day">
						<p>{{Carbon\Carbon::parse($event->event_date)->format('F')}} {{Carbon\Carbon::parse($event->event_date)->year}}</p>
						<h1>{{ Carbon\Carbon::parse($event->event_date)->day }}</h1>
						<hr align="center" width="50%">
						<p>{{$event->description}}</p>
					</div>					
				@endforeach
			</div>

			<div class="calendar_events"> 

				<div class="image_container">
				</div>	
				
			</div>

		</div>
		
	</div>

</div>