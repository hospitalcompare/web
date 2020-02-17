@extends('layout.app')

@section('title', 'Terms and Conditions')

@section('description', 'Learn about the terms and conditions that apply to Hospital Compare website users.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'terms-and-conditions-page')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col hc-content">
                    <h1>Terms of Use</h1>
                    <p class="p-secondary">Please read these terms and conditions carefully before using this site</p>
                    <h3>What's in these terms?</h3>
                    <p class="p-secondary">These terms tell you the rules for using our website
                        www.hospitalcompare.co.uk <strong>(our
                            site)</strong>.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-greylight pt-5">
        <div class="container">

            @include('components.accordion', [
            'showLinks' => false,
            'accordionTitle' => 'terms',
            'cards' => [
                [
                    'title' => 'Who we are and how to contact us',
                    'content' => '
                        <p>
                            www.hospitalcompare.co.uk is a site operated by Hospital Compare Limited ("We").
                            We
                            are registered in England and Wales under company number 11514491 and have our
                            registered office and trading address at Hospital Compare Limited, The Plaza, Old Hall Street, Liverpool, England, L3 9QJ. Our VAT number is 325696672.
                        </p>
                        <p>We are a private limited company.
                        </p>
                        <p>To contact us, please email <a class="btn-link" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a>
                        </p>'
                ],
                [
                    'title' => 'What do you do? What don’t you do? Is your service Free? Can I trust you?',
                    'content' => '
                        <p>We have created Hospital Compare as a free to use comparison website for all
                            consumers or patients who require hospital treatment and a few other things too.
                            We provide comparison information to consumers on hospitals, whether the
                            hospital is an NHS hospital, a private hospital performing NHS funded work or a
                            private hospital performing paid for private sector work.
                        </p>
                        <p>Our site is made available free of charge to consumers and patients who use our site. The hospitals or other service providers you contact through us may pay us a fee for putting you in touch with them or if they provide you with a service or product. This is subject to the terms of contracts we may have with them. We make no charge to consumers.
                        </p>
                        <p>We don’t advise you on health, medical, financial or other matters and we don’t
                            provide you with recommendations, but we do provide you with the very best
                            publicly available information, clearly, openly and impartially so you can make informed
                            “choices” to meet your needs in choosing a hospital in England based on the performance
                            data we provide and we connect you with those who can advise you.
                        </p>
                        <p>All the information we provide is compiled from trusted government and other
                            sources principally from the Care Quality Commission <strong>(CQC)</strong>, the
                            body responsible
                            for oversight of all care provider entities in England, and from the NHS itself and from
                            other reliable data sources. The information is processed and compiled by
                            our experts into readily accessible and clear formats to guide you in an impartial way. We update
                            our information as often as the CQC itself.
                        </p>
                        <p>Your privacy is of the highest importance to us, we never collect information from
                            you which exceeds the minimum necessary for us to provide the services we offer
                            you. Some of the information we collect relates to your location or postcode
                            which you enter on our site so that you can search for relevant information
                            about hospitals and other services close to you. If you make an enquiry to a
                            relevant hospital, they will need some personal information about you. The
                            information you set out on an enquiry form on our site is stored by us and is
                            keep private in accordance with our <a href="/privacy-policy"
                                                                   class="btn-link">Privacy Policy</a>. If you
                            provide hospitals or other service providers we connect you with with personal
                            information that information will be governed by their privacy policies, which
                            you should review to be sure you understand how your information is being protected.
                        </p>'
                ],
                [
                    'title' => 'By using our site you accept these terms',
                    'content' => '
                            <p>By using our site, you confirm that you accept these terms of use and that you agree to comply with them. This constitutes a contract                                           between us.</p>
                            <p>If you do not agree to these terms, you must not use our site or services.
                            </p>
                            <p>We recommend that you print a copy of these terms for future reference.
                            </p>'
                ],
                [
                    'title' => 'There are other terms that may apply to you',
                    'content' => '
                            <p>
                                    These terms of use refer to the following additional terms, which also apply to your use of our site and services:
                            </p>
                            <ul class="blue-dot">
                                <li>Our <a href="/privacy-policy" class="btn-link">Privacy Policy</a>. This sets out information confirming how we respect your                                                     privacy. If you complete an enquiry form on our site to make an enquiry to a hospital or other service provider that hospital or service provider will have terms and conditions relating to your enquiry and privacy which you should consider.
                                </li>
                                <li>Our <a href="/cookie-policy" class="btn-link">Cookie Policy</a>, which sets out information about the cookies and similar technologies on our site.
                                </li>
                                <li>If you purchase services or products from any site that is linked to our site that will have the terms and conditions of that will apply to that purchase. We are not responsible for the terms you agree with hospitals or other service providers.
                                </li>
                            </ul>
                            <p>You are also responsible for ensuring that all persons who access our site through your internet connection or device are aware of these terms of use and other applicable terms and conditions, and that they comply with them.
</p>'
                ],
                [
                    'title' => 'We may make changes to these terms',
                    'content' => '
                        <p>We amend these terms from time to time. Every time you wish to use our site, please check these terms to ensure you
understand the terms that apply at that time. These terms were most recently updated on 17 February 2020. </p>
'
                ],
                [
                    'title' => 'We may make changes to our site',
                    'content' => '
                        <p>We may update and change our site and policies from time to time for business and operational reasons or to improve our services to you so please re-check our terms and conditions, including our privacy policy and cookie policy periodically to check for updates.</p>'
                ],
                [
                    'title' => 'We may suspend or withdraw our site',
                    'content' => '<p>We do not guarantee that our site, or any content on it, will always be available or be uninterrupted. We may suspend or withdraw or restrict the availability of all or any part of our site for business and operational reasons. We will try to give you reasonable notice of any suspension or withdrawal.</p>'
                ],
                [
                    'title' => 'Our site is only for users in England and Wales',
                    'content' => '<p>
                                    Our site is directed to people over 18 years residing in England. We do not represent that content available on or
                                    through our site is appropriate for use or available in other locations. We will be extending our services throughout the United Kingdom in due course.</p>'
                ],
                [
                    'title' => 'How you may use material on our site',
                    'content' => '
                        <p>We are the owner or the licensee of all intellectual property rights in our site, and in the material published on
                            it. Those works are protected by copyright laws and treaties around the world. All such rights are reserved.
                        </p>
                        <p>You may print off one copy, and may download extracts, of any page(s) from our site for your personal use and you may
                            draw the attention of others to content posted on our site.
                        </p>
                        <p>Certain information our site is provided to us subject to the latest version of the The Open Government Licence (OGL). For more details please see our <a href="/attributions">Attributions Notice.</a></p>
                        <p>You must not modify the paper or digital copies of any materials you have printed off or downloaded in any way, and
                            you must not use any logos, illustrations, photographs, video or audio sequences or any graphics separately from any
                            accompanying text.
                        </p>
                        <p>Our status (and that of any identified contributors) as the authors of content on our site must always be
                            acknowledged.
                        </p>
                        <p>You must not use any part of the content on our site for commercial purposes without obtaining a licence to do so
                            from us or our licensors.
                        </p>
                        <p>If you print off, copy or download any part of our site in breach of these terms of use, your right to use our site
                            will cease immediately and you must, at our option, return or destroy any copies of the materials you have made.
                        </p>'
                ],
                [
                    'title' => 'We do not provide advice',
                    'content' => '
                        <p>
                            We do not advise you on health, medical, financial or other matters and we don’t provide you with recommendations,
                            but we do provide you with the very best publicly available information processed professionally by our experts,
                            clearly and openly so you can make informed choices of hospital performance and we connect you with those who can
                            advise you. This site is not intended, therefore, to amount to advice on which you should rely. You must obtain
                            professional or specialist advice before taking, or refraining from, any action on the basis of the content on our
                            site.
                        </p>
                        <p>
                            Although we make reasonable efforts and take professional diligence to update the information on our site, we make
                            no representations, warranties or guarantees, whether express or implied, that the content on our site is accurate,
                            complete or up to date.
                        </p>'
                ],
                [
                    'title' => 'We are not responsible for websites linked to ours',
                    'content' => '
                         <p>Where our site contains links to other sites and services provided by third parties, these links are provided for your information only. Such links should not be interpreted as approval by us of those linked websites or information you may obtain from them.</p>
                         <p>We have no control over the contents of those sites or their services or products and we are not responsible for them.</p>'
                ],
                [
                    'title' => 'Third party generated content is not approved by us',
                    'content' => '
                        <p>This website includes information and materials provided by hospitals or other service providers or other users of the site including information on services and performance and quality, for instance by the Care Quality Commision (CQC). We always try to make it clear where this information is provided by others rather than us. We do not verify, validate or approve information provided by hospitals or the CQC or other service providers or users. The views expressed by hospitals or the CQC or other service providers or users on our site do not represent our views or values.</p>
                        <p>If you wish to complain about information and materials on our site please contact us on <a class="btn-link" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a></p>'
                ],
                [
                    'title' => 'Our responsibility for loss or damage suffered by you',
                    'content' => '
                                <p>The material on this website is provided “as is”, without any conditions, warranties or other terms of any kind. Accordingly, to the maximum extent permitted by law,  Hospital Compare provides this site on the basis that we exclude all representations, warranties, conditions and other terms (including, without limitation, any conditions implied by law). Hospital Compare has used all reasonable care and skill in compiling the content of this site but makes no warranty as to the accuracy of any information within it and cannot accept liability for any errors or omissions.  Specifically please note:</p>
                                <ul class="blue-dot">
                                    <li>We do not exclude or limit in any way our liability to you where it would be unlawful to do so. This includes
                                        liability for death or personal injury caused by our negligence or the negligence of our employees, agents or
                                        subcontractors and for fraud or fraudulent misrepresentation. With these exceptions and save as mentioned below
                                        our liability, and the liability of our officers, employees, agents and subcontractors for the information contained on our site and the service we provide is limited to £100.
                                    </li>
                                    <li>Different limitations and exclusions of liability will apply to liability arising as a result of the supply of
                                        any services or products to you, by hospitals or third parties linked to our site. Such terms will be set out in
                                        the terms and conditions of supply of those hospitals and third parties, which you should familiarise yourself
                                        with.
                                    </li>
                                    <li>Please note that we only provide our site for domestic and private use. You agree not to use our site for any
                                        commercial or business purposes, and we and our officers, employees, agents and subcontractors have no liability to you for any loss of profit, loss of business,
                                        business interruption, or loss of business opportunity.
                                    </li>
                                    <li>If defective digital content that we have supplied, damages a device or digital content belonging to you and
                                        this is caused by our failure to use reasonable care and skill, we will consider either repairing the damage to
                                        your device or paying you compensation. However, we will not be liable for damage that you could have avoided by
                                        following our advice, for example to apply an update offered to you free of charge or for damage that was caused by you
                                        failing to correctly follow installation instructions or to have in place the minimum system requirements
                                        advised by us. We and our officers, employees, agents and subcontractors  will not be liable for any indirect damage or consequential loss to the extent the law shall
                                        allow.
                                    </li>
                                </ul>'
                ],
                [
                    'title' => 'How we may use your personal information',
                    'content' => '
                        <p>We will only use your personal information only as set out in our <a href="/privacy-policy">Privacy Policy.</a></p>'
                ],
                [
                    'title' => 'Enquiry Forms and Uploading Ccontent to our site',
                    'content' => '
                        <p>We are not responsible for any content that you upload to our site including any inaccurate information contained in an Enquiry Form you complete on our site.  This is your responsibility and you must seek to correct any information presented to Hospitals or other service providers through or as a result of using our site. Failure to do so may affect your eligibility for treatment and may result in delays affecting your treatment, or could result in you  receiving wrong advice or wrong treatment.</p>
                        <p>When you complete an Enquiry From on our site and acknowledge your agreement to these Terms of Use, by ticking the box on an Enquiry Form, you are agreeing that we may process your enquiry in accordance with these Terms of Use, that we may store your enquiry in accordance with these terms and our Privacy Policy and in return we will pass on your completed Enquiry Form by email to the service providers you have chosen upon our site, if those service providers will accept enquiries from us your behalf.</p>
                        <p>Once you have completed our Enquiry Form and acknowledged your agreement to these Terms of Use, we will email the relevant hospital with your enquiry, if they accept contact in this way, and will email you at the email address you provide on the Enquiry Form to tell you we have done so. Generally the hospital concerned, if they accept enquiries in this way, will make contact with you within 3 or 4 working days.  If they have not done so please contact that hospital directly to follow up your enquiry at the contact details we have provided to you or by visiting their website and/or calling them. We do not provide a follow up service to check on the status of your enquiry and data protection laws may mean the hospital concerned will not enter dialogue with us about your enquiry in any event.  Any enquiry made through our site will also be governed by the terms and conditions and privacy policy of the hospital you wish to contact. Please familiarize yourself with their terms, which can be found on their website or by contacting them directly.</p>
                        <p><strong>Please note, once we have made contact with the hospital concerned as described in these Terms of Use our service to you is at an end.</strong></p>
                        <p>Our purpose is to provide you with the very best publicly available information, clearly and openly so you can make informed “choices” to meet your needs in choosing a hospital in England.   We do not provide a follow up service or concierge service to arrange or change appointments with hospitals. This service will be provided by the hospital concerned, subject to their terms and conditions.   As such we do not accept any further responsibility for your enquiry with your chosen hospital once we have transmitted your Enquiry Form to your chosen hospital, if they will accept enquiries in this way. Further enquiries must be made by you to your chosen hospital directly.</p>
                    '
                ],
                [
                    'title' => 'Security of the Internet',
                    'content' => '<p>While we take all appropriate and reasonable steps to protect the  confidentiality, integrity and availability of your systems and services the Enquiry Forms you complete, which are stored on our servers or on our service providers servers and transmitted by email to hospitals on your behalf, are not currently encrypted. Information on the internet is not completely secure. On occasion such information can be intercepted and as such we cannot guarantee the security of data that you choose to send us or enter on Enquiry Forms. We do not represent or warrant that the Enquiry Form you complete is secure or that data you provide will be protected against loss, misuse, attacks, or alteration by third parties. Providing such data is entirely at your own risk. Please see our Privacy Policy for more information about how we take all reasonable steps to safeguard your information.</p>'
                ],
                [
                    'title' => 'We are not responsible for viruses and you must not introduce them',
                    'content' => '
                        <p>We do not guarantee that our site will be secure or free from bugs or viruses though we use professional diligence to avoid such things.</p>
                        <p>You are responsible for configuring your information technology, computer programmes and platform to access our site. You should use your own virus protection software.</p>
                        <p>You must not misuse our site by knowingly introducing viruses, trojans, worms, logic bombs or other material that is malicious or technologically harmful. You must not attempt to gain unauthorised access to our site, the server on which our site is stored or any server, computer or database connected to our site. You must not attack our site via a denial-of-service attack or a distributed denial-of service attack. By breaching this provision, you would commit a criminal offence under the Computer Misuse Act 1990. We will report any such breach to the relevant law enforcement authorities and we will cooperate with those authorities by disclosing your identity to them. In the event of such a breach, your right to use our site will cease immediately.</p>'
                ],
                [
                    'title' => 'Rules about linking to our site',
                    'content' => '
                        <p>You may link to our home page, provided you do so in a way that is fair and legal and does not damage our reputation or
                            take advantage of it.</p>
                        <p>You must not establish a link in such a way as to suggest any form of association, approval or endorsement on our
                            part where none exists.</p>
                        <p>You must not establish a link to our site in any website that is not owned by you.</p>
                        <p>Our site must not be framed on any other site, nor may you create a link to any part of our site other than the home
                            page.</p>
                        <p>We reserve the right to withdraw linking permission without notice.</p>
                        <p>If you wish to link to or make any use of content on our site other than that set out above, please email <a
                                class="btn-link" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk.</a></p>
'
                ],
                [
                    'title' => 'Which country\'s laws apply to any disputes?',
                    'content' => '
                        <p>Please note that these terms of use, their subject matter and their formation, are governed by English law. You and we both agree that the courts of England and Wales will have exclusive jurisdiction.</p>'
                ],
                [
                    'title' => 'Our trade marks',
                    'content' => '<p>The name “Hospital Compare” and our logo on our website are Trademarks of Hospital Compare Limited. You are not permitted to use them without our approval.
</p>'
                ]
            ]])
        </div>
    </section>
@endsection
