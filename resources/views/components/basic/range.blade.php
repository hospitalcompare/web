<div class="rangeParent range-slider">
    <label for="radiusProx">{{$label}}</label>
    <div class="range-wrapper position-relative h-100">
{{--        <div class="currentRadius range-slider__value d-none"><span>{{ array_key_exists($value, \App\Helpers\Utils::sliderRange) ? \App\Helpers\Utils::sliderRange[$value] : 50 }}</span> Miles</div>--}}
        <input class="{{ $classTitle ?? '' }}"
               type="range"
               id="radiusProx"
               name="{{$name}}"
               min="{{$min ?? ''}}"
               max="{{$max ?? ''}}"
               value="{{$value ?? ''}}"
               step="{{$step ?? ''}}">
        <ul class="range-labels">
            <li>5</li>
            <li>10</li>
            <li>25</li>
            <li>50</li>
            <li>75</li>
            <li>100</li>
            <li>England</li>
        </ul>
{{--        <div class="track-mask track-mask__start"></div>--}}
{{--        <div class="track-mask track-mask__end"></div>--}}
    </div>
</div>
