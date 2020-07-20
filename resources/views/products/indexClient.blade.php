@extends('layouts.app')

@section('content')
<div class="card-columns">
    @foreach($products as $products )
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <div class="card disabled"  aria-disabled="true"  style="width:300px">
                <div class="card-body">
                <img class="card-img-top" src="../../../images/{{ $products->image }}" alt="Card image" style="width:100%">
                <div class="card body">
                  <h4 class="card-title">{{$products->name }}</h4><br>
                  <a href="{{ route('product.show', $products->id) }}" class="btn btn-primary ">detalles</a>
                  <a href="{{ route('product.edit', $products->id) }}" class="btn btn-secondary ">Editar</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach 

    <div class="">
      {{-- $products->links() --}}
    </div>   
  </div>
  @endsection