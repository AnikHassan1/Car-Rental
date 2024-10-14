<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6" id="carData"></div>

        <div class="col-md-6">
            <div class="card shadow-lg border-0 p-4">
                <h3 class="text-center">Plan Your Trip</h3>
                <div class="form-outline mb-4">
                    <label class="form-label" for="dailyRent">Per Day Rent</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="text" id="dailyRent" class="form-control form-control-lg" placeholder="00"
                            readonly>
                    </div>
                </div>
                <input type="hidden" id="carid">
                <div class="form-outline mb-4">
                    <label class="form-label" for="pickDate">Pick-up Date</label>
                    <input type="date" id="pickDate" class="form-control form-control-lg" required>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="dropDate">Drop-off Date</label>
                    <input type="date" id="dropDate" class="form-control form-control-lg" required>
                </div>

                <button onclick="submitRent()" type="submit" class="btn bg-gradient-primary w-100">Rent Now</button>
            </div>
        </div>
        <button onclick="testProfile()" class="btn bg-gradient-danger">Test</button>
    </div>
</div>


<script>
    olddata();

    async function olddata() {
        let id = @json($id);
        let carData = document.getElementById('carData');
        let res = await axios.post('/carsId', {
            id: id
        });


        document.getElementById('dailyRent').value = res.data.daily_rent_price;
        document.getElementById('carid').value = @json($id);


        let data = `
                        <div class="card ">
                <div class="card ">
                    <img class="img-fluid  rounded w-80 h-auto mx-4 my-2 position-relative"
                       src="{{ asset('${res.data.image}') }}" alt="Contact Image">
                    <div
                        class="position-absolute top-100 start-50 translate-middle w-90 d-flex justify-content-between px-4">
                        <p class="mb-0 badge bg-secondary">${res.data['name']}</p>
                        <span class="badge bg-success">${res.data['availability'] === 1 ? "Available" : "Unavailable"}</span>
                    </div>
                </div>

                <div class=" d-flex justify-content-between px-5 mt-2">
                    <div class="d-flex gap-2 w-100">
                        <img class="w-5" src="{{ asset('assets/images/model.svg') }}">
                        <div class="d-flex gap-2 pt-3">
                            <p>${res.data['brand']}</p>
                            <p>${res.data['model']}</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <img src="{{ asset('assets/images/year.svg') }}">
                        <p class="pt-3">${res.data['year']}</p>

                    </div>
                </div>
                </div>
               `;
        carData.insertAdjacentHTML('beforeend', data);

    }
    async function submitRent(Request, $request) {

        if ($request->cookie('cookie_name') === null) {
            window.location.href = "/login-page";
    }else{


            let car_id = document.getElementById('carid').value;

            let price = document.getElementById('dailyRent').value;
            let pickUpDate = document.getElementById('pickDate').value;
            let DropDate = document.getElementById('dropDate').value;
            if (pickUpDate.length === 0) {
                errorToast("Pick Up Date is Required");
            } else if (DropDate.length === 0) {
                errorToast("Pick Up Date is Required");
            } else {
                let pickDate = new Date(pickUpDate);
                let dropDate = new Date(DropDate);


                let differenceInTime = dropDate - pickDate;


                let difRentDate = differenceInTime / (1000 * 3600 * 24);
                let RentPrice = price * difRentDate;


                let res = await axios.post('/rentConfirm', {
                    car_id: car_id,
                    start_date: pickUpDate,
                    end_date: DropDate,
                    total_price: RentPrice
                });
                // console.log(res)
                if (res.status == 200 && res.data.status === 'success') {
                    successToast(res.data.message);
                    let cars = await axios.post('/carById', {
                        id: car_id
                    });
                    // console.log(cars);
                    setTimeout(() => {
                        window.location.href = `/pay/${car_id}`;
                    }, 1000)
                } else {
                    errorToast("The Car Is Already Reserved ! Please Choice Another Car");
                    setTimeout(() => {
                        window.location.href = '/rentals';
                    }, 1000);

                }
            }
        }

    }
    async function testProfile() {
        let res = await axios.get('/testProfile');
        console.log(res);
        if (res.data.status === 'NProfile') {
            errorToast('profile not create');
            setTimeout(() => {
                window.location.href = '/Profile_Page';
            });
        } else if (res.data.status === 'aseProfile') {
            errorToast('profile  create');
        } else {
            errorToast('profilessssssssssss ');
        }
    }
</script>

<style>
    .card {
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .form-outline {
        position: relative;
    }

    .form-label {
        font-weight: bold;
    }

    .btn {
        font-weight: bold;
    }
</style>