<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ url('/') }}/public/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Electro</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ url('/') }}/public/css/linearicons.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/themify-icons.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/bootstrap.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/nice-select.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/nouislider.min.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="{{ url('/') }}/public/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="{{ url('/') }}/public/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ url('/') }}/public/css/main.css">
</head>
<body>

    {{-- HEADER --}}
    @include('layouts.header')
    {{-- /HEADER --}}

	{{-- MAIN --}}
	<div>
		@yield('main')
	</div>
	{{-- /MAIN --}}

{{-- FOOTER --}}
@include('layouts.footer')
{{-- /FOOTER --}}

	<script src="{{ url('/') }}/public/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ url('/') }}/public/js/vendor/bootstrap.min.js"></script>
	<script src="{{ url('/') }}/public/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ url('/') }}/public/js/jquery.nice-select.min.js"></script>
	<script src="{{ url('/') }}/public/js/jquery.sticky.js"></script>
	<script src="{{ url('/') }}/public/js/nouislider.min.js"></script>
	<script src="{{ url('/') }}/public/js/countdown.js"></script>
	<script src="{{ url('/') }}/public/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ url('/') }}/public/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ url('/') }}/public/js/gmaps.min.js"></script>
	<script src="{{ url('/') }}/public/js/main.js"></script>
</body>

</html>
