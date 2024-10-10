<div class="container">
    <h2>Manage Rentals</h2>
    <table class="table-responsive" id="datatable">
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
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rental->user->name }}</td>
                    <td>{{ $rental->car->name }} ({{ $rental->car->brand }})</td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->end_date }}</td>
                    <td>{{ $rental->total_price }}</td>
                    <td>
                        @php

                            $today = \Carbon\Carbon::now();
                            if ($today->isBefore($rental->start_date)) {
                                $status = 1; // Ongoing
                            } elseif ($today->isBetween($rental->start_date, $rental->end_date)) {
                                $status = 2; // Completed
                            } else {
                                $status = 3; // Canceled
                            }
                        @endphp
                        <select class="form-select" id="select" required>
                            <option value="1" {{ $status == 1 ? 'selected' : '' }}>Ongoing</option>
                            <option value="2" {{ $status == 2 ? 'selected' : '' }}>Completed</option>
                            <option value="3" {{ $status == 3 ? 'selected' : '' }}>Panding</option>
                        </select>
                    </td>

                   <td>

                        <button  data-id="{{ $rental->id }}" type="submit" class="btn deleteRen bg-gradient-primary">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    date()
    async function date(){
        let status = document.getElementById('select').value;

    }
 $('.deleteRen').on('click',async function(){
    let id =$(this).data('id');
    let res =await axios.post('/delet-rent',{id:id});
    if(res.status === 200 && res.data.status === "success"){
        successToast(res.data.message);
    }
    //console.log(det)
 })
 new DataTable('#datatable'),{
    lengthMenu:[10,20,30,40]
}
</script>
