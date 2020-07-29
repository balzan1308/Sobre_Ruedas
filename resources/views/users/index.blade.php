@extends('layouts.app')

@section('content')
<table class="table">
  <div class="container">
   <h2>users <br> <a href="users/create"><button type="button" class="btn btn-primary">new user</button></a></h2>

   <table class="table table-hover">
    <thead>
      <tr>
       <th scope="col">id</th>
       <th scope="col">name</th>
       <th scope="col">lastName</th>
       <th scope="col">email</th>
       <th scope="col">opciones</th>
     
      </tr>
    </thead>
    <tbody>
     @foreach($users as $user)
        <tr>
         <th scope="row">{{$user->id}}</th>
         <td>{{$user->name}}</td>
         <td>{{$user->last_name}}</td>
         <td>{{$user->email}}</td>
         <td>
          <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-primary">edit</button></a>
           <a href="{{route('users.show', $user->id) }}"><button type="button" class="btn btn-secondary">show</button></a>
           </td>
        </tr>
      @endforeach
    </tbody>
  </div>
</table>
<div>
  {{ $users->links() }}
</div>
@endsection