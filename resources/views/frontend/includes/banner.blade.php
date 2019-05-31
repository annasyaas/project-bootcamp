<!-- start banner Area -->
<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset('images/post/'.$new_posts->image_cover) }}">
    <div class="overlay-bg overlay"></div>
    <div class="container">
        <div class="row fullscreen">
            <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
                <h1>{{ $new_posts->title }}</h1>
            </div>	
            <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
                <div class="col-lg-12 flex-row d-flex meta-right no-padding justify-content-end">
                    <div class="user-meta">
                        <h4 class="text-white">{{ $users->name }}</h4>
                        <p>{{ $new_posts->created_at->format('d M, Y h:m') }}</p>
                    </div>
                    <img class="img-fluid user-img" src="{{ asset('images/user/'.$users->photo) }}" style="width: 50px; height:50px;" alt="">
                </div>
            </div>												
        </div>
    </div>
</section>
<!-- End banner Area -->	