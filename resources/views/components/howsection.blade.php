<div class="howSectionParent">
@component('components.basic.howsection')

    How does it work?

    @slot('firstIcon')
        <img src="{{ asset('images/003-doctor.png') }}">
    @endslot
    @slot('firstIconTitle')
        Get your referral from the GP
        or have a surgery in mind
    @endslot
    @slot('firstIconBio')
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
    @endslot
    @slot('secondIcon')
        <img src="{{ asset('images/001-search-1.png') }}">
    @endslot
    @slot('secondIconTitle')
        Search by postcode
        or speciality
    @endslot
    @slot('secondIconBio')
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
    @endslot

    @slot('thirdIcon')
        <img src="{{ asset('images/Layer_536.png') }}">
    @endslot
    @slot('thirdIconTitle')
        Find the best hospital
        for you
    @endslot
    @slot('thirdIconBio')
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
    @endslot
    @slot('fourthIcon')
        <img src="{{ asset('images/Layer_537.png') }}">
    @endslot
    @slot('fourthIconTitle')
        Book your
        operation
    @endslot
    @slot('fourthIconBio')
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
    @endslot
@endcomponent
</div>