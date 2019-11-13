<{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'a' }} id="{{ empty($id) ? '' : $id }}"
   style="{{ $style ?? '' }}"
   class="{{$classTitle}}"
   target="{{ !empty($target) && $target == 'blank' ? '_blank' : '' }}"
   data-target="{!! $dataTarget ?? '' !!}"
   href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
   role="button">
    {!! $button !!}
    @if(!empty($icon))
        <i class="{{ $icon }}"></i>
    @endif
    @if(!empty($svg))
        {!! file_get_contents(asset('/images/icons/' . $svg . '.svg')) !!}
    @endif
</{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'a' }}>
