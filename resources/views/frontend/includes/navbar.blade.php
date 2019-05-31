<!-- Start Header Area -->
<header class="default-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-peace.png') }}" alt="">
                    <p style="display: inline;">BOOTCAMP</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>

                    @foreach($categories as $category)
                    <li><a href="{{ url('category/'.$category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                    <li>
                        <a href="{{ url('/search') }}">
                            <i class="fa fa-search"></i> Pencarian
                        </a>
                    </li>
                </div>						
        </div>
    </nav>
</header>
<!-- End Header Area -->