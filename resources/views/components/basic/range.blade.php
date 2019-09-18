@php
$vars = [0, 5, 10, 25, 50, 75, 100, 600];
@endphp
<div class="rangeParent range-slider">
    <label for="radiusProx">{{$label}}</label>
    <input class="{{ $classTitle ?? '' }}"
           type="range"
           id="radiusProx"
           name="{{$name}}"
           min="{{$min ?? ''}}"
           max="{{$max ?? ''}}"
           value="{{$value ?? ''}}"
           step="{{$step ?? ''}}">
    <div class="currentRadius range-slider__value"><span>{{ $vars[$value] }}</span> Miles</div>
    <ul class="range-labels">
        <li class="active selected">5</li>
        <li>10</li>
        <li>25</li>
        <li>50</li>
        <li>75</li>
        <li>100</li>
        <li>600</li>
    </ul>
</div>
