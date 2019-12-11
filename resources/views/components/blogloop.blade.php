@if(!empty($blogs))
    @foreach($blogs as $blog)
        <div class="col-12 col-md-6 col-lg-4 position-relative">
            <div class="blog-wrap shadow">
                <div class="image-wrapper blog-item-image position-relative">
                    <img class="content" alt="Image related to {{ $blog['title'] }}" src="{{ asset($blog['image']) }}">
{{--                    <div class="overlay"></div>--}}
                    <div class="blog-item-category position-absolute rounded-circle p-2" style="background-color:{{$blog->category->colour}}">
{{--                        {!! file_get_contents(asset($blog->category->icon)) !!}--}}
                        @svg($blog->category->icon)
                    </div>
                </div>
                <div class="blog-item-content">
                    <div class="blog-item-details d-flex justify-content-start align-items-center mb-3">
                        <div class="mr-2">
                            <img src="{{ asset('/images/icons/clock-regular.svg') }}" alt="Clock icon">
                        </div>
                        <span class="time-to-read mr-3">{{$blog->time_to_read}}min</span>
                        <div class="mr-2">
                            <img src="{{ asset('/images/icons/clock-regular.svg') }}" alt="Clock icon">
                        </div>
                        <span class="date SofiaPro-Bold">{{ date('d.m.Y', strtotime($blog['created_at'])) }}</span>
                    </div>
                    <p class="title font-24 SofiaPro-SemiBold mb-4">{{$blog['title']}}</p>
                    <div class="description SofiaPro-SemiBold mb-4">{!! substr(strip_tags($blog['description']), 0, 150) . '...'  !!}
                    </div>
                    <a class="{{ $buttonClass }} position-static stretched-link" href="/blog/{{ $blog['id'] }}">{{$buttonTitle}}</a>
                </div>
            </div>
        </div>
    @endforeach

@endif
