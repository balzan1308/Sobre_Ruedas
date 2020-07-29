@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">

            <form action="/categories"method="POST" enctype="multipart/form-data">
                @csrf
                @include('categories.__form')
                
                <button type="submit" class="btn btn-primary">ingresar</button>

            </form>
            
        </div>
    </div>
</div>
@endsection"