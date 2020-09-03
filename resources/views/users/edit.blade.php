@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Edit Product <br></h2>
    <div class="row">
        <form method="POST" action="{{route('users.update',$user->id)}}">
          @method('PUT')
          @csrf
          @include('users._form_edit')
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary">actualizar </button>
                    <a href="{{route('users.index')}}"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
                </div>
            </div>
        </form>   
    </div>
</div>
@endsection