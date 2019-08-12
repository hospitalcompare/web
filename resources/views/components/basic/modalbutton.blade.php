<a id="{{ empty($id) ? '' : $id }}"
    class="{{$classTitle}}"
    href="{{ empty($hrefValue) ? 'javascript:void(0);' : $hrefValue }}"
    role="button"
    data-toggle="modal"
    data-content="{{ html_entity_decode($modalContent) }}"
    data-hospital-title="{{ $hospitalTitle }}"
    data-hospital-url="{{ $hrefValue }}"
    data-target="{{ $modalTarget }}">{{ $button }}
    <i class="{{ empty($icon) ? '' : $icon }}"></i>
</a>
