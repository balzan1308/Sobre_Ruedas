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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

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
