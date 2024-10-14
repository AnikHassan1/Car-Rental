<div class="container my-4">
    <div class="row" id="rentalsData">


    </div>
</div>
<script>
    getData()
    async function getData() {
            let res = await axios.post('/car-seach-date');
            console.log(res);
            log
            
            if (res.status === 200 && res.data.length === 1) {
                res.data.forEach(item => {
                    let data = `
                  <div class="col-md-4  mt-2">
            <div class="card ">
                <div class="card ">
                    <img class="img-fluid  rounded w-80 h-auto mx-4 my-2 position-relative"
                       src="${item['image']}" alt="Contact Image">
                    <div
                        class="position-absolute top-100 start-50 translate-middle w-90 d-flex justify-content-between px-4">
                        <p class="mb-0 badge bg-secondary">${item['name']}</p>
                        <span class="badge bg-success">${item['availability'] === 1 ? "Available" : "Unavailable"}</span>
                    </div>
                </div>

                <div class=" d-flex justify-content-between px-5 mt-2">
                    <div class="d-flex gap-2 w-100">
                        <img class="w-10" src="{{ asset('assets/images/model.svg') }}">
                        <div class="d-flex gap-2 pt-3">
                            <p>${item['brand']}</p>
                            <p>${item['model']}</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <img src="{{ asset('assets/images/year.svg') }}">
                        <p class="pt-3">${item['year']}</p>

                    </div>
                </div>
                <div class="d-flex justify-content-between px-5">
                    <div class="">
                        <p class="pt-3">Daily Rent Price</p>
                    </div>
                    <div class="">
                        <p class="pt-3">$${item['daily_rent_price']}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between px-5">
                    <a href="" type="button" data-id="${item['id']}"
                        class="btn bg-gradient-success Rent-id  py-2 mr-1 rounded-pill shadow">Rent Now</a>
                    <a href="#" data-id="${item['id']}" type="button"
                        class=" details-id btn bg-gradient-primary py-2 mr-1 rounded-pill shadow">Details</a>
                </div>

                </div>
            </div>
                 `;
                // rentalsData.append(rentalsData);
                 rentalsData.insertAdjacentHTML('beforeend', data);
                });
            } else {
                errorToast('The selected date does not have any available cars');
                setTimeout(()=>{
                    window.location.href='/rentals';
                },1000);
            }
            $('.details-id').on('click',function(e){
                e.preventDefault();
                let id =$(this).data('id')
                console.log(id)
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
    .btn {
        transition: all 0.3s ease;
        /* Smooth transition effect */
    }

    .btn:hover {
        transform: scale(1.05);
        /* Slightly enlarge the button on hover */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        /* Add a shadow effect on hover */
    }

    .bg-success {
        background-color: #28a745;
        /* Customize the green color */
    }

    .bg-primary {
        background-color: #007bff;
        /* Customize the blue color */
    }

    .rounded-pill {
        border-radius: 50px;
        /* Makes the buttons more rounded */
    }
</style>
