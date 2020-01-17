<!-- _partials/header.blade.php -->
<header class="header" id="top">
    <div class="container d-flex align-items-center justify-content-center justify-content-lg-between">
        <div id="menu_toggle" class="d-lg-none mr-auto"><img width="20px" height="20px"
                                                     src="{{URL::asset('/images/icons/icon-menu.svg')}}"
                                                     alt="Menu icon"></div>
        @include('components.logo', [
            'titleParent'   => 'header-logo-parent',
            'logoImg'       => 'header-logo-image',
            'logoTitle'     => 'headerLogoTitle'])
        <nav id="main_nav" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li>
                    <a href="/">Home</a>
                    @svg('chevron-right-grey', 'd-lg-none')
                </li>
                <li>
                    <a {{ Request::is( 'about-us') ? 'class=active' : '' }} href="/about-us">About Us
                        @svg('chevron-right-grey', 'd-lg-none')
                    </a>
                </li>
                <li>
                    <a {{ Request::is( 'your-rights') ? 'class=active' : '' }} href="/your-rights">Your Rights
                        @svg('chevron-right-grey', 'd-lg-none')
                    </a>
                </li>
                <li>
                    <a {{ Request::is( 'how-to-use') ? 'class=active' : '' }} href="/how-to-use">How To Use
                        @svg('chevron-right-grey', 'd-lg-none')
                    </a>
                </li>
                <li>
                    <a {{ Request::is( 'faqs') ? 'class=active' : '' }} href="/faqs">FAQs
                        @svg('chevron-right-grey', 'd-lg-none')
                    </a>
                </li>
                <li>
                    <a {{ Request::is( 'blogs') ? 'class=active' : '' }} href="/blogs">Blog
                        @svg('chevron-right-grey', 'd-lg-none')
                    </a>
                </li>
                <li><a {{ Request::is( 'guides') ? 'class=active' : '' }} href="/guides">Guides</a></li>
                @if(env('APP_ENV') === 'local')
                    <li>
                        <a {{ Request::is( 'results-page') ? 'class=active' : '' }} href="/results-page">Results
                            page
                            @svg('chevron-right-grey', 'd-lg-none')
                        </a>
                    </li>
                    <li>
                        <a {{ Request::is( 'test-page') ? 'class=active' : '' }} href="/test-page">Test page
                            @svg('chevron-right-grey', 'd-lg-none')
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        @include('components.basic.modalbutton', [
            'id'            => 'search_toggle',
            'classTitle'    => 'd-lg-none ml-auto',
            'modalTarget'   => '#hc_modal_mobile_search',
            'svg'           => 'icon-search',
            'buttonText'    => ''
        ])

    </div>
</header>


