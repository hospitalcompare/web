<a id="{{ empty($id) ? '' : $id }}"
    class="{{$classTitle}}"
    href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
    role="button"
    data-toggle="modal"
    data-content="{{ $modalContent }}"
    data-hospital-title="{{ $hospitalTitle }}"
    data-hospital-url="{{ $hrefValue }}"
    data-target="#hc_modal_enquire">{{ $button }}
    <i class="{{ empty($icon) ? '' : $icon }}"></i>
</a>
