<div id="doctor">
    <span tabindex="0"
          data-doctor-delay="{{ $delay }}"
          data-message="{{ $doctor }}"
          data-offset="30px, 40px"
          class="d-inline-block stretched-link"
          id="doctor-popover">
        <p class="font-18 SofiaPro-Medium">Need some help? We are here to help you find the best hospital.</p>
        @include('components.basic.button', [
            'classTitle'    => 'btn btn-go btn-icon',
            'button'        => 'Let\'s Go',
            'icon'          => 'fa fa-chevron-right'
        ])
    </span>
    <img src="{{ asset('../images/dr-stevini.svg') }}"
         alt="Illustration of Dr Stevini"
         class="position-absolute">
</div>
