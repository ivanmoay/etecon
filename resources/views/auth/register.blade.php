<form method="POST" action="/register">
@csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
        @error('email')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        @error('name')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">phone_number</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{old('phone_number')}}">
        @error('phone_number')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">credentials</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="credentials" name="credentials" value="{{old('credentials')}}">
        @error('credentials')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">                            
        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
        @error('password')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Repeat Password</label>
        <div class="col-sm-10">                            
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
        @error('password_confirmation')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>                        
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>