<section class="popular-cars ">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2>Recommended Car Rental deals</h2>
            <p>Here are some versatile options that cater to different needs</p>
        </div>

        <div class="row">
            <!-- Car Item 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card car-item shadow-sm h-100">
                    <img src="{{ asset('assets/images/bx-headphone.svg') }}" class=" img-fluid" alt="Popular Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Luxury SUV</h5>
                        <p class="card-text">Experience top-notch comfort and performance with this luxurious SUV.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Car Item 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card car-item shadow-sm h-100">
                    <img src="{{ asset('assets/images/bx-selection.svg') }}" class=" img-fluid" alt="Popular Car 2">
                    <div class="card-body">
                        <h5 class="card-title">Sport Coupe</h5>
                        <p class="card-text">Drive with elegance and speed in this sporty and stylish coupe.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Car Item 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card car-item shadow-sm h-100">
                    <img src="{{ asset('assets/images/') }}" class="card-img-top img-fluid" alt="Popular Car 3">
                    <div class="card-body">
                        <h5 class="card-title">Convertible</h5>
                        <p class="card-text">Feel the wind in your hair with this sleek and powerful convertible.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<style>
    .popular-cars {
        background-color: #f8f9fa;
    }

    .section-heading h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
    }

    .section-heading p {
        font-size: 1.1rem;
        color: #777;
    }

    .car-item {
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .car-item:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-bottom: 1px solid #e9ecef;
    }

    .card-body h5 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
    }

    .card-body p {
        color: #666;
    }
</style>
