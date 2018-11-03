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

				<input class="form_phone" type="text" placeholder="Phone" value="{{ old('phone') }}" name="phone">
				@if($errors->has('phone'))
					<small class="alert">{{ $errors->first('phone') }}</small>
				@endif

				<textarea class="form_message" rows="10" placeholder="Message" value="{{ old('message') }}" name="message"></textarea>
				@if($errors->has('message'))
					<small class="alert">{{ $errors->first('message') }}</small>
				@endif

				<input class="btn" type="submit" value="SEND MESSAGE">
			</form>
		</div>
		<div class="contact_img">
			<img src="/images/contact/contact-1.jpg" alt="">
		</div>
	</div>

</div>