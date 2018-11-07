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

	<div class="downloads_header">
		
		<div class="downloads_header_container">

			<div class="downloads_header_title">
				<p class="title_yellow">Docs</p>
				<p class="title_white">& downloads</p>
			</div>

			<div class="downloads_header_text">
				<h4>Med Atlantic Ecobonus</h4>
				<p class="text-body">Towards the goal of sustainable freight transport services in the transeuropean transport network.</p>
			</div>

		</div>

	</div>

	<div class="downloads_container">

		<div class="mae">

		<p>MED ATLANTIC ECOBONUS</p>

		</div>

		<div class="download">

			<div class="download_image hide_smartphone">
				<img src="/images/downloads/download-1.jpg" alt="">
			</div>

			<div class="download_text">
				<h3>DOC1. MAE Executive report. (PDF)</h3>
				<hr width="10%" align="left">
				<p>The present document describes a possible approach to eco-incentives solutions for the development of sustainable freight mobility in Europe, developing a particular case for the Motorways of the Sea in the West-Mediterranean and Atlantic regions. This proposal is a partial result of the Med Atlantic Ecobonus Action, an institutional and feasibility study leaded by Spain, France, Portugal and Italy, with the financial support of the European Commission in the context of the Trans-European Transport Network.</p>
				<button class="btn"><a href="{{ route('downloadfile1') }}">DOWNLOAD</a></button>
			</div>

		</div>

		<div class="download">

			<div class="download_image hide_smartphone">
				<img src="/images/downloads/download-2.jpg" alt="">
			</div>

			<div class="download_text">
				<h3>DOC2. MAE External Cost Calculator (zip)</h3>
				<hr width="10%" align="left">
				<p>The external cost calculator is an essential feature not only for the MAE case study but for the common approach on eco-incentives measures. The tool and the manual allows for comparison of different operational profiels and technologies and compare MoS and road only alternative transport externalities.</p>
				<button class="btn"><a href="{{ route('downloadfile2') }}">DOWNLOAD</a></button>
			</div>

		</div>

		<div class="download">

			<div class="download_image hide_smartphone">
				<img src="/images/downloads/download-3.jpg" alt="">
			</div>

			<div class="download_text">
				<h3>DOC3. MAE Calibrated transport modelling tool (zip)</h3>
				<hr width="10%" align="left">
				<p>The as a main contribution from the MAE case study, a complete transport modelling tool has been calibrated for the targeted market. The modelling tool is intended to replicate the actual performance of the targeted market
				by using classic methodologies in a way that makes possible a sensitivity analysis of the relevant variables affecting the behavior of the transport demand.</p>
				<button class="btn"><a href="{{ route('downloadfile3') }}">DOWNLOAD</a></button>
			</div>

		</div>

		<div class="download">

			<div class="download_image hide_smartphone">
				<img src="/images/downloads/download-4.jpg" alt="">
			</div>

			<div class="download_text">
				<h3>DOC4. MAE Shipowner's perspective tool (zip)</h3>
				<hr width="10%" align="left">
				<p>The tool is aimed to estimate the shipowners’ financial considerations that any maritime operator would probably make before participating to the eco-incentive scheme, assessing to what extent the ‘indirect’ benefits on the demand side are enough for them to trigger the greener actions incurring direct costs.</p>
				<button class="btn"><a href="{{ route('downloadfile4') }}">DOWNLOAD</a></button>
			</div>

		</div>

	</div>

	@include('contact')

	@include('footer')

</body>

</html>