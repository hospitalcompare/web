<!-- _partials/header.blade.php -->
<header class="header" id="top">
    <div class="container">
        <div class="branding">
            @include('components.logo', ['titleParent' => 'headerLogoParent', 'logoImg' => 'headerLogoImg', 'logoTitle' => 'headerLogoTitle'])
            <nav class="main-nav">
                <ul class="main-menu">
                    <li><a {{ Request::is( 'about-us') ? 'class=active' : '' }} href="/about-us">About Us</a></li>
                    <li><a {{ Request::is( 'your-rights') ? 'class=active' : '' }} href="/your-rights">Your Rights
                            {{--                        <i class="fas fa-chevron-down"></i>--}}
                        </a>
                        {{--                    <ul class="dropdownMenu">--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                    </ul>--}}
                    </li>
                    <li><a {{ Request::is( 'how-to-use') ? 'class=active' : '' }} href="/how-to-use">How To Use
                            {{--                        <i class="fas fa-chevron-down"></i>--}}
                        </a>
                        {{--                    <ul class="dropdownMenu">--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                        <li><a href="">Link text here</a></li>--}}
                        {{--                    </ul>--}}
                    </li>
                    <li><a {{ Request::is( 'faqs') ? 'class=active' : '' }} href="/faqs">FAQs</a></li>
                    <li><a {{ Request::is( 'guides') ? 'class=active' : '' }} href="/guides">Guides</a></li>
                </ul>
            </nav>

        </div>
    </div>
</header>


