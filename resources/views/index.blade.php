<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>

<body>
	
	@include('navbar')

	@include('slider_main')

	@include('mae')

	@include('about')

	@include('downloads')

	{{-- @include('calendar') --}}

	@include('partners')

	@include('contact')

	@include('footer')

<script src="js/app.js"></script>

<script>

    $(document).ready(function(){
        $('.menu').click(function(){
            $('ul').toggleClass('active');
        });
    });

</script>

</body>
</html>