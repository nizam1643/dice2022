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
                            <h2 class="h2-xs">List of Awards</h2>

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
                        <h2 class="h2-sm">Don't Miss Out on Winning Attractive Prizes</h2>

                        <!-- Text -->
                        <p class="p-xl">A variety of exciting awards are offered by different organizations to recognize and celebrate excellence in various fields. These awards can be a great way to motivate and inspire people to achieve their best.
                        </p>

                    </div>
                </div>
            </div>

            <!-- Title -->
            <h3 class="h2-sm text-center">MAIN AWARDS & PRIZES</h3>
            <!-- FEATURES-8 WRAPPER -->
            <div class="fbox-8-wrapper text-center">
                <div class="row row-cols-1 row-cols-md-3">

                    <!-- FEATURE BOX #1 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-img bg-whitesmoke-gradient">
                                <img class="img-fluid" src="{{ asset('imagefront/goldMedal.png') }}" alt="Gold Medal DICE" />
                            </div>

                            <!-- Title -->
                            <h5 class="h5-md">GOLD MEDAL</h5>
                            </p>

                        </div>
                    </div>

                    <!-- FEATURE BOX #2 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-img bg-whitesmoke-gradient">
                                <img class="img-fluid" src="{{ asset('imagefront/silverMedal.png') }}" alt="Silver Medal DICE" />
                            </div>

                            <!-- Title -->
                            <h5 class="h5-md">GOLD SILVER</h5>

                        </div>
                    </div>

                    <!-- FEATURE BOX #3 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-img bg-whitesmoke-gradient">
                                <img class="img-fluid" src="{{ asset('imagefront/bronzeMedal.png') }}" alt="Bronze Medal DICE" />
                            </div>

                            <!-- Title -->
                            <h5 class="h5-md">SILVER BRONZE</h5>
                            </p>

                        </div>
                    </div>

                </div>  <!-- End row -->
            </div>	<!-- END FEATURES-8 WRAPPER -->

            <br>
            <!-- DIVIDER LINE -->
            <hr class="divider">
            <br>

            <!-- Title -->
            <h3 class="h2-sm text-center">ADDTIONAL AWARDS & PRIZES</h3>
            <!-- FEATURES-8 WRAPPER -->
            <div class="fbox-8-wrapper text-center">
                <div class="row row-cols-1 row-cols-md-3">

                    <!-- FEATURE BOX #1 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                           <!-- Image -->
                           <div class="fbox-img bg-whitesmoke-gradient">
                               <img class="img-fluid" src="{{ asset('imagefront/bestCategory.png') }}" alt="Best Category DICE" />
                           </div>

                           <!-- Title -->
                           <h5 class="h5-md">BEST CATEGORY</h5>
                           </p>

                        </div>
                    </div>

                    <!-- FEATURE BOX #2 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                           <!-- Image -->
                           <div class="fbox-img bg-whitesmoke-gradient">
                               <img class="img-fluid" src="{{ asset('imagefront/bestPoster.png') }}" alt="Best Poster DICE" />
                           </div>

                           <!-- Title -->
                           <h5 class="h5-md">BEST POSTER</h5>

                        </div>
                    </div>

                    <!-- FEATURE BOX #3 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                           <!-- Image -->
                           <div class="fbox-img bg-whitesmoke-gradient">
                               <img class="img-fluid" src="{{ asset('imagefront/bestVote.png') }}" alt="Best Vote DICE" />
                           </div>

                           <!-- Title -->
                           <h5 class="h5-md">BEST VOTE</h5>
                           </p>

                        </div>
                    </div>

                    <!-- FEATURE BOX #3 -->
                    <div class="col">
                        <div class="fbox-8 mb-40 wow fadeInUp">

                           <!-- Image -->
                           <div class="fbox-img bg-whitesmoke-gradient">
                               <img class="img-fluid" src="{{ asset('imagefront/bestSales.png') }}" alt="Best Sales DICE" />
                           </div>

                           <!-- Title -->
                           <h5 class="h5-md">BEST SALES</h5>
                           </p>

                        </div>
                    </div>

                </div>  <!-- End row -->
            </div>	<!-- END FEATURES-8 WRAPPER -->

        </div>	   <!-- End container -->
    </section>	<!-- END FAQs-2 -->
@endsection

@section('style')

@endsection
