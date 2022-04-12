@extends('front.second')

@section('style')

@endsection
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
                        <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
                    </ol>

                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('imageslider/1.png') }}" class="d-block w-100" alt="Slide 1">
                        </div>
                        @forelse ($data1->data as $data)
                            <div class="carousel-item">
                                <img src="{{ $data->banner }}" class="d-block w-100" alt="Slide 2">
                            </div>
                        @empty

                        @endforelse
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
                @forelse ($data1->data as $company)
                    <div class="col-lg-3 col-6 d-flex align-items-stretch mb-4">
                        <div class="card p-3">
                            <img src="{{ $company->image }}" class="img-fluid mb-2">
                                <div class="mt-2">
                                    <h4 class="text-uppercase text-center">{{ $company->name }}</h4>
                                </div>
                            <div class="text-center mb-4"> <span><b>"{{ $company->tagline }}"</b></span>
                            </div>
                            <a href="{{ route('page.vcompany', [$company->slug]) }}" target="_blank" class="btn btn-danger btn-skyblue tra-grey-hover">View More</a>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>

            </div>	   <!-- End container -->
        </section>	<!-- END FAQs-2 -->


    @endsection
@section('style')

@endsection
