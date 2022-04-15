@extends('front.second')

@section('style')
<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.13.216/build/pdf.min.js"></script>
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
                            <h2 class="h2-xs">Winner Result</h2>

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
                        <h2 class="h2-sm">The result list of the Winner DICE2022 is now available.</h2>

                        <!-- Text -->
                        <p class="p-xl">The results of the winner are in! After a long and hard-fought election, the final results are in and the new winner has been announced. Congratulations to the new winner on their victory!
                        </p>

                        <!-- Text -->
                        <p class="p-xl"><a class="text-danger" href="{{ asset('imagefront/OResultsList.pdf') }}" target="_blank">For mobile browser, click Here to view the result list of the winner.</a></p>
                        </p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div>
                                                <iframe id="pdf-js-viewer" src="{{ asset('imagefront/OResultsList.pdf') }}" title="webviewer" frameborder="0" width="800" height="800"></iframe>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>	   <!-- End container -->
    </section>	<!-- END FAQs-2 -->
@endsection

@section('style')

@endsection
