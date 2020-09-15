<nav>
    <div class="mobile-nav-bar">
        <div class="logo-wrapper">
            <a href="/" title="Home">
                <img src="/img/logo.jpg" title="New Jersey Home Watch logo" width="300">
            </a>
        </div>
        <div class="mobile-menu-btn">
            <img src="/img/open.svg" height="30" width="30" class="open-nav">
            <img src="/img/close.svg" height="30" width="30" class="close-nav hidden">
        </div>
    </div>
    <div class="flex-nav-wrapper">
        <div class="logo-wrapper">
            <a href="/" title="Home">
                <img src="/img/logo.jpg" title="New Jersey Home Watch logo" width="300">
            </a>
        </div>
        <div class="nav-wrapper">
            <div class="social-links">
                <a href="tel:+17329153506" title="Contact us!" class="phone-link">
                    @include('svgs.phone-icon') 732-915-3506
                </a>
            </div>
            <div class="main-nav">
                <a href="/" title="Home" class="nav-link @if( ! empty($home_active) && $home_active === true) active @endif">
                    Home
                </a>
                <a href="/about" title="About" class="nav-link @if( ! empty($about_active) && $about_active === true) active @endif">
                    About
                </a>
                <a href="/services" title="Services" class="nav-link @if( ! empty($services_active) && $services_active === true) active @endif">
                    Services
                </a>
{{--                <a href="/testimonials" title="Testimonials" class="nav-link @if( ! empty($testimonials_active) && $testimonials_active === true)--}}
{{--                    active--}}
{{--@endif">--}}
{{--                    Testimonials--}}
{{--                </a>--}}
                <a href="/faq" title="Frequently Asked Questions" class="nav-link @if( ! empty($faq_active) && $faq_active === true) active @endif">
                    FAQ
                </a>
                <a href="/contact" title="Contact Us" class="nav-link @if( ! empty($contact_active) && $contact_active === true) active @endif">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</nav>
