@if(!empty($blogs))
    @foreach($blogs as $blog)
        <div class="col-12 col-md-6 col-lg-4 position-relative">
            <div class="blog-wrap shadow">
                <div class="image-wrapper position-relative">
                    <img alt="Image related to {{ $blog['title'] }}" src="{{ asset($blog['image']) }}">
{{--                    <div class="overlay"></div>--}}
                    <div class="blog-item-category position-absolute rounded-circle p-2" style="background-color:{{$blog->category->colour}}">
                        {!! file_get_contents(asset($blog->category->icon)) !!}
                    </div>
                </div>
                <div class="blog-item-content">
                    <p class="d-flex justify-content-between my-3">
                        <span class="time-to-read">{{$blog->time_to_read}}min</span>
                        <span class="date ml-auto SofiaPro-Bold">{{ date('d.m.Y', strtotime($blog['created_at'])) }}</span>
                    </p>
                    <p class="title font-24 SofiaPro-SemiBold mb-4">{{$blog['title']}}</p>
                    <div class="description SofiaPro-SemiBold mb-4">{!! substr(strip_tags($blog['description']), 200, 200) . '...'  !!}
                    </div>
                    <a class="{{ $buttonClass }} position-static stretched-link" href="/blog/{{ $blog['id'] }}">{{$buttonTitle}}</a>
                </div>
            </div>
        </div>
    @endforeach

@endif
