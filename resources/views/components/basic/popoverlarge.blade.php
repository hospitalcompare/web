{{-- Data attributes for popover control --}}
data-toggle="popover"
data-content="{{ $content }}"
data-trigger="{{ $trigger ?? 'click' }}"
data-placement="{{ $placement ?? 'bottom' }}"
data-html="{{ isset($html) && $html == 'true' ? 'true' : 'false' }}"
