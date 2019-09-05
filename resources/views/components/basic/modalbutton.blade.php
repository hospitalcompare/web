<a id="{{ empty($id) ? '' : $id }}"
   class="{{$classTitle}}"
   href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
   role="button"
   data-toggle="modal"
   @if($modalTarget == '#hc_modal_map')
       data-longitude="{{ $longitude ?? '' }}"
       data-latitude="{{ $latitude ?? '' }}"
   @endif
   data-hospital-title="{{ $hospitalTitle ?? 'test' }}"
   data-hospital-url="{{ $hrefValue }}"
   data-target="{{ $modalTarget }}">{{ $button }}
    <i class="{{ empty($icon) ? '' : $icon }}"></i>
</a>
