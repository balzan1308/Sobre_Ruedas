@include('layouts.headershop')
<div class="container text-center">
<div class="card-columns">
	<div class="row">
        @forelse($products as $product )
            <div class="col-md-6 col-xs-5">
			    <div class="product-details">
                    <div class="card disabled"  aria-disabled="true"  style="width:60%">
                        <div class="card-body">
                            <img class="card-img-top" src="../../../images/{{ $product->image }}" alt="Card image" style="width:100%" height="170">
								<div class="add-to-cart">
								     <a href="{{ route('products/show', $product->id) }}">  <button class="add-to-cart-btn"><i class=""></i> {{$product->name }}</button></a>
									 
								</div>
									
                         </div>
					</div>
			    </div>
            </div>
			@empty
			<h3>no hay productos</h3>
		   @endforelse
	</div>  
</div>
</div>
<div class="">
{{ $products->links() }}
</div> 
@include('layouts.footershop')