<div class="contact_back"  id="contact">

	<div class="contact_container">

		<div class="contact_form" id="contact_form">

			<h1>Contact Us</h1>
			<hr align="left" width="5%">

			@if(Session::has('flash_message'))
				<div class="success">{{ Session::get('flash_message') }}</div>
			@endif

			<form method="POST" action="{{ route("contact", '#contact_form') }}">
				{{ csrf_field() }}

				<input class="form_name" type="text" placeholder="Name" value="{{ old('name') }}" name="name">
				@if($errors->has('name'))
					<small class="alert">{{ $errors->first('name') }}</small>
				@endif	

				<input class="form_mail" type="text" placeholder="E-Mail" value="{{ old('email') }}" name="email">
				@if($errors->has('email'))
					<small class="alert">{{ $errors->first('email') }}</small>
				@endif

				<textarea class="form_message" rows="10" placeholder="Message" value="{{ old('message') }}" name="message">{{ old('message') }}</textarea>
				@if($errors->has('message'))
					<small class="alert">{{ $errors->first('message') }}</small>
				@endif
				
				<div>
					<input class="form_checkbox" type="checkbox" name="privacy">
					<span style="color:white">I have read and accept the <a target="_blank" href="{{ route('privacy') }}">privacy policy</a></span>					
				</div>
				@if($errors->has('privacy'))
					<small class="alert">{{ $errors->first('privacy') }}</small>
					<br>
				@endif

				<input class="btn" type="submit" value="SEND MESSAGE">
				

			</form>
		</div>
		<div class="contact_img hide_smartphone">
			<img src="/images/about/about-2.jpg" alt="">
		</div>
	</div>

</div>

