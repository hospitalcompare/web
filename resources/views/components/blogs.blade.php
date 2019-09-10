@if(!empty($blogs))
    @foreach($blogs as $blog)
        <div class="blogWrap">
            <a class="{{$classTitle}}" href="{{$blog['url']}}">
                <div class="icon">
                    <img src="{{ asset($blog['iconImg']) }}">
                    <div class="overlay"></div>
                </div>
                <p class="title">{{$blog['title']}}</p>
                <p class="description">{{$blog['description']}}</p>
                <p class="{{$buttonClass}}">{{$buttonTitle}}</p>
            </a>
        </div>
    @endforeach
@endif
