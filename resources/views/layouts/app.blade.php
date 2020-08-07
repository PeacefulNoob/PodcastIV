<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Igor I Vlado Podcast | Admin</title>

  
		<!-- Bootstrap Css -->
		<link href="/assets/css/bootstrap.css" rel="stylesheet" />
	<!-- Font Css -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>

		<link href="//db.onlinewebfonts.com/c/0a6ee448d1bd65c56f6cf256a7c6f20a?family=Bahnschrift" rel="stylesheet" type="text/css"/>

			<!-- Moj Css -->

		<link href="/assets/css/appAdmin.css" rel="stylesheet" />


		<!-- Owl Theme css-->
{{-- 		<link href="/assets/css/owl.carousel.css" rel="stylesheet" />
 --}}</head>
<body>
    <div id="app">
	   @include('admin.admin_navbar')
	   @include('admin.admin_side')

        <main class="py-4 margAdmin">
		<div class="mx-5">@include('components.message')</div>	

            @yield('content')
        </main>
    </div>
        {{-- SKRIPTE .////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
		<!-- JQuery js-->
		<script src="/assets/js/jquery-3.2.1.min.js"></script>
		<script src="/assets/js/myJquery.js"></script>

		<!-- Bootstrap js -->
		<script src="/assets/js/bootstrap.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>

		
{{-- 		<!--Owl Carousel js -->
		<script src="/assets/owl-carousel.js"></script>
		<script src="/assets/owl.carousel.js"></script> --}}

</body>
</html>
