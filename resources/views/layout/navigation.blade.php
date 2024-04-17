<div class="navbar p-2 bg-light">
    <a class="navbar-brand" href="{{ route('index') }}">CPP</a>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('dashboard') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="#">Contact Us</a></li>

        @if(session()->get('isLogedIn'))
            <li class="nav-item"><a class="nav-link text-dark" href="{{ route('logout') }}">Logout</a></li>
        @endif

    </ul>
</div>
