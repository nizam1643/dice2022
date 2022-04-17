
<!DOCTYPE html>
<!--  - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
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
		<link rel="shortcut icon" href="{{ asset('imagefront/dice2.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('imagefront/dice2.ico') }}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('imagefront/dice2.ico') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('imagefront/dice2.ico') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('imagefront/dice2.ico') }}">
		<link rel="apple-touch-icon" href="{{ asset('imagefront/dice2.ico') }}">
		<link rel="icon" href="{{ asset('imagefront/dice2.ico') }}" type="image/x-icon">

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

        <script src="https://cdn.logwork.com/widget/countdown.js"></script>

        <style>
            .custombg1 {
                background-color: #1b7b6e !important;
            }

            .custombg2 {
                background-color: #f2c46f !important;
            }

            .custombg3 {
                background-color: #3ec799 !important;
            }

            .custombg4 {
                background-image: url("{{ asset('imagefront/headerpage4.jpeg') }}") !important;
            }
        </style>

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
		<div id="page" class="page">

            <!-- HEADER
            ============================================= -->
            <header id="header" class="header tra-menu navbar-light">
                <div class="header-wrapper">

                    <!-- MOBILE HEADER -->
                    <div class="wsmobileheader clearfix">
                        <span class="smllogo"><img src="{{ asset('imagefront/LogoDICE.png') }}" alt="Logo DICE2022"/></span>
                        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                    </div>

                    <!-- NAVIGATION MENU -->
                    <div class="wsmainfull menu clearfix">
                        <div class="wsmainwp clearfix">

                            <!-- HEADER LOGO -->
                            <div class="desktoplogo"><a href="#hero-8" class="logo-black"><img src="{{ asset('imagefront/LogoDICE.png') }}" alt="Logo DICE 2022"></a></div>
                            <div class="desktoplogo"><a href="#hero-8" class="logo-white"><img src="{{ asset('imagefront/LogoDICE.png') }}" alt="Logo DICE 2022"></a></div>

                            <!-- MAIN MENU -->
                            <nav class="wsmenu clearfix">
                                <ul class="wsmenu-list nav-skyblue-hover">

                                    <!-- HOME -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('page.index') }}">Home</a></li>

                                    <!-- FORM -->
                                    <li aria-haspopup="true"><a href="#">Digital Form <span class="wsarrow"></span></a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{ route('page.preregister') }}">Pre-Registeration</a></li>
                                            <li aria-haspopup="true"><a href="{{ route('page.juryregister') }}">Jury Registeration</a></li>
                                            <li aria-haspopup="true"><a href="{{ route('page.successregister') }}">Successful Registeration</a></li>
                                            <li aria-haspopup="true"><a href="{{ route('page.submit') }}">Submission</a></li>
                                        </ul>
                                    </li>

                                    <!-- HOME -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('page.activity') }}">Activities</a></li>

                                    <!-- AWARD -->
                                    <li aria-haspopup="true"><a href="#">Awards <span class="wsarrow"></span></a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{ route('page.awardlist') }}">List of Awards</a></li>
                                            <li aria-haspopup="true"><a href="{{ route('page.awardrule') }}">Rules & Judging Criteria</a></li>
                                            <li aria-haspopup="true"><a href="{{ route('page.awardwinner') }}">Winner Result</a></li>
                                        </ul>
                                    </li>

                                    {{-- <!-- VIRTUAL -->
                                    <li aria-haspopup="true"><a href="#">Virtual Booth <span class="wsarrow"></span></a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{ route('page.vproject') }}">Project List</a></li>
                                            <li aria-haspopup="true"><a href="{{ route('page.vmarketplace') }}">MarketPlace</a></li>
                                        </ul>
                                    </li> --}}

                                    <!-- HOME -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('page.about') }}">About Us</a></li>

                                </ul>
                            </nav>	<!-- END MAIN MENU -->

                        </div>
                    </div>	<!-- END NAVIGATION MENU -->

                </div>     <!-- End header-wrapper -->
            </header>	<!-- END HEADER -->

            @yield('content')

            <!-- DIVIDER LINE -->
            <hr class="divider">

            <!-- BRANDS-2
            ============================================= -->
            <div id="brands-2" class="pb-70 brands-section division">
                <div class="container">


                    <!-- BRANDS TITLE -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="brands-title text-center">
                                <p class="p-xl">Organised by:</p>
                            </div>
                        </div>
                    </div>


                    <!-- BRANDS-2 WRAPPER -->
                    <div class="brands-2-wrapper">
                        <div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">

                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div class="brand-logo">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('imagefront/1.png') }}" alt="UPSI" />
                                    </a>
                                </div>
                            </div>

                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div class="brand-logo">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('imagefront/2.png') }}" alt="100 Year UPSI" />
                                    </a>
                                </div>
                            </div>

                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div class="brand-logo">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('imagefront/3.png') }}" alt="FSKIK" />
                                    </a>
                                </div>
                            </div>

                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div class="brand-logo">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('imagefront/4.png') }}" alt="DICE 2022" />
                                    </a>
                                </div>
                            </div>

                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div class="brand-logo">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('imagefront/5.png') }}" alt="Pusat Alumni" />
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>  <!-- END BRANDS-2 WRAPPER -->

                </div>     <!-- End container -->
            </div>	<!-- END BRANDS-2 -->

            <!-- FOOTER-1
            ============================================= -->
            <footer id="footer-1" class="bg-lightgrey footer division custombg3">
                <div class="container">

                    <!-- FOOTER CONTENT -->
                    <div class="row">

                        <!-- FOOTER INFO -->
                        <div class="col-lg-4">
                            <div class="footer-info mb-40">

                                <!-- Footer Logo -->
                                <img class="footer-logo mb-25" src="{{ asset('imagefront/LogoDICE.png') }}" alt="Logo DICE 2022">

                                <!-- Text -->
                                <p class="p-md">
                                    DICE are annual events at Universiti Pendidikan Sultan Idris (UPSI) where students in the final year of their diploma show off their work and project.
                                </p>

                            </div>
                        </div>

                        <!-- FOOTER LINKS -->
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="footer-links mb-40">

                                <!-- Title -->
                                <h6 class="h6-xl">Pages</h6>

                                <!-- Footer Links -->
                                <ul class="foo-links text-secondary clearfix">
                                    <li><p class="p-md"><a href="{{ route('page.index') }}">Home</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.activity') }}">Activities</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.about') }}">About Us</a></p></li>
                                </ul>

                            </div>
                        </div>

                        <!-- FOOTER LINKS -->
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="footer-links mb-40">

                                <!-- Title -->
                                <h6 class="h6-xl">Digital Form</h6>

                                <!-- Footer Links -->
                                <ul class="foo-links text-secondary clearfix">
                                    <li><p class="p-md"><a href="{{ route('page.preregister') }}">Pre-Registeration</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.juryregister') }}">Jury Registeration</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.successregister') }}">Successful Registeration</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.submit') }}">Submission</a></p></li>
                                </ul>

                            </div>
                        </div>

                        <!-- FOOTER LINKS -->
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="footer-links mb-40">

                                <!-- Title -->
                                <h6 class="h6-xl">Awards</h6>

                                <!-- Footer List -->
                                <ul class="foo-links text-secondary clearfix">
                                    <li><p class="p-md"><a href="{{ route('page.awardlist') }}">List of Awards</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.awardrule') }}">Rules & Judging Criteria</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.awardwinner') }}">Winner Result</a></p></li>
                                </ul>

                            </div>
                        </div>

                        <!-- FOOTER LINKS -->
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="footer-links mb-40">

                                <!-- Title -->
                                <h6 class="h6-xl">Virtual Booth</h6>

                                <!-- Footer List -->
                                <ul class="foo-links text-secondary clearfix">
                                    <li><p class="p-md"><a href="{{ route('page.vproject') }}">Project List</a></p></li>
                                    <li><p class="p-md"><a href="{{ route('page.vmarketplace') }}">MarketPlace</a></p></li>
                                </ul>

                            </div>
                        </div>

                    </div>	<!-- END FOOTER CONTENT -->

                    <hr>

                    <!-- BOTTOM FOOTER -->
                    <div class="bottom-footer">
                        <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">

                            <!-- FOOTER COPYRIGHT -->
                            <div class="col">
                                <div class="footer-copyright">
                                    DICE © 2022. All Rights Reserved. Powered by Dynanity AI Edition</p>
                                </div>
                            </div>

                            <!-- BOTTOM FOOTER LINKS -->
                            <div class="col">
                                <ul class="bottom-footer-list text-secondary text-end">
                                </ul>
                            </div>

                        </div>  <!-- End row -->
                    </div>	<!-- BOTTOM FOOTER -->

                </div>
            </footer>	<!-- END FOOTER-1 -->
		</div>	<!-- END PAGE CONTENT -->

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
