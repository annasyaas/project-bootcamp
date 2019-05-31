<div class="col-lg-4 sidebar-area">
        <div class="single_widget cat_widget">
            <h4 class="text-uppercase pb-20">Post Categories</h4>
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="{{ url('category/'.$category->id)}}">{{ $category->name }} 
                        <span>{{ $category->posts->count() }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="single_widget recent_widget">
            <h4 class="text-uppercase pb-20">Recent Posts</h4>
            <div class="active-recent-carusel">
                @foreach($new_posts as $post)
                    <div class="item">
                        <img src="{{ asset('images/post/'. $post->image_cover) }}" style="width:310px; height:200px;" alt="">
                        <p class="mt-20 title text-uppercase">{{ $post->title }}</p>
                        {{-- <p>{{ $posts->created_at->format('h:m') }}</p> --}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="single_widget tag_widget">
            <h4 class="text-uppercase pb-20">Tag Clouds</h4>
            <ul>
                @foreach($categories as $category)
                <li><a href="{{ url('category/'.$category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>