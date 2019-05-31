@extends('frontend.includes.template')

@section('title') Pencarian @endsection

@section('content')

    <!-- Start top-section Area -->
    <section class="top-section-area section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex">
                <div class="col-lg-8">
                    <div id="imaginary_container">
                        <form action="{{ url('/search') }}">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control" placeholder="Search here.."
                                onfocus="this.placeholder = ''" onblur="this.placeholder = Search here.."
                                name="title">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="lnr lnr-magnifier"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    </div>
                    <p class="mt-20 text-center text-white">{{ $search_posts->count() }} Post Found</p>
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
                        <div class="post-lists search-list">
                            @foreach($search_posts as $post)
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <div class="date">
                                        <span>{{ $post->created_at->format('d') }}</span><br>{{ $post->created_at->format('M') }}
                                    </div>
                                    <img src="{{ asset('images/post/'.$post->image_cover) }}" style="width:340px; height:200px;" alt="">
                                </div>
                                <div class="detail">
                                    <a href="{{ url('read/'.$post->id) }}">
                                        <h4>{{ $post->title }}</h4>
                                    </a>
                                    <p>
                                        {{ str_limit($post->content, 100) }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
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