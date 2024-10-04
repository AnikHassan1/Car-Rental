<section class=" why-choose mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="section-heading aos-init aos-animate" data-aos="fade-down">
                    <h2>Why Choose Us</h2>
                    <p>We are innovative and passionate about the work we do.</p>
                </div>
            </div>
        </div>

        <div class="why-choose-group">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down">
                    <div class="card flex-fill shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <div class="choose-img">
                                <img src="{{ asset('assets/images/IconC2.webp') }}" alt="Easy & Fast Booking" class="icon">
                            </div>
                            <div class="choose-content">
                                <h4>Easy &amp; Fast Booking</h4>
                                <p>Experience a streamlined booking process with fully researched customer service, ensuring quality at every step.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down">
                    <div class="card flex-fill shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <div class="choose-img">
                                <img src="{{ asset('assets/images/iconC.png') }}" alt="Many Pickup Locations" class="icon">
                            </div>
                            <div class="choose-content">
                                <h4>Many Pickup Locations</h4>
                                <p>Benefit from our extensive network of pickup locations, making your travel experience convenient and accessible.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-down">
                    <div class="card flex-fill shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <div class="choose-img">
                                <img src="{{ asset('assets/images/IconC3.svg') }}" alt="Customer Satisfaction" class="icon">
                            </div>
                            <div class="choose-content">
                                <h4>Customer Satisfaction</h4>
                                <p>Our user-centric approach ensures that your needs are met, enhancing your overall experience with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.section {
    padding: 60px 0;
    background-color: #f8f9fa;
}

.section-heading h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.card {
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.choose-img .icon {
    width: 60px;
    height: 60px;
    margin-bottom: 20px;
}

.choose-content h4 {
    font-size: 1.5rem;
    color: #343a40;
    margin-bottom: 10px;
}

.choose-content p {
    color: #6c757d;
    font-size: 0.9rem;
}
</style>
