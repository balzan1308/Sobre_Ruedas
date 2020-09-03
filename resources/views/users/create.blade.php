@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Product <br></h2>
    <div class="row">
        <div class="col-sm-4">
                    <form method="POST" action="/users">
                        @csrf
                        @include('users._form')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">Crear </button>
                                <a href="{{route('users.index')}}"><button type="button" class="btn btn-outline-danger">Cancelar</button>
                                </a>
                            </div>

                        </div>
                    </form>
                
            
        </div>
    </div>
</div>
@endsection