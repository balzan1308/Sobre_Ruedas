<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"value="{{$user->name}}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('last_name') }}</label>

    <div class="col-md-6">
        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"value="{{$user->last_name}}" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

        @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"value="{{$user->email}}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-6 offset-md-4">

     <div class="custom-control custom-checkbox">
     <input type="checkbox" class="custom-control-input" 
     value="{{$user->active == 1 ? 1 : 0}}" 
      {{$user->active ==  1 ? "checked" :""}}  id="customCheck" name="active">
        <label class="custom-control-label" for="customCheck">Usuario habilitado</label>
    </div>
    
    </div>
</div>