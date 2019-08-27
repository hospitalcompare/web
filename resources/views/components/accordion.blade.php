@unless(!$showLinks)
<ul>
    @foreach($cards as $card)
        <li>
            <a href="#heading_{{ $loop->iteration }}" class="btn-link">{{ $card['title'] }}</a>
        </li>
    @endforeach
</ul>
@endif

<div class="accordion" id="{{ $accordionTitle }}_accordion">

    @foreach($cards as $card)
        <div class="card">
            <div class="card-header" id="heading_{{ $loop->iteration }}">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{ $card['title'] }}
                    </button>
                </h2>
            </div>

            <div id="collapse_{{ $loop->iteration }}" class="collapse show" aria-labelledby="headingOne"
                 data-parent="#{{ $accordionTitle }}_accordion">
                <div class="card-body">
                    {!! $card['content'] !!}

                </div>
            </div>
        </div>
    @endforeach
{{--    <div class="card">--}}
{{--        <div class="card-header" id="headingOne">--}}
{{--            <h2 class="mb-0">--}}
{{--                <button class="btn btn-link" type="button" data-toggle="collapse"--}}
{{--                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                    Who we are and how to contact us--}}
{{--                </button>--}}
{{--            </h2>--}}
{{--        </div>--}}

{{--        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"--}}
{{--             data-parent="#{{ $title }}_accordion">--}}
{{--            <div class="card-body">--}}
{{--                <p>--}}
{{--                    www.hospitalcompare.co.uk is a site operated by Hospital Compare Limited ("We").--}}
{{--                    We--}}
{{--                    are registered in England and Wales under company number 11514491 and have our--}}
{{--                    registered office and trading address at Hospital Compare Limited, Liverpool--}}
{{--                    Science--}}
{{--                    Park, ICi Building, 131 Mount Pleasant, Liverpool L3 5TF. Our main trading--}}
{{--                    address--}}
{{--                    is Our VAT number is 325696672.--}}
{{--                </p>--}}
{{--                <p>We are a private limited company.--}}
{{--                </p>--}}
{{--                <p>To contact us, please email <a class="btn-link" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a>--}}
{{--                </p>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="card">--}}
{{--        <div class="card-header" id="headingTwo">--}}
{{--            <h2 class="mb-0">--}}
{{--                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"--}}
{{--                        data-target="#collapseTwo" aria-expanded="false"--}}
{{--                        aria-controls="collapseTwo">--}}
{{--                    What do you do? What don’t you do? Can I trust you?--}}
{{--                </button>--}}
{{--            </h2>--}}
{{--        </div>--}}
{{--        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"--}}
{{--             data-parent="#{{ $title }}_accordion">--}}
{{--            <div class="card-body">--}}
{{--                <p>We have created Hospital Compare as a free to use comparison website for all--}}
{{--                    consumers or patients who require hospital treatment and a few other things too.--}}
{{--                    We provide comparison information to consumers on hospitals, whether the--}}
{{--                    hospital is an NHS hospital, a private hospital performing NHS funded work or a--}}
{{--                    private hospital performing paid for private sector work.--}}
{{--                </p>--}}
{{--                <p>We don’t advise you on health, medical, financial or other matters and we don’t--}}
{{--                    provide you with recommendations, but we do provide you with the very best--}}
{{--                    publically available information, clearly and openly so you can make informed--}}
{{--                    “choices” to meet your needs in choosing a hospital based on the performance--}}
{{--                    data we provide and we connect you with those who can advise you.--}}
{{--                </p>--}}
{{--                <p>All the information we provide is compiled from trusted government and other--}}
{{--                    sources principally from the Care Quality Commission <strong>(CQC)</strong>, the--}}
{{--                    body responsible--}}
{{--                    for oversight of all care provider entities, and from the NHS itself and from--}}
{{--                    other reliable data sources. The information and is processed and complied by--}}
{{--                    our experts into readily accessible and clear formats to guide you. We update--}}
{{--                    our information as often as the CQC itself.--}}
{{--                </p>--}}
{{--                <p>Your privacy is of the highest importance us, we never collect information from--}}
{{--                    you which exceeds the minimum necessary for us to provide the services we offer--}}
{{--                    you. Some of the information we collect relates to your location or postcode--}}
{{--                    which you enter on our site so that you can search for relevant information--}}
{{--                    about hospitals and other services close to you. If you make an enquiry to a--}}
{{--                    relevant hospital, they will need some personal information about you. The--}}
{{--                    information you set out on an enquiry form on our site is stored by us and is--}}
{{--                    keep private in accordance with our <a href="/privacy-policy"--}}
{{--                                                           class="btn-link">Privacy Policy</a>. If you--}}
{{--                    provide hospitals or other service providers we connect you with with personal--}}
{{--                    information that information will be governed by their privacy policies, which--}}
{{--                    you should review to be sure you understand how your information is being--}}
{{--                    protected.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="card">--}}
{{--        <div class="card-header" id="headingThree">--}}
{{--            <h2 class="mb-0">--}}
{{--                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"--}}
{{--                        data-target="#collapseThree" aria-expanded="false"--}}
{{--                        aria-controls="collapseThree">--}}
{{--                    Collapsible Group Item #3--}}
{{--                </button>--}}
{{--            </h2>--}}
{{--        </div>--}}
{{--        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"--}}
{{--             data-parent="#{{ $title }}_accordion">--}}
{{--            <div class="card-body">--}}
{{--                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
{{--                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
{{--                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt--}}
{{--                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.--}}
{{--                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente--}}
{{--                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer--}}
{{--                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them--}}
{{--                accusamus labore sustainable VHS.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
