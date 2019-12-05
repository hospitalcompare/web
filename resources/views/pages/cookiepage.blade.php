@extends('layout.app')

@section('title', 'Cookie Policy')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'cookie-page')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col hc-content">
                    <h1>Information about our use of cookies</h1>
                    <p>Our website uses cookies to distinguish you from other users of our website. This helps us to
                        provide you with a good experience when you browse our website and also allows us to improve
                        our site. By continuing to browse the site, you are agreeing to our use of cookies.</p>
                    <p>A cookie is a small file of letters and numbers that we store on your browser or the hard
                        drive of your computer if you agree. Cookies contain information that is transferred to your
                        computer's hard drive.</p>
                    <p>We use the following cookies:</p>
                    <ul class="blue-dot">
                        <li><strong>Strictly necessary cookies.</strong> These are cookies that are required for the
                            operation of our website. They include, for example, cookies that enable you to log into
                            secure areas of our website.
                        </li>
                        <li><strong>Analytical/performance cookies.</strong> They allow us to recognise and count the
                            number of visitors and to see how visitors move around our website when they are using it.
                            This helps us to improve the way our website works, for example, by ensuring that users are
                            finding what they are looking for easily.
                        </li>
                        <li><strong>Functionality cookies.</strong> These are used to recognise you when you return to
                            our website. This enables us to personalise our content for you, greet you by name and
                            remember your preferences.
                        </li>
                        <li><strong>Targeting cookies.</strong> These cookies record your visit to our website, the
                            pages you have visited and the links you have followed. We will use this information to make
                            our website and the advertising displayed on it (if any) more relevant to your interests. We
                            may also share this information with third parties for this purpose.
                        </li>
                    </ul>
                    <p>You can find more information about the individual cookies we use and the purposes for which we
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
{{--                            <tr>--}}
{{--                                <th scope="row">compareCount</th>--}}
{{--                                <td>compareCount</td>--}}
{{--                                <td>Number that is showing how many items you are comparing.</td>--}}
{{--                                <td>Used for the comparison functionality so you can compare hospitals on our site.</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">compareHospitalsData</th>--}}
{{--                                <td>compareHospitalsData</td>--}}
{{--                                <td>String that contains the actual data that the user is comparing.</td>--}}
{{--                                <td>Used for the comparison functionality so you can compare hospitals on our site</td>--}}
{{--                            </tr>--}}
                            <tr>
                                <th scope="row">showDoctor</th>
                                <td>showDoctor</td>
                                <td>Stores whether you have dismissed the doctor helper popup.
                                </td>
                                <td>Stops the doctor popup appearing multiple times.</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <th scope="row">compareCount</th>--}}
{{--                                <td>compareCount</td>--}}
{{--                                <td>Number that is showing how many items you are comparing.</td>--}}
{{--                                <td>Used for the comparison functionality so you can compare hospitals on our site.</td>--}}
{{--                            </tr>--}}
                            <tr>
                                <th scope="row">compareHospitalsData</th>
                                <td>compareHospitalsData</td>
                                <td>String that contains the actual data that the user is comparing.</td>
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
                                <td>The user’s approval of reading the cookie policy.</td>
                                <td>Used to enable you to accept our cookie policy</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Please note that third parties (including, for example, advertising networks and providers of
                        external services like web traffic analysis services) may also use cookies, over which we have
                        no control. These cookies are likely to be analytical/performance cookies or targeting
                        cookies.</p>
                    <p>You can block cookies by activating the setting on your browser that allows you to refuse the
                        setting of all or some cookies. However, if you use your browser settings to block all cookies
                        (including essential cookies) you may not be able to access all or parts of our site. </p>
                    <p>Except for essential cookies, all cookies will expire after 1 year.</p>
                </div>
            </div>
        </div>

    </section>

@endsection
