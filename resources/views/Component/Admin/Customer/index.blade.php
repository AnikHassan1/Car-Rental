<div class="container">
    <h2>Manage Customer</h2>
    <table class="table-responsive table table-striped" id="tableData">
        <thead>
            <tr class="bg-light">
                <th class="w-4">Customer Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Address</th>
                <th>Rental History</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tableList">

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td> <!-- Display user name -->
                        <td>{{ $user->email }}</td> <!-- Display user email -->

                        <!-- Display profile number and address -->
                        <td>{{ $user->profile ? $user->profile->number : 'N/A' }}</td>
                        <td>{{ $user->profile ? $user->profile->address : 'N/A' }}</td>

                        <td>
                            @if($user->Rental && count($user->Rental) > 0) <!-- Check if rentals exist -->

                                    @foreach ($user->Rental as $rental) <!-- Loop through rentals -->
                                        {{ $rental->start_date }} to {{ $rental->end_date }} <!-- Display rental details -->
                                    @endforeach

                            @else
                                No rental history
                            @endif
                        </td>
                        <td>
                            <button class="btn bg-gradient-primary deletecustomer" data-id="{{ $user->id }}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </tbody>

    </table>
</div>


<script>
    {{--  $('.deletecustomer').on('click', async function() {
        let id = $(this).data('id');

        try {
            let res = await axios.post('/deletecustomer', { id: id });

            if (res.status === 200 && res.data.status === "success") {
                successToast(res.data.message);
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } else {
                errorToast("Failed to delete the customer.");
            }
        } catch (error) {
            errorToast("An error occurred: " + error.message);
        }
    });  --}}

    new DataTable('#tableData'),{
        lengthMenu:[10,20,30,40]
    }
</script>
