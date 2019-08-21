<!-- _partials/header.blade.php -->
<header class="header" id="top">
    <div class="container">
        <div class="branding">
            @include('components.logo', ['titleParent' => 'headerLogoParent', 'logoImg' => 'headerLogoImg', 'logoTitle' => 'headerLogoTitle'])
            <nav class="mainNav">
                <ul class="mainMenu">
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/your-rights">Your Rights
                            {{--                        <i class="fas fa-chevron-down"></i>--}}
                        </a>
                        {{--                    <ul class="dropdownMenu">--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                    </ul>--}}
                    </li>
                    <li><a href="/how-to-use">How To Use
                            {{--                        <i class="fas fa-chevron-down"></i>--}}
                        </a>
                        {{--                    <ul class="dropdownMenu">--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                    </ul>--}}
                    </li>
                    <li><a href="/faqs">FAQs</a></li>
                    <li><a href="/guides">Guides</a></li>
                </ul>
            </nav>

        </div>
    </div>
</header>


