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
                        <h2 class="h2-sm">Call for Jury: DICE 2022</h2>

                        <h4 class="h4-sm">We Appreciate Your Cooperation and Contributions</h4>

                        <!-- Text -->
                        <p class="p-xl">Assalamualaikum & Good Day Prof./Prof. Madya/Dr./Mr./Mrs./Ms.
                        </p>

                        <!-- Text -->
                        <p class="p-xl">Assalamualaikum & Good Day Prof./Prof. Madya/Dr./Mr./Mrs./Ms.
                            We are very pleased to invite you to be a jury in the Diploma Innovative & Creative Project Exhibition 2022 (DICE 2022). Diploma Science Computer and Game Design & Developments in collaboration will be organizing Diploma Innovative & Creative Project Exhibition 2022 (DICE 2022), where the participants will showcase their final year projects through an online exhibition.
                        </p>
                    </div>
                </div>
            </div>
            @php
                $timenow = date('d');
                $timestart = 16;
                $timeend = 20;
            @endphp

            @if ($timenow >= $timestart && $timenow < $timeend)

            <!-- CONTACT FORM -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="form-holder">
                        <form name="contactform" class="row contact-form" action="{{ route('page.juryform') }}" method="POST">
                            @csrf

                            <h3 class="h3-sm text-center">Jury Form</h3>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success text-center">
                                    <h2>{{ $message }}</h2>
                                </div>
                            @endif

                            <!-- Contact Form Input -->
                            <div class="col-md-12">
                                <p class="p-lg">Your Title: </p>
                                <span>Please enter your title name: </span>
                                <input type="text" name="title" class="form-control" placeholder="Your Name*" required>
                            </div>

                            <!-- Contact Form Input -->
                            <div class="col-md-12">
                                <p class="p-lg">Your Name: </p>
                                <span>Please enter your real name: </span>
                                <input type="text" name="namereal" class="form-control" placeholder="Your Name*" required>
                            </div>

                            <div  class="col-md-12">
                                <p class="p-lg">Your Email Address: </p>
                                <span>Please carefully check your email address for accuracy</span>
                                <input type="text" name="email" class="form-control email" placeholder="Email Address*" required>
                            </div>

                            <!-- Contact Form Input -->
                            <div class="col-md-12">
                                <p class="p-lg">Your Phone Number: </p>
                                <span>Please enter your real phone number: </span>
                                <input type="text" name="contact_person" class="form-control name" placeholder="Your Phone Number*" required>
                            </div>

                            <!-- Form Select -->
                            <div class="col-md-12 input-subject">
                                <p class="p-lg">Preferred Category: </p>
                                <span>Choose category, so we know who to send your request to: </span>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Interactive Game Development (IG)" id="defaultCheck1" name="category[]" required>
                                    <label class="form-check-label" for="defaultCheck1">
                                        Interactive Game Development (IG)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Web Application System (WEB)" id="defaultCheck2" name="category[]" required>
                                    <label class="form-check-label" for="defaultCheck2">
                                        Web Application System (WEB)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Mobile Application (MA)" id="defaultCheck3" name="category[]" required>
                                    <label class="form-check-label" for="defaultCheck3">
                                        Mobile Application (MA)
                                    </label>
                                </div>
                            </div>

                            <div  class="col-md-12">
                                <br>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck4" name="declaration" required>
                                    <label class="form-check-label" for="defaultCheck4">
                                        <b>I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief</b>
                                    </label>
                                </div>
                            </div>

                            <!-- Contact Form Button -->
                            <div class="col-md-12 mt-15 form-btn text-right">
                                <button type="submit" class="btn btn-skyblue tra-grey-hover submit">Submit Request</button>
                            </div>

                            <!-- Contact Form Message -->
                            <div class="col-lg-12 contact-form-msg">
                                <span class="loading"></span>
                            </div>

                        </form>
                    </div>
                </div>
            </div>	   <!-- END CONTACT FORM -->
            @endif


        </div>	   <!-- End container -->
    </section>	<!-- END FAQs-2 -->
@endsection

@section('style')

@endsection
