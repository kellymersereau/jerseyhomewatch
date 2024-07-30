<footer>
    <div class="flex-footer-wrapper">
        <div class="copy-wrapper">
            <div class="links-wrapper">
                <a href="/" title="Home" class="nav-link @if( ! empty($home_active) && $home_active === true) active @endif">
                    Home
                </a>
                <p class="link-break">
                    &bull;
                </p>
                <a href="/about" title="About" class="nav-link @if( ! empty($about_active) && $about_active === true) active @endif">
                    About
                </a>
                <p class="link-break">
                    &bull;
                </p>
                <a href="/services" title="Services" class="nav-link @if( ! empty($services_active) && $services_active === true) active @endif">
                    Services
                </a>
                <p class="link-break">
                    &bull;
                </p>
{{--                <a href="/testimonials" title="Testimonials" class="nav-link @if( ! empty($testimonials_active) && $testimonials_active === true)--}}
{{--                    active--}}
{{--@endif">--}}
{{--                    Testimonials--}}
{{--                </a>--}}
{{--                <p class="link-break">--}}
{{--                    &bull;--}}
{{--                </p>--}}
                <a href="/faq" title="Frequently Asked Questions" class="nav-link @if( ! empty($faq_active) && $faq_active === true) active @endif">
                    FAQ
                </a>
                <p class="link-break">
                    &bull;
                </p>
                <a href="/contact" title="Contact Us" class="nav-link @if( ! empty($contact_active) && $contact_active === true) active @endif">
                    Contact Us
                </a>
            </div>
            <a href="https://facebook.com/NewJerseyHomeWatch" title="Facebook" target="_blank">
                @include('svgs.facebook')
            </a>
            <p class="bold no-padding-bottom padding-top">
                New Jersey Home Watch
            </p>
            <p class="no-padding-bottom">
                Howell, NJ 07731
            </p>
            <p class="no-padding-bottom">
                <a href="tel:+17329153506" class="footer-link">(732) 915-3506</a>
            </p>
            <p>
                <a href="mailto:newjerseyhomewatch@gmail.com" class="footer-link">newjerseyhomewatch@gmail.com</a>
            </p>
            <p>
                &copy; 2020 New Jersey Home Watch, LLC. All rights reserved.
            </p>
        </div>
        <div class="logo-wrapper">
            <a href="/" title="Home" class="home-link">
                <img src="/img/logo.jpg" title="New Jersey Home Watch logo" width="300">
            </a>
        </div>
    </div>
    <div class="dev-signoff">
        <p>
            Website by <a href="https://www.digitalsorcery.us" title="Digital Sorcery LLC" target="_blank">
                Digital Sorcery, LLC
            </a>
        </p>
    </div>
</footer>
