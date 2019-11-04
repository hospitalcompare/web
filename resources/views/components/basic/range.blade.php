@if(!empty($label))
    <label class="{{ $labelClass ?? '' }}" for="{{empty($id)? '' : $id}}">{{ $label }}</label>
@endif
<input class="{{ $classTitle ?? '' }}"
       type="text"
       id="radiusProx"
       name="{{$name}}"
       data-slider-value="{{$value ?? ''}}" />

