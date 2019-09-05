<a id="{{ empty($id) ? '' : $id }}"
   class="{{$classTitle}}"
   role="button"
   data-toggle="modal"
   @if($modalTarget == '#hc_modal_map')
        data-longitude="{{ $longitude ?? '' }}"
        data-latitude="{{ $latitude ?? '' }}"
   @endif
   @if(!empty($hospitalType) && $hospitalType == 'nhs-hospital')
        data-hospital-url="{{ $hrefValue }}"
   @endif
   data-hospital-title="{{ $hospitalTitle ?? 'Hospital Title Here' }}"
   data-target="{{ $modalTarget }}">{{ $button }}
    <i class="{{ empty($icon) ? '' : $icon }}"></i>
</a>
