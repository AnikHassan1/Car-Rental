<div class="card mx-3 my-4 w-50 mx-auto shadow border-0">
    <div class="row g-0" id="carDetails">
        <!-- Car details will be injected here -->
    </div>
</div>

<script>
    details();
    async function details() {
        let id = {{ $id }};
        let res = await axios.post('/carsId', { id });
        let data = res.data;
        let dataRender = `
            <div class="col-md-6 ps-4 d-flex justify-content-center align-items-center">
                <img class="img-fluid  rounded-start shadow-lg" src="{{ asset('${data.image}') }}" alt="Car Image">
            </div>
            <div class="col-md-6 p-4 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title text-primary">${data.name}</h5>
                    <p class="card-text">Model: <span class="fw-bold">${data.model}</span></p>
                    <p class="card-text">Year: <span class="fw-bold">${data.year}</span></p>
                    <p class="card-text">Price: <span class="fw-bold">$${data.daily_rent_price}</span></p>
                    <p class="card-text">Status: <span class="${data.availability === 1 ? "text-success" : "text-danger"} fw-bold">${data.availability === 1 ? "Available" : "Unavailable"}</span></p>
                </div>
                <a href="#" data-id="${data.id}" class="btn btn-success rent-id mt-3 rounded-pill">Rent Now</a>
            </div>
        `;
        carDetails.insertAdjacentHTML('beforeend', dataRender);

        $('.rent-id').on('click',function(){
            let id =$(this).data('id');
            window.location.href = `/Rentview/${id}`;
         });
       
    }
   
</script>

