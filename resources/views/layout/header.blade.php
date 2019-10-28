<!-- _partials/header.blade.php -->
<header class="header" id="top">
    <div class="container">
        <div class="branding">
            @include('components.logo', ['titleParent' => 'headerLogoParent', 'logoImg' => 'headerLogoImg', 'logoTitle' => 'headerLogoTitle'])
            <nav class="main-nav">
                <ul class="main-menu">
                    @if(env('APP_ENV') == 'local')
                        <li><a {{ Request::is( 'test-page') ? 'class=active' : '' }} href="/test-page">Test page</a></li>
                        <li><a {{ Request::is( 'results-page') ? 'class=active' : '' }} href="/results-page">Results page</a></li>
                    @endif
                        <li><a {{ Request::is( '/') ? 'class=active' : '' }} href="/">Home</a></li>
                        <li><a {{ Request::is( 'about-us') ? 'class=active' : '' }} href="/about-us">About Us</a></li>
                        <li><a {{ Request::is( 'your-rights') ? 'class=active' : '' }} href="/your-rights">Your Rights</a></li>
                        <li><a {{ Request::is( 'how-to-use') ? 'class=active' : '' }} href="/how-to-use">How To Use</a></li>
                        <li><a {{ Request::is( 'blog') ? 'class=active' : '' }} href="/blog">Blog</a></li>
                    <li><a {{ Request::is( 'faqs') ? 'class=active' : '' }} href="/faqs">FAQs</a></li>
{{--                    <li><a {{ Request::is( 'guides') ? 'class=active' : '' }} href="/guides">Guides</a></li>--}}
                </ul>
            </nav>

        </div>
    </div>
</header>


