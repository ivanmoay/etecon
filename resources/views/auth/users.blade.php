<ul>
    @foreach ($users as $user)
        <li>
            <p>email: {{$user->email}}</p>
            <p>name: {{$user->name}}</p>
            <p>phone_number: {{$user->phone_number}}</p>
            <p>credentials: {{$user->credentials}}</p>
            <p>user_type: {{$user->user_type}} 
                @if ($user->user_type < 2)
                    <a href="/users/{{$user->id}}/promote"><span>promote</span></a>
                @else
                    <a href="/users/{{$user->id}}/demote"><span>demote</span></a>
                @endif  
            </p>
            <p>activated: {{$user->activated}}</p>
            @if ($user->activated == 0)
                <p><a href="/users/{{$user->id}}/activate">activate</a></p>
            @else
                <p><a href="/users/{{$user->id}}/deactivate">deactivate</a></p>
            @endif
            
        </li>
    @endforeach
</ul>

<a href="/">home</a>