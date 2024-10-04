<section class="banner-section services py-5">
    <div class="service-right">
        <img src="{{ asset('assets/images/services-icon-01.svg') }}" class="img-fluid" alt="services right">
    </div>
    <div class="container">
        <!-- Section Heading -->
        <div class="section-heading text-center mb-5">
            <h2>How It Works</h2>
            <p>Booking a car rental is a straightforward process that typically involves the following steps</p>
        </div>

        <!-- Services Work -->
        <div class="services-work">
            <div class="row">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex" data-aos="fade-down">
                    <div class="services-group service-date flex-fill text-center p-4 shadow-sm">
                        <div class="services-icon border-secondary mb-3">
                            <img class="icon-img bg-secondary rounded-circle p-3" src="{{ asset('assets/images/services-icon-01.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>1. Choose Date &amp; Location</h3>
                            <p>Determine the date &amp; location for your car rental. Consider factors such as your travel itinerary, pickup/drop-off locations, and duration of rental.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex" data-aos="fade-down">
                    <div class="services-group service-loc flex-fill text-center p-4 shadow-sm">
                        <div class="services-icon border-warning mb-3">
                            <img class="icon-img bg-warning rounded-circle p-3" src="{{ asset('assets/images/services-icon-02.svg') }}" alt="Pick-Up Locations">
                        </div>
                        <div class="services-content">
                            <h3>2. Pick-Up Location</h3>
                            <p>Check availability of your desired vehicle for your chosen dates and location. Review rental rates, taxes, fees, and any additional charges.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex" data-aos="fade-down">
                    <div class="services-group service-book flex-fill text-center p-4 shadow-sm">
                        <div class="services-icon border-dark mb-3">
                            <img class="icon-img bg-dark rounded-circle p-3" src="{{ asset('assets/images/services-icon-03.svg') }}" alt="Book your Car">
                        </div>
                        <div class="services-content">
                            <h3>3. Book Your Car</h3>
                            <p>After choosing a rental option, proceed to book your car. Provide personal details, driver's license, contact info, and payment information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Service Section Styling */
.services {
    position: relative;
}

.service-right img {
    position: absolute;
    right: 0;
    top: 50px;
    max-width: 250px;
    z-index: -1;
}

.services-icon {
    width: 80px;
    height: 80px;
    display: inline-block;
}

.icon-img {
    max-width: 100%;
}

.services-group {
    background-color: #fff;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.services-group:hover {
    transform: translateY(-10px);
}

.section-heading h2 {
    font-size: 2.5rem;
    font-weight: bold;
}

.section-heading p {
    font-size: 1.1rem;
    color: #6c757d;
}

@media (max-width: 991px) {
    .service-right img {
        display: none;
    }
    .section-heading h2 {
        font-size: 2rem;
    }
}

@media (max-width: 768px) {
    .services-group {
        margin-bottom: 30px;
    }
}
</style>
