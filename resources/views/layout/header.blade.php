<!-- _partials/header.blade.php -->
<header class="mainHeader" id="top">
    {{ $page_header }}
    <div class="branding">

        @include('components.logo', ['titleParent' => 'headerLogoParent', 'logoImg' => 'headerLogoImg', 'logoTitle' => 'headerLogoTitle'])


        <nav class="mainNav">
            <ul class="mainMenu">
                <li><a href="">our mission</a></li>
                <li><a href="">your rights<i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdownMenu">
                        <li><a href="">Link text here</a></li>
                        <li><a href="">Link text here</a></li>
                        <li><a href="">Link text here</a></li>
                    </ul>
                </li>
                <li><a href="">how to use<i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdownMenu">
                        <li><a href="">Link text here</a></li>
                        <li><a href="">Link text here</a></li>
                        <li><a href="">Link text here</a></li>
                    </ul>
                </li>
                <li><a href="">faqs</a></li>
                <li><a href="">guides</a></li>
            </ul>
        </nav>

    </div>

</header>


