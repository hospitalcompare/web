@extends('layout.app')

@section('title', 'Your rights')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'your-rights-page hc-content')

@section('content')

    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{--                    <h1>Patient Choice</h1>--}}
                    <h1 class="font-36 SofiaPro-SemiBold mb-3">Your Rights</h1>
                    <p class="col-turq font-26 SofiaPro-Medium">
                        The Health and Social Care Act 2013 (the “<span>Act</span>”) introduced a number of
                        significant changes to the way health care services are managed and delivered in England and
                        implemented the principles and policy drivers introduced in a Government White paper in 2010.
                        Among these policies were:
                    </p>
                    <ul class="blue-dot mb-0">
                        <li><span>Choice:</span> putting Patients and the Public first and increasing the
                            involvement of Patients in decisions affecting them and, importantly giving patients Choice
                            of healthcare provider for their treatment, whether public sector of private sector.
                        </li>
                        <li><span>NHS Tariff:</span> introducing a national standard price for health care
                            procedures known as the “NHS Tariff”.This was aimed at creating a level playing field for
                            all providers of NHS services regardless of their status as a public or private sector
                            organisation.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <p class="font-28 col-turq SofiaPro-SemiBold">The Act</p>
                </div>
                <div class="col col-12 col-md-7">
                    <p>The Act also introduced a number of other important policies and created bodies and structures to
                        authorise monitor and regulate all primary care providers (<span>GPs</span>) and Secondary
                        care provider
                        (hospitals, in public and private sector).The Secretary of State for Health and NHS England and
                        other authorised bodies oversee this regime and every healthcare provider needs to be registered
                        with the Care Quality Commission (<span>CQC</span>).
                    </p>
                    <p>Under the new regime GPs are required to notify patients when they have a choice of provider and
                        to tell patients where they can find information about the choices they have. Clinical
                        Commissioning Groups (<span>CCGs</span>) were created which oversee the provision of
                        healthcare in designated
                        regions, authorised by NHS England, and themselves are obliged to consider patient <span>Choice</span>
                        and to
                        procure providers best suited to provide value for money, quality and efficiency of healthcare
                        services, whether procured from the public or private sector, at set prices known as the NHS
                        Tariff.
                    </p>
                </div>
                <div class="col col-12 col-md-5">
                    <div class="image-wrapper">
                        <img class="w-100" src="{{ asset('/images/video_placeholder.png') }}"
                             alt="People sat round a table having a chin wag ">
                    </div>
                </div>
                <div class="col col-12 col-md-5">
                    <div class="image-wrapper">
                        <img class="w-100" src="{{ asset('/images/video_placeholder.png') }}"
                             alt="People sat round a table having a chin wag ">
                    </div>
                </div>
                <div class="col col-12 col-md-7">
                    <p>The Act provides that paid for NHS Healthcare services must be in accordance with the NHS Tariff,
                        which is published by NHS Improvement (formerly known as Monitor, an NHS responsible body) which
                        among other things promotes, oversees, and regulates competition in health care services in
                        England.
                    </p>
                    <p>In summary, licensed healthcare providers are obliged to promote <span>Choice</span>
                        and they cannot be
                        prejudiced to public or private providers so that no provider gets an unfair advantage in
                        competing with others, whether public or private sector.
                    </p>
                    <p>These rights are reflected in the NHS Constitution.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-greylight pb-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="font-28 col-turq SofiaPro-SemiBold">What this means for you as a Patient?</p>
                    <p>You have legal rights to choice of healthcare services delivered in the public or private sector
                        paid for by the NHS and you must be given these choices by law.
                    </p>
                    <p> In some circumstances you do not have a legal right to choice but you should be offered choice
                        about your care. This is what the government has asked health care professionals to do.
                    </p>

                    <p class="font-28 col-turq SofiaPro-SemiBold">Choosing your GP</p>
                    <p class="font-24 SofiaPro-SemiBold">You can:</p>
                    <ul class="blue-dot">
                        <li>Choose which GP practice you register with.
                        </li>
                        <li>Ask to see a particular doctor or nurse at the GP practice. Your practice must make every
                            effort to meet your preferences to see the doctor or nurse you have asked for, although
                            there are some occasions when this might not be possible.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-health-parent my-0">
        <div class="container">
            <div class="choose-health animated fade-in" data-animation="fade-in">
                <div class="choose-health-text d-flex flex-column">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna
                    ornare ullamcorper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec,
                    hendrerit dui. Pellentesque habitant morbi tristique senectus et netus.”
                    @include('components.basic.button', [
                        'buttonText'        => 'Choose your health',
                        'classTitle'        => 'btn btn-blue btn-grad btn-icon btn-arrow-right mt-4 mx-auto SofiaPro-Regular',
                        'svg'               => 'chevron-right',
                        'hrefValue'         => '/results-page'
                    ])
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">
            <p class="font-28 col-turq SofiaPro-SemiBold">Choosing your Hospital and Consultant</p>
            <p class="font-24 SofiaPro-SemiBold">You can:</p>
            <ul class="blue-dot">
                <li>Choose the organisation you need to be referred to as an NHS outpatient to see a consultant
                    or specialist (an outpatient appointment means you will not be admitted to a ward). You may
                    choose whenever you are referred for the first time for an appointment for a physical or
                    mental health condition. This could be an NHS hospital or a private sector hospital that has
                    contracted to provide these services at the NHS Tariff, which in practice is most private
                    hospitals. There are exceptions.
                </li>
                <li>Choose which clinical team will be in charge of your NHS treatment within your chosen
                    organisation. For a physical health condition, you will be seen by the consultant or by a
                    clinician who works in the consultant’s team. For a mental health condition, you will be
                    seen by the consultant or named healthcare professional who leads the mental health team or
                    by another health care professional in the team.
                </li>
            </ul>
            <p>Essentially, you should always have a conversation with the healthcare professional who is
                referring you to discuss the choices available for you in your circumstances.
            </p>
            <p>Hospital Compare exists to help you and healthcare professionals who are advising you to show you
                in a clear and transparent way what your hospital choice options might be, and to compare these
                choices with other hospitals offering similar services in your local area or further afield, in
                England, if you are prepared to travel. This is relevant to you whether you are choosing a
                procedure to be performed at an NHS hospital or private sector hospital paid for by the NHS (at
                the NHS Tariff) or if you are choosing a private hospital paid for by your healthcare insurer or
                if you are paying for the procedure yourself.
            </p>
            <p>Remember, choosing to have your procedure performed at a private hospital paid for by the NHS, is
                at no extra cost to the taxpayer.
            </p>


        </div>
    </section>
    <section class="bg-greylight">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-7">
                    <p>If you want to find out more about your choices or the restrictions on your choices visit:
                    </p>
                    <p class="SofiaPro-SemiBold mb-0">The NHS Choice Framework</p>
                    <p>
                        <a class="btn-link" target="_blank"
                           href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs"
                        >https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs</a>
                    </p>
                    <p class="SofiaPro-SemiBold mb-0">NHS England’s website</p>
                    <p>
                        <a class="btn-link" target="_blank" href="https://www.england.nhs.uk/?s=patient+choice">https://www.england.nhs.uk/?s=patient+choice</a>
                    </p>
                    <p class="SofiaPro-SemiBold mb-0">NHS Constitution</p>
                    <p>
                        <a class="btn-link" target="_blank"
                           href="https://www.gov.uk/government/publications/the-nhs-constitution-for-england/the-nhs-constitution-for-england">https://www.gov.uk/government/publications/the-nhs-constitution-for-england/the-nhs-constitution-for-england</a>
                    </p>
                </div>
                <div class="col col-12 col-md-5">
                    <div class="image-wrapper">
                        <img class="w-100" src="{{ asset('/images/video_placeholder.png') }}"
                             alt="People sat round a table having a chin wag ">
                    </div>
                </div>
            </div>
    </section>
    {{--    <section>--}}
    {{--        <div class="">--}}
    {{--            <p class="font-24 SofiaPro-SemiBold col-turq">You can:</p>--}}
    {{--            <ul class="blue-dot">--}}
    {{--                <li>Choose the organisation you need to be referred to as an NHS outpatient to see a consultant--}}
    {{--                    or specialist (an outpatient appointment means you will not be admitted to a ward). You may--}}
    {{--                    choose whenever you are referred for the first time for an appointment for a physical or--}}
    {{--                    mental health condition. This could be an NHS hospital or a private sector hospital that has--}}
    {{--                    contracted to provide these services at the NHS Tariff, which in practice is most private--}}
    {{--                    hospitals. There are exceptions.--}}
    {{--                </li>--}}
    {{--                <li>Choose which clinical team will be in charge of your NHS treatment within your chosen--}}
    {{--                    organisation. For a physical health condition, you will be seen by the consultant or by a--}}
    {{--                    clinician who works in the consultant’s team. For a mental health condition, you will be--}}
    {{--                    seen by the consultant or named healthcare professional who leads the mental health team or--}}
    {{--                    by another health care professional in the team.--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--            <p>Essentially, you should always have a conversation with the healthcare professional who is--}}
    {{--                referring you to discuss the choices available for you in your circumstances.--}}
    {{--            </p>--}}
    {{--            <p>Hospital Compare exists to help you and healthcare professionals who are advising you to show you--}}
    {{--                in a clear and transparent way what your hospital choice options might be, and to compare these--}}
    {{--                choices with other hospitals offering similar services in your local area or further afield, in--}}
    {{--                England, if you are prepared to travel. This is relevant to you whether you are choosing a--}}
    {{--                procedure to be performed at an NHS hospital or private sector hospital paid for by the NHS (at--}}
    {{--                the NHS Tariff) or if you are choosing a private hospital paid for by your healthcare insurer or--}}
    {{--                if you are paying for the procedure yourself.--}}
    {{--            </p>--}}
    {{--            <p>Remember, choosing to have your procedure performed at a private hospital paid for by the NHS, is--}}
    {{--                at no extra cost to the taxpayer.--}}
    {{--            </p>--}}
    {{--            <p>If you want to find out more about your choices or the restrictions on your choices visit:--}}
    {{--            </p>--}}
    {{--            <h3>The NHS Choice Framework</h3>--}}
    {{--            <p>--}}
    {{--                <a class="btn-link" target="_blank"--}}
    {{--                   href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs"--}}
    {{--                >https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs</a>--}}
    {{--            </p>--}}
    {{--            <h3>NHS England’s website</h3>--}}
    {{--            <p>--}}
    {{--                <a class="btn-link" target="_blank" href="https://www.england.nhs.uk/?s=patient+choice">https://www.england.nhs.uk/?s=patient+choice</a>--}}
    {{--            </p>--}}
    {{--            <h3>NHS Constitution</h3>--}}
    {{--            <p>--}}
    {{--                <a class="btn-link" target="_blank"--}}
    {{--                   href="https://www.gov.uk/government/publications/the-nhs-constitution-for-england/the-nhs-constitution-for-england">https://www.gov.uk/government/publications/the-nhs-constitution-for-england/the-nhs-constitution-for-england</a>--}}
    {{--            </p>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@endsection
