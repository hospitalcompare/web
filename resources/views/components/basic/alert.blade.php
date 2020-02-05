{{--        Error messages for forms --}}

<div id="hc_alert"
     class="alert collapse _alert-dismissible fade mb-0 {{ !empty($hc_errors) ? 'alert-danger show' : '' }}"
     role="alert">
    <div class="container">
        <div class="wrapper font-18 d-flex justify-content-between align-items-center">
            <div class="alert-text">
                @if(!empty($hc_errors))
                    @foreach($hc_errors[0] as $error)
                        {{ $error }}
                    @endforeach
                @endif
            </div>
            <button type="button" class="close d-flex justify-content-center align-items-center" data-hide="alert" aria-label="Close">
                @svg('times-black')
            </button>
        </div>
    </div>
</div>
