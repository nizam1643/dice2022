<!DOCTYPE html>
<!-- OLMO - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>
		<meta name="description" content="OLMO - Software, App, SaaS & Startup Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5, DSAThemes, One Page, Landing, Software, Mobile App, SaaS, Startup, Creative, Freelancers, Digital Product">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  		<!-- SITE TITLE -->
		<title>DICE 2022 | Diploma Innovative & Creative Project Exhibition</title>

		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="{{ asset('imagefront/logo.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('imagefront/logo.ico') }}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('imagefront/logo.ico') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('imagefront/logo.ico') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('imagefront/logo.ico') }}">
		<link rel="apple-touch-icon" href="{{ asset('imagefront/logo.ico') }}">
		<link rel="icon" href="{{ asset('imagefront/logo.ico') }}" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('front/HTML/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- FONT ICONS -->
		<link href="{{ asset('front/HTML/css/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('front/HTML/css/menu.css') }}" rel="stylesheet">
		<link id="effect" href="{{ asset('front/HTML/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ asset('front/HTML/css/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('front/HTML/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('front/HTML/css/owl.theme.default.min.css') }}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('front/HTML/css/animate.css') }}" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="{{ asset('front/HTML/css/style.css') }}" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('front/HTML/css/responsive.css') }}" rel="stylesheet">

        <!-- STYLE CSS -->
        @yield('style')

	</head>

	<body>

		<!-- PRELOADER SPINNER
		============================================= -->
		<div id="loading" class="skyblue-loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_one"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_four"></div>
				</div>
			</div>
		</div>

		<!-- PAGE CONTENT
		============================================= -->
		@yield('content')
        <!-- END PAGE CONTENT -->

		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="{{ asset('front/HTML/js/jquery-3.6.0.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('front/HTML/js/jquery.easing.js') }}"></script>
		<script src="{{ asset('front/HTML/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('front/HTML/js/jquery.scrollto.js') }}"></script>
		<script src="{{ asset('front/HTML/js/menu.js') }}"></script>
		<script src="{{ asset('front/HTML/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/quick-form.js') }}"></script>
		<script src="{{ asset('front/HTML/js/request-form.js') }}"></script>
		<script src="{{ asset('front/HTML/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('front/HTML/js/wow.js') }}"></script>

		<!-- Custom Script -->
		<script src="{{ asset('front/HTML/js/custom.js') }}"></script>
        @yield('script')

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->
	</body>



</html>
