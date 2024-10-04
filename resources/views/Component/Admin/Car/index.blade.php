<div class="card mx-5 my-5">
    <div class="card-body">
        <h5 class="card-title">All Cars</h5>
        <button data-bs-toggle="modal" data-bs-target="#createModal"
            class="float-end btn m-0  bg-gradient-primary">Create</button>
        <hr class="mt-6">


        <table class="table-responsive" id="tableData">
            <thead>
                <tr class="bg-light">
                    <th class="w-4">image</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th> Rent Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableList">

            </tbody>
        </table>
    </div>
</div>

<script>
    getlist();
    async function getlist() {
        let res = await axios.get('/cars');

        let tableList = $("#tableList");
        let tableData = $("#tableData");

        tableData.DataTable().destroy();
        tableList.empty();
       // console.log(res.data);
        res.data.forEach(function(item, index) {

            let row = `<tr>
                    <td><img class='w-60 h-auto' alt="img" src="${item['image']}"></td>
                    <td>${item['name']}</td>
                    <td>${item['brand']}</td>
                    <td>${item['model']}</td>
                    <td>${item['year']}</td>
                    <td>${item['car_type']}</td>
                    <td>${item['daily_rent_price']}</td>
                    <td>${item['availability'] === 1 ? 'Available' : 'Unvailable'}</td>
                    <td>
                        <button data-path="${item['image']}" data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success mt-2">Edit</button>
                        <button data-path="${item['image']}" data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                 </tr>`
            tableList.append(row);
        });


        $('.editBtn').on('click', async function() {
            let id = $(this).data('id');
            let filePath = $(this).data('path');
            await FillUpUpdateForm(id, filePath);
            $("#update-modal").modal('show');
        });
        $('.deleteBtn').on('click',async function(){
            let id =$(this).data('id')
            let path =$(this).data('path')
           
            $('#delete-modal').modal('show')
            $("#deleteID").val(id);
            $('#deleteFilePath').val(path)
        })
        new DataTable('#tableData'),{
            lengthMenu:[10,20,30,40]
        }
    }

    
</script>
