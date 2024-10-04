<div class="container">
    <h2>Manage Rentals</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Rental ID</th>
                <th>Customer Name</th>
                <th>Car Details</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Cost</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental)
                <tr>
                    <td>{{ $rental->id }}</td>
                    <td>{{ $rental->user->name }}</td>
                    <td>{{ $rental->car->name }} ({{ $rental->car->brand }})</td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->end_date }}</td>
                    <td>{{ $rental->total_price }}</td>
                    <td>
                        <select class="form-select" id="select method" required>
                            <option value="" disabled selected>Pending</option>
                            <option value="1">Ongoing</option>
                            <option value="2">Completed</option>
                            <option value="3">Canceled</option>
                        </select>
                    </td>
                   
                   <td>
                        
                        <button  data-id="{{ $rental->id }}" type="submit" class="btn deleteRen btn-success btn-lg">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
 $('.deleteRen').on('click',async function(){
    let id =$(this).data('id');
    let res =await axios.post('/delet-rent',{id:id});
    if(res.status === 200 && res.data.status === "success"){
        successToast(res.data.message);
    }
    //console.log(det)
 })
</script>
