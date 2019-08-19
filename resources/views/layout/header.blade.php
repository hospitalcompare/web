<!-- _partials/header.blade.php -->
<header class="header" id="top">
    {{ $page_header }}
    <div class="branding">
        @include('components.logo', ['titleParent' => 'headerLogoParent', 'logoImg' => 'headerLogoImg', 'logoTitle' => 'headerLogoTitle'])

        <nav class="mainNav">
            <ul class="mainMenu">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="">Your Rights
{{--                        <i class="fas fa-chevron-down"></i>--}}
                    </a>
{{--                    <ul class="dropdownMenu">--}}
{{--                        <li><a href="">Link text here</a></li>--}}
{{--                        <li><a href="">Link text here</a></li>--}}
{{--                        <li><a href="">Link text here</a></li>--}}
{{--                    </ul>--}}
                </li>
                <li><a href="">How To Use
{{--                        <i class="fas fa-chevron-down"></i>--}}
                    </a>
{{--                    <ul class="dropdownMenu">--}}
{{--                        <li><a href="">Link text here</a></li>--}}
{{--                        <li><a href="">Link text here</a></li>--}}
{{--                        <li><a href="">Link text here</a></li>--}}
{{--                    </ul>--}}
                </li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Guides</a></li>
            </ul>
        </nav>

    </div>

</header>


