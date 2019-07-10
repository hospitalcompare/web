{{$slot}}
<div class="blogWrap">

    <div class="icon">
        {{$firstblogPic}}
    </div>
    <p class="iconTitle">
        {{$firstblogTitle}}
    </p>
    <p class="iconTitle">
        {{$firstblogDescription}}
    </p>
    @component('components.basic.button', ['classTitle' => 'blueOval'])
        @slot('button')
            Read more
        @endslot
    @endcomponent
</div>
<div class="blogWrap">
    <div class="icon">
        {{$secondblogPic}}
    </div>
    <p class="iconTitle">
        {{$secondblogTitle}}
    </p>
    <p class="iconTitle">
        {{$secondblogDescription}}
    </p>
    @component('components.basic.button', ['classTitle' => 'blueOval'])
        @slot('button')
            Read more
        @endslot
    @endcomponent
</div>
<div class="blogWrap">
    <div class="icon">
        {{$thirdblogPic}}
    </div>
    <p class="iconTitle">
        {{$thirdblogTitle}}
    </p>
    <p class="iconTitle">
        {{$thirdblogDescription}}
    </p>
    @component('components.basic.button', ['classTitle' => 'blueOval'])
        @slot('button')
            Read more
        @endslot
    @endcomponent
</div>