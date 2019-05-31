<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">CND Blog</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == 'posts' ? 'active' : '' }}" href="{{ url('/posts') }}">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == 'categories' ? 'active' : '' }}" href="{{ url('/categories') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == 'test' ? 'active' : '' }}" href="{{ url('/test') }}">Test Halaman Baru</a> 
            </li>
        </ul>
    </div>
</nav>