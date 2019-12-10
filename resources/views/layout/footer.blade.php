<footer class="footer position-relative">
    <div class="back-top-wrapper mt-4 position-absolute">
        <div class="container back-top-content d-flex justify-content-end">
            @include('components.basic.button', [
            'id'            => 'back-to-top',
            'classTitle'    => 'btn btn-icon btn-back-to-top',
            'buttonText'    => '<span>Back to top</span>',
            'hrefValue'     => '#top',
            'svg'           => 'chevron-up'])
        </div>
    </div>
    <div class="footer-upper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-60">
                    <nav class="footer-upper__nav mb-25" role="navigation">
                        <ul class="footer-upper__menu">
                            <li><a href="/">Home</a></li>
{{--                            <li><a href="/about-us">About Us</a></li>--}}
{{--                            <li><a href="/your-rights">Your rights</a></li>--}}
{{--                            <li><a href="/patient-choice">Patient choice</a></li>--}}
                            {{--                <li><a href="/our-blogs">Our blogs</a></li>--}}
                            <li><a href="mailto:hello@hospitalcompare.co.uk">Contact us</a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="footer-upper__secondary-menu mb-0">
                            <li class="d-inline-block"><a href="/terms-and-conditions">T&amp;Cs</a></li>
                            {{--                    <li><a href="/accessibility">Accessibility</a></li>--}}
                            <li class="d-inline-block"><a href="/privacy-policy">Privacy Policy</a></li>
                            <li class="d-inline-block"><a href="/cookie-policy">Cookie Policy</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="social text-left text-lg-right">
                        {{--            @include('components.logo', ['titleParent' => 'footerLogoParent', 'logoImg' => 'footerLogoImg', 'logoTitle' => 'footerLogoTitle'])--}}
                        <p class="SofiaPro-Light helping-you">Helping you to make the best healthcare choices</p>
                        <ul class="social-list d-flex justify-content-lg-end">
                            <li class="facebook-social">
                                <a href="" target="_blank">{!! file_get_contents(asset('images/icons/social/facebook.svg')) !!}
                                    <span class="sr-only">Facebook link</span>
                                </a>
                            </li>
                            <li class="twitter-social">
                                <a href="" target="_blank">{!! file_get_contents(asset('images/icons/social/twitter.svg')) !!}
                                    <span class="sr-only">Twitter link</span>
                                </a>
                            </li>
                            <li class="instagram-social">
                                <a href="" target="_blank">{!! file_get_contents(asset('images/icons/social/instagram.svg')) !!}
                                    <span class="sr-only">Instagram link</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="footer-lower">
        <div class="svg-wrap animated mb-4" data-animation="draw">
{{--            @svg('heart-line')--}}
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px" viewBox="0 0 1742 216" style="enable-background:new 0 0 1742 216;" xml:space="preserve">
						<path class="path" fill="transparent" stroke="#fff" stroke-width="6px" d="M1728.9,130.1c-16.5-9.2-35.2-13.5-53.6-17.6c-29.3-6.6-60.5-13-88.6-2.7c-40.4,14.8-64.1,60.4-105.3,72.9
						c-15.5,4.7-31.8,4.1-47.7,2.6c-6.9-0.6-10.8-0.4-16.6-4.4c-5.9-4-11.3-8.7-16.2-13.9c-16.6-17.9-30.3-41-34.7-65.3
						c-3.6-19.9-1.6-42.4,12.2-57.3c5.6-6,13.4-10.6,21.6-9.8c7.6,0.7,13.9,5.9,19.2,11.3c10.4,10.8,13.6,24.2,18.9,38.3
						c1.8,4.9,3.3,10.1,2.3,15.2c-1,5.1-4.3,9.7-9.5,9.6c-4.3-0.1-9-3.3-10.6-7.3c-1.6-3.9-1.5-8.4-1-12.6c1.8-15.2,13.7-30.2,24.3-41.2
						c2.5-2.6,5.3-5.1,8.7-6.3c5.8-2.1,12.6-0.2,17.5,3.7c4.8,3.9,8,9.6,10.2,15.4c10.1,26,3.6,56.5-12.2,79.5
						c-12.9,18.9-31,35.6-53.3,42.3c-23.1,6.9-50.6,0.4-70.3-13.1c-16.9-11.6-25.5-32.6-42.6-43.8c-16.7-11-38.6-10.7-57.9-5.5
						c-105.4,28.2-229.7,57.5-338.2,26c-76.5-22.2-145.1-74.8-224.7-77.1c-84.7-2.5-160.2,52.7-243.6,67.7
						c-76.8,13.8-155.7-7.2-228.4-35.7c-32-12.6-63.7-26.7-97.3-34.1s-70-7.7-101.1,6.9"></path>
					</svg>

        </div>

        <div class="container">
            <p class="mb-4">
                *your legal right to choose may be restricted in some circumstances.
{{--                For more--}}
{{--                information see <a--}}
{{--                    class="text-link"--}}
{{--                    href="/your-rights">Your Rights</a>--}}
            </p>
            <p><time>{{ date('Y') }}</time><a href="/"> Hospital Compare<sup>TM</sup></a>. All rights reserved</p>
          </div>
    </div>

{{--    <div class="footer-lower">--}}
{{--        <div class="container">--}}
{{--            <nav class="footer-lower__nav">--}}

{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
</footer>


