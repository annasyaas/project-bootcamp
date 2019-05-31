<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/logo-cnd.png') }}" alt=" AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Larablog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-1 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user1-128x128.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/admin/') }}" class="nav-link {{ Request::segment(2) == '' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/test') }}" class="nav-link {{ Request::segment(2) == 'test' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-info"></i>
                        <p>Test</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/posts') }}" class="nav-link {{ Request::segment(2) == 'posts' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-rss"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/categories') }}" class="nav-link {{ Request::segment(2) == 'categories' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-tags"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-circle-o text-danger"></i>
                        <p>Logout</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>