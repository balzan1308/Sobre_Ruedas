<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Sobre-Ruedas</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		
		<link href="{{ mix('store/css/all.css')}}" type="text/css" rel="stylesheet" media="all"/>
		

		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Sobre.Ruedas@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
					
						<div class="info">
							<a href="#" class="d-block">
								@guest
								<li><a class="nav-link" href="{{ route('login') }}"><h4>Login</h4></a></li>
								<li><a class="nav-link" href="{{ route('register') }}"><h4>register</h4></a></li>
								@else
								<h4>{{ Auth::user()->name }}</h4>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
							    		   document.getElementById('logout-form').submit();">
									<h4>Cerrar Sesión</h4>
								</a>
	
								<form id="logout-form" action="{{ route('logout') }}" method="POST"
									style="display: none;">
									@csrf
								</form>
	
									@endguest
								</a>
							</div>
						
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="/images/logo.png" alt="" style="width:100%">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

			            <!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form class="form-inline" action="{{route('products/indexClient')}}" metohd="GET">
                                   <input class="form-control form-control-sm ml-3 w-75" id="name" type="text" placeholder="Search" name="name" aria-label="Search">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
			  <!-- ACCOUNT -->
			 <div class="col-md-3 clearfix">
				<div class="header-ctn">
					<!-- Wishlist -->
					<div>
						<a href="#">
							<i class="fa fa-heart-o"></i>
							<span>Your Wishlist</span>
							<div class="qty">2</div>
						</a>
					</div>
					<!-- /Wishlist -->

					<!-- Cart -->
					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							<i class="fa fa-shopping-cart"></i>
							<span>Your Cart</span>
							<div class="qty">3</div>
						</a>
						<div class="cart-dropdown">
							<div class="cart-list">
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
									</div>
									<button class="delete"><i class="fa fa-close"></i></button>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
									</div>
									<button class="delete"><i class="fa fa-close"></i></button>
								</div>
							</div>
							<div class="cart-summary">
								<small>3 Item(s) selected</small>
								<h5>SUBTOTAL: $2940.00</h5>
							</div>
							<div class="cart-btns">
								<a href="#">View Cart</a>
								<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /Cart -->

					<!-- Menu Toogle -->
					<div class="menu-toggle">
						<a href="#">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</a>
					</div>
					<!-- /Menu Toogle -->
				</div>
			</div>
			<!-- /ACCOUNT -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
 </div>
					</div>
				</div>
            </div>
          
			

			
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="/"><h3>Home</h3></a></li>
						<li><a><h3>Categories-></h3></a></li>
						<li><ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
								<form action="{{route('products/indexClient')}}" method="get">
									<input type="text" name="category" id="" value="Honda" hidden>
									<button type="submit"  class="btn btn-dark btn-sm btn-block text-left"
										class="{{ Request::path() === 'Honda' ? 'nav-link active' : 'nav-link' }}">
										<h3>Honda</h3>
									</button>
								</form>
								</a>
							</li>
						</ul></li>
						<li><ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
								<form action="{{route('products/indexClient')}}" method="get">
									<input type="text" name="category" id="" value="Yamaha" hidden>
									<button type="submit"  class="btn btn-dark btn-sm btn-block text-left"
										class="{{ Request::path() === 'Yamaha' ? 'nav-link active' : 'nav-link' }}">
										<h3>Yamaha</h3>
									</button>
								</form>
								</a>
							</li>
						</ul></li>
						<li><ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
								<form action="{{route('products/indexClient')}}" method="get">
									<input type="text" name="category" id="" value="Auteco" hidden>
									<button type="submit"  class="btn btn-dark btn-sm btn-block text-left"
										class="{{ Request::path() === 'Auteco' ? 'nav-link active' : 'nav-link' }}">
										<h3>Auteco</h3>
									</button>
								</form>
								</a>
							</li>
						</ul></li>
						<li><ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
								<form action="{{route('products/indexClient')}}" method="get">
									<input type="text" name="category" id="" value="Kawasaki" hidden>
									<button type="submit"  class="btn btn-dark btn-sm btn-block text-left"
										class="{{ Request::path() === 'Kawasaki' ? 'nav-link active' : 'nav-link' }}">
										<h3>Kawasaki</h3>
									</button>
								</form>
								</a>
							</li>
						</ul></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
	    <div class="section">
            <div class="card-columns">
				<div class="row">
                 @foreach($products as $product )
                            <div class="col-md-6 col-xs-5">
                                <div class="card disabled"  aria-disabled="true"  style="width:60%">
                                    <div class="card-body">
                                      <img class="card-img-top" src="../../../images/{{ $product->image }}" alt="Card image" style="width:75%">
                                        <div class="card body">
                                          <h3 class="card-title">{{$product->name }}</h3>
										   <a href="{{ route('products/show', $product->id) }}" class="btn btn-primary ">detalles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
					@endforeach
				</div>  
            </div>
        </div>
        <div class="">
          {{ $products->links() }}
		</div> 
	 
	  
   
		

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Sobre.Ruedas@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Honda</a></li>
									<li><a href="#">Yamaha</a></li>
									<li><a href="#">Auteco</a></li>
									<li><a href="#">kawasaki</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
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
		<script src="{{ mix('store/js/all.js') }}"></script>

	</body>
</html>

