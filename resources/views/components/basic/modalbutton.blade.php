<{{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'span' }}
{{ !empty($disabled) && ($disabled) ? 'disabled' : ''}}
@if(!empty($id))
    id="{{ $id }}"
@endif
style="display: inline-block; {{ empty($style) ? '' : $style }}"
class="{{ $classTitle }}"
role="button"
data-toggle="modal"
data-target="{{ $modalTarget }}"
@if(!empty($modalText))
    data-modal-text="{{ $modalText }}"
@endif
@if(!empty($hospitalType))
    data-hospital-type="{{ $hospitalType }}"
@endif
@if($modalTarget == '#hc_modal_video')
    data-video-url="{{ $videoUrl }}"
@endif
@if($modalTarget == '#hc_modal_map')
    data-longitude="{{ $longitude ?? '' }}"
    data-latitude="{{ $latitude ?? '' }}"
@endif
@if(!empty($telNumber))
    data-hospital-tel="{{ $telNumber }}"
@endif
@if(!empty($telNumber2))
    data-hospital-tel-2="{{ $telNumber2 }}"
@endif
@if(!empty($hasEmail))
    data-has-email="{{ $hasEmail }}"
@endif
@if(!empty($hrefValue))
    data-hospital-url="{{ $hrefValue }}"
@endif
@if(!empty($dismiss) && ($dismiss))
    data-dismiss="modal"
@endif
@if($modalTarget == '#hc_modal_enquire_private' || $modalTarget == '#hc_modal_contacts_general')
    data-hospital-id="{{ $hospitalIds }}"
@endif
@if(!empty($hospitalTitle))
    data-hospital-title="{{ $hospitalTitle }}"
@endif
@if(!empty($address))
    data-address="{{ $address }}"
@endif
>
<span>{!! $buttonText !!}</span>
@if(!empty($svg) && empty($svgClass))
    @svg($svg)
@elseif(!empty($svg) && !empty($svgClass))
    @svg($svg, $svgClass)
@endif
</ {{ !empty($htmlButton) && ($htmlButton) ? 'button' : 'span' }} >
