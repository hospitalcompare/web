<button type="button" class="btn-modal-close position-{{ $position ?? 'absolute' }} bg-black" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true" class="text-white">{{ !empty($buttonText) ? $buttonText : 'Close' }}</span>{!! file_get_contents('./images/icons/times.svg') !!}
</button>
