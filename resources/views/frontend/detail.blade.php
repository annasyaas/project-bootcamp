@extends('frontend.includes.template')

@section('title') Detail @endsection

@section('content')

<!-- Start top-section Area -->
<section class="top-section-area section-gap">
    <div class="container">
        <div class="row justify-content-between align-items-center d-flex">
            <div class="col-lg-8 top-left">
                <h1 class="text-white mb-20">Post Details</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a><span class="lnr lnr-arrow-right"></span></li>
                    <li>Category<span class="lnr lnr-arrow-right"></span></li>
                    <li>{{ $search_posts->title }}</li>
                </ul>
            </div>
        </div>
    </div>  
</section>
<!-- End top-section Area -->


<!-- Start post wrapper Area -->
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-page-post">
                        <img class="img-fluid" src="{{ asset('images/post/'.$search_posts->image_cover) }}" style="width:800px; height:500px" alt="">
                        <div class="top-wrapper ">
                            <div class="row d-flex justify-content-between">
                                <h2 class="col-lg-8 col-md-12 text-uppercase">
                                    {{ $search_posts->title }}
                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                        <h2>{{ $search_posts->author->name }}</h2>
                                        <h3>{{ $search_posts->created_at->format('d M, Y h:m') }}</h3>
                                    </div>
                                    <div class="user-img">
                                        <img src="{{ asset('images/user/'.$search_posts->image_cover) }}" style="width:40px; height:40px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">
                            <ul>
                                @foreach($temp as $search)
                                    <li><a href="{{ url('category/'.$search->categories->id) }}">
                                        {{ $search->categories->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-post-content">
                            {!! $search_posts->content !!}
                        </div>
                        
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>    
    </section>
    <!-- End post Area -->  
</div>
<!-- End post Area -->

@endsection