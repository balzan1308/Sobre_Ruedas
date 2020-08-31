@include('layouts.headershop')
<div class="container text-center">
<div class="card-columns">
	<div class="row">
        @foreach($products as $product )
            <div class="col-md-6 col-xs-5">
			    <div class="product-details">
                    <div class="card disabled"  aria-disabled="true"  style="width:60%">
                        <div class="card-body">
                            <img class="card-img-top" src="../../../images/{{ $product->image }}" alt="Card image" style="width:75%">
								<div class="add-to-cart">
                                    <h3 class="card-title">{{$product->name }}</h3>
								     <a href="{{ route('products/show', $product->id) }}">  <button class="add-to-cart-btn"><i class=""></i> detalles</button></a>
									 <a href="{{ route('cart/show', $product->name) }}">  <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> ADD TO CAR</button></a>
								</div>
									
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
@include('layouts.footershop')