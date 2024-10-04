<section class="popular-cars py-5">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2>Explore Most Popular Cars</h2>
            <p>Find the most sought-after cars that suit your lifestyle and travel needs.</p>
        </div>
        <ul class="nav listing-buttons gap-3 justify-content-center flex-wrap" data-bs-tabs="tabs" role="tablist">
            <!-- Mazda Tab -->
            <li class="card mb-4">
                <a class="card-body active" aria-current="true" data-bs-toggle="tab" href="#Carmazda" aria-selected="true"
                    role="tab">
                    <span>
                        <img src="{{ asset('assets/images/car-icon-01.svg') }}" class="" alt="Mazda">
                    </span>
                    Mazda
                </a>
            </li>
            <!-- Audi Tab -->
            <li class="card mb-4">
                <a class="card-body" data-bs-toggle="tab" href="#Caraudi" aria-selected="false" role="tab"
                    tabindex="-1">
                    <span>
                        <img src="{{ asset('assets/images/car-icon-Audi.svg') }}" class="" alt="Audi">
                    </span>
                    Audi
                </a>
            </li>
            <!-- Honda Tab -->
            <li class="card mb-4">
                <a class="card-body" data-bs-toggle="tab" href="#Carhonda" aria-selected="false" role="tab"
                    tabindex="-1">
                    <span>
                        <img src="{{ asset('assets/images/car-icon-honda.svg') }}" class="" alt="Honda">
                    </span>
                    Honda
                </a>
            </li>
            <!-- Toyota Tab -->
            <li class="card mb-4">
                <a class="card-body" data-bs-toggle="tab" href="#Cartoyota" aria-selected="false" role="tab"
                    tabindex="-1">
                    <span>
                        <img src="{{ asset('assets/images/car-icon-Acura.svg') }}" class="" alt="Toyota">
                    </span>
                    Toyota
                </a>
            </li>
            <!-- Acura Tab -->
            <li class="card mb-4">
                <a class="card-body" data-bs-toggle="tab" href="#Caracura" aria-selected="false" role="tab"
                    tabindex="-1">
                    <span>
                        <img src="{{ asset('assets/images/car-icon-Acura.svg') }}" class="" alt="Acura">
                    </span>
                    Acura
                </a>
            </li>
            <!-- Tesla Tab -->
            <li class="card mb-4">
                <a class="card-body" data-bs-toggle="tab" href="#Cartesla" aria-selected="false" role="tab"
                    tabindex="-1">
                    <span>
                        <img src="{{ asset('assets/images/car-icon-tesla.svg') }}" class="" alt="Banner Image">
                    </span>
                    Tesla
                </a>
            </li>
        </ul>
    </div>

    <div class="row mx-5" id="carList">
        
</section>
<script>
    GetCar();
    async function GetCar() {


        let res = await axios.get('/cars');
        if (res.status === 200) {
            res.data.forEach(item => {
                let data = `  <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card car-item shadow-sm h-100">
                                  <img src="${item['image']}" class="card-img-top img-fluid" alt="Popular Car 1">
                                  <div class="px-4">
                                    <div class="d-lg-flex ">
                                      <div class="">
                                          <p class="pt-3">${item['name']}</p>
                                      </div>
                                      <div class="mx-auto mt-3">
                                        <span class="float-right bg-success px-2 rounded shadow-lg">${item['availability'] === 1 ? "Available" : "Unavailable"}</span>
                                      </div>
                                  </div>

                                <div class="d-lg-flex justify-content-between">
                                    <div class="d-flex gap-2 w-100">
                                      <img class="w-10" src="{{ asset('assets/images/model.svg') }}">
                                       <div class="d-flex gap-2 pt-3">
                                         <p >${item['brand']}</p>
                                        <p >${item['model']}</p>
                                       </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                      <img src="{{ asset('assets/images/year.svg') }}">
                                      <p class="pt-3">${item['year']}</p>
                                  
                                    </div>
                                </div>

                                <div class="d-lg-flex justify-content-between">
                                  <div class="">
                                      <p class="pt-3">Daily Rent Price</p>
                                  </div>
                                  <div class="">
                                    <p class="pt-3">$${item['daily_rent_price']}</p>
                                  </div>
                              </div>
                              <div class="d-flex gap-5 ms-3">
                                <a href="" data-id="${item['id']}"  type="button"  class="btn Rent-id bg-success py-2 mr-1 rounded-pill shadow">Book Now</a>
                                 <a href="" data-id="${item['id']}" type="button" class="btn details-id bg-primary py-2 mr-1 rounded-pill shadow">Details</a>
                            </div>
                            </div>
                            </div>`;
                carList.insertAdjacentHTML('beforeend', data);
            });
        }
      $('.details-id').on('click',function(e){
        e.preventDefault()
        let id =$(this).data('id')
        window.location.href=`/details/${id}`;
      })
      $('.Rent-id').on('click',function(e){
        e.preventDefault()
        let id =$(this).data('id')
        window.location.href = `/Rentview/${id}`;
      })
  }
    
</script>
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
