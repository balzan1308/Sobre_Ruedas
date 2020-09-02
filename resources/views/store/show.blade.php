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
						
						<form action="{{ route('cart.add', $product->id) }}">
						   <div>
							   <h3>Cantidad:</h3>
							   <input name="quantity" type="text" class="input-small" value="1">
							   <button type="submit"class="add-to-cart-btn"><i></i> agregar al carrito</button>
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