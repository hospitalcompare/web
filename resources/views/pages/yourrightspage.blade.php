@extends('layout.app')

@section('title', 'Your rights')

@section('description', 'In England you have a legal right to make choices about your healthcare that could mean you or loved ones are seen faster by healthcare professionals.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'your-rights-page hc-content')

@section('content')
    @include('pages.pagesections.flatbanner')
    <section class="your-rights-intro pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="font-36 mb-3 text-center">Your <span class="col-brand-primary-1">Rights</span></h1>
                    <p class="text-center font-26 p-secondary mb-5 col-grey">
                        In England you have a legal right to make choices about your NHS healthcare that could mean you
                        or your loved ones
                        get seen faster and feel better quicker.
                    </p>
                    <div class="split-card bg-white p-30 shadow mb-5">
                        <p class="font-24 SofiaPro-Medium text-center">You can:</p>
                        <ul class="row mb-0">
                            <li class="col-md-6 border-right border-green pb-3 pb-md-0">
                                <p class="green-tick tick-with-title">Choose the organisation</p>
                                <p class="p-secondary col-grey mb-0">You have a legal right to have your free NHS
                                    treatment at an NHS or private hospital of your
                                    choice.*</p>
                            </li>
                            <li class="col-md-6">
                                <p class="green-tick tick-with-title mt-3 mt-md-0">Choose which clinical team</p>
                                <p class="p-secondary col-grey mb-0">Patients have a right to start consultant-led
                                    treatment within 18 weeks of referral (or 2 weeks in
                                    the case of urgent suspected cancer) or request an
                                    offer of alternative providers that can start their
                                    treatment sooner. The NHS must take all reasonable
                                    steps to meet patients’ requests.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="your-rights-act overflow-hidden">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6">
                    <p class="col-grey p-secondary">
                        There are a number of other important Government
                        pledges around waiting times, and of course there are
                        exceptions. For example, in the case of emergency or
                        urgent treatment. Maternity services are also treated
                        differently.
                    </p>
                    <p class="col-grey p-secondary">Many people aren’t aware of these rights, but by
                        knowing and acting upon them, you have the opportunity
                        to cut your waiting times and be treated quicker at NHS
                        or private hospitals, funded by the NHS, and to have you
                        treatment at higher ranked hospitals, across the country.</p>
                    <p class="col-grey p-secondary">The sources of your rights in law are spread across a
                        number of enactments and regulations including under
                        the rules introduced by the Health and Social Care Act
                        2012 (and related regulations) (“Act”). This Act introduced
                        important changes to the structure and organisation of
                        the NHS and enhanced your rights further.</p>
                </div>
                <div class="col-lg-6 your-rights-hero-cont">
                    <div class="your-rights-img-top"></div>
                    <div class="your-rights-img-bottom"></div>
                    <img class="your-rights-pattern-top-left" src="images/icons/about-top-left.svg" alt="dots">
                    <img class="your-rights-pattern-right" src="images/icons/about-right.svg" alt="dots">
                    <img class="your-rights-pattern-bottom" src="images/icons/about-bottom.svg" alt="dots">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="font-28 text-center">Among your rights are the following:</h2>
                </div>
                <div class="col-12">
                    <div class="card shadow mb-30 border-0 p-30">
                        <div class="row">
                            <div class="col-12 col-sm-2 col-lg-2">
                                <div class="card-icon-wrapper px-5 px-sm-0 px-xl-5 h-100 d-flex align-items-center">
                                    <img class="w-75 mx-auto" src="/images/icons/tick-blue.svg"
                                         alt="Icon representing choice">
                                </div>
                            </div>
                            <div class="card-body py-0 col-12 col-sm-10 col-lg-10">
                                <p class="font-18 SofiaPro-Medium">Choosing a GP</p>
                                <p class="mb-0 col-grey p-secondary">You can choose which GP practice to register with,
                                    as
                                    well as which doctor or nurse you’d like to see. That practice must
                                    make every effort to allow you to see the person you’ve chosen, however there may be
                                    occasions where this is not possible.*</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow mb-30 border-0 p-30">

                        <div class="row">
                            <div class="col-12 col-sm-2 col-lg-2col-12 col-sm-2 col-lg-2">
                                <div class="card-icon-wrapper px-5 px-sm-0 px-xl-5 h-100 d-flex align-items-center">
                                    <img class="w-75 mx-auto" src="/images/icons/tick-blue.svg"
                                         alt="Icon representing weighing scales">
                                </div>
                            </div>
                            <div class="card-body py-0 col-12 col-sm-10 col-lg-10">
                                <p class="font-18 SofiaPro-Medium">Choosing a Hospital</p>
                                <p class="col-grey p-secondary">When an NHS GP initially refers you to see a consultant
                                    or
                                    specialist, you can choose which hospital you’d prefer to be
                                    referred to.</p>
                                <p class="col-grey p-secondary">You can choose an NHS hospital, or a private hospital
                                    that
                                    is contracted to do NHS work. You can make this choice ahead of
                                    your first appointment, whenever you are referred for a physical or mental health
                                    condition. *</p>
                                <p class="mb-0 col-grey p-secondary">Don’t forget, there’s no cost whatsoever to you
                                    (and no
                                    extra cost to the taxpayer) if you choose to have your NHS funded
                                    treatment or procedure at a private, rather than an NHS hospital. If your GP refers
                                    you
                                    for NHS treatment then the NHS
                                    pays for it.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow border-0 p-30 mb-40">
                        <div class="row">
                            <div class="col-12 col-sm-2 col-lg-2col-12 col-sm-2 col-lg-2">
                                <div class="card-icon-wrapper px-5 px-sm-0 px-xl-5 h-100 d-flex align-items-center">
                                    <img class="w-75 mx-auto" src="/images/icons/tick-blue.svg"
                                         alt="Icon representing weighing scales">
                                </div>
                            </div>
                            <div class="card-body py-0 col-12 col-sm-10 col-lg-10">
                                <p class="font-18 SofiaPro-Medium">Choosing a Consultant</p>
                                <p class="mb-0 col-grey p-secondary">You can choose which clinical team will be
                                    responsible
                                    for your NHS treatment, so always discuss your options with the
                                    person referring you.</p>
                                <p class="col-grey p-secondary">For a physical condition you will be seen by a
                                    consultant, or a clinician from their team. For a mental health condition you
                                    will be seen by a consultant, a mental health team leader or a member of their
                                    team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <p class="SofiaPro-Medium font-24 text-center">Exceptions</p>
                    <p class="p-intro">There are exceptions to your legal rights to choose where to
                        have your NHS treatment or procedure. For example, if you
                        are:</p>
                    <ul class="blue-dot blue-dot_small">
                        <li class="col-grey p-secondary">already receiving NHS care and treatment for the condition for
                            which you are being referred and this is an onward NHS referral
                        </li>
                        <li class="col-grey p-secondary">using emergency services</li>
                        <li class="col-grey p-secondary">in need of emergency or urgent treatment, such as cancer
                            services where you must be seen in a maximum waiting time of 2
                            weeks
                        </li>
                        <li class="col-grey p-secondary">a prisoner, on temporary release from prison, or detained in
                            ‘other prescribed accommodation’ (such as a court, secure
                            children’s home, secure training centre, an immigration removal
                            centre or a young offender’s institution)
                        </li>
                        <li class="col-grey p-secondary">someone who is held in a hospital setting under the Mental
                            Health Act 1983
                        </li>
                        <li class="col-grey p-secondary">a serving member of the armed forces</li>
                        <li class="col-grey p-secondary">using maternity services</li>
                        <li class="col-grey p-secondary">referred to services commissioned by local authorities, as your
                            choice will depend on what has been put in place locally
                        </li>
                    </ul>
                    <p class="col-grey p-secondary">See the links at the bottom of this page for more information.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="your-rights-intro pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="SofiaPro-Medium font-24 text-center mb-40">Background</p>
                    <p class="text-center font-26 p-secondary mb-5 col-grey">
                        The Health and Social Care Act 2012 (“Act”) introduced important changes to the way healthcare
                        services are managed
                        and delivered in England.
                    </p>
                    <p class="text-center font-26 p-secondary mb-5 col-grey">
                        This included:
                    </p>

                </div>
            </div>
            <div class="p-30 bg-grey">
                <div class="card shadow mb-30 border-0 p-30">
                    <div class="row">
                        <div class="col-12 col-sm-2 col-lg-2">
                            <div class="card-icon-wrapper px-5 px-sm-0 px-xl-5 h-100 d-flex align-items-center">
                                <img class="w-100" src="/images/icons/faq-make-choice.svg"
                                     alt="Icon representing choice">
                            </div>
                        </div>
                        <div class="card-body py-0 col-12 col-sm-10 col-lg-10">
                            <p class="font-18 SofiaPro-Medium">Choice</p>
                            <p class="mb-0 col-grey p-secondary">Putting patients and the public first,
                                increasing their involvement in decisions affecting them, as well as the choice
                                of healthcare provider for their NHS treatment (whether public sector of private
                                sector).</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-0 p-30">
                    <div class="row">
                        <div class="col-12 col-sm-2 col-lg-2col-12 col-sm-2 col-lg-2">
                            <div class="card-icon-wrapper px-5 px-sm-0 px-xl-5 h-100 d-flex align-items-center">
                                <img class="w-100" src="/images/icons/nhs-tariff.svg"
                                     alt="Icon representing weighing scales">
                            </div>
                        </div>
                        <div class="card-body py-0 col-12 col-sm-10 col-lg-10">
                            <p class="font-18 SofiaPro-Medium">The NHS National Tariff</p>
                            <p class="mb-0 col-grey p-secondary">A national standard price for healthcare
                                procedures. This aimed to create a level playing field for all providers of NHS
                                services, regardless of their status as a public or private sector organisation.
                                This means that if you choose to have your NHS
                                funded treatment at a private hospital the NHS will pay them the NHS National
                                Tariff to perform your treatment. You pay
                                nothing. If you choose to pay the private hospital yourself or your treatment is
                                funded by your healthcare insurer, you are
                                likely to find you will have your treatment performed even quicker.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="your-rights-act overflow-hidden">
        <div class="container">
            <div class="row mb-4 position-relative">
                <div class="col-12 col-lg-6">
                    <h2 class="font-28 ">The Act</h2>
                    <p class="col-grey p-secondary">The Act also introduced a number of other important
                        policies, whilst creating bodies and structures to
                        authorise, monitor and regulate all primary care
                        providers (GPs) and secondary care providers (public
                        and private sector hospitals) in England. The Secretary of
                        State for Health, NHS England and other bodies oversee
                        this regime and every healthcare provider needs to be
                        registered with the Care Quality Commission (CQC).
                        Wales, Scotland and Northern Ireland have different rules
                        under which NHS care is provided.</p>
                    <p class="col-grey p-secondary">Under the rules in England, GPs are required to notify
                        patients when they have a choice of provider and inform
                        them where they can find information about the choices
                        they have.</p>
                    <p class="col-grey p-secondary">Clinical Commissioning Groups (CCGs) were created in
                        England to oversee the provision of healthcare in
                        designated regions (authorised by NHS England). CCGs
                        are obliged to consider patient choice and use providers
                        best suited to offer value for money, quality and
                        eciency of healthcare services, whether sourced from
                        the public or private sector using the NHS Tariff. This is
                        designed to create a level playing field for NHS Hospitals
                        and private Hospitals performing NHS work at the NHS
                        Tariff.</p>
                    <p class="col-grey p-secondary">The Act says that paid-for NHS Healthcare services must
                        be in accordance with the NHS Tariff, which is published
                        by NHS Improvement, an organisation that promotes,
                        oversees, and regulates competition in health care
                        services in England.</p>
                    <p class="col-grey p-secondary">In summary, licensed healthcare providers are obliged to
                        promote choice, and they cannot be prejudiced to public
                        or private providers so that nobody gets an unfair
                        advantage in competing with others, whether public or
                        private sector.</p>
                    <p class="col-grey p-secondary">These rights are reflected in the NHS Constitution and the
                        regulations that support it.</p>
                </div>
                <div class="col-12 col-lg-6 your-rights-img-cont">
                    <div class="your-rights-img-top"></div>
                    <div class="your-rights-img-bottom"></div>
                    <div class="your-rights-img-back"></div>
                    <img class="your-rights-pattern-top-left" src="images/icons/about-top-left.svg" alt="dots">
                    <img class="your-rights-pattern-right" src="images/icons/about-right.svg" alt="dots">
                    <img class="your-rights-pattern-bottom" src="images/icons/about-bottom.svg" alt="dots">
                </div>
            </div>
        </div>
    </section>
    <section class="border-top border-bottom py-5">
        <div class="container">
            <p class="p-secondary col-grey">* Your legal right to choose a GP practice or to qualify for NHS treatment
                may be restricted in some circumstances . See
                the section entitled Exceptions or follow the website links given below for more information.</p>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 offset-lg-3 text-center">
                    <h3 class=" mb-5">Find out more</h3>
                    <p>
                        <a class="btn-link btn-brand-primary-1-link" target="_blank"
                           href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs"
                        >The NHS Choice Framework →</a>
                    </p>
                    <p>
                        <a class="btn-link btn-brand-primary-1-link" target="_blank"
                           href="https://www.england.nhs.uk/?s=patient+choice">NHS England’s website →</a>
                    </p>
                    <p>
                        <a class="btn-link btn-brand-primary-1-link" target="_blank"
                           href="https://www.gov.uk/government/publications/the-nhs-constitution-for-england/the-nhs-constitution-for-england">NHS
                            Constitution →</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
