<div class="{{$titleParent}}">
    <a href="{{url('/')}}" class="">
{{--        @svg('logo-mobile', 'd-md-none logo-mobile')--}}
{{--        @svg('logo-desktop', 'd-none d-md-block logo-desktop')--}}
        <img class="{{$logoImg}} d-lg-none" height="40px"  src="{{ asset('images/icons/logo-mobile.svg') }}" alt="Hospital Compare logo">
        <img class="{{$logoImg}} d-none d-lg-block" height="34px" src="{{ asset('images/icons/logo-desktop.svg') }}" alt="Hospital Compare logo">
    </a>
</div>
