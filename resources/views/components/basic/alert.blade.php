{{--        Error messages for forms --}}

<div id="hc_alert"
     class="alert collapse _alert-dismissible fade mb-0 {{ !empty($hc_errors) ? 'alert-danger show' : '' }}"
     role="alert">
    <div class="container">
        <button type="button" class="close" data-hide="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert-text">
            @if(!empty($hc_errors))
                @foreach($hc_errors[0] as $error)
                    {{ $error }}
                @endforeach
            @endif
        </div>
    </div>
</div>
