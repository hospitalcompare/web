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
                <li><a href="">Who we are</a></li>
                <li><a href="">Your rights</a></li>
                <li><a href="">Patient choice</a></li>
                <li><a href="">Our blogs</a></li>
                <li><a href="">Contact us</a></li>
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
            Nulla odio mauris, pharetra congue mi id, efficitur porttitor lorem. Cras mauris libero, facilisis id pulvinar a, sollicitudin vitae purus. Cras vel fermentum nunc. Ut ultricies ante eget eros vestibulum pretium. Donec iaculis tempus lobortis.

            Aliquam vitae auctor arcu, at laoreet orci. Donec ipsum quam, commodo a rutrum vitae, lacinia sit amet tortor. Proin at dui vitae nisi sollicitudin elementum. Maecenas maximus, neque ac viverra pretium, dui dui lacinia quam, sit amet porta massa urna in mauris. Morbi suscipit, augue in lobortis bibendum, erat urna interdum ipsum, sed interdum purus diam imperdiet tortor. Nulla vel ultricies neque, a sodales purus.
        </p>
    </section>
</div>

<footer class="mainFooter">
    <nav class="footerCreds">
        <ul class="credLinks">
            <li><a href="">T&Cs</a></li>
            <li><a href="">Accessibility</a></li>
            <li><a href="">Private Policy</a></li>
            <li><a href="">Cookie Policy</a></li>
            <li><a href="">Cookie Policy</a></li>
            <li><small>&copy; <time id="thisYear"></time><a href="">  Hospital Compare</a>. All rights reserved</small></li>
        </ul>
    </nav>
</footer>

@include('components.compare')
