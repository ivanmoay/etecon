home

<ul>
@guest
    <li><a href="/register">register</a></li>
    <li><a href="/login">login</a></li>
@endguest
@auth
    @if (auth()->user()->activated)
        <li><a href="/my_profile">my profile</a></li>
        <li><a href="#">forms</a></li>
    @else
        <li>account not yet activated, please wait while the administrator activates your account.</li>
    @endif
    @if (auth()->user()->user_type >= 2)
        <li><a href="/users">users</a></li>
    @endif
    <li><a href="/logout">logout</a></li>
@endauth
</ul>



