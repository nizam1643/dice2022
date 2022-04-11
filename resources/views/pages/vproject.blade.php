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
        <section id="faqs-2" class="wide-100 faqs-section division">
            <div class="container">

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <p class="text-center">
                    <form action="{{ route('page.vproject') }}" method="get">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Search Name</label>
                            <select class="form-select" name="search" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <option value="">All</option>
                                <option value="1">IG</option>
                                <option value="2">WEB</option>
                                <option value="3">MA</option>
                            </select>
                            <div class="mb-3"></div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-skyblue tra-grey-hover">Search</button>
                            </div>
                        </div>
                    </form>
                    {{-- <a class="" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                    |    Web Application System (WEB)
                    </a>
                    <a class="" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                    |    Interactive Game Development (IG)
                    </a>
                    <a class="" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                    |   Mobile Application (MA)
                    </a> --}}
                </p>
                <div class="collapse show" id="collapseExample1">
                    <div class="row">
                        @forelse ($data->data as $item1)
                            <div class="col-xl-4 col-12 mb-2">
                                <div class="card h-100">
                                    <img src="{{ $item1->poster }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">{{ $item1->code }}</h5>
                                    <form action="{{ route('page.voteposter1', $item1->id) }}" method="POST">
                                        @csrf
                                        <div class="d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-6">
                                                    {{-- <button type="submit" class="btn btn-skyblue tra-grey-hover">Vote</button> --}}
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ $item1->poster }}" target="_blank" class="btn btn-skyblue tra-grey-hover">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
                {{-- <div class="collapse" id="collapseExample2">
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
                </div> --}}
            </div>

            </div>	   <!-- End container -->
        </section>	<!-- END FAQs-2 -->
    @endsection
@section('style')

@endsection
