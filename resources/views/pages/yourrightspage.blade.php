@extends('layout.app')

@section('title', 'Your rights')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'your-rights-page hc-content')

@section('content')
    @include('pages.pagesections.flatbanner')
    <section class="your-rights-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{--                    <h1>Patient Choice</h1>--}}
                    <h1 class="font-36 SofiaPro-SemiBold mb-3 text-center">Your <span class="col-turq">Rights</span></h1>
                    <p class="text-center font-26 SofiaPro-Medium mb-5 col-grey">
                        The Health and Social Care Act 2013 (the “<span>Act</span>”) introduced a number of
                        significant changes to the way health care services are managed and delivered in England and
                        implemented the principles and policy drivers introduced in a Government White paper in 2010.
                        Among these policies were:
                    </p>
                    <div class="p-30 bg-grey row">
                        <div class="card shadow mb-30 border-0 col-12">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <div class="card-icon-wrapper px-5 h-100 d-flex align-items-center">
                                        @svg('icon-our-background-1', 'w-100')
                                    </div>
                                </div>
                                <div class="card-body col-12 col-md-8 col-lg-10">
                                    <p class="font-18 SofiaPro-Medium">Choice</p>
                                    <p>Putting Patients and the Public first and increasing the
                                        involvement of Patients in decisions affecting them and, importantly giving patients Choice
                                        of healthcare provider for their treatment, whether public sector of private sector.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow border-0 col-12">
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <div class="card-icon-wrapper px-5 h-100 d-flex align-items-center">
                                        @svg('icon-our-background-2', 'w-100')
                                    </div>
                                </div>
                                <div class="card-body col-12 col-md-8 col-lg-10">
                                    <p class="font-18 SofiaPro-Medium">NHS Tariff</p>
                                    <p>Introducing a national standard price for health care
                                        procedures known as the “NHS Tariff”.This was aimed at creating a level playing field for
                                        all providers of NHS services regardless of their status as a public or private sector
                                        organisation.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="your-rights-act">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 col-md-6">
                    <h2 class="font-28 SofiaPro-SemiBold">The Act</h2>
                    <p class="col-grey p-secondary">The Act also introduced a number of other important policies and created bodies and structures to
                        authorise monitor and regulate all primary care providers (<span>GPs</span>) and Secondary
                        care provider
                        (hospitals, in public and private sector).The Secretary of State for Health and NHS England and
                        other authorised bodies oversee this regime and every healthcare provider needs to be registered
                        with the Care Quality Commission (<span>CQC</span>).
                    </p>
                    <p class="col-grey p-secondary">Under the new regime GPs are required to notify patients when they have a choice of provider and
                        to tell patients where they can find information about the choices they have. Clinical
                        Commissioning Groups (<span>CCGs</span>) were created which oversee the provision of
                        healthcare in designated
                        regions, authorised by NHS England, and themselves are obliged to consider patient <span>Choice</span>
                        and to
                        procure providers best suited to provide value for money, quality and efficiency of healthcare
                        services, whether procured from the public or private sector, at set prices known as the NHS
                        Tariff.
                    </p>
                    <p class="col-grey p-secondary">The Act provides that paid for NHS Healthcare services must be in accordance with the NHS Tariff,
                        which is published by NHS Improvement (formerly known as Monitor, an NHS responsible body) which
                        among other things promotes, oversees, and regulates competition in health care services in
                        England.
                    </p>
                    <p class="col-grey p-secondary">In summary, licensed healthcare providers are obliged to promote <span>Choice</span>
                        and they cannot be
                        prejudiced to public or private providers so that no provider gets an unfair advantage in
                        competing with others, whether public or private sector.
                    </p>
                    <p class="col-grey p-secondary">These rights are reflected in the NHS Constitution.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="your-rights-what">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-2 text-center mb-4">
                    <h2 class="font-28 SofiaPro-SemiBold">What this means for you as a Patient?</h2>
                    <p class="col-grey p-secondary">You have legal rights to choice of healthcare services delivered in the public or private sector
                        paid for by the NHS and you must be given these choices by law.
                    </p>
                    <p class="col-grey p-secondary"> In some circumstances you do not have a legal right to choice but you should be offered choice
                        about your care. This is what the government has asked health care professionals to do.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="font-28 SofiaPro-SemiBold text-center">Choosing your GP</h2>
                    <div class="bg-white p-30 shadow">
                        <p class="font-24 SofiaPro-SemiBold text-center">You can:</p>
                        <ul class="row mb-0">
                            <li class="col-6 border-right border-green">
                                <p class="green-tick tick-with-title">Choose a GP practice</p>
                                <p>Choose which GP practice you register with.</p>
                            </li>
                            <li class="col-6">
                                <p class="green-tick tick-with-title">Ask a doctor or nurse</p>
                                <p> Ask to see a particular doctor or nurse at the GP practice. Your practice must make every
                                    effort to meet your preferences to see the doctor or nurse you have asked for, although
                                    there are some occasions when this might not be possible.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="choose-health-parent my-0">--}}
{{--        <div class="container">--}}
{{--            <div class="choose-health animated fade-in" data-animation="fade-in">--}}
{{--                <div class="choose-health-text d-flex flex-column">--}}
{{--                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna--}}
{{--                    ornare ullamcorper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec,--}}
{{--                    hendrerit dui. Pellentesque habitant morbi tristique senectus et netus.”--}}
{{--                    @include('components.basic.button', [--}}
{{--                        'buttonText'        => 'Choose your health',--}}
{{--                        'classTitle'        => 'btn btn-blue btn-icon btn-arrow-right mt-4 mx-auto SofiaPro-Regular',--}}
{{--                        'svg'               => 'chevron-right',--}}
{{--                        'hrefValue'         => '/results-page'--}}
{{--                    ])--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    @include('pages.pagesections.testimonials')
    <section class="bg-greylight">
        <div class="container">
            <h2 class="font-28 SofiaPro-SemiBold text-center">Choosing your Hospital and Consultant</h2>
            <div class="bg-white p-30 shadow mb-5">
                <p class="font-24 SofiaPro-SemiBold text-center">You can:</p>
                <ul class="row">
                    <li class="col-6 border-right border-green">
                        <p class="green-tick tick-with-title">Choose the organisation</p>
                        <p> Choose the organisation you need to be referred to as an NHS outpatient to see a consultant
                            or specialist (an outpatient appointment means you will not be admitted to a ward). You may
                            choose whenever you are referred for the first time for an appointment for a physical or
                            mental health condition. This could be an NHS hospital or a private sector hospital that has
                            contracted to provide these services at the NHS Tariff, which in practice is most private
                            hospitals. There are exceptions.</p>
                    </li>
                    <li class="col-6">
                        <p class="green-tick tick-with-title">Choose which clinical team</p>
                        <p>Choose which clinical team will be in charge of your NHS treatment within your chosen
                            organisation. For a physical health condition, you will be seen by the consultant or by a
                            clinician who works in the consultant’s team. For a mental health condition, you will be
                            seen by the consultant or named healthcare professional who leads the mental health team or
                            by another health care professional in the team.</p>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <p class="SofiaPro-SemiBold">Essentially, you should always have a conversation with the healthcare professional who is
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
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 offset-2 text-center">
                    <p>If you want to find out more about your choices or the restrictions on your choices visit:
                    </p>
                    <p>
                        <a class="btn-link" target="_blank"
                           href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs"
                        >The NHS Choice Framework</a>
                    </p>
                    <p>
                        <a class="btn-link" target="_blank" href="https://www.england.nhs.uk/?s=patient+choice">NHS England’s website</a>
                    </p>
                    <p>
                        <a class="btn-link" target="_blank"
                           href="https://www.gov.uk/government/publications/the-nhs-constitution-for-england/the-nhs-constitution-for-england">NHS Constitution</a>
                    </p>
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
    @include('pages.pagesections.social')
@endsection
