<!-- _partials/header.blade.php -->
<header class="mainHeader">
    {{ $page_header }}
    <div class="branding hRow">


        @component('components.basic.logo', ['titleParent' => 'headerLogoParent', 'logoImg' => 'headerLogoImg', 'logoTitle' => 'headerLogoTitle'])
        @endcomponent

        <nav class="mainNav col">
            <ul>
                <li><a href="">our mission</a></li>
                <li><a href="">your rights<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="">how to use<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="">faqs</a></li>
                <li><a href="">guides</a></li>
            </ul>
        </nav>

    </div>

</header>


