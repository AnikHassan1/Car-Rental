<footer class="banner-section ">
    <div class="footer-top pt-5">
        <div class="container">
            <div class="row">
                <!-- About Company -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="footer-widget">
                       <img class="img-fluid" src="{{ asset('assets/images/logo (1).svg') }}"alt="img">
                        <ul class="list-unstyled">
                            <li><a href="about.html" class="text-light">Our Company</a></li>
                            <li><a href="#" class="text-light">Dreams Rentals USA</a></li>
                            <li><a href="#" class="text-light">Dreams Rentals Worldwide</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Vehicles Type -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="footer-widget">
                        <h5 class="footer-title text-white text-uppercase">Information</h5>
                        <ul class="list-unstyled">
                            <li><a href="/" class="text-light">Home</a></li>
                            <li><a href="/rentals" class="text-light">Rentals</a></li>
                            <li><a href="/about" class="text-light">About</a></li>
                            <li><a href="/contact" class="text-light">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Info -->
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title text-white text-uppercase">Contact Us</h5>
                    <div class="footer-contact-info mb-4">
                        <div class="footer-address d-flex align-items-center mb-3">
                            <span class="me-3"><i class="feather-phone-call text-warning"></i></span>
                            <a href="tel:+18887601940" class="text-light">+1 (888) 760 1940</a>
                        </div>
                        <div class="footer-address d-flex align-items-center mb-3">
                            <span class="me-3"><i class="feather-mail text-warning"></i></span>
                            <a href="mailto:support@example.com" class="text-light">support@example.com</a>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div class="footer-social-widget">
                        <ul class="list-inline">
                            <li class="list-inline-item bg-light shadow-lg rounded">
                                <a href="#"><img src="{{ asset('assets/images/facebook.svg') }}" alt="Facebook" class="img-fluid highlight-icon"></a>
                            </li>
                            <li class="list-inline-item bg-light shadow-lg rounded">
                                <a href="#"><img src="{{ asset('assets/images/instagram.svg') }}" alt="Instagram" class="img-fluid highlight-icon"></a>
                            </li>
                            <li class="list-inline-item bg-light shadow-lg rounded">
                                <a href="#"><img src="{{ asset('assets/images/linkedin.svg') }}" alt="LinkedIn" class="img-fluid highlight-icon"></a>
                            </li>
                            <li class="list-inline-item bg-light shadow-lg rounded">
                                <a href="#"><img src="{{ asset('assets/images/github.svg') }}" alt="GitHub" class="img-fluid highlight-icon"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Footer Bottom -->
    <div class="footer-bottom py-4 bg-dark-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col text-center">
                    <p class="mb-0">© 2024 Dreams Rent. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    
</footer>

<!-- Custom Styles -->
<style>
    .footer-top {
        background-color: #1a1a1a;
    }
    .footer-bottom {
        background-color: #131313;
    }
    .footer-title {
        font-size: 1.25rem;
        font-weight: bold;
    }
    .footer-widget ul {
        list-style: none;
        padding: 0;
    }
    .footer-widget ul li a {
        color: #bbbbbb;
        text-decoration: none;
    }
    .footer-widget ul li a:hover {
        color: #ffffff;
    }
    .footer-contact-info a {
        color: #ffffff;
    }
    .footer-social-widget ul {
        padding-left: 0;
        margin: 0;
    }
    .footer-social-widget ul li a {
        font-size: 1.25rem;
        color: #ffffff;
        margin-right: 15px;
        transition: color 0.3s;
    }
    .footer-social-widget ul li a:hover {
        color: #ffcc00;
    }
    .btn-warning {
        background-color: #ffcc00;
        border: none;
    }
    .btn-warning:hover {
        background-color: #e6b800;
    }
    .highlight-icon {
        transition: transform 0.3s ease, filter 0.3s ease;
    }
    .highlight-icon:hover {
        transform: scale(1.1);
        filter: brightness(1.2);
    }
</style>
