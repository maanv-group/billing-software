<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @includeIf('components.head')
    <title>@yield('page-title')</title>
</head>

<body>
    {{-- <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid mx-md-5 mx-0">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                {{ request()->is('/') ? 'aria-current="page"' : '' }} href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/features') ? 'active' : '' }}"
                                {{ request()->is('/features') ? 'aria-current="page"' : '' }}
                                href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/pricing') ? 'active' : '' }}"
                                {{ request()->is('/pricing') ? 'aria-current="page"' : '' }} href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/Disabled') ? 'active' : '' }}"
                                {{ request()->is('/Disabled') ? 'aria-current="page"' : '' }}
                                href="#">Disabled</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/login') ? 'active' : '' }}"
                                {{ request()->is('/login') ? 'aria-current="page"' : '' }}
                                href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/features') ? 'active' : '' }}"
                                {{ request()->is('/register') ? 'aria-current="page"' : '' }}
                                href="{{ url('/register') }}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> --}}
    <header>
        @includeIf('components.basenav')
    </header>
    <main>
        <div class="container">
            @yield('page-content')
        </div>
    </main>
    <footer>
        @includeIf('components.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
