<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('/assets/media/logos/logo-white.png') }}" alt="">&nbsp;Collabora
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown categories">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/Gigs/all?orderby=views') }}">All Gigs</a></li>
                        <li><a class="dropdown-item" href="{{ url('/Gigs/detail/test') }}">Gig Detailed</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Landing Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/Marketing/freelancer') }}">Landing Page 1</a>
                        </li>
                    </ul>
                </li>
                <!--
                    <li class="nav-item">
                        <a class="nav-link" disabled href="#">Browse Gigs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" disabled href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" disabled >Blogs</a>
                    </li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Become&nbsp;a&nbsp;Seller</a>
                </li>
                <?php if (isset($_SESSION["username"])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Actions/logout') }}">Logout</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sign-up" href="{{ url('/register') }}">Sign&nbsp;Up</a>
                </li>
                <?php  } ?>
            </ul>
        </div>
    </div>
</nav>
