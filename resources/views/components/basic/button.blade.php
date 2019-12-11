<{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'a' }} id="{{ empty($id) ? '' : $id }}"
    style="{{ $style ?? '' }}"
    class="{{$classTitle}}"
    target="{{ !empty($target) && $target == 'blank' ? '_blank' : '' }}"
    data-target="{!! $dataTarget ?? '' !!}"
    href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
    role="button"
    @if(!empty(!empty($disabled) && ($disabled)))
        disabled
    @endif
    @if(!empty($hospitalType))
        data-hospital-type="{{ $hospitalType }}"
    @endif>
    {!! $buttonText !!}
    @if(!empty($svg))
        @svg($svg, 'svg-icon')
    @endif
</{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'a' }}>
