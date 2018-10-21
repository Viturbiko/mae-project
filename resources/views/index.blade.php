<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/app.css">
	<title>Mae Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<style>
	.active {
    display: block;
  }
</style>
<body>
	
	@include('navbar')

	@include('slider_main')

	@include('mae')

	@include('about')

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