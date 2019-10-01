{{--        Eror messages for form --}}
<div class="container">
    <div id="hc_alert" class="alert collapse alert-dismissible fade {{ !empty($errors) ? 'alert-danger show' : '' }}" role="alert">

        <button type="button" class="close" data-hide="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert-text">
            @if(!empty($errors))
                @foreach($errors[0] as $error)
                    {{ $error }}
                @endforeach
            @endif
        </div>
    </div>
</div>
