@if(!empty($label))
    <label for="{{empty($id)? '' : $id}}">{{ $label }}</label>
@endif
<input class="{{ $classTitle ?? '' }}"
       type="text"
       id="radiusProx"
       name="{{$name}}"
       data-slider-value="{{$value ?? ''}}" />

