<!doctype html>
<html lang="zxx" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    @yield('head_index')


		<link rel="icon" type="image/png" href="/assets/images/glaveDve.png" />
		<link rel="apple-touch-icon-precomposed" href="/assets/images/glaveDve.png" type="image/png" sizes="152x152" />
		<link rel="apple-touch-icon-precomposed" href="/assets/images/glaveDve.png" type="image/png" sizes="120x120" />
		<link rel="apple-touch-icon" href="/assets/images/glaveDve.png" sizes="180x180" />
	  
		<!-- Title -->
		<title>Igor i Vlado Podcast</title>
		<link href="/assets/select2/select2.min.css" rel="stylesheet" />

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

	<div id="global-loader" style="display: none;">
        <img src="/assets/images/glaveDve.png" class="loader-img floating" alt="Pocetna">
    </div>
    @include('layouts.header')
	<main>
		@yield('content')
	</main>
   @include('layouts.footer')
{{--    @include('layouts.footer_bot')
 --}}
	

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        {{-- SKRIPTE .////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
		<!-- JQuery js-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="/assets/select2/select2.full.min.js"></script>
		<script src="/assets/js/myJquery.js"></script>
		<script src="/assets/js/main.js"></script>

		<!-- Bootstrap js -->
		<script src="/assets/js/bootstrap.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	
	</body>
</html>