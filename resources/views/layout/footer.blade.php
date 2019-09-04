<div class="back-top-wrapper">
    <div class="container back-top-content d-flex justify-content-end">
        @include('components.basic.button', [
        'id' => 'back-to-top',
        'classTitle' => 'btn btn-icon btn-back-to-top',
        'button' => 'Back to top',
        'hrefValue' => '#top',
        'icon' => 'fa fa-chevron-up'])
    </div>
</div>
<footer class="footer">
    <div class="footer-upper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="footer-upper__nav">
                        <ul class="footer-upper__menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/your-rights">Your rights</a></li>
                            <li><a href="/patient-choice">Patient choice</a></li>
                            {{--                <li><a href="/our-blogs">Our blogs</a></li>--}}
                            <li><a href="mailto:hello@hospitalcompare.co.uk">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <div class="social">
                        {{--            @include('components.logo', ['titleParent' => 'footerLogoParent', 'logoImg' => 'footerLogoImg', 'logoTitle' => 'footerLogoTitle'])--}}
                        <p>Helping you to make the best healthcare choices</p>
                        <ul class="social-list">
                            <li>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="footer-middle">
        <div class="svg-wrap animated" data-animation="draw" style="overflow: hidden">
            @svg('heart-line')
        </div>
{{--        <div class="container-fluid p-0">--}}
{{--        </div>--}}
    </div>

    <div class="footer-lower">
        <div class="container">
            <nav class="footer-lower__nav">
                <ul class="footer-lower__menu mb-0">
                    <li><a href="/terms-and-conditions">T&Cs</a></li>
                    <li><a href="/accessibility">Accessibility</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/cookie-policy">Cookie Policy</a></li>
                    <li class="ml-auto"><small>
                            <time id="thisYear">{{ date('Y') }}</time>
                            <a href="/"> Hospital Compare<sup>TM</sup></a>. All rights reserved</small></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>


