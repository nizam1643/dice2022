@extends('front.master')

@section('style')
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
</style>

<script src="https://cdn.logwork.com/widget/countdown.js"></script>

@endsection

@section('content')
<div id="page" class="page">

    <!-- HEADER
    ============================================= -->
    <header id="header" class="header tra-menu navbar-dark">
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
                    <div class="desktoplogo"><a href="#hero-8" class="logo-white"><img src="{{ asset('imagefront/4.png') }}" alt="Logo DICE 2022"></a></div>

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

                            <!-- VIRTUAL -->
                            <li aria-haspopup="true"><a href="#">Virtual Booth <span class="wsarrow"></span></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ route('page.vproject') }}">Project List</a></li>
                                    <li aria-haspopup="true"><a href="{{ route('page.vmarketplace') }}">MarketPlace</a></li>
                                </ul>
                            </li>

                            <!-- HOME -->
                            <li class="nl-simple" aria-haspopup="true"><a href="{{ route('page.about') }}">About Us</a></li>

                        </ul>
                    </nav>	<!-- END MAIN MENU -->

                </div>
            </div>	<!-- END NAVIGATION MENU -->

        </div>     <!-- End header-wrapper -->
    </header>	<!-- END HEADER -->

    <!-- HERO-8
    ============================================= -->
    <section id="hero-8" class="bg-fixed hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- HERO IMAGE -->
                <div class="col-lg-6 order-last order-lg-2">
                    <div class="hero-8-img pc-20 text-center">
                        <img class="img-fluid" src="{{ asset('front/HTML/images/hero-8-img.png') }}" alt="hero-image">
                    </div>
                </div>

                <!-- HERO TEXT -->
                <div class="col-lg-6 order-first order-lg-2">
                    <div class="hero-8-txt">

                        <!-- Title -->
                        <h2 class="h2-md">DICE 2022</h2>
                        <h2 class="h2-md">"Technology and Creativity Inspired Ingenious Maker"</h2>

                        <!-- Text -->
                        <p class="p-lg">A new generation of inventors is using technology to create ingenious new products. These makers are inspired by their creativity and love of tinkering, and they are using modern tools and techniques to bring their ideas to life.
                        </p>

                    </div>
                </div>	<!-- END HERO TEXT -->

            </div>    <!-- End row -->
        </div>	   <!-- End container -->

        <!-- WAVE SHAPE BOTTOM -->
        <div class="wave-shape-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 140"><path fill="#ffffff" fill-opacity="1" d="M0,64L120,74.7C240,85,480,107,720,117.3C960,128,1200,128,1320,128L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        </div>

    </section>	<!-- END HERO-8 -->

    <!-- CONTENT-3
    ============================================= -->
    <section id="content-3" class="content-3 wide-60 content-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <!-- Title -->
                        <h2 class="h2-sm">Diploma Innovative & Creative Project Exhibition (DICE 2022)</h2>

                        <!-- Text -->
                        <p class="p-xl">DICE are annual events at Universiti Pendidikan Sultan Idris (UPSI) where students in the final year of their diploma show off their work and project. The exhibition can include projects from a variety of technology, such as digital art, game design, system architecture, software engineering, and computer science.
                        </p>

                    </div>
                </div>
            </div>

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <!-- Title -->
                        <h2 class="h2-sm">Important Dates</h2>

                        <!-- Text -->
                        <p class="p-xl">Please alert with the important deadlines for registration and submission of project.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FEATURES-4 WRAPPER -->
            <div class="fbox-4-wrapper fbox-4-wide">
                <div class="row row-cols-1 row-cols-md-2">

                    <!-- FEATURE BOX #1 -->
                     <div class="col">
                         <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                             <!-- Icon -->
                             <div class="fbox-ico">
                                 <div class="ico-65 skyblue-color">
                                    <span class="flaticon-album"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-sm">Pre-Registeration</h5>
                                <h5 class="h5-sm">DATE: 17-24 FEBRUARY 2022</h5>

                                <!-- Text -->
                                <p class="p-lg">Don't miss out on this amazing opportunity to get a head start on your university career.
                                </p>

                            </div>

                         </div>
                     </div>

                     <!-- FEATURE BOX #2 -->
                     <div class="col">
                         <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                             <!-- Icon -->
                             <div class="fbox-ico">
                                 <div class="ico-65 skyblue-color">
                                    <span class="flaticon-seo"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-sm">Submission</h5>
                                <h5 class="h5-sm">DATE: 04-10 APRIL 2022</h5>

                                <!-- Text -->
                                <p class="p-lg">Take your time working on a project and submit your project by the end of the month.
                                </p>

                            </div>

                         </div>
                     </div>

                     <!-- FEATURE BOX #3 -->
                     <div class="col">
                         <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                             <!-- Icon -->
                             <div class="fbox-ico">
                                 <div class="ico-65 skyblue-color">
                                    <span class="flaticon-click-2"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-sm">Evaluation Day</h5>
                                <h5 class="h5-sm">DATE: 11-14 pril 2022 </h5>

                                <!-- Text -->
                                <p class="p-lg">Don't miss the opportunity to participate in various exciting activities during this week.
                                </p>

                            </div>

                         </div>
                     </div>

                     <!-- FEATURE BOX #4 -->
                     <div class="col">
                         <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                             <!-- Icon -->
                             <div class="fbox-ico">
                                 <div class="ico-65 skyblue-color">
                                    <span class="flaticon-layers"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-sm">Result Announcement</h5>
                                <h5 class="h5-sm">date: 15 april 2022</h5>

                                <!-- Text -->
                                <p class="p-lg">The results of the project evaluation are fixed and confirmed by the coordinator
                                </p>

                            </div>

                         </div>
                     </div>

                 </div>
            </div>    <!-- END FEATURES-4 WRAPPER -->

        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-3 -->


    <!-- CONTENT-3
    ============================================= -->
    <section id="content-3" class="content-3 wide-60 content-section division custombg2">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <!-- Title -->
                        <h2 class="h2-sm">Information Slide</h2>

                        <!-- Text -->
                        <p class="p-xl mb-4">On this slide you will find information about the event and activity. This event is a great opportunity to learn more about the topic and network with other professionals.
                        </p>

                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('imageslider/1.png') }}" class="d-block w-100" alt="Main poster">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <!-- Text -->
                        <p class="p-xl mb-4">An information slide for the event and activity "DICE 2022" is shown. The slide includes the time, date, and location of the event, as well as a brief description of the event.
                        </p>

                    </div>
                </div>
            </div>

        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-3 -->

    <!-- CONTENT-3
    ============================================= -->
    <section id="content-3" class="content-3 wide-60 content-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <!-- Title -->
                        <h2 class="h2-sm">Submission Countdown</h2>

                        <!-- Text -->
                        <p class="p-xl">
                            In just a few weeks, submission countdown will be over and participants DICE 2022 will be able to finally start involved the new chapter of the event.
                        </p>

                        <a href="https://logwork.com/countdown-sbdb" class="countdown-timer" data-timezone="Asia/Kuala_Lumpur" data-date="2022-04-04 09:00">Countdown</a>

                    </div>
                </div>
            </div>

        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-3 -->


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

</div>
@endsection

@section('script')

@endsection
