<section class="banner-section bg-light py-5 mt-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold mb-4">Find Your Dream Car for Rental</h1>
          <p class="lead mb-4">
            Experience the ultimate in comfort, performance, and style with our wide selection of premium rental cars. Choose the perfect vehicle for your needs today.
          </p>
          <a href="/rentals" class="btn btn-primary btn-lg">Explore Now</a>
        </div>
  
        <!-- Right Side: Banner Image -->
        <div class="col-lg-6 text-center mt-4 mt-lg-0">
          <img src="{{ asset('assets/images/car-right.png') }}" class="img-fluid" alt="Banner Image">
        </div>
      </div>
    </div>
  </section>
  
  <style>
  /* Additional Styling for the Banner */
  .banner-section {
    background: linear-gradient(135deg, #e0f7fa, #e1bee7);
  }
  
  .banner-section h1 {
    color: #2c3e50;
  }
  
  .banner-section p {
    color: #555;
  }
  
  .banner-section .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 10px 30px;
    transition: all 0.3s ease;
  }
  
  .banner-section .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }
  
  @media (max-width: 991px) {
    .banner-section {
      text-align: center;
    }
  
    .banner-section img {
      margin-top: 20px;
    }
  }
  </style>
  
