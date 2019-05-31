@extends('frontend.includes.template')

@section('title') Home @endsection

@section('content')
<!-- Banner Area -->
@include('frontend.includes.banner')

<!-- Start category Area -->
<section class="category-area section-gap" id="news">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest News from all categories</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p> -->
                </div>
            </div>
        </div>
        <div class="active-cat-carusel">
            @foreach($categories as $category)
            <div class="item single-cat">
                <img src="{{ asset('category/'.$category->img_cover) }}" alt="" style="width:340px; height:200px;">
                <p class="date">{{ $category->created_at->format('d M y') }}</p>
                <h4><a href="{{ url('category/'.$category->id) }}">{{ $category->name }}</a></h4>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End category Area -->

<!-- Start travel Area -->
<section class="travel-area section-gap" id="travel">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Hot Topics</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-6 travel-left">
                <div class="single-travel media pb-70">
                    <img  class="img-fluid d-flex mr-3" src="{{ asset('images/post/'.$post->image_cover) }}" alt="" style="width: 250px; height:150px">
                    <div class="dates">
                        <span>{{ $post->created_at->format('d') }}</span>
                        <p>{{ $post->created_at->format('M') }}</p>
                    </div>
                    <div class="media-body align-self-center">
                        <h4 class="mt-0"><a href="{{ url('read/'.$post->id) }}">{{ $post->title }}</a></h4>
                        <p>{{ str_limit($post->content, 120) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <a href="{{ url('/search') }}" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More
            </a>
        </div>
    </div>
</section>
<!-- End travel Area -->
@endsection