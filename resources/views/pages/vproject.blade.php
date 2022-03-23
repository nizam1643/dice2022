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
                                <h2 class="h2-xs">Project Virtual Booth</h2>

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
                <p class="text-center">
                    <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1">
                        All Category
                    </a>
                    <a class="" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                    |    Web Application System (WEB)
                    </a>
                    <a class="" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                    |    Interactive Game Development (IG)
                    </a>
                    <a class="" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                    |   Mobile Application (MA)
                    </a>
                </p>
                <div class="collapse show" id="collapseExample1">
                    <div class="row">
                        @forelse ($data->data as $item1)
                            <div class="col-sm-4 mb-2">
                                <div class="card">
                                    <img src="https://dice2022.test/imagefront/closed-stud1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">{{ $item1->code }}</h5>
                                    <a href="#" class="btn btn-skyblue tra-grey-hover">Full View</a>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
                <div class="collapse" id="collapseExample4">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
                                <h2 class="h2-xs">Project Virtual Booth</h2>

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
