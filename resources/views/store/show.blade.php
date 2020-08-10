@include('layouts.headershop')
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Product main img -->
			<div class="col-md-5 col-md-pull-0">
				<div id="product-main-img">
					<div class="product-preview">
						<img src="../../../images/{{$product->image}}" width="200" alt="">
					</div>
				</div>
			</div>
			<!-- /Product main img -->

			

			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<h3 class="product-name">{{$product->name}}</h3>
					<div>
						<h3 class="product-price">{{$product->price}} </h3>
						<span class="product-available">In Stock {{$product->stock}}</span>
					</div>
					<p>description: {{$product->description}}</p>
					<p>category: {{$product->category->name}}</p>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
@include('layouts.footershop')