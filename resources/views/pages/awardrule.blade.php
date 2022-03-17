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
                            <h2 class="h2-xs">Rules & Judging Criteria</h2>

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

					<!-- TERMS CONTENT -->
					<div class="row justify-content-center">
						<div class="col-lg-10">


							<!-- TERMS TITLE -->
							<div class="terms-title text-center">

								<!-- Title -->
								<h2 class="h2-md">Please Follow the Instructions Provided Carefully</h2>

								<!-- Text -->
								<p class="p-xl grey-color">In order to participate in the DICE 2022 event, you must familiarize yourself with the rules and judging criteria.
                                    This document outlines the guidelines for game submissions, as well as the judging process that will be used to determine the winners.</p>

							</div>

							<!-- DIVIDER LINE -->
							<hr class="divider">

                            <!-- Title -->
							<h2 class="h2-md">Rules Exhibition:</h2>

                            <div class="row d-flex align-items-center">

                                <!-- TEXT BLOCK -->
                                <div class="col-md-7 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">1.    How can I participate in the DICE 2022 Exhibition?</h5>

                                            <!-- List -->
                                            <ul class="simple-list">

                                                <li class="list-item">
                                                    <p class="p-lg">
                                                        a)
                                                            DICE 2022 Exhibition is open for Diploma Final Year Project (FYP) students from FSKIK include Diploma Computer Science (Internet Computing) (A2913), and Diploma Game Design and Development (A2160).
                                                            The aim of this competition is to provide a platform for students to present their Final Year Project and acquire in return experience and insight from people in the industry.
                                                    </p>
                                                </li>
                                            </ul>

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- IMAGE BLOCK -->
                                <div class="col-md-5 col-lg-6">
                                    <div class="rel img-block left-column wow fadeInRight">
                                            <img class="img-fluid" src="{{ asset('front/HTML/images/seo-01.png') }}" width="60%" alt="video-preview">
                                    </div>
                                </div>

                            </div>

                            <div class="row d-flex align-items-center">

                                <!-- TEXT BLOCK -->
                                <div class="col-md-7 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">2.    What type of work can be submitted?</h5>

                                            <!-- List -->
                                            <ul class="simple-list">

                                                <li class="list-item">
                                                    <!-- Text -->
                                                    <p class="p-lg">
                                                        a) Participation can be done as individual only and are allowed to submit ONE submission only .
                                                    </p>
                                                </li>
                                                <li class="list-item">
                                                    <!-- Text -->
                                                    <p class="p-lg">
                                                        b) Each submission consists of a registration id provided, and is required to upload poster and video files through the Dynanity Submission System.
                                                    </p>
                                                </li>
                                                <li class="list-item">
                                                    <!-- Text -->
                                                    <p class="p-lg">
                                                        c) Submission via google drive link with video presentation and poster is only allowed for students who have internet access problems with the permission of the Coordinator
                                                    </p>
                                                </li>
                                            </ul>

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- IMAGE BLOCK -->
                                <div class="col-md-5 col-lg-6">
                                    <div class="rel img-block left-column wow fadeInRight">
                                            <img class="img-fluid" src="{{ asset('front/HTML/images/seo-01.png') }}" width="60%" alt="video-preview">
                                    </div>
                                </div>

                            </div>

                            <div class="row d-flex align-items-center">

                                <!-- TEXT BLOCK -->
                                <div class="col-md-7 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">3.    What is a category exhibition for DICE 2022?</h5>

                                            <!-- List -->
                                            <ul class="simple-list">

                                                <li class="list-item">
                                                    <p class="p-lg"> Web Application System (WEB)</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Interactive Game Development (IG)</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Mobile Application (MA)</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Internet of Things (IoT)</p>
                                                </li>

                                            </ul>

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- IMAGE BLOCK -->
                                <div class="col-md-5 col-lg-6">
                                    <div class="rel img-block left-column wow fadeInRight">
                                            <img class="img-fluid" src="{{ asset('front/HTML/images/seo-01.png') }}" width="60%" alt="video-preview">
                                    </div>
                                </div>

                            </div>

                            <div class="row d-flex align-items-center mb-80">

                            </div>

                            <!-- Title -->
							<h2 class="h2-md">Judging Criteria:</h2>

                            <div class="row d-flex align-items-center">

                                <!-- TEXT BLOCK -->
                                <div class="col-md-7 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">1.    What factors are considered when evaluating a product?</h5>

                                            <!-- List -->

								<!-- Text -->
								<p class="p-lg">
                                    a) Product evaluation or product innovations will be made by experienced judges, selected by organizers ,
                                    based on the prize categories. Organizers have the right to make any changes in the agenda, prizes and/or program at their discretion. Invitation to participants can be cancelled or changed depending on the number of applicants. All decisions made by the organizers will be final.
                                    The organizers reserve the right to modify the general rules if deemed necessary.
								</p>

                                <p class="p-lg">
                                    b) Participants are to demonstrate their innovations through a video presentation and summarize their project in the form of a poster . During the activity, they will be monitored and evaluated.
                                    The goal of this activity is to determine whether exploitation by commercial companies or institutions, through partnerships, is feasible.
                                </p>

                                <p class="p-lg">
                                    c) In order to avoid plagiarism, product development should be unique and original, not resembling existing products or studies by more than 30%.
                                    If a student is found to be committing academic dishonesty (or is suspected of doing so), the student will face disciplinary action.
                                </p>

                                <p class="p-lg">
                                    d) Judges will evaluate the participants' project based on a number of criteria, including uniqueness, creativity, educational value and practicality.
                                </p>
                                <!-- List -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg"> Video Presentation</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Poster</p>
									</li>

								</ul>

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- IMAGE BLOCK -->
                                <div class="col-md-5 col-lg-6">
                                    <div class="rel img-block left-column wow fadeInRight">
                                            <img class="img-fluid" src="{{ asset('front/HTML/images/seo-01.png') }}" width="60%" alt="video-preview">
                                    </div>
                                </div>

                            </div>

                            <div class="row d-flex align-items-center mb-80">

                            </div>

                            <!-- Title -->
							<h2 class="h2-md">Poster Presentation Details:</h2>

                            <div class="row d-flex align-items-center">

                                <!-- TEXT BLOCK -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">1.    What are the key components of a poster presentation?</h5>

                                            <!-- Text -->
                                            <p class="p-lg">
                                                a) Participant must provide a poster of own product.
                                            </p>

                                            <!-- Text -->
                                            <p class="p-lg">
                                                b) Poster size : A3
                                            </p>

                                            <!-- Text -->
                                            <p class="p-lg">
                                                c) Content of Poster :
                                            </p>

                                            <!-- List -->
                                            <ul class="simple-list">

                                                <li class="list-item">
                                                    <p class="p-lg"> Project Title</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Student Information</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Sysnopsis/Abstract</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Objective</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Methodology/ Game Design</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Benefit</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Testinng Result</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Product Interface</p>
                                                </li>

                                                <li class="list-item">
                                                    <p class="p-lg">Conclusion</p>
                                                </li>

                                            </ul>

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- IMAGE BLOCK -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="rel img-block left-column wow fadeInRight">
                                            <img class="img-fluid" src="{{ asset('imagefront/dice_poster.png') }}" width="70%" alt="DICE Poster Template">
                                            <p class="p-lg text-center">
                                                DICE Poster Template
                                            </p>
                                            <p class="p-lg text-center">
                                                Download Template: <a href="{{ asset('file/DICE_Info_A3 Poster_1.pptx.pptx') }}" class="text-danger" download>DICE Poster Template</a>
                                            </p>
                                    </div>
                                </div>

                                <!-- TEXT BLOCK -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">Example Poster 1</h5>

                                            <img class="img-fluid" src="{{ asset('imagefront/posterIG18.png') }}" width="90%" alt="DICE Poster Template">

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- TEXT BLOCK -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                                        <!-- TEXT BOX -->
                                        <div class="txt-box">
                                            <br>
                                            <!-- Title -->
                                            <h5 class="h5-md">Example Poster 2</h5>

                                            <img class="img-fluid" src="{{ asset('imagefront/posterWEB21.png') }}" width="90%" alt="DICE Poster Template">

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                            </div>

                            <div class="row d-flex align-items-center mb-80">

                            </div>

                            <!-- Title -->
							<h2 class="h2-md">Video Presentation Details:</h2>

                            <div class="row d-flex align-items-center">

                                <!-- TEXT BLOCK -->
                                <div class="col-md-7 col-lg-6">
                                    <div class="txt-block right-column wow fadeInLeft">

                            <!-- TEXT BOX -->
                            <div class="txt-box">
                                <br>
                                <!-- Title -->
                                <h5 class="h5-md">1.    What are the key components of a video presentation?</h5>

                                <!-- List -->


								<!-- Text -->
								<p class="p-lg">
                                    a) Participant must provide a video for own project.
								</p>

                                <!-- Text -->
								<p class="p-lg">
                                    b) Duration of video : 5 minutes (3 minute product introduction + 2 minute product demonstration)
								</p>

                                <!-- Text -->
								<p class="p-lg">
                                    c) The organizer reserves the right to reject video presentation for the participant that has been sent if there is exceed of time that given for the video presentation.
								</p>

                                        </div>	<!-- END TEXT BOX -->

                                    </div>
                                </div>	<!-- END TEXT BLOCK -->

                                <!-- IMAGE BLOCK -->
                                <div class="col-md-5 col-lg-6">
                                    <div class="rel img-block left-column wow fadeInRight">
                                        <a target="_blank" href="https://www.youtube.com/watch?v=cYwiX1Tnwo8" class="text-danger">
                                            <img class="img-fluid" src="{{ asset('file/Screenshot 2022-03-17 143830.png') }}" alt="video-preview">
                                                Example Video: DICE 2021 Video
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="row d-flex align-items-center">

                            </div>

					</div>     <!-- End row -->

        </div>	   <!-- End container -->
    </section>	<!-- END FAQs-2 -->
@endsection

@section('style')

@endsection
