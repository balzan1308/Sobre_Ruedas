<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"value="{{$product->name}}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

    <div class="col-md-6">
        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"value="{{($product->price)}}" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('stock') }}</label>

    <div class="col-md-6">
        <input id="stock" type="text" class="form-control  @error('stock') is-invalid @enderror"value="{{$product->stock}}" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

        @error('stock')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

    <div class="col-md-6">
        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"value="{{$product->description}}" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="" class="col-md-4 col-form-label text-md-right">Edith Category</label><br>
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

    <label for="" class="col-md-4 col-form-label text-md-right" >image</label>
    <input type="file" name="image" class="form-control" value="{{$product->image}}">
   
</div>
<p>
    <label for="" >current image</label>
    <img src="../../../images/{{$product->image}}" width="200" alt="">
</p>
<div  class="custom-control custom-checkbox"  >
       <input type="checkbox" class="custom-control-input" 
        value="{{$product->active == 1 ?  1 : 0}}" 
       {{ $product->active == 1  ?  'checked' :" "}}  id="customCheck" name="active">
       <label class="custom-control-label" for="customCheck">¿Habilitar producto?</label>
</div>
     