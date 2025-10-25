<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('adminAssets/images/ajfavicon.jpg') }}" alt="" height="60" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('adminAssets/images/ajfavicon.jpg') }}" alt="" height="60" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('adminAssets/images/ajfavicon.jpg') }}" alt="" height="40" />
            </span>
            <span class="logo-lg">
                <span class="fw-bolder text-white fs-3">ADMIN PANEL</span>
                {{-- <img src="{{ asset('adminAssets/images/mainlogo.png') }}" alt="" height="80" /> --}}
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                        <i class="bx bxs-dashboard"></i>
                        <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('master') }}">
                        <i class="ri-settings-3-line"></i>
                        <span data-key="t-widgets">Master Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('blogsadmin') }}">
                        <i class="ri-article-line"></i>
                        <span data-key="t-widgets">Blogs</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav" id="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('userslist') }}">
                <i class="ri-user-line"></i>
                <span data-key="t-widgets">Registered Users</span>
                </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.adminprofile') }}">
                        <i class="ri-account-circle-line"></i>
                        <span data-key="t-widgets">My Profile</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('deliverylist') }}">
                <i class="bx bxs-truck"></i>
                <span data-key="t-widgets">Delivery Agents</span>
                </a>
                </li> --}}
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
