<div class="rangeParent range-slider">
    <label for="radiusProx">{{$label}}</label>
    <input class="radiusRange range-slider__range"
           type="range"
           id="radiusProx"
           name="{{$name}}"
           min="{{$min}}"
           max="{{$max}}"
           value="{{$value}}"
           step="{{$step}}">
    <div class="currentRadius range-slider__value">Max. {{ $value }} Miles</div>
</div>
