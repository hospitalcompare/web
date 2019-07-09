<div class="chooseHealthParent">
    {{$slot}}
    <section class="chooseHealth">
        {{$choosehealthbanner}}
        <div class="chooseHealthText">
            “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullamcorper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus.”
            @component('components.basic.button')
                @slot('button')
                    Choose your health
                @endslot


            @endcomponent

        </div>

    </section>

</div>