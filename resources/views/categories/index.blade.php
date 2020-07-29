@extends('layouts.app')

@section('content')
<table class="table">
  <div class="container">
    <h2>categories<br> <a href="categories/create"><button type="button" class="btn btn-primary">new categorie</button></a></h2>
    
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">slug</th>
            <th scope="col">description</th>
            <th scope="col">opciones</th>
     
          </tr>
        </thead>
      <tbody>
       @foreach($categories as $category)
          <tr>
           <th scope="row">{{$category->id}}</th>
           <td>{{$category->name}}</td>
           <td>{{$category->slug}}</td>
           <td>{{$category->description}}</td>
           <td>
            <a href="{{ route('categories.edit', $category->id) }}"><button type="button" class="btn btn-primary">edit</button></a>
            
            </td>
           
           
          </tr>
        @endforeach
      </tbody>

  </div>
</table>
  
  @endsection