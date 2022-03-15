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
                            <h2 class="h2-xs">Program & Activity</h2>

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

    <!-- PROJECTS-1
    ============================================= -->
    <section id="faqs-2" class="wide-60 faqs-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-80">

                        <!-- Title -->
                        <h2 class="h2-md">Program & Activity List Will be Updated</h2>

                        <!-- Text -->
                        <p class="p-xl">The Program & Activity section of the website is a great place to find information on upcoming events and activities in your area.
                        </p>

                    </div>
                </div>
            </div>

            <!-- PROJECTS-1 WRAPPER -->
            <div class="row">
                <div class="col gallery-items-list mb-80">
                    <div class="masonry-wrap grid-loaded">

                        <!-- PROJECT #1 -->
                        <div class="project-details masonry-image">

                            <!-- Image -->
                            <div class="project-preview rel">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('imagefront/workshoplaravel.png') }}" alt="Workshop Laravel" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                        </div>	<!-- END PROJECT #1 -->

                    </div>
                </div>
                <div class="col gallery-items-list mb-80">
                    <div class="masonry-wrap grid-loaded">

                        <!-- PROJECT #1 -->
                        <div class="project-details masonry-image">

                            <!-- Image -->
                            <div class="project-preview rel">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('imagefront/workshopunity.png') }}" alt="Workshop Unity" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                        </div>	<!-- END PROJECT #1 -->

                    </div>
                </div>
                {{-- <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">

                        <!-- PROJECT #1 -->
                        <div class="project-details masonry-image">

                            <!-- Image -->
                            <div class="project-preview rel">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('front/HTML/images/projects/project-05.jpg') }}" alt="project-preview" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                        </div>	<!-- END PROJECT #1 -->

                    </div>
                </div> --}}
            </div>	<!-- END PROJECTS-1 WRAPPER -->


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-80">

                        <!-- Title -->
                        <h3 class="h3-md">COMING SOON</h3>

                        <!-- Text -->
                        <p class="p-xl">The Program & Activity section of the website is a great place to find information on upcoming events and activities in your area.
                        </p>

                    </div>
                </div>
            </div>


        </div>	   <!-- End container -->
    </section>	<!-- END PROJECTS-1 -->
@endsection

@section('style')

@endsection
