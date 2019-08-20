<div class="backTopHolder">
    <div class="backTopContent">
        @include('components.basic.button', ['classTitle' => 'greenOvalTop backToTop', 'button' => 'Back to top', 'hrefValue' => '#top', 'icon' => 'fa fa-chevron-up'])
    </div>
</div>

<div class="sitemapHolder">
    <section class="sitemap">
        <nav class="sitemapNav">
            <ul class="sitemapMenu">
                <li><a href="">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="">Your rights</a></li>
                <li><a href="">Patient choice</a></li>
                <li><a href="">Our blogs</a></li>
                <li><a href="mailto:hello@hospitalcompare.co.uk">Contact us</a></li>
            </ul>
        </nav>

        <div class="social">
{{--            @include('components.logo', ['titleParent' => 'footerLogoParent', 'logoImg' => 'footerLogoImg', 'logoTitle' => 'footerLogoTitle'])--}}

            <ul class="socialList">
                <li>Helping you to make the best healthcare choices</li>
                <li>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="sitemapBottom">
        <p>
            *your legal right to choose may be restricted in some circumstances. For more information see <a
                href="/your-rights">Your Rights</a>
        </p>
    </section>
</div>

<footer class="footer">
    <nav class="footerCreds">
        <ul class="credLinks">
            <li><a href="">T&Cs</a></li>
            <li><a href="">Accessibility</a></li>
            <li><a href="">Private Policy</a></li>
            <li><a href="">Cookie Policy</a></li>
            <li><a href="">Cookie Policy</a></li>
            <li><small><time id="thisYear">{{ date('Y') }}</time><a href="/">  Hospital Compare<sup>TM</sup></a>. All rights reserved</small></li>
        </ul>
    </nav>
</footer>


