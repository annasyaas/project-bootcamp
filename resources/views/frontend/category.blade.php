@extends('frontend.includes.template')

@section('title') Daftar Kategori @endsection

@section('content')

    <!-- Start top-section Area -->
    <section class="top-section-area section-gap">
        <div class="container">
            <div class="row justify-content-between align-items-center d-flex">
                <div class="col-lg-8 top-left">
                    <h1 class="text-white mb-20">{{ $search_ctg->description }}</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a><span class="lnr lnr-arrow-right"></span></li>
                        <li>Category<span class="lnr lnr-arrow-right"></span></li>
                    <li><a href="{{ url('category/'.$categories->id) }}">{{ $search_ctg->name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->


    <!-- Start post Area -->
    <div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8">
                        <div class="post-lists">
                            @foreach($search_posts as $search)
                            {{-- @foreach($search_post->po as $search) --}}
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span>{{ $search->posts->created_at->format('d') }}</span><br>
                                        {{ $search->posts->created_at->format('M') }}
                                    </div>
                                    <img src="{{ asset('images/post/'.$search->posts->image_cover) }}" style="width:340px; height:200px;" alt="">
                                </div>
                                <div class="detail">
                                    <a href="{{ url('read/'.$search->posts->id) }}">
                                        <h4 class="pb-20">{{ $search->posts->title }}</h4>
                                    </a>
                                    <p>{{ $search->posts->content }}</p>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                            @endforeach
                            <div class="justify-content-center d-flex">
                                <a class="text-uppercase primary-btn loadmore-btn mt-40 mb-60" href="#"> Load More Post</a>
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
