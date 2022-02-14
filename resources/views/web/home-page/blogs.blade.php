<!-- Start Blog Area  -->
<div class="rn-blog-area  bg_color--5 blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title section-title--2  text-left mb--20">
                    <h2 class="title">Blogs</h2>
                </div>
            </div>
        </div>

        <div class="row rn-slick-activation rn-slick-dot pb--25" data-slick-options='{
                        "spaceBetween": 15, 
                        "slidesToShow": 3, 
                        "slidesToScroll": 1, 
                        "arrows": false, 
                        "infinite": true,
                        "dots": true
                    }' data-slick-responsive='[
                    {"breakpoint":890, "settings": {"slidesToShow": 3}},
                    {"breakpoint":770, "settings": {"slidesToShow": 2}},
                    {"breakpoint":490, "settings": {"slidesToShow": 1}}
                    ]'>

            @forelse ($blogs as $blog)
            <!-- Start Blog Area  -->
            <div class="blog blog-style--1">
                <div class="thumbnail">
                    <a href="{{route('single_blog',['blog_id' => $blog->id])}}">
                        <img class="w-100 blog-thumbnail" src="{{ asset('storage/'.$blog->thumbnail_image)}}" alt="Blog Images" />
                    </a>
                </div>
                <div class="content">
                    <p class="blogtype">{{$blog->blog_category->title}}</p>
                    <a href="{{route('single_blog',['blog_id' => $blog->id])}}"> <textarea class="title blog-title" disabled>{{$blog->title}}</textarea></a>

                    <div class="blog-btn">
                        <a class="rn-btn text-white" href="{{route('single_blog',['blog_id' => $blog->id])}}">Read More</a>
                    </div>
                </div>
            </div>
            <!-- End Blog Area  -->

            @empty
            @endforelse
        </div>

    </div>
</div>
<!-- End Blog Area  -->