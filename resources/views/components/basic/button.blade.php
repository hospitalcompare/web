<a id="{{ empty($id) ? '' : $id }}"
   style="{{ $style ?? '' }}"
   class="{{$classTitle}}"
   target="{{ !empty($target) && $target == 'blank' ? '_blank' : '' }}"
   data-target="{!! $dataTarget ?? '' !!}"
   href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
   role="button">
    {{$button}}
    <i class="{{ empty($icon) ? '' : $icon }}"></i>
</a>
