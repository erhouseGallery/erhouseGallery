<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
            <h1>Erhouse Gallery</h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="fitur-nav {{-- {{ $title === 'Home' ? 'active' : '' }} --}}" href="/"> Home</a></li>
                <li class="dropdown"><a class="fitur-nav" href="#"><span>Karya</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a class="fitur-nav" class="" href="/lukisan">Lukisan</a></li>
                        <li><a class="fitur-nav" href="/patung">Patung</a></li>
                    </ul>
                </li>
                <li><a a class="fitur-nav {{-- {{ $title === 'Artikel' ? 'active' : '' }} --}}" href="/post">Artikel</a>
                </li>
                <li><a a class="fitur-nav {{-- {{ $title === 'Event' ? 'active' : '' }} --}}" href="/event">Event</a></li>
                <li><a a class="fitur-nav {{-- {{ $title === 'Tentang Kami' ? 'active' : '' }} --}}" href="/about">Tentang
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
</header>
