<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Laravel Blog Starter Project</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('cms-assets/css/bootstrap.min.css') }}"/>
	
	<!--====== Lineicons CSS ======-->
	<link rel="stylesheet" href="{{ asset('cms-assets/css/lineicons.css') }}"/>
	
	<!--====== Style css ======-->
	<link rel="stylesheet" href="{{ asset('cms-assets/scss/starter.css') }}"/>
</head>
<body>
	
	<section id="main">
		
		@include('cms.layouts._partials.navigation')
		
		<div class="container">
			@yield('content')
		</div>
	
	</section>
	
	<script src="https://cdn.ayroui.com/1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
