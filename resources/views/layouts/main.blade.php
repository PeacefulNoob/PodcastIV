<!doctype html>
<html lang="zxx" dir="ltr">
	<head>
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Igor i Vlado Podcast">
		<meta name="author" content="QQRIQ PeacefulNoob">
		<meta name="keywords" content="Igor i Vlado Podcast">
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Igor i Vlado Podcast</title>

		<!-- Bootstrap Css -->
		<link href="/assets/css/bootstrap.css" rel="stylesheet" />
	<!-- Font Css -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>

		<link href="//db.onlinewebfonts.com/c/0a6ee448d1bd65c56f6cf256a7c6f20a?family=Bahnschrift" rel="stylesheet" type="text/css"/>

			<!-- Moj Css -->

		<link href="/assets/css/app.css" rel="stylesheet" />


		{{-- <!-- Owl Theme css-->
		<link href="/assets/css/owl.carousel.css" rel="stylesheet" /> --}}

	


	</head>
<body>

 
    @include('layouts.header')
	<main>
		@yield('content')
	</main>
   @include('layouts.footer')
{{--    @include('layouts.footer_bot')
 --}}
	


        {{-- SKRIPTE .////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
		<!-- JQuery js-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="/assets/js/myJquery.js"></script>

		<!-- Bootstrap js -->
		<script src="/assets/js/bootstrap.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		

	
	</body>
</html>