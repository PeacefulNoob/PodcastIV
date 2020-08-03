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

		<meta property="og:image" content="https://igorivlado.com/assets/images/shareOg.png" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://igorivlado.com/" />
		<meta property="og:title" content="Igor i Vlado Podcast" />
		<meta property="og:description" content="Igor i Vlado Podcast" />

		<link rel="icon" type="image/png" href="/assets/images/glaveDve.png" />
		<link rel="apple-touch-icon-precomposed" href="/assets/images/glaveDve.png" type="image/png" sizes="152x152" />
		<link rel="apple-touch-icon-precomposed" href="/assets/images/glaveDve.png" type="image/png" sizes="120x120" />
		<link rel="apple-touch-icon" href="/assets/images/glaveDve.png" sizes="180x180" />
	  
		<!-- Title -->
		<title>Igor i Vlado Podcast</title>

		<!-- Bootstrap Css -->
		<link href="/assets/css/bootstrap.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- Font Css -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>

		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet">

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
		<script src="/assets/js/main.js"></script>

		<!-- Bootstrap js -->
		<script src="/assets/js/bootstrap.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		

	
	</body>
</html>