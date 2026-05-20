<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="#">Navbar</a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/produk">Produk</a>
                </li>
            </ul>

            @auth
                <span class="navbar-text me-3">
                    Halo, <strong>{{ Auth::user()->name }}</strong>
                </span>

                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        Logout
                    </button>
                </form>

            @else
                <a href="{{ url('/login') }}" class="btn btn-outline-primary btn-sm me-2">
                    Login
                </a>
                <a href="{{ url('/register') }}" class="btn btn-primary btn-sm">
                    Daftar
                </a>
            @endauth

        </div>
    </div>
</nav>