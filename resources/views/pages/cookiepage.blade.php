@extends('layout.app')

@section('title', 'Cookie Policy')

@section('description', 'Our website uses cookies to distinguish you from other users of Hospital Compare, to provide you with a good experience as you browse the site.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'cookie-page')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col hc-content">
                    <h1>Information about our use of cookies</h1>
                    <p class="p-secondary">Our website uses cookies and other tracking technologies to distinguish you
                        from other users of
                        our website. This helps us to
                        provide you with a good experience when you browse our website and also allows us to improve
                        our site by helping us understand how you are using our site. By continuing to browse the site,
                        you are agreeing to our use of cookies.</p>
                    <p class="p-secondary">A cookie is a small file of letters and numbers that we store on your browser
                        or the hard
                        drive of your computer, tablet or mobile phone or other device (“Device”) if you agree. Cookies
                        contain information that is transferred to your
                        Device's hard drive.</p>
                    <p class="p-secondary">We use the following cookies:</p>
                    <ul class="blue-dot">
                        <li><strong>Strictly necessary cookies.</strong> These are cookies that are required for the
                            operation of our website. For example, to identify your browsing session on a server and to
                            record your consent to our use of cookies.
                        </li>
                        <li><strong>Analytical/performance cookies.</strong> They allow us to recognise and count the
                            number of visitors and to see how visitors move around and use our website.
                            This helps us to improve the way our website works, for example, by ensuring that users are
                            finding what they are looking for easily.
                        </li>
                        <li><strong>Functionality cookies.</strong> These are used to recognise you when you return to
                            our website. This enables us to personalise our content for you, and
                            remember your preferences. These cookies are also used to measure the effectiveness of our
                            site functionality.
                        </li>
                        <li><strong>Targeting cookies.</strong> These cookies record your visit to our website, the
                            pages you have visited and the links you have followed. We use this information to make our
                            website and any advertising displayed on it (if any) more relevant to your interests and to
                            improve your experience of our website. We may also share this information with third
                            parties for these purposes.
                        </li>
                    </ul>
                    <p class="p-secondary">You can block cookies by activating the setting on your browser that allows
                        you to refuse the setting of all or some cookies. However, if you use your browser settings to
                        block all cookies (including strictly necessary cookies) you may not be able to access all or
                        parts of our website.</p>
                    <p class="p-secondary">Please see our <a href="/privacy-policy">Privacy Policy</a> for information
                        about how we
                        protect your data.
                    </p>
                    <p class="p-secondary">You can find more information about the individual cookies we use and the
                        purposes for which we
                        use them in the table below:</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr vertical-align="top">
                                <th scope="col">Cookie</th>
                                <th scope="col">Name of Cookie and/or Third Party supplier (if relevant)</th>
                                <th scope="col">Purpose</th>
                                <th scope="col">More Information</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">XSRF-TOKEN</th>
                                <td>XSRF-TOKEN</td>
                                <td>String that is automatically generated and is attached to a form when it is
                                    created.
                                </td>
                                <td>Used for security reasons to protect your security while navigating our site.</td>
                            </tr>
                            <tr>
                                <th scope="row">showFeedbackForm</th>
                                <td>showFeedbackForm</td>
                                <td>To record if you have completed the feedback form.</td>
                                <td>Determines whether to show the feedback form based on whether the user has already
                                    completed or dismissed it.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">compareHospitalsData</th>
                                <td>compareHospitalsData</td>
                                <td>String that contains the unique identifiers needed for the user when comparing
                                    hospitals.
                                </td>
                                <td>Used for the comparison functionality so you can compare hospitals on our site.</td>
                            </tr>
                            <tr>
                                <th scope="row">hospital_compare_session</th>
                                <td>hospital_compare_session</td>
                                <td>String that uniquely identifies the session of the user.</td>
                                <td>Used for security reasons to protect your security while navigating our site.</td>
                            </tr>
                            <tr>
                                <th scope="row">cookieconsent_status</th>
                                <td>cookieconsent_status</td>
                                <td>To record the user’s approval of our cookie policy.</td>
                                <td>Used to enable you to accept our cookie policy.</td>
                            </tr>
                            <tr>
                                <th scope="row">fr</th>
                                <td>fr</td>
                                <td>Tracks user activity on our site</td>
                                <td>Used to give us a better understanding of user actions on our site such as which
                                    buttons are clicked and which pages visited. This is used to help us improve our
                                    users’ experiences
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    _ga, _dc_gtm_UA-31302719-3, _gcl_au, _gid
                                </th>
                                <td>
                                    Google Analytics and Google Tag Manager
                                </td>
                                <td>
                                    To measure the user interactions across our website.
                                </td>
                                <td>
                                    <p>Cookies for analytics programmes allow us to see how users use our website so we
                                        can see where there are problems with its design and functionality, and where we
                                        can improve user experience. These cookies do not trace personal information
                                        such as your name, but can track how often your computer visits a website, which
                                        pages your computer visited and in which order, and where you left the
                                        website.</p>
                                    <p>Tag Manager allows us to add scripts to our site from a web-based user
                                        interface..</p>
                                    <p>This type of information helps to make our website and marketing campaigns more
                                        relevant.
                                        For a full description of Google’s use of cookies, please click <a
                                            class="btn-link"
                                            href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?csw=1"
                                            target="_blank">here</a>.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    _ga,
                                    _dc_gtm_UA-31302719-3,
                                    _gcl_au,
                                    _gid
                                    _hjClosedSurveyInvites,
                                    _hjDonePolls,
                                    _hjMinimizedPolls,
                                    _hjDoneTestersWidgets,
                                    _hjIncludedInSample,
                                    _hjShownFeedbackMessage,
                                    _hjid,
                                    _hjRecordingLastActivity,
                                    _hjTLDTest,
                                    _hjUserAttributesHas,
                                    _hjCachedUserAttributes,
                                    _hjLocalStorageTest
                                </th>
                                <td>
                                    Hotjar
                                </td>
                                <td>
                                    To understand users’ needs and activity on our website to optimise service and
                                    experience.
                                </td>
                                <td>
                                    Used to understand how much time a user spends on which pages of our website, which
                                    links they click,and what users do. This enables us to build and maintain our
                                    service with user feedback to create a better service and a better experience. For a
                                    full description of Hotjars use of cookies please click
                                    <a class="btn-link"
                                       href="https://help.hotjar.com/hc/en-us/articles/115011789248-Hotjar-Cookies"
                                       target="_blank">here</a>.
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="p-secondary">Please note that third parties such as providers of
                        external services to Hospital Compare like web traffic analysis services such as Google
                        Analytics, facebook, Hotjar, or advertising networks, may also use cookies or
                        similar tracking technologies, over which we have no control. These cookies are likely to be
                        analytical/performance cookies or targeting
                        cookies. These cookies provided by them as utilised by us (as indicated in the table above) may
                        provide us with information about your use of and activity on our website.
                    </p>
                    <p class="p-secondary">This website contains links to other websites. This policy only applies to
                        this website so when
                        you visit external websites please read their cookie and privacy policies carefully. Hospital
                        Compare accepts no responsibility for external websites.</p>
                    <p class="p-secondary">We may offer products or services provided by external companies. These
                        companies may also
                        allocate cookies or similar items to your Device. These types of cookies and similar tracking
                        technologies and how they operate will be governed by the privacy and cookie policies of those
                        third party companies.</p>
                    <p class="p-secondary">You can block cookies by activating the setting on your browser that allows
                        you to refuse the
                        setting of all or some cookies. However, if you use your browser settings to block all cookies
                        (including essential cookies) you may not be able to access all or parts of our site. </p>
                    <p class="p-secondary">Except for session cookies which expire when you close your browser, and showFeedbackForm which expires after 21 days, all
                        cookies will expire after 1 year.</p>
                    <p class="p-secondary">For more information on how to control your cookie and browser settings, or
                        on how to delete
                        cookies from your hard drive please visit <a class="btn-link" target="_blank"
                                                                     href="https://www.aboutcookies.org.uk">www.aboutcookies.org.uk</a>
                    </p>
                </div>
            </div>
        </div>

    </section>

@endsection
