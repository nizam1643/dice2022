@extends('front.second')

@section('style')

@endsection

@if (Request::segment(2) == 'test')
    @section('content')
        <!-- PAGE HERO
        ============================================= -->
        <div id="faqs-page" class="page-hero-section division custombg4">
            <div class="page-hero-overlay division">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-txt text-center white-color">

                                <!-- Title -->
                                <h2 class="h2-xs">Marketplace Virtual Company</h2>

                                <!-- Text -->
                                <p class="p-xl">
                                </p>

                            </div>
                        </div>
                    </div>	  <!-- End row -->
                </div>	   <!-- End container -->
            </div>	 <!-- End hero-overlay -->

            <!-- WAVE SHAPE BOTTOM -->
            <div class="wave-shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#ffffff" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
            </div>

        </div>	<!-- END PAGE HERO -->

        <!-- FAQs-2
        ============================================= -->
        <section id="faqs-2" class="wide-60 faqs-section division">
            <div class="container">

            <!-- Title -->
            <h4 class="h4-md">Top Game Lists:</h4>

            <div class="container-lg my-3">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cdn1.dotesports.com/wp-content/uploads/2021/12/02221305/mlbb.png" class="d-block w-100" height="400" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://venturebeat.com/wp-content/uploads/2020/05/Garena-Free-Fire.jpg?fit=750%2C422&strip=all" class="d-block w-100" height="400" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="/examples/images/slide3.png" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>

                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <!-- Title -->
            <h4 class="h4-md">List of Company:</h4>

            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-3 col-12 d-flex align-items-stretch mb-4">
                    <div class="card p-3">
                        <img src="https://cdn1.dotesports.com/wp-content/uploads/2021/12/02221305/mlbb.png" class="img-fluid mb-2">
                            <div class="mt-2">
                                <h4 class="text-uppercase text-center">Company Name</h4>
                            </div>
                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2"> <span>Company Vision/Tagline</span>
                            <div class="colors"> <span></span> <span></span> <span></span> <span></span> </div>
                        </div>
                        <p>A great option weather you are at office or at home. </p> <button class="btn btn-danger btn-skyblue tra-grey-hover">View More</button>
                    </div>
                </div>
                <div class="col-lg-3 col-12 d-flex align-items-stretch mb-4">
                    <div class="card p-3">
                        <img src="https://venturebeat.com/wp-content/uploads/2020/05/Garena-Free-Fire.jpg?fit=750%2C422&strip=all" class="img-fluid mb-2">
                            <div class="mt-2">
                                <h4 class="text-uppercase text-center">Company Name</h4>
                            </div>
                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2"> <span>Company Vision/Tagline</span>
                            <div class="colors"> <span></span> <span></span> <span></span> <span></span> </div>
                        </div>
                        <p>A great option weather you are at office or at home. </p> <button class="btn btn-danger btn-skyblue tra-grey-hover">View More</button>
                    </div>
                </div>
                <div class="col-lg-3 col-12 d-flex align-items-stretch mb-4">
                    <div class="card p-3">
                        <img src="https://images.ctfassets.net/vfkpgemp7ek3/2854847919/d99a8a0a9c0e388186f8c24db7ec9106/genshin-impact-hits-1-billion-revenue.jpg?w=1920" class="img-fluid mb-2">
                            <div class="mt-2">
                                <h4 class="text-uppercase text-center">Company Name</h4>
                            </div>
                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2"> <span>Company Vision/Tagline</span>
                            <div class="colors"> <span></span> <span></span> <span></span> <span></span> </div>
                        </div>
                        <p>A great option weather you are at office or at home. </p> <button class="btn btn-danger btn-skyblue tra-grey-hover">View More</button>
                    </div>
                </div>
                <div class="col-lg-3 col-12 d-flex align-items-stretch mb-4">
                    <div class="card p-3">
                        <img src="https://gameshunters.com/wp-content/uploads/2019/04/download-Honkai-Impact-3rd-pc.jpg" class="img-fluid mb-2">
                            <div class="mt-2">
                                <h4 class="text-uppercase text-center">Company Name</h4>
                            </div>
                        <div class="d-flex justify-content-between align-items-center mt-2 mb-2"> <span>Company Vision/Tagline</span>
                            <div class="colors"> <span></span> <span></span> <span></span> <span></span> </div>
                        </div>
                        <p>A great option weather you are at office or at home. </p> <button class="btn btn-danger btn-skyblue tra-grey-hover">View More</button>
                    </div>
                </div>
            </div>

            </div>	   <!-- End container -->
        </section>	<!-- END FAQs-2 -->


    @endsection
@else
    @section('content')
        <!-- PAGE HERO
        ============================================= -->
        <div id="faqs-page" class="page-hero-section division custombg4">
            <div class="page-hero-overlay division">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-txt text-center white-color">

                                <!-- Title -->
                                <h2 class="h2-xs">Marketplace Virtual Company</h2>

                                <!-- Text -->
                                <p class="p-xl">
                                </p>

                            </div>
                        </div>
                    </div>	  <!-- End row -->
                </div>	   <!-- End container -->
            </div>	 <!-- End hero-overlay -->

            <!-- WAVE SHAPE BOTTOM -->
            <div class="wave-shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#ffffff" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
            </div>

        </div>	<!-- END PAGE HERO -->

        <!-- FAQs-2
        ============================================= -->
        <section id="faqs-2" class="wide-60 faqs-section division">
            <div class="container">

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <img src="{{ asset('imagefront/closed-submit1.png') }}" class="img-fluid" alt="Closed Event">

                        <a href="https://logwork.com/countdown-sbdb" class="countdown-timer" data-timezone="Asia/Kuala_Lumpur" data-date="2022-04-11 09:00">Countdown</a>
                    </div>
                </div>
            </div>

            </div>	   <!-- End container -->
        </section>	<!-- END FAQs-2 -->
    @endsection
@endif

@section('style')

@endsection
