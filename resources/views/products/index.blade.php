@extends('layouts.app')

@section('content')
<table class="table">
<div class="container">
<h2>Lista de usuario registrados <br> <a href="product/create"><button type="button" class="btn btn-success">registrar nuevo Producto</button></a></h2>

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

          
          <a href="{{ route('product.edit', $product->id) }}"><button type="button" class="btn btn-primary">Editar</button></a>
          <a href="{{route('product.show', $product->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
         
         
        
        

         
          
           </td>
     </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  @endsection