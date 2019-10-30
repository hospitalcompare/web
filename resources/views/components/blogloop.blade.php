@if(!empty($blogs))
    @foreach($blogs as $blog)
        <div class="blog-wrap col-12 col-md-6 col-lg-4 position-relative">
            <div class="image-wrapper">
                <img alt="Image related to {{ $blog['title'] }}" src="{{ asset($blog['image']) }}">
                <div class="overlay"></div>
            </div>
            <p class="d-flex justify-content-between my-3">
{{--                <span class="category">{{$blog['category']}}</span>--}}
                <span class="date ml-auto SofiaPro-Bold">{{date('dS F Y', strtotime($blog['created_at']))}}</span>
            </p>
            <p class="title font-24 SofiaPro-SemiBold mb-4">{{$blog['title']}}</p>
            <a class="{{ $buttonClass }} position-static stretched-link" href="/blog/{{ $blog['id'] }}">{{$buttonTitle}}</a>
        </div>
    @endforeach

@endif
