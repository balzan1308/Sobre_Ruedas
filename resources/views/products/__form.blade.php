<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

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
        <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

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
        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
        
</div>
<div class="form-group">
    <select name="category_id" id="inputCategoria:id" class=·form-control>
        <option value="">--escoja la categoria--</option>></option>
        @foreach($category as $category )
        <option value="{{$category->id}}"> {{$category->name}} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="image" >Image</label>
    <input type="file" name="image" class="form-control">
</div>
