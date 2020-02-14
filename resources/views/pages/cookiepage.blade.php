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
                    <p class="p-secondary">Our website uses cookies and other tracking technologies to distinguish you from other users of
                        our website. This helps us to
                        provide you with a good experience when you browse our website and also allows us to improve
                        our site by helping us understand how you are using our site. By continuing to browse the site,
                        you are agreeing to our use of cookies.</p>
                    <p class="p-secondary">A cookie is a small file of letters and numbers that we store on your browser or the hard
                        drive of your computer, tablet or mobile phone or other device(“Device”) if you agree. Cookies
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
                            pages you have visited and the links you have followed. We use this information to make
                            our website and any advertising displayed on it (if any) more relevant to your interests and
                            to improve your experience of our website. We
                            may also share this information with third parties for this purpose.
                        </li>
                        <li>Please see our <a href="/privacy-policy">Privacy Policy</a> for information about how we
                            protect your data.
                        </li>
                    </ul>
                    <p class="p-secondary">You can find more information about the individual cookies we use and the purposes for which we
                        use them in the table below:</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Cookie</th>
                                <th scope="col">Name</th>
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
                                <td>Empty, or set to false.</td>
                                <td>To record if you have completed a feed back form.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">compareHospitalsData</th>
                                <td>compareHospitalsData</td>
                                <td>String that contains the unique identifiers needed for the user when comparing
                                    hospitals.
                                </td>
                                <td>Used for the comparison functionality so you can compare hospitals on our site</td>
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
                                <td>Used to enable you to accept our cookie policy</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="p-secondary">Please note that third parties such as providers of
                        external services like web traffic analysis services may also use cookies or similar tracking
                        technologies, over which we have
                        no control. These cookies are likely to be analytical/performance cookies or targeting
                        cookies. These cookies may provide us with information about your use of our website.
                    </p>
                    <p class="p-secondary">This website contains links to other websites. This policy only applies to this website so when
                        you visit external websites please read their cookie and privacy policies carefully. Hospital
                        Compare accepts no responsibility for external websites.</p>
                    <p class="p-secondary">We may offer products or services provided by external companies. These companies may also
                        allocate cookies or similar items to your Device. These types of cookies and similar tracking
                        technologies and how they operate will be governed by the privacy and cookie policies of those
                        third party companies.</p>
                    <p class="p-secondary">You can block cookies by activating the setting on your browser that allows you to refuse the
                        setting of all or some cookies. However, if you use your browser settings to block all cookies
                        (including essential cookies) you may not be able to access all or parts of our site. </p>
                    <p class="p-secondary">Except for essential cookies, all cookies will expire after 1 year.</p>
                    <p class="p-secondary">For more information on how to control your cookie and browser settings, or on how to delete
                        cookies from your hard drive please visit <a class="btn-link" target="_blank" href="https://www.aboutcookies.org.uk">www.aboutcookies.org.uk</a></p>
                </div>
            </div>
        </div>

    </section>

@endsection
