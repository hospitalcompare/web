<a href=""
   id="{{ empty($id) ? '' : $id }}"
   class="{{$classTitle}}"
   role="button"
   data-toggle="modal"
   @if($modalTarget == '#hc_modal_video')
   data-video-url="{{ $videoUrl }}"
   @endif
   @if($modalTarget == '#hc_modal_map')
   data-longitude="{{ $longitude ?? '' }}"
   data-latitude="{{ $latitude ?? '' }}"
   @endif
   @if(!empty($hospitalType) && $hospitalType == 'nhs-hospital')
   data-hospital-url="{{ $hrefValue }}"
   @endif
   @if($modalTarget == '#hc_modal_enquire_private')
   data-modal-text="{{ $modalText ?? 'This is the default text for an enquiry to a private hospital' }}"
   @endif
   data-hospital-title="{{ $hospitalTitle ?? '' }}"
   data-target="{{ $modalTarget }}"
   data-image="{{ $image ?? '' }}"
   data-address="{{ $address ?? '' }}">{{ $buttonText }}
    @if(!empty($icon))
        <i class="{{ $icon }}"></i>
    @endif
    @if(!empty($svg))
        {!! file_get_contents(asset('/images/icons/' . $svg . '.svg')) !!}
    @endif
</a>
