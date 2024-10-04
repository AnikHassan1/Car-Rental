<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Car</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Car Name *</label>
                                <input type="text" class="form-control" id="car_name">

                                <label class="form-label">Car Brand *</label>
                                <input type="text" class="form-control" id="car_Brand">

                                <label class="form-label">Car Model *</label>
                                <input type="text" class="form-control" id="car_Model">

                                <label class="form-label">Year of Manufacture *</label>
                                <input class="form-control" type="number" min="1900" max="2024" step="1"
                                    value="2024" id="car_Year" />

                                <label class="form-label">Car Type *</label>
                                <input type="text" class="form-control" id="car_Type">

                                <label class="form-label">Daily Rent Price *</label>
                                <input type="text" class="form-control" id="car_Rent">



                                <label class="form-label">Availability Status *</label>
                                <select class="form-control" id="car_Status" aria-label="Default select example">
                                    <option value="1">Available</option>
                                    <option value="0">Unavailable</option>

                                </select>
                                <lable class="form-lable">Image</lable>
                                <input id="image2" class="form-control" type="file" name=""
                                    onchange="document.getElementById('oldImage').src = window.URL.createObjectURL(this.files[0])">

                                <div class="my-3">
                                    <img src="" style="border-radius: 5px" id="oldImage" width="80"
                                        height="80" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <input type="text" class="d-none" id="updateID">
                <input type="text" class="d-none" id="filePath">
            </div>
            <div class="modal-footer">
                <button id="modal-updated-close" class="btn bg-gradient-primary" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="updateCarData()" id="save-btn" class="btn bg-gradient-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    async function FillUpUpdateForm(id, filePath) {
        document.getElementById('updateID').value = id;
        document.getElementById('filePath').value = filePath;

        let res = await axios.post('/carsId', {
            id: id
        });

        document.getElementById('car_name').value = res.data['name'];
        document.getElementById('car_Brand').value = res.data['brand'];
        document.getElementById('car_Model').value = res.data['model'];
        document.getElementById('car_Year').value = res.data['year'];
        document.getElementById('car_Rent').value = res.data['daily_rent_price'];
        document.getElementById('car_Type').value = res.data['car_type'];
        document.getElementById('car_Status').value = res.data['availability'] === 1 ? '1' : '0';
        document.getElementById('oldImage').src = res.data['image'];


    }

    async function updateCarData() {
        let carId = document.getElementById('updateID').value;
        let carImg = document.getElementById('filePath').value;

        let car_Name = document.getElementById('car_name').value;
        let car_Brand = document.getElementById('car_Brand').value;
        let car_Model = document.getElementById('car_Model').value;
        let car_Year = document.getElementById('car_Year').value;
        let car_Rent = document.getElementById('car_Rent').value;
        let car_Type = document.getElementById('car_Type').value;
        let car_Status = document.getElementById('car_Status').value;
        let car_Image = document.getElementById('image2').files[0];

        if (car_Name.length === 0) {
            errorToast('Car Name Required');
        } else if (car_Brand.length === 0) {
            errorToast("Car Brand  Required !");
        } else if (car_Model.length === 0) {
            errorToast("Car Model  Required !");
        } else if (car_Year.length === 0) {
            errorToast("Car Year  Required !");
        } else if (car_Rent.length === 0 || isNaN(car_Rent)) {
            errorToast("Car Rent  Required !");
        } else if (car_Type.length === 0) {
            errorToast("Car Type  Required !");
        } else if (car_Status.length === 0) {
            errorToast("Car Status  Required !");
        } else {
                    document.getElementById('modal-updated-close').click();

            let formdata = new FormData();

            formdata.append('name', car_Name);
            formdata.append('brand', car_Brand);
            formdata.append('model', car_Model);
            formdata.append('year', car_Year);
            formdata.append('car_type', car_Type);
            formdata.append('daily_rent_price', car_Rent);
            formdata.append('availability', car_Status);
            formdata.append('image', car_Image);
            formdata.append('filePath', carImg);
            formdata.append('id', carId);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            let res = await axios.post('/Car-update', formdata, config);
           // console.log(res);
            if (res.status === 200 && res.data.status === "success") {
                successToast(' Updated Data Successful');
                document.getElementById("update-form").reset();
                await getlist();
            } else {
                errorToast("Updated Data Fail");
            }
            // successToast(res.data['massage']);



        }
    }
</script>
