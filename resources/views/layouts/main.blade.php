<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Example')</title>
</head>
<body>
    <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <header>
        <h1>Hello, {{$username}}</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/register_user">REGISTER USER</a></li>
            <li><a href="/login_user">LOGIN USER</a></li>
            @auth
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </ul>
    </nav>

    <section>
        @yield('content')
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} Laravel Example</p>
    </footer>
</body>
</html>
