<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<style>
	.alert
	{
		color: red;
		font-weight: bold;
	}
</style>

<body>

	@include('navbar')

	<div class="downloads_header">
		
		<div class="downloads_header_container">

			<div class="downloads_header_title">
				<p class="title_yellow">Downloads</p>
			</div>

			{{-- <div class="downloads_header_text">
				<h4>Med Atlantic Ecobonus</h4>
				<p class="text-body">Towards the goal of sustainable freight transport services in the transeuropean transport network.</p>
			</div> --}}

		</div>

	</div>

	<div class="downloads_container">

		<div class="mae">

			<p>&nbsp;</p>

		</div>

		<br>


		<form method="POST" action="{{ route("downloadfile", "#downloads_form") }}" class="form-group">
			{{ csrf_field() }}

			<div class="events_container">
				
				<div class="event">
					<div class="event_info">
						<h2>MAE Documents</h2>
					</div>
					<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_1">
				</div>

				<div class="extra_info" id="info_1">
					{{-- <h5><b>01. MAE Briefing</b></h5>
					<p>The document includes a quick overview of the project scope and main contributions.</p>
					<button class="button_agenda" type="submit" name="button_name" value="file1">DOWNLOAD</button>

					<hr> --}}

					<h5><b>01. MAE Executive Summary</b></h5>
					{{-- <p>This document summarizes the main contents from the MAE preliminary report for consensus.</p> --}}
					<button class="button_agenda" type="submit" name="button_name" value="file2">DOWNLOAD</button>

					<hr>

					<h5><b>02. MAE Executive Report</b></h5>
					{{-- <p>The MAE study is aimed at proposing a new approach to eco-incentive measures towards sustainable freight transport services based on different assumptions and criteria that need further consensus before envisaging real implementing actions. The MAE preliminary report for consensus describes the main principles of the common approach to eco-incentives and the complete ex-ante analysis for the MoS case taken as example to prove the impacts of such approach. This is a working document meant to encourage the debate and to provide feedback as part of the consensus activities of the MAE Action.</p> --}}
					<button class="button_agenda" type="submit" name="button_name" value="file3">DOWNLOAD</button>

					<hr>

					<h5><b>03. The Italian Ecobonus experience</b></h5>
					<button class="button_agenda" type="submit" name="button_name" value="file8">DOWNLOAD</button>

					<hr>

					<h5><b>04. Review and analysis of the state aid legal framework</b></h5>
					<button class="button_agenda" type="submit" name="button_name" value="file9">DOWNLOAD</button>

					<hr>

					<h5><b>05. Administrative and Technological aspects</b></h5>
					<button class="button_agenda" type="submit" name="button_name" value="file10">DOWNLOAD</button>

					<hr>

				</div>

				<div class="event">
					<div class="event_info">
						<h2>MAE Tools (case-study)</h2>
					</div>
					<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_2">
				</div>

				<div class="extra_info" id="info_2">
					<p>According to the common EU approach, as proposed in the MAE Action, eco-incentive schemes must be justified on the grounds of a complete ex-ante analysis, using relevant tools. According to the proposed methodology, specific tools have been developed and calibrated for the ex-ante analysis of the MAE case-study on Motorways of the Sea, which is used as example to prove the impacts of the eco-incentive approach in this particular case. The tools have been developed in excel format for easy use and are available for download. A short user manual for each tool has been produced as well and are also available for download, in pdf format.</p>

					<hr>

					<h5><b>01. The external cost calculator tool.</b></h5>
					<p>Measuring and monetizing external costs is core to the new approach on eco-incentive schemes in which grants shall reflect actual external cost savings. Therefore, the external cost calculator is an essential feature of the MAE ex-ante analysis. The calculator has been developed using common references such as the Handbook of External Cost in Transport issued by the European Commission.</p>
					<button class="button_agenda" type="submit" name="button_name" value="file4">DOWNLOAD</button>

					<hr>

					<h5><b>02. The calibrated transport modelling tool.</b></h5>
					<p>A complete transport modelling tool has been specifically designed and calibrated for simulation purposes taken the Motorways the Sea ferry/ro-ro market in the Atlantic and West Mediterranean regions as example. The modelling tool is intended to replicate the actual performance of this market by using classic calibration methodologies, and to simulate the effects on demand resulting from different eco-incentive scenarios.</p>
					<button class="button_agenda" type="submit" name="button_name" value="file5">DOWNLOAD</button>

					<hr>

					<h5><b>03. The shipowners’ perspective tool.</b></h5>
					<p>This tool is developed to assess the extent to which the eco-incentive scheme provides the shipowners with an indirect benefit that is attractive enough to trigger green actions in the maritime leg.</p>
					<button class="button_agenda" type="submit" name="button_name" value="file6">DOWNLOAD</button>

				</div>

				{{-- <div class="event">
					<div class="event_info">
						<h2>MAE Final documentation</h2>
					</div>
					<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_3">
				</div>

				<div class="extra_info" id="info_3">
					<p>Currently work in progress (estimated time for completion. April 2019).</p>
				</div> --}}

				<div class="event">
					<div class="event_info">
						<h2>MAE Presentations</h2>
					</div>
					<img class="arrow_down" src="/images/events/flecha_down.png" alt="" id="arrow_3">
				</div>

				<div class="extra_info" id="info_3">

					<h5><b>01. MAE project short presentation (Brussels, January’20)</b></h5>
					<button class="button_agenda" type="submit" name="button_name" value="file7">DOWNLOAD</button>

					<hr>

					<h5><b>02. MAE project presentation at the Seminar on financing the maritime sector and MoS (Rome, November’19) </b></h5>
					<button class="button_agenda" type="submit" name="button_name" value="file7">DOWNLOAD</button>

				</div>

			</div>

			<p id="downloads_form"><strong>To download the MAE tools, please fill this form and click on the download button</strong></p>
			
			<label for="Name">Name</label>
			<input class="form_name form-control" type="text" placeholder="Name..." value="{{ old('download_name') }}" name="download_name">
			@if($errors->has('download_name'))
				<small class="alert">{{ $errors->first('download_name') }}</small>
				<br>
			@endif	
			
			<label for="Company">Company</label>
			<input class="form_company form-control" type="text" placeholder="Company name..." value="{{ old('download_company') }}" name="download_company">
			@if($errors->has('download_company'))
				<small class="alert">{{ $errors->first('download_company') }}</small>
				<br>
			@endif	
			
			<label for="Email">Email</label>
			<input class="form_mail form-control" type="email" placeholder="E-Mail..." value="{{ old('download_email') }}" name="download_email">
			@if($errors->has('download_email'))
				<small class="alert">{{ $errors->first('download_email') }}</small>
				<br>
			@endif

			<div>
				<input class="form_checkbox" type="checkbox" name="download_privacy">
				<span style="color:black">I have read and accept the <a target="_blank" href="{{ route('privacy') }}">privacy policy</a></span>					
			</div>
			@if($errors->has('download_privacy'))
				<small class="alert">{{ $errors->first('download_privacy') }}</small>
				<br>
			@endif


		</form>

	</div>

	@include('contact')

	@include('footer')

	<style>
		.active {
			background-color: #12162B !important;
			color: white;
		}
		.invert {
			transform: rotate(180deg);
		}
	</style>

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