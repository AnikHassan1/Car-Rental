<div class="container my-5">
    <div class="row align-items-center">
        <!-- Rental Overview Section -->
        <div class="col-md-6">
            <h3 class="text-center text-success-emphasis">Rental Overview</h3>
            <div class="card shadow-sm" id="carData">

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
                    <input type="text" id="transactionId" class="form-control form-control-lg"
                        placeholder="Enter your Transaction ID" required>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="methodNumber">Method Number:</label>
                    <input type="text" id="methodNumber" class="form-control form-control-lg"
                        placeholder="Enter your Method Number" required>
                </div>

                <button onclick="submitRentInformation()" type="submit" class="btn btn-success btn-lg w-100">Confirm
                    Payment</button>
            </div>
        </div>
    </div>
</div>
<script>
    getRentalDetails();
    async function getRentalDetails() {
        let id = @json($id);



        let res = await axios.get(`/rental/${id}`);
        //  console.log(res)
        let data = `

                <img class="img-fluid rounded w-80 h-auto mx-auto my-3" src="{{ asset('${res.data.car.image}') }}" alt="Car Image">
                <div class="px-4 mt-2">
                    <div class="w-100">
                        <div class="d-flex gap-2 pt-3">
                            <p class="font-weight-bold">Brand: <span class="text-dark">${ res.data.car.brand} </span></p>
                            <p class="font-weight-bold">Model: <span class="text-dark">${ res.data.car.model}</span></p>
                        </div>
                        <div>
                            <p class="text-success fs-4">$${ res.data.car.daily_rent_price}<span class="text-muted">/day</span></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between mx-5">
                    <div>
                        <p class="font-weight-bold">Pick-Up Date:</p>
                        <span>${ res.data.start_date}</span>
                    </div>
                    <div>
                        <p class="font-weight-bold">Drop-Off Date:</p>
                        <span>${ res.data.end_date}</span>
                    </div>
                </div>
                <p class="text-success-emphasis mt-3 mx-4">Total Payment : $${ res.data.total_price}</p>
           `;
        carData.insertAdjacentHTML('beforeend', data);
    }

    async function submitRentInformation() {
        let transactionId = document.getElementById('transactionId').value;
        let methodNumber = document.getElementById('methodNumber').value;

        if (!transactionId || transactionId.trim() === '') {
            errorToast("Transaction ID is required");
        }else if (isNaN(methodNumber) || methodNumber.length < 11) {
            errorToast("Method number must be a valid number with at least 8 characters");
        }
        else{
            window.location.href = '/';
        }

    }
</script>
