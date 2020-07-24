<div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="escribe tu nombre">
</div>
    <div class="form-group">
    <label for="price">price</label>
    <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="escribe tu nombre">
</div>
<div class="form-group">
       <label for="stock">stock</label>
       <input type="text" class="form-control" name="stock" value="{{$product->stock}}" placeholder="escribe tu nombre">
</div>
<div class="form-group">
      <label for="description">description</label>
      <input type="text" class="form-control" name="description" value="{{$product->description}}" placeholder="escribe tu nombre">
</div>
<div class="form-group">
    <label for="">Edith Category</label><br>
    <select name="category_id" id="inputCategoria:id" class=·form-control>
        <option value="{{$product->category_id}}">
    @foreach($category as $categories)
            @if($product->category_id == $categories->id)
                {{$categories->name}}
                    </option>
            @endif 
    @endforeach
    
     @foreach($category as $category )
        <option value="{{$category->id}}"> {{$category->name}} </option>
    @endforeach
    
    </select>
</div>
<div class="form-group">

    <label for="" >Imagen</label>
    <input type="file" name="image" class="form-control" value="{{$product->image}}">
   

</div>
<div class="custom-control custom-checkbox">
       <input type="checkbox" class="custom-control-input" 
        value="{{$product->active == 1 ?  1 : 0}}" 
       {{ $product->active == 1  ?  'checked' :" "}}  id="customCheck" name="active">
       <label class="custom-control-label" for="customCheck">¿Habilitar producto?</label>
</div>
     