{{-- Navbar Collapse For Sidebar --}}
<div>
    <nav class="navbar-collapse bg-based navbar-light d-md-none d-lg-none d-xl-none d-xxl-none ">
        <div class="container-fluid d-flex justify-content-end py-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-chevron-down dropdown-indicator"></i>
            </button>
        </div>
    </nav>
</div>

<div class="collapse d-md-none d-lg-none d-xl-none d-xxl-none sidebar-collapse-menu w-75 "  id="navbarToggleExternalContent">
    <div class="bg-based px-4 py-2">
        <ul class="text-white pl-0">
            <li class="d-flex justify-content-center "> <img alt="image" style="width: 30%" src="https://api.dicebear.com/6.x/avataaars/svg?seed=Baby "></li>
            <li class="d-flex justify-content-center mt-2 text-dark"> <h4>{{auth()->user()->name}}</h4> </li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/dashboard-admin">

                    <span>Dashboard</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/orders">
                    <span>Pesanan</span></a></li>
            {{-- auth --}}
            @can('admin')
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/artworks">
                    <span>Karya</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/articles">
                    <span>Artikel</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/events">
                    <span>Event</span></a></li>

            @endcan
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/profiles">
                    <span>Profile</span></a></li>
        </ul>
    </div>
</div>
{{-- End Navbar Collapse For Sidebar --}}


{{-- Sidebar --}}
<div class="sidebar d-none d-md-inline-block">
    <aside id="sidebar-wrapper">
        <ul class="sidebar-menu container">
            <li class="d-flex justify-content-center "> <img alt="image" style="width: 30%" src="{{ auth()->user()->avatar }}" class="rounded-circle mt-3 "></li>
            <li class="d-flex justify-content-center mt-2 text-dark"> <h4>{{auth()->user()->name}}</h4> </li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/dashboard-admin">

                    <span>Dashboard</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/orders">
                    <span>Pesanan</span></a></li>
            {{-- auth --}}
            @can('admin')
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/artworks">
                    <span>Karya</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/articles">
                    <span>Artikel</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/events">
                    <span>Event</span></a></li>

            @endcan
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/profiles">
                    <span>Profile</span></a></li>
            <li class="sidebar-fiture text-center"><a class="nav-link" href="/admin/profiles">
                    <span>Pameran</span></a></li>
        </ul>
    </aside>
</div>
{{-- End Sidebar --}}
