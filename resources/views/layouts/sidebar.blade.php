<ul class="navbar-nav sidebar sidebar-dark accordion " style="background-color:#f3a199;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Galery</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('beranda')}}">
                <i class="bi bi-house-door"></i>
                    <span>Beranda</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('album')}}">
                <i class="bi bi-images"></i>
                    <span>Album</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('tentang')}}">
                <i class="bi bi-people"></i>
                    <span>Tentang Kami</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{route('kebijakan')}}">
                <i class="bi bi-shield-fill-check"></i>
                    <span>Kebijakan Privasi</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('beranda')}}">
                <i class="bi bi-arrow-left-circle-fill"></i>
                    <span>Keluar</span></a>
            </li>

            <!-- Divider -->
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>