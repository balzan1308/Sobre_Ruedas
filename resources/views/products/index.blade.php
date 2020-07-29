@extends('layouts.app')

@section('content')
<table class="table">
  <div class="container">
    <form class="form-inline" action="{{route('product.index')}}" metohd="GET">
      <i class="fas fa-search" aria-hidden="true"></i>
        <label for="name" >Nombre</label>
      <input class="form-control form-control-sm ml-3 w-75" id="name" type="text" placeholder="Search" name="filter[name]" aria-label="Search">
    </form>
    <h2>products<br> <a href="product/create"><button type="button" class="btn btn-primary">new product</button></a></h2>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">stock</th>
            <th scope="col">opciones</th>
     
          </tr>
        </thead>
      <tbody>
       @foreach($products as $product)
          <tr>
           <th scope="row">{{$product->id}}</th>
           <td>{{$product->name}}</td>
           <td>{{$product->price}}</td>
           <td>{{$product->stock}}</td>
           <td>
           <a href="{{ route('product.edit', $product->id) }}"><button type="button" class="btn btn-primary">edit</button></a>
           <a href="{{route('product.show', $product->id) }}"><button type="button" class="btn btn-secondary">show</button></a>
           </td>
          </tr>
        @endforeach
      </tbody>

  </div>
</table>
  <div>
    {{ $products->links() }}
  </div>
  @endsection