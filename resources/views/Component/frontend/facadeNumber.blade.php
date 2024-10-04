<section class="banner-section facts-number text-dark-emphasis py-5">
  <div class="facts-left">
      <img src="{{ asset('assets/images/facts-left.png') }}" class="img-fluid" alt="facts left">
  </div>
  <div class="facts-right">
      <img src="{{ asset('assets/images/facts-right.png') }}" class="img-fluid" alt="facts right">
  </div>
  <div class="container">
      <div class="section-heading text-center aos-init aos-animate" data-aos="fade-down">
          <h2 class="title">Facts By The Numbers</h2>
          <p class="description">Here are some interesting facts presented by the numbers</p>
      </div>

      <div class="counter-group">
          <div class="row text-center">
              <!-- Happy Customers -->
              <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-up">
                  <div class="count-group flex-fill">
                      <div class="customer-count d-flex align-items-center justify-content-center">
                          <div class="count-img">
                              <img src="{{ asset('assets/images/bx-heart.svg') }}" alt="Happy Customers Icon">
                          </div>
                          <div class="count-content">
                              <h4><span class="counterUp">0</span>K+</h4>
                              <p>Happy Customers</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Count of Cars -->
              <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-up">
                  <div class="count-group flex-fill">
                      <div class="customer-count d-flex align-items-center justify-content-center">
                          <div class="count-img">
                              <img src="{{ asset('assets/images/bx-car.svg') }}" alt="Count of Cars Icon">
                          </div>
                          <div class="count-content">
                              <h4><span class="counterUp">172</span>+</h4>
                              <p>Count of Cars</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Car Center Solutions -->
              <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-up">
                  <div class="count-group flex-fill">
                      <div class="customer-count d-flex align-items-center justify-content-center">
                          <div class="count-img">
                              <img src="{{ asset('assets/images/bx-headphone.svg') }}" alt="Car Center Solutions Icon">
                          </div>
                          <div class="count-content">
                              <h4><span class="counterUp">41</span>+</h4>
                              <p>Car Center Solutions</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Total Kilometers -->
              <div class="col-lg-3 col-md-6 col-12 d-flex aos-init aos-animate" data-aos="fade-up">
                  <div class="count-group flex-fill">
                      <div class="customer-count d-flex align-items-center justify-content-center">
                          <div class="count-img">
                              <img src="{{ asset('assets/images/bx-history.svg') }}" alt="Total Kilometers Icon">
                          </div>
                          <div class="count-content">
                              <h4><span class="counterUp">1021</span>+</h4>
                              <p>Total Kilometers</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<style>
  .banner-section {
      position: relative;
      background-color: #282c34; /* Dark background for contrast */
      overflow: hidden;
  }

  .facts-left,
  .facts-right {
      position: absolute;
      z-index: -1; /* Keep background images behind content */
  }

  .facts-left {
      top: 0;
      left: 0;
      width: 50%;
      opacity: 0.1; /* Slightly transparent for a subtle effect */
  }

  .facts-right {
      bottom: 0;
      right: 0;
      width: 50%;
      opacity: 0.1; /* Slightly transparent for a subtle effect */
  }

  .section-heading {
      margin-bottom: 40px;
  }

  .section-heading .title {
      font-size: 2.5rem; /* Larger heading */
      font-weight: bold;
      color: #f9c74f; /* Highlighted color for title */
  }

  .section-heading .description {
      font-size: 1.2rem; /* Readable size for description */
      color: #ffffff; /* White for contrast */
  }

  .counter-group .count-group {
      background: rgba(255, 255, 255, 0.1); /* Semi-transparent background */
      padding: 20px; /* Spacing */
      border-radius: 10px; /* Rounded corners */
      margin: 10px 0; /* Margin between rows */
      transition: transform 0.3s; /* Smooth scaling effect */
  }

  .counter-group .count-group:hover {
      transform: scale(1.05); /* Slightly enlarge on hover */
  }

  .count-img img {
      width: 50px; /* Icon size */
      margin-right: 10px; /* Space between icon and text */
  }

  .count-content h4 {
      font-size: 2rem; /* Larger number font */
      color: #f9c74f; /* Highlight color for numbers */
  }

  .count-content p {
      font-size: 1rem; /* Smaller text size */
      color: #ffffff; /* White for contrast */
  }
</style>
