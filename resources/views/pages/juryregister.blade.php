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
                            <h2 class="h2-xs">Jury Registeration</h2>

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

                        <!-- Title -->
                        <h2 class="h2-sm">We Appreciate Your Cooperation and Contributions</h2>

                        <!-- Text -->
                        <p class="p-xl">The organizers of the DICE 2021 event are looking for a jury to evaluate project for this event. Only staf from computing department FSKIK can fill this form.
                        </p>

                        <img src="{{ asset('imagefront/closed-jury1.png') }}" class="img-fluid" alt="Closed Event">

                        <h2 class="h2-sm">AUTO ASSIGNED</h2>

                    </div>
                </div>
            </div>

        </div>	   <!-- End container -->
    </section>	<!-- END FAQs-2 -->
@endsection

@section('style')

@endsection
