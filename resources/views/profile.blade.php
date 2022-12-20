<a href="/">home</a>

<form method="POST" action="/profile/{{$user->id}}">
@csrf
@method('PUT')
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" readonly>
        @error('email')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        @error('name')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">phone_number</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$user->phone_number}}">
        @error('phone_number')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>   
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">credentials</label>
        <div class="col-sm-10">                            
        <input type="text" class="form-control" id="credentials" name="credentials" value="{{$user->credentials}}">
        @error('credentials')
            <code>{{$message}}</code>
        @enderror                            
        </div>
    </div>                 
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>