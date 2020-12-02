
<!DOCTYPE html>
<html>
<head>
		<title>Pressroom - Responsive News &amp; Magazine Template</title>
		<!--meta-->
		@include('layouts.frontend.includes.head')
	</head>
	<body class="">
		@include('layouts.frontend.includes.header')

    <div class="page">
	@yield('content')
</div>
        @include('layouts.frontend.includes.footer')
		</div>
		<div class="background_overlay"></div>
		<!--js-->
		<script type="text/javascript" src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery-migrate-1.4.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.ba-bbq.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery-ui-1.11.1.custom.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.touchSwipe.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.transit.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.sliderControl.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.timeago.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.hint.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.qtip.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.blockUI.js')}}"></script>
				<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/odometer.min.js')}}"></script>
	</body>
</html>
