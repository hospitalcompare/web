<div class="blogSectionParent">
    @component('components.basic.blogs')
        <h1 class="pageTitle">Making the right choice</h1>
        <div class="blogContent">
        @slot('firstblogPic')
            <img src="{{ asset('images/Layer_16.png') }}">
        @endslot
        @slot('firstblogTitle')
            blog
        @endslot

        @slot('firstblogDescription')
            Lorem ipsum dolor sit amet elit. In
            sit amet sem ut magna ornare.
        @endslot


        @slot('secondblogPic')
            <img src="{{ asset('images/Layer_17.png') }}">
        @endslot
        @slot('secondblogTitle')
            blog
        @endslot

        @slot('secondblogDescription')
            Lorem ipsum dolor sit amet elit. In
            sit amet sem ut magna ornare.
        @endslot

        @slot('thirdblogPic')
            <img src="{{ asset('images/Layer_18.png') }}">
        @endslot
        @slot('thirdblogTitle')
            blog
        @endslot

        @slot('thirdblogDescription')
            Lorem ipsum dolor sit amet elit. In
            sit amet sem ut magna ornare.
        @endslot
    @endcomponent

</div>
</div>
<div class="buttonSectionParent">
    @component('components.basic.button', ['classTitle' => 'blueOval'])
        @slot('button')
            Read more
        @endslot
    @endcomponent
        @component('components.basic.button', ['classTitle' => 'blueOval'])
            @slot('button')
                Read more
            @endslot
        @endcomponent
        @component('components.basic.button', ['classTitle' => 'blueOval'])
            @slot('button')
                Read more
            @endslot
        @endcomponent
</div>