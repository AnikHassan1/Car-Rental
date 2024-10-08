<div class="container mt-4">
    <div class="row ps-5">
        <!-- Total Car Card -->
        <div class="col-md-5">
            <div class="card shadow-lg border-0 text-white bg-primary mb-4" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Cars</h5>
                            <p class="card-text">A summary of all cars in the system.</p>
                        </div>
                        <div>
                            <i class="bi bi-car-front" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <div class="card-footer text-center text-light">
                        <h4 id="tatal_car"></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Available Car Card -->
        <div class="col-md-5">
            <div class="card shadow-lg border-0 text-white bg-success mb-4" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Available Cars</h5>
                            <p class="card-text">Cars currently available for rental.</p>
                        </div>
                        <div>
                            <i class="bi bi-car-front-fill" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <div class="card-footer text-center text-light">
                        <h4 id="available"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row ps-5 gap-3">
        <!-- Total Rental Card -->
        <div class="col-md-5">
            <div class="card shadow-lg border-0 bg-info text-white" style="border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Rentals</h5>
                        <p class="card-text">Overview of total rental transactions.</p>
                    </div>
                    <div>
                        <i class="bi bi-calendar-check-fill" style="font-size: 3rem;"></i>
                    </div>
                </div>
                <div class="card-footer text-center text-light">
                    <h4 id="total_rent"></h4> 
                </div>
            </div>
        </div>

        <!-- Total Earning Card -->
        <div class="col-md-5">
            <div class="card shadow-lg border-0 bg-warning text-dark" style="border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Earnings</h5>
                        <p class="card-text">Total revenue generated from rentals.</p>
                    </div>
                    <div>
                        <i class="bi bi-cash-coin" style="font-size: 3rem;"></i>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <h4>$<span id="total_earn"></span></h4>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    deshboard();
   async function deshboard(){
    let res =await axios.get('/desh_board');
    console.log(res)
        document.getElementById('tatal_car').innerText=res.data['total_car'];
        document.getElementById('available').innerText=res.data['availble'];
        document.getElementById('total_rent').innerText=res.data['total_rantal'];
        document.getElementById('total_earn').innerText=res.data['total_earn'];
   }
</script>

