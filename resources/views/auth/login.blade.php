<form action="/login" method="POST">
    @csrf    
    <div class="mb-4">
        <label for="email" class="sr-only">Email:</label>
        <input type="text" name="email" id="email" placeholder="Your email"
        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">

        @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="password" class="sr-only">Password:</label>
        <input type="password" name="password" id="password" placeholder="Your password"
        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">

        @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
        @enderror
    </div>
    @if(session()->has('status'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="mb-4">
        <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember">Remember me</label>
        </div>
    </div>

    <div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
        font-medium w-full">Login</button>
        <a href="/register"><button type="button" class="bg-blue-500 text-white px-4 py-3 rounded 
        font-medium w-full">Register</button></a>
    </div>
</form>