<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VLSSY Inter College - Excellence in Education')</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('public/images/vlssy-1.jpg') }}" alt="VLSSY Inter College Logo" class="logo-image">
            </a>
            <button class="mobile-menu-toggle" aria-label="Toggle menu" onclick="toggleMobileMenu()">☰</button>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">HOME</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('admission') }}" class="{{ request()->routeIs('admission') ? 'active' : '' }}">Admission</a></li>
                <li><a href="{{ route('facilities') }}" class="{{ request()->routeIs('facilities') ? 'active' : '' }}">Facilities</a></li>
                <li><a href="{{ route('examination') }}" class="{{ request()->routeIs('examination') ? 'active' : '' }}">Examination</a></li>
                <li><a href="{{ route('our-staff') }}" class="{{ request()->routeIs('our-staff') ? 'active' : '' }}">Our-Staff</a></li>
                <li><a href="https://lms.vlssy.com/" target="_blank">Online Learning</a></li>
                <li><a href="{{ route('our-blog') }}" class="{{ request()->routeIs('our-blog') ? 'active' : '' }}">Our-Blog</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact US</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <!-- Fixed Social Icons Sidebar -->
    <div class="floating-social">
        <a href="https://www.facebook.com/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon-floating" title="Facebook">
            <span>f</span>
        </a>
        <a href="https://www.twitter.com/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon-floating" title="Twitter">
            <span>𝕏</span>
        </a>
        <a href="https://www.linkedin.com/company/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon-floating" title="LinkedIn">
            <span>in</span>
        </a>
        <a href="https://www.instagram.com/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon-floating" title="Instagram">
            <span>📷</span>
        </a>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>VLSSY Inter College</h4>
                <p>Your gateway to quality education and bright future.</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon" title="Facebook">
                        <span>f</span>
                    </a>
                    <a href="https://www.twitter.com/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon" title="Twitter">
                        <span>𝕏</span>
                    </a>
                    <a href="https://www.linkedin.com/company/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon" title="LinkedIn">
                        <span>in</span>
                    </a>
                    <a href="https://www.instagram.com/vlssycollege" target="_blank" rel="noopener noreferrer" class="social-icon" title="Instagram">
                        <span>📷</span>
                    </a>
                </div>
            </div>
            <div class="footer-section">
                <h4>Important Links</h4>
                <a href="https://upmsp.edu.in/" target="_blank">उत्तर प्रदेश माध्यमिक शिक्षा परिषद्</a>
                <a href="https://ncert.nic.in/">NCERT</a>
                <a href="https://scholarship.up.gov.in/index.aspx">UP Scholarship</a>
                <a href="https://digitallock.up.gov.in/" target="_blank">DIGITAL LOCK</a>
                <a href="https://eci.gov.in/" target="_blank">भारत निर्वाचन आयोग</a>
                <a href="#">Privacy-Policy</a>
                <a href="#">Terms-Conditions</a>
            </div>
            <div class="footer-section">
                <h4>District Links</h4>
                <a href="https://ghazipur.nic.in/" target="_blank">DIOS OFFICIAL WEBSITE</a>
                <a href="https://ghazipur.nic.in/" target="_blank">GHAZIPUR NIC</a>
            </div>
            <div class="footer-section">
                <h4>Contact Info</h4>
                <p>Email: info@vlssy.com</p>
                <p>Phone: +91 - 9506898967</p>
                <p>Address: Jujharpur (Hariharpur), Ghazipur, Uttar Pradesh - 233226</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 VLSSY Inter College. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('public/js/main.js') }}"></script>
    <script src="{{ asset('public/js/share-modal.js') }}"></script>
    @yield('scripts')
</body>
</html>
