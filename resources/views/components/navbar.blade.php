<nav class="navbar py-2 navbar-expand-lg">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="/"><img style="width: 80px" class="img-fluid"
                src="{{ asset('/assets/img/erhouseLogo.png') }}" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"> Home</a>
                </li>

                <li class="nav-item">
                    <a a class="nav-link {{ $title === 'Artikel' ? 'active' : '' }}" href="/artworks">Karya</a>
                </li>

                <li class="nav-item">
                    <a a class="nav-link {{ $title === 'Artikel' ? 'active' : '' }}" href="/articles">Artikel</a>

                </li>
                <li class="nav-item">
                    <a a class="nav-link {{ $title === 'Event' ? 'active' : '' }}" href="/events">Event</a>
                </li>
                <li class="nav-item">
                    <a a class="nav-link" href="/about">Tentang
                        Kami</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
            </ul>
            <div>
                <ul class="navbar-nav">
                    @guest

                        <li class="nav-item d-flex">
                            <a href="/login" class="login nav-link btn px-3">Login</a>
                            <a href="/register" class="register nav-link btn ml-2 px-3">Daftar</a>
                        </li>

                    @endguest

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="image" src="{{ auth()->user()->avatar }}" class="rounded-circle mr-1"
                                    style="width: 50px">

                                {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/admin/dashboard-admin">Dashboard</a>
                                <a class="dropdown-item" href="/admin/orders">Pemesanan</a>
                                @can('admin')
                                <a class="dropdown-item" href="/admin/artworks">Karya</a>
                                <a class="dropdown-item" href="/admin/articles">Artikel</a>
                                <a class="dropdown-item" href="/admin/events">Event</a>
                                @endcan
                                <a class="dropdown-item" href="/admin/profiles">Profile</a>
                                <form class="logout" action="/logout" method="post">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>

                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>


    </div>
</nav>
