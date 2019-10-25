@if(!empty($blogs))
    @foreach($blogs as $blog)
        <div class="blog-wrap col-12 col-md-6 col-lg-4 position-relative">
            <div class="icon">
                <img src="{{ asset($blog['iconImg']) }}">
                <div class="overlay"></div>
            </div>
            <p class="d-flex justify-content-between my-3">
                <span class="category">{{$blog['category']}}</span>
                <span class="date">{{$blog['date']}}</span>
            </p>
            <p class="title font-24 SofiaPro-SemiBold mb-4">{{$blog['title']}}</p>
            <a class="{{ $buttonClass }} position-static stretched-link" href="/blog/{{ $blog['slug'] }}">{{$buttonTitle}}</a>
        </div>
    @endforeach
@endif
