@if(!empty($blogs))
        @foreach($blogs as $blog)
                <div class="blogWrap">
                        <div class="icon"><img src="{{ asset($blog['iconImg']) }}"></div>
                        <p class="title">{{$blog['title']}}</p>
                        <p class="description">{{$blog['description']}}</p>
                        <p><a class="hospBtn  {{$classTitle}}" href="" role="button">{{$buttonTitle}}</a></p>
                </div>
        @endforeach

@endif



