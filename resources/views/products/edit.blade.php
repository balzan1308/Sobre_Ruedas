@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Edit Product <br></h2>
 <div class="row">
    <div class="col-sm-4">
      <form action="{{ route('product.update', $product->id) }}"enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
           @include('products.__form_edit')
        <button type="submit" class="btn btn-primary">editar</button>

      </form>
    </div>
  </div>
</div>
@endsection
