{{-- Data attributes for popover control --}}
data-toggle="{{ isset($size) && $size == 'large' ? 'popover-large' : 'popover' }}"
data-content="{{ $content ?? 'Please add some content' }}"
data-trigger="{{ $trigger ?? 'hover' }}"
data-placement="{{ $placement ?? 'bottom' }}"
data-html="{{ isset($html) && $html == 'true' ? 'true' : 'false' }}"
