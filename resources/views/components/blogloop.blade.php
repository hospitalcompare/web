@if(!empty($blogs))
    @foreach($blogs as $blog)
        <div class="col-12 col-md-6 col-lg-4 position-relative">
            <div class="blog-wrap">
                <div class="image-wrapper">
                    <img alt="Image related to {{ $blog['title'] }}" src="{{ asset($blog['image']) }}">
{{--                    <div class="overlay"></div>--}}
                    <div class="blog-item-category" style="color:{{$blog->category->colour}}">{{$blog->category->icon}}</div>
                </div>
                <p class="d-flex justify-content-between my-3">
                    <p class="time-to-read">{{$blog->time_to_read}}</p>
                    <span class="category">{{$blog->category->name}}</span>

                    <span class="date ml-auto SofiaPro-Bold">{{date('dS F Y', strtotime($blog['created_at']))}}</span>
                </p>
                <p class="title font-24 SofiaPro-SemiBold mb-4">{{$blog['title']}}</p>
                <a class="{{ $buttonClass }} position-static stretched-link" href="/blog/{{ $blog['id'] }}">{{$buttonTitle}}</a>
            </div>
        </div>
    @endforeach

@endif
