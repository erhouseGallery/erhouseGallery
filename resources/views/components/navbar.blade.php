<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="#">Erhouse Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/"> Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Karya
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/lukisan">Lukisan</a>
                        <a class="dropdown-item" href="/patung">Patung</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a a class="nav-link {{ $title === 'Artikel' ? 'active' : '' }}" href="/post">Artikel</a>

                </li>
                <li class="nav-item">
                    <a a class="nav-link {{ $title === 'Event' ? 'active' : '' }}" href="/events">Event</a>
                </li>
                <li class="nav-item">
                    <a a class="nav-link {{ $title === 'Tentang Kami' ? 'active' : '' }}" href="/about">Tentang
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
                            <a href="/register" class="text-white nav-link btn btn-primary mr-2 px-3">Daftar</a>
                            <a href="/login" class=" text-danger nav-link btn btn-outline-danger px-3">Login</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"
                                    style="width: 50px">
                                Fandi P.
                                {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#">Pemesanan</a>
                                <a class="dropdown-item" href="#">Profil</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>

        <!-- <div class="account">
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle  nav-link-user">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"
                            style="width: 50px">
                        <div class=" d-none d-lg-inline-block">Hi, Irfannudin Ihsan</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="/dashboard" class="dropdown-item has-icon">
                            Dashboard
                        </a>
                        <a href="/dashboard/pemesanan" class="dropdown-item has-icon">
                            Pemesanan
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div> -->

    </div>
</nav>
<!-- <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
            <h1>Erhouse Gallery</h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="fitur-nav {{ $title === 'Home' ? 'active' : '' }}" href="/"> Home</a></li>
                <li class="dropdown"><a class="fitur-nav" href="#"><span>Karya</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a class="fitur-nav" class="" href="/lukisan">Lukisan</a></li>
                        <li><a class="fitur-nav" href="/patung">Patung</a></li>
                    </ul>
                </li>
                <li><a a class="fitur-nav {{ $title === 'Artikel' ? 'active' : '' }}" href="/post">Artikel</a>
                </li>
                <li><a a class="fitur-nav {{ $title === 'Event' ? 'active' : '' }}" href="/event">Event</a></li>
                <li><a a class="fitur-nav {{ $title === 'Tentang Kami' ? 'active' : '' }}" href="/about">Tentang
                        Kami</a></li>
            </ul>
        </nav>

        <div class="account">
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle  nav-link-user">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"
                            style="width: 30%">
                        <div class=" d-none d-lg-inline-block">Hi, Irfannudin Ihsan</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="/dashboard" class="dropdown-item has-icon">
                            Dashboard
                        </a>
                        <a href="/dashboard/pemesanan" class="dropdown-item has-icon">
                            Pemesanan
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header> -->
