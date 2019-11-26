{{-- Data attributes for popover control --}}
data-toggle="{{ isset($size) ? 'popover-' . $size : 'popover' }}"
data-content="{{ $content ?? 'Please add some content' }}"
data-trigger="{{ $trigger ?? 'click' }}"
data-placement="{{ $placement ?? 'bottom' }}"
@if(!empty($showDelay) || !empty($hideDelay)))
data-delay='{ "show": {{ $showDelay ?? 0 }}, "hide": {{ $hideDelay }} }'
@endif
data-html="{{ isset($html) && $html == 'true' ? 'true' : 'false' }}"
