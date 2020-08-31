@include('layouts.headershop')
    <div class="container text-center">
        <div class="page-header">
            <h3><i class="fa fa-shopping-cart"></i> Cart Shop</h3>
        </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                 <th scope="col">image</th>
                 <th scope="col">Product</th>
                 <th scope="col">price</th>
                 <th scope="col">count</th>
                 <th scope="col">subtotal</th>
                 <th scope="col">quitar</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cart as $item)
                 <tr>
                 <td><img src="images/{{ $item->image }}" style="width:25%"> </td>
                 <td>{{$item->name}}</td>
                 <td>{{number_format ($item->price)}}</td>
                 <td>{{$item->quantity}}</td>
                 <td>{{number_format ($item->price * $item->quantity)}}</td>
                 <td>
                     <a href="{{ route('cart/delete', $item->name)}}" class="btn btn-danger">
                         <i class="fa fa-remove"></i>
                     </a>
                 </td>
                 </tr>
                 @empty
                 <h3>tu carrito esta vacio</h3>
                @endforelse
            </tbody>
        </table>
    </div>
    </div>
    @include('layouts.footershop')

