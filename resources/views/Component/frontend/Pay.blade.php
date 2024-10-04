<div class="container my-5">
    <div class="row align-items-center">
        <!-- Rental Overview Section -->
        <div class="col-md-6" id="carData">
            <h3 class="text-center text-success-emphasis">Rental Overview</h3>
            <div class="card shadow-sm">
                <img class="img-fluid rounded w-80 h-auto mx-auto my-3" src="{{ asset('assets/images/car-right.png') }}" alt="Car Image">
                <div class="px-4 mt-2">
                    <div class="w-100">
                        <div class="d-flex gap-2 pt-3">
                            <h5 class="font-weight-bold">Brand: <span class="text-dark">[Car Brand]</span></h5>
                            <h5 class="font-weight-bold">Model: <span class="text-dark">[Car Model]</span></h5>
                        </div>
                        <div>
                            <p class="text-success fs-4">$200 <span class="text-muted">/day</span></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between mx-5">
                    <div>
                        <h5 class="font-weight-bold">Pick-Up Date:</h5>
                        <span>[Pick-Up Date]</span>
                    </div>
                    <div>
                        <h5 class="font-weight-bold">Drop-Off Date:</h5>
                        <span>[Drop-Off Date]</span>
                    </div>
                </div>
                <h4 class="text-success-emphasis mt-3 mx-4">Total Payment: $3000</h4>
            </div>
        </div>

        <!-- Payment Details Section -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0 p-4">
                <h3 class="text-center text-success-emphasis">Payment Details</h3>
                
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Select Your Payment Method</label>
                    <select class="form-select" id="paymentMethod" required>
                        <option value="" disabled selected>Select a method...</option>
                        <option value="1">bKash</option>
                        <option value="2">Nagad</option>
                        <option value="3">Rocket</option>
                    </select>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="transactionId">Transaction ID:</label>
                    <input type="text" id="transactionId" class="form-control form-control-lg" placeholder="Enter your Transaction ID" required>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="methodNumber">Method Number:</label>
                    <input type="text" id="methodNumber" class="form-control form-control-lg" placeholder="Enter your Method Number" required>
                </div>

                <button onclick="submitRentInformation()" type="submit" class="btn btn-success btn-lg w-100">Confirm Payment</button>
            </div>
        </div>
    </div>
</div>
