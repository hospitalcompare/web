<{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'a' }}
@if(!empty($id))
    id="{{ $id }}"
@endif
style="{{ $style ?? '' }}"
class="{{$classTitle}}"
@if(!empty($target))
    target="{{ $target }}"
@endif
@if(!empty($dataTarget))
    data-target="{{ $dataTarget }}"
@endif
href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
role="button"
@if(!empty($dataId))
    data-id="{{ $dataId }}"
@endif
@if(!empty(!empty($disabled) && ($disabled)))
    disabled
@endif
@if(!empty($hospitalType))
    data-hospital-type="{{ $hospitalType }}"
@endif>
<div>{!! $buttonText !!}</div>
@if(!empty($svg) && empty($svgClass))
    @svg($svg)
@elseif(!empty($svg) && !empty($svgClass))
    @svg($svg, $svgClass)
@endif
</{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'a' }}>
