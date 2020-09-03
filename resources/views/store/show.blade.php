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
						<h3 class="product-price">{{number_format ($product->price)}} </h3>
					
					</div>
					<h3>description: {{$product->description}}</h3>
					<h3>category: {{$product->category->name}}</h3>
		            
					<div class="add-to-cart">
						
						<form action="{{ route('cart.add', $product->id) }}">
						   <div>
							   <h3>units:</h3>
							   <input name="quantity" type="text" class="input-small" value="1">
							   <button type="submit"class="add-to-cart-btn">agregar al carrito</button>
						   </div>
						   
					   </form>
				   </div>
				</div>
			</div>
			
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
@include('layouts.footershop')