<!-- _partials/header.blade.php -->
<header class="header" id="top">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="branding">
            @include('components.logo', ['titleParent' => 'header-logo-parent', 'logoImg' => 'header-logo-image', 'logoTitle' => 'headerLogoTitle'])
        </div>
        <nav class="main-nav" role="navigation">
            <ul class="main-menu">
                <li>
                    <a href="/">Home</a>
                    @svg('chevron-right-grey', 'd-lg-none')
                </li>
                <li>
                    <a {{ Request::is( 'how-to-use') ? 'class=active' : '' }} href="/how-to-use">How To Use</a>
                </li>
                <li>
                    <a {{ Request::is( 'about-us') ? 'class=active' : '' }} href="/about-us">About Us</a>
                </li>
                <li>
                    <a {{ Request::is( 'your-rights') ? 'class=active' : '' }} href="/your-rights">Your Rights</a>
                </li>
                <li>
                    <a {{ Request::is( 'blogs') ? 'class=active' : '' }} href="/blogs">Blog</a>
                </li>
                <li>
                    <a {{ Request::is( 'faqs') ? 'class=active' : '' }} href="/faqs">FAQs</a>
                </li>
                {{--                    <li><a {{ Request::is( 'guides') ? 'class=active' : '' }} href="/guides">Guides</a></li>--}}
                @if(env('APP_ENV') === 'local')
                    <li><a {{ Request::is( 'results-page') ? 'class=active' : '' }} href="/results-page">Results page</a></li>
                    <li><a {{ Request::is( 'test-page') ? 'class=active' : '' }} href="/test-page">Test page</a></li>
                @endif
            </ul>
        </nav>
        <div id="menu_toggle" class="d-lg-none"><img width="20px" height="20px" src="{{URL::asset('/images/icons/bars-solid.svg')}}" alt="Menu icon"></div>
    </div>
</header>


