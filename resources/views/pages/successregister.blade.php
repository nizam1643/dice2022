@extends('front.second')

@section('style')

@endsection

@section('content')
    <!-- PAGE HERO
    ============================================= -->
    <div id="faqs-page-dice" class="page-hero-section division custombg4">
        <div class="page-hero-overlay division">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="hero-txt text-center white-color">

                            <!-- Title -->
                            <h2 class="h2-xs">Successful Registration</h2>

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
                <div class="col-lg-12 col-xl-12">
                    <div class="section-title title-01 mb-70">

                        <!-- Title -->
                        <h2 class="h2-sm">Congratulations to The Accepted Participants</h2>

                        <!-- Text -->
                        <p class="p-xl">On behalf of the organizers of DICE 2022, we congratulate the participants who successfully registered for the event. We are looking forward to welcoming you in this event in April!
                        </p>

                        <div class="mb-4"></div>
                        <h3 class="h2-sm">SUCCESSFUL REGISTRATION LIST</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Project Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Course</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data->data as $item1)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item1->code }}</td>
                                            <td>{{ $item1->name }}</td>
                                            <td>{{ $item1->title }}</td>
                                            <td>{{ $item1->categoryname }} <br> ({{ $item1->categorycode }})</td>
                                            <td>{{ $item1->coursename }} <br> ({{ $item1->coursecode }})</td>
                                        </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                              </table>


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
