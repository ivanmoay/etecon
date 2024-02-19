
<x-password-layout>
  <form action="/login" method="POST" role="form" class="text-start">
  @csrf                 
    <div class="input-group input-group-outline my-3">
      <label class="form-label">Email @error('email') <code>*required</code> @enderror</label>
      <input type="email" class="form-control" name="email" value="{{old('email')}}">
    </div>

    <div class="input-group input-group-outline mb-3">
      <label class="form-label">Password @error('password') <code>*required</code> @enderror</label>
      <input type="password" class="form-control" name="password">
    </div>

    <div class="form-check form-switch d-flex align-items-center mb-3">
      <input class="form-check-input" type="checkbox" id="remember" name="remember">
      <label class="form-check-label mb-0 ms-3" for="remember">Remember me</label>
    </div>
  
  @if(session()->has('status'))                    
      {{session('status')}}
  @endif

    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
      <div class="">
        <u><a href="#">Forgot your password?</a></u>
      </div>
    </div>
    <p class="mt-4 text-sm text-center">
      Don't have an account?
      <a href="/register" class="text-primary text-gradient font-weight-bold">Register</a>
    </p>                   
  </form>
<x-password-layout>
