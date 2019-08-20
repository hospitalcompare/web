{{-- Data attributes for popover control --}}
data-toggle="{{ isset($size) && $size == 'large' ? 'popover-large' : 'popover' }}"
data-content="{{ urldecode($content) ?? 'Please add some content' }}"
data-trigger="{{ $trigger ?? 'click' }}"
data-placement="{{ $placement ?? 'bottom' }}"
data-delay='{ "show": {{ $showDelay ?? "500" }}, "hide": {{ $hideDelay ?? "100" }} }'
data-html="{{ isset($html) && $html == 'true' ? 'true' : 'false' }}"
