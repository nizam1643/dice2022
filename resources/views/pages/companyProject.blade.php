<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ asset('market/css/bootstrap.min.css') }}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{ asset('market/css/slick.css') }}"/>
		<link type="text/css" rel="stylesheet" href="{{ asset('market/css/slick-theme.css') }}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{ asset('market/css/nouislider.min.css') }}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ asset('market/css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ asset('market/css/style.css') }}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        <style>
            .custom-panding {
                padding-top: 0px;
                padding-bottom: 400px;
            }

            .ratings i {
                font-size: 16px;
                color: red
            }

            .strike-text {
                color: red;
                text-decoration: line-through
            }

            .product-image {
                width: 100%
            }

            .dot {
                height: 7px;
                width: 7px;
                margin-left: 6px;
                margin-right: 6px;
                margin-top: 3px;
                background-color: blue;
                border-radius: 50%;
                display: inline-block
            }

            .spec-1 {
                color: #938787;
                font-size: 15px
            }

            h5 {
                font-weight: 400
            }

            .para {
                font-size: 16px
            }
            img {
                width: 100%;
                height: 250px;
            }
        </style>

    </head>
	<body>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{ route('page.vmarketplace') }}">Home</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

        		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">


                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title text-center" style="color: blue">My Balance Now: RM{{ auth()->user()->money_point }}</h3>
                        <div class="section-nav">

                        </div>
                    </div>

                </div>
					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title text-center">{{ $data1->data->name }}</h3>
							<div class="section-nav">

							</div>
						</div>

					</div>
					<!-- /section title -->

                    <!-- section title -->
					<div class="col-md-12">
                        <div class="collapse show" id="collapseExample1">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ $data1->data->banner }}" alt="">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- /section title -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">MAIN Products</h3>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    </div>
                    <!-- product -->
                    @forelse ($data1->data->company_product as $item1)
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $item1->image }}" alt="">
                                <div class="product-label">
                                    <span class="sale">NEW</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">{{ $item1->name }}</a></h3>
                                <h4 class="product-price">RM{{ $item1->price }}</h4>
                                <div class="product-rating">
                                </div>
                                <a href="{{ route('page.vshow', [Request::segment(4), $item1->id]) }}">
                                    <div class="product-btns">
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button><p>View Product</p>
                                    </div>
                                </a>
                            </div>
                            {{-- <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div> --}}
                        </div>
                    </div>
                    @empty

                    @endforelse
                    <!-- /product -->
                </div>
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section custom-panding">
			<!-- container -->
			<div class="container">

                <div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Merchandise Products</h3>
						</div>
					</div>

                    @forelse ($data1->data->company_merchandise as $item2)
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $item2->image }}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">{{ $item2->name }}</a></h3>
                                <h4 class="product-price">RM{{ $item2->price }}</h4>
                                <div class="product-rating">
                                </div>
                                    @guest
                                        <a href="{{ route('page.vmarketplace') }}">Please login to buy product</a>
                                    @else
                                        <form action="{{ route('payment.create') }}">
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->name }}">
                                            <input type="hidden" name="company_slug"  value="{{ Request::segment(4) }}">
                                            <input type="hidden" name="item_id" value="{{ $item2->id }}">
                                            <input type="hidden" name="price" value="{{ $item2->price }}">
                                            <input type="hidden" name="item_type" value="MERCHANDISE">
                                            <button class="add-to-cart-btn" onclick="myFunction()" type="submit"><i class="fa fa-shopping-cart"></i> Buy Now</button>
                                        </form>
                                    @endguest
                            </div>

                        </div>
                    </div>
                    @empty

                    @endforelse

				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- FOOTER -->
		<footer id="footer">

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ asset('market/js/jquery.min.js') }}"></script>
		<script src="{{ asset('market/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('market/js/slick.min.js') }}"></script>
		<script src="{{ asset('market/js/nouislider.min.js') }}"></script>
		<script src="{{ asset('market/js/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('market/js/main.js') }}"></script>

        <script>
            function myFunction() {
              confirm("Are you sure you want to buy this product?");
            }
        </script>

	</body>
</html>
